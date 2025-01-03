<head>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>

<?php
// Step 1: Initialize the PDO connection
$host = 'localhost'; // or '127.0.0.1'
$dbname = 'eco'; // Replace with your database name
$username = 'root'; // Replace with your MySQL username
$password = ''; // Replace with your MySQL password (empty for default XAMPP setup)

try {
    // Establish the PDO connection
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // If connection fails, display error and stop execution
    echo "Connection failed: " . $e->getMessage();
    exit;
}

// Step 2: Handle form submission for uploading a new banner
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
    // Assuming you have already validated the form inputs
    $image_url = $_FILES['image']['name'];
    $discount_percentage = $_POST['discount_percentage'];
    $discount_text = $_POST['discount_text'];
    $heading = $_POST['heading'];
    $description = $_POST['description'];
    $button_link = $_POST['button_link'];

    // Step 3: Move the uploaded image to the "uploads" folder
    move_uploaded_file($_FILES['image']['tmp_name'], "../uploads/" . $image_url);

    // Step 4: Insert banner data into the database
    $stmt = $pdo->prepare("INSERT INTO banners (image_url, discount_percentage, discount_text, heading, description, button_link) 
                           VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([$image_url, $discount_percentage, $discount_text, $heading, $description, $button_link]);

    echo "Banner uploaded successfully!";
}

// Step 5: Handle delete request
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    // Fetch the banner data (image URL) from the database
    $stmt = $pdo->prepare("SELECT * FROM banners WHERE id = ?");
    $stmt->execute([$id]);
    $banner = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($banner) {
        // Step 6: Delete the image file from the server
        $image_path = '../uploads/' . $banner['image_url'];
        if (file_exists($image_path)) {
            unlink($image_path); // Deletes the image file
        }

        // Step 7: Delete the record from the database
        $delete_stmt = $pdo->prepare("DELETE FROM banners WHERE id = ?");
        $delete_stmt->execute([$id]);

        echo "Banner deleted successfully!";
    } else {
        echo "Banner not found.";
    }
}

// Step 8: Display the list of banners with a delete option
$stmt = $pdo->prepare("SELECT * FROM banners");
$stmt->execute();
$banners = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container">
    <h2>Banners</h2>
    
    <!-- Display uploaded banners -->
    <?php foreach ($banners as $banner): ?>
        <div class="row mb-3">
            <div class="col-md-3">
                <img src="../uploads/<?php echo $banner['image_url']; ?>" alt="Banner" class="img-fluid">
            </div>
            <div class="col-md-9">
                <h4><?php echo $banner['heading']; ?></h4>
                <p><strong>Discount:</strong> <?php echo $banner['discount_percentage']; ?>%</p>
                <p><?php echo $banner['discount_text']; ?></p>
                <p><?php echo $banner['description']; ?></p>
                <p><a href="<?php echo $banner['button_link']; ?>" class="btn btn-primary">Go to Link</a></p>
                <a href="?delete=<?php echo $banner['id']; ?>" class="btn btn-danger">Delete</a>
            </div>
        </div>
    <?php endforeach; ?>

    <!-- Banner upload form -->
    <form method="POST" enctype="multipart/form-data">
        <label>Image: </label><input class="form-control" type="file" name="image" required><br>
        <label>Discount Percentage: </label><input class="form-control" type="number" name="discount_percentage" required><br>
        <label>Discount Text: </label><input class="form-control" type="text" name="discount_text" required><br>
        <label>Heading: </label><input class="form-control" type="text" name="heading" required><br>
        <label>Description: </label><textarea class="form-control" name="description" required></textarea><br>
        <label>Button Link: </label><input class="form-control" type="url" name="button_link" required><br>
        <button class="btn btn-primary" type="submit">Upload Banner</button>
        <a class="btn btn-danger" href="index.html">Home</a>
    </form>
</div>

