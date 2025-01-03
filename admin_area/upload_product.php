<?php
// Start the session and check if the admin is logged in
session_start();
// if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
//     header("Location: login.php");
//     exit;
// }

$host = 'localhost';
$dbname = 'eco';
$username = 'root';
$password = ''; // Your database password

try {
    // Establish the PDO connection
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}

// Handle form submission for uploading a product
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $old_price = $_POST['old_price'];
    $stock_status = $_POST['stock_status'];

    // Handle image upload
    $image_url = $_FILES['image']['name'];
    $target_dir = "../uploads/products/";
    $target_file = $target_dir . basename($image_url);
    move_uploaded_file($_FILES['image']['tmp_name'], $target_file);

    // Insert the product into the database
    $stmt = $pdo->prepare("INSERT INTO products (name, description, price, category, image_url, old_price, stock_status) 
                           VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$name, $description, $price, $category, $image_url, $old_price, $stock_status]);

    echo "Product uploaded successfully!";
}

// Handle product rating submission (rate_product.php logic)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['rating'])) {
    $product_id = $_POST['product_id'];
    $rating = $_POST['rating'];

    // Fetch the current average rating and number of ratings for the product
    $stmt = $pdo->prepare("SELECT rating, number_of_ratings FROM products WHERE id = ?");
    $stmt->execute([$product_id]);
    $product = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($product) {
        // Calculate the new average rating
        $current_rating = $product['rating'];
        $current_number_of_ratings = $product['number_of_ratings'];
        $new_number_of_ratings = $current_number_of_ratings + 1;
        $new_rating = (($current_rating * $current_number_of_ratings) + $rating) / $new_number_of_ratings;

        // Update the product rating in the database
        $update_stmt = $pdo->prepare("UPDATE products SET rating = ?, number_of_ratings = ? WHERE id = ?");
        $update_stmt->execute([$new_rating, $new_number_of_ratings, $product_id]);

        echo "Thank you for your rating!";
    } else {
        echo "Product not found!";
    }
}
?>


<!-- HTML Form to upload a new product -->
<form method="POST" enctype="multipart/form-data">
    <label for="name">Product Name</label><br>
    <input type="text" name="name" required><br>

    <label for="description">Description</label><br>
    <textarea name="description" required></textarea><br>

    <label for="price">Price</label><br>
    <input type="number" step="0.01" name="price" required><br>

    <label for="category">Category</label><br>
    <select name="category">
        <option value="Vegetables">Vegetables</option>
        <option value="Fruit">Fruit</option>
        <option value="Meat & Fish">Meat & Fish</option>
    </select><br>

    <label for="old_price">Old Price</label><br>
    <input type="number" step="0.01" name="old_price"><br>

    <label for="stock_status">Stock Status</label><br>
    <select name="stock_status">
        <option value="In Stock">In Stock</option>
        <option value="Out of Stock">Out of Stock</option>
    </select><br>

    <label for="image">Product Image</label><br>
    <input type="file" name="image" required><br>

    <button type="submit">Upload Product</button>
    <a class="btn btn-danger" href="delete_product.php">Delete</a>
</form>

<!-- Rating Form for each product -->
<form method="POST" action="../index.php">
    <label for="rating">Rate this product:</label>
    <select name="rating" id="rating" required>
        <option value="1">1 Star</option>
        <option value="2">2 Stars</option>
        <option value="3">3 Stars</option>
        <option value="4">4 Stars</option>
        <option value="5">5 Stars</option>
    </select>
    <input type="hidden" name="product_id" value="<?= $product['id'] ?>" />
    <button type="submit">Submit Rating</button>
</form>
