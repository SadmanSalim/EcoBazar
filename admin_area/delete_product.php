<?php
// Database connection setup
$host = 'localhost';
$dbname = 'eco';
$username = 'root';
$password = ''; // Your database password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}

// Step 1: Check if the product ID is provided
if (isset($_GET['id'])) {
    $product_id = $_GET['id'];

    // Step 2: Fetch the product details from the database
    $stmt = $pdo->prepare("SELECT * FROM products WHERE id = ?");
    $stmt->execute([$product_id]);
    $product = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($product) {
        // Step 3: Delete the product image from the server
        $image_path = '../uploads/products/' . $product['image_url'];
        if (file_exists($image_path)) {
            unlink($image_path); // Deletes the image file
        }

        // Step 4: Delete the product record from the database
        $delete_stmt = $pdo->prepare("DELETE FROM products WHERE id = ?");
        $delete_stmt->execute([$product_id]);

        // Step 5: Redirect back to the product list page (or display a success message)
        header("Location: product_display.php");
        exit;
    } else {
        echo "Product not found.";
    }
} else {
    echo "No product ID provided.";
}
?>
