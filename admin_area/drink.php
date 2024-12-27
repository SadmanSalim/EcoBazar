<head>
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<?php
// Database connection setup
$host = 'localhost';
$dbname = 'eco';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}

// Handle file upload and database insert
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image']) && isset($_POST['link'])) {
    // Validate and process the uploaded image
    $image = $_FILES['image'];
    $link = $_POST['link'];
    
    // Check if the file is an image
    $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
    if (!in_array($image['type'], $allowed_types)) {
        echo "Invalid file type. Please upload a JPEG, PNG, or GIF image.";
        exit;
    }

    // Check for any upload errors
    if ($image['error'] !== UPLOAD_ERR_OK) {
        echo "Error uploading file: " . $image['error'];
        exit;
    }

    // Generate a unique name for the image to avoid overwriting
    $image_url = uniqid('banner_', true) . '.' . pathinfo($image['name'], PATHINFO_EXTENSION);

    // Set the target path for the upload
    $target_path = '../uploads/' . $image_url;

    // Move the uploaded file to the target path
    if (move_uploaded_file($image['tmp_name'], $target_path)) {
        // Insert the new drink record into the database
        $stmt = $pdo->prepare("INSERT INTO drinks (image_url, link) VALUES (?, ?)");
        $stmt->execute([$image_url, $link]);
        echo "Drink uploaded successfully!";
    } else {
        echo "Error moving uploaded file.";
    }
}

// Handle delete request
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    
    // Fetch the banner data (image URL) from the database
    $stmt = $pdo->prepare("SELECT * FROM drinks WHERE id = ?");
    $stmt->execute([$id]);
    $banner = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($banner) {
        // Delete the image file from the server
        $image_path = '../uploads/' . $banner['image_url'];
        if (file_exists($image_path)) {
            unlink($image_path); // Deletes the image file
        }

        // Delete the record from the database
        $delete_stmt = $pdo->prepare("DELETE FROM drinks WHERE id = ?");
        $delete_stmt->execute([$id]);

        echo "Banner deleted successfully!";
    } else {
        echo "Banner not found.";
    }
}

// Display the list of banners with a delete option
$stmt = $pdo->prepare("SELECT * FROM drinks");
$stmt->execute();
$banners = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($banners as $banner) {
    echo '<div class="container">';
    echo '<div>';
    echo '<img class="mb-3" src="../uploads/' . $banner['image_url'] . '" alt="Banner" width="200">';
    echo ' <a class="btn btn-danger" href="?delete=' . $banner['id'] . '">Delete</a>';
    echo '</div>';
    echo '</div>';
}
?>

<!-- HTML Form to Upload Drinks -->
<div class="container">
    <form method="POST" enctype="multipart/form-data">
        <label>Image: </label><input class="form-control" type="file" name="image" required><br>
        <label>Link: </label><input class="form-control" type="url" name="link" required><br>
        <button type="submit" class="btn btn-primary">Upload Drink</button>
        <a class="btn btn-danger" href="index.php">Home</a>
    </form>
</div>
