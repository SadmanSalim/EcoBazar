<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>EcoBazar</title>
   <link rel="shortcut icon" href="./assets/img/fav.png" type="image/x-icon">
   <link
      href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"
      rel="stylesheet" />

   <!-- *Swipper Cdn -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

   <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
   <!-- *Swipper Cdn -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.min.js"></script>
   <!-- *Icon Cdn -->
   <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
   <!-- *Icon Cdn -->
   <link rel="stylesheet" href="./assets/css/venobox.min.css">
   <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="./assets/css/style.css">
   <link rel="stylesheet" href="./assets/css/responsive.css">
</head>

<body>
<?php require('header.php') ?>

   <!-- *Body Part Start -->
   <main>
      <!-- *Banner Desktop Section start -->
      <?php
// Connect to the database
// Example PHP connection script with XAMPP's default settings
$pdo = new PDO('mysql:host=localhost;dbname=eco', 'root', '');


// Fetch banners
$stmt = $pdo->query("SELECT * FROM banners");
$banners = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<section id="banner" class="d-none d-lg-block">
    <div class="continer">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <?php foreach ($banners as $banner): ?>
                    <div class="swiper-slide">
                        <div class="row align-items-center">
                            <div class="col-7 bannerImg">
                                <img class="img-fluid" src="uploads/<?php echo htmlspecialchars($banner['image_url']); ?>" alt="">
                                <div class="discount">
                                    <div class="row">
                                        <p><?php echo htmlspecialchars($banner['discount_percentage']); ?>%</p>
                                        <span>OFF</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5 text-start bannerText">
                                <p>Welcome to shopery</p>
                                <h1><?php echo htmlspecialchars($banner['heading']); ?></h1>
                                <span><?php echo htmlspecialchars($banner['description']); ?></span>
                                <a href="<?php echo htmlspecialchars($banner['button_link']); ?>"><button>Shop Now <iconify-icon icon="mdi-light:arrow-right"></iconify-icon></button></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next">
                <iconify-icon icon="mynaui:arrow-right"></iconify-icon>
            </div>
            <div class="swiper-button-prev">
                <iconify-icon icon="mynaui:arrow-left"></iconify-icon>
            </div>
        </div>
    </div>
    <div class="bgImages">
        <img class="img-fluid" src="./assets/img/BG1.png" alt="">
    </div>
</section>

      <!-- *Banner Section end -->

      <!-- *Banner Mobile Section start -->
      <section id="bannerSm" class="d-lg-none">
         <div class="container">
            <div class="row">
               <div class="bgImages">
                  <div class="bgImage1">
                     <img class="img-fluid" src="./assets/img/foodbg1.png" alt="">
                  </div>
                  <div class="bgImage2">
                     <img src="./assets/img/foodbg2.png" alt="">
                  </div>
                  <div class="bgImage3">
                     <img src="./assets/img/foodbg3.png" alt="">
                  </div>
               </div>
               <div class="swiper mySwiper">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                        <div class="row align-items-center">
                           <div class="col-12 bannerImg">
                              <img class="img-fluid" src="./assets/img/bgImage.png" alt="">
                              <div class="discount">
                                 <div class="row">
                                    <p>70%</p>
                                    <span>OFF</span>
                                 </div>
                              </div>
                           </div>
                           <div class="col bannerText">
                              <p>Welcome to shopery</p>
                              <h1>Fresh & Healthy
                                 Organic Food</h1>
                              <span>Free shipping on all your order. we deliver, you enjoy</span>
                              <button>Shop Now <iconify-icon icon="mdi-light:arrow-right"></iconify-icon></button>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="row align-items-center">
                           <div class="col-12 bannerImg">
                              <img class="img-fluid" src="./assets/img/bgImage1.png" alt="">
                              <div class="discount">
                                 <div class="row">
                                    <p>30%</p>
                                    <span>OFF</span>
                                 </div>
                              </div>
                           </div>
                           <div class="col bannerText">
                              <p>Welcome to shopery</p>
                              <h1>Fresh & Healthy
                                 Organic Food</h1>
                              <span>Free shipping on all your order. we deliver, you enjoy</span>
                              <button>Shop Now <iconify-icon icon="mdi-light:arrow-right"></iconify-icon></button>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="row align-items-center">
                           <div class="col bannerImg">
                              <img class="img-fluid" src="./assets/img/bgImage.png" alt="">
                              <div class="discount">
                                 <div class="row">
                                    <p>70%</p>
                                    <span>OFF</span>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 bannerText">
                              <p>Welcome to shopery</p>
                              <h1>Fresh & Healthy
                                 Organic Food</h1>
                              <span>Free shipping on all your order. we deliver, you enjoy</span>
                              <button>Shop Now <iconify-icon icon="mdi-light:arrow-right"></iconify-icon></button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-pagination"></div>
                  <div class="swiper-button-next">
                     <iconify-icon icon="mynaui:arrow-right"></iconify-icon>
                  </div>
                  <div class="swiper-button-prev">
                     <iconify-icon icon="mynaui:arrow-left"></iconify-icon>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- *Banner Mobile Section end -->

      <!-- *Features Section Start -->
      <section id="features">
         <div class="container">
            <div class="featureCnt">
               <div class="row justify-content-center mt-3 mt-lg-0 mb-3 mb-lg-0">
                  <div class="col-4 featureCard">
                     <span class="featureIcon">
                        <iconify-icon icon="material-symbols-light:delivery-truck-speed-outline"></iconify-icon>
                     </span>
                     <div class="texts">
                        <p>Free Shipping</p>
                        <span>Free shipping with discount</span>
                     </div>
                  </div>
                  <div class="col-4 featureCard">
                     <span class="featureIcon">
                        <iconify-icon icon="bx:support"></iconify-icon>
                     </span>
                     <div class="texts">
                        <p>Great Support 24/7</p>
                        <span>Instant access to Contact</span>
                     </div>
                  </div>
                  <div class="col-4 featureCard">
                     <span class="featureIcon">
                        <iconify-icon icon="solar:bag-check-linear"></iconify-icon>
                     </span>
                     <div class="texts">
                        <p>100% Sucure Payment</p>
                        <span>We ensure your money is save</span>
                     </div>
                  </div>
                  <div class="col-4 featureCard">
                     <span class="featureIcon">
                        <iconify-icon icon="solar:box-broken"></iconify-icon>
                     </span>
                     <div class="texts">
                        <p>Money-Back Guarantee</p>
                        <span>30 days money-back guarantee</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- *Features Section End -->


      <!-- *Product Section start -->
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

// Fetch products based on category filter
$category_filter = isset($_GET['category']) ? $_GET['category'] : '*'; // Default to all products

$query = "SELECT * FROM products";
if ($category_filter != '*') {
    $query .= " WHERE category = :category";
}

$stmt = $pdo->prepare($query);

if ($category_filter != '*') {
    $stmt->bindParam(':category', $category_filter);
}

$stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<section id="ProductCardBox">
    <div class="container productFilter">
        <?php foreach ($products as $product): ?>
            <div class="cart <?= htmlspecialchars($product['category']) ?>Card">
                <a href="#">
                    <div class="imgBox">
                        <img class="img-fluid" src="uploads/products/<?= htmlspecialchars($product['image_url']) ?>" alt="<?= htmlspecialchars($product['name']) ?>">
                    </div>
                    <div class="details">
                        <a href="#"><?= htmlspecialchars($product['name']) ?></a>
                        <div class="priceAndCard d-flex align-items-center justify-content-between">
                            <div class="price">
                                <span class="col-2">$<?= number_format($product['price'], 2) ?></span>
                                <?php if ($product['old_price']): ?>
                                    <span class="col-3 oldPrice">$<?= number_format($product['old_price'], 2) ?></span>
                                <?php endif; ?>
                            </div>
                            <span class="text-end col-6 addCatdBtn">
                                <iconify-icon icon="ph:handbag" width="20" height="20"></iconify-icon>
                            </span>
                        </div>
                        <div class="review">
                            <?php 
                            // Display stars based on rating
                            $rating = $product['rating'];
                            $full_stars = floor($rating); // Full stars
                            $half_star = ($rating - $full_stars) >= 0.5 ? true : false; // Half star
                            $empty_stars = 5 - $full_stars - ($half_star ? 1 : 0); // Empty stars
                            
                            for ($i = 0; $i < $full_stars; $i++) {
                                echo '<iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>';
                            }
                            if ($half_star) {
                                echo '<iconify-icon icon="twemoji:star-half" width="20" height="20"></iconify-icon>';
                            }
                            for ($i = 0; $i < $empty_stars; $i++) {
                                echo '<iconify-icon icon="heroicons:star-20-solid" width="20" height="20" style="color: #b3b3b3"></iconify-icon>';
                            }
                            ?>
                        </div>
                    </div>
                </a>

                <div class="iconBox">
                    <div class="Wishlist">
                        <iconify-icon icon="meteor-icons:heart" width="20" height="20"></iconify-icon>
                    </div>
                    <div class="View">
                        <iconify-icon icon="ant-design:eye-outlined" width="20" height="20"></iconify-icon>
                    </div>
                </div>

                <!-- Label -->
                <?php if ($product['stock_status'] === 'Out of Stock'): ?>
                    <div class="label">
                        <span>Out of Stock</span>
                    </div>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</section>


      <!-- product end here -->
      <!-- *Product Section end -->


      <!-- *Drinks Section start -->
      <?php
// Database credentials
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
    // If connection fails, display error
    echo "Connection failed: " . $e->getMessage();
    exit;
}

// Fetch all drinks from the database
$query = $pdo->prepare("SELECT * FROM drinks");
$query->execute();
$drinks = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<section id="drinks">
    <div class="container">
        <div class="row align-items-center">
            <?php foreach ($drinks as $drink): ?>
                <div class="col-lg-4 col-12">
                    <a href="<?= htmlspecialchars($drink['link']); ?>">
                        <img class="img-fluid" src="uploads/<?= htmlspecialchars($drink['image_url']); ?>" alt="">
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

      <!-- *Drinks Section end -->


      <!-- *Best Deals Section start -->
      <section id="bestDeals">
         <div class="container">
            <div class="row">
               <div class="col-4 d-none d-lg-block">
                  <img class="img-fluid" src="./assets/img/bgImage1.png" alt="">
               </div>
               <div class="col-lg-4 text-center middleItems">
                  <p>Best Deals</p>
                  <h2>Our Special Products Deal of the Month</h2>
                  <div class="countTime d-flex">
                     <div>
                       <p id="days">00</p>
                       <span>Days</span>
                     </div>
                     <div>
                       <p id="hours">00</p>
                       <span>Hours</span>
                     </div>
                     <div>
                       <p id="mins">00</p>
                       <span>Mins</span>
                     </div>
                     <div>
                       <p id="secs">00</p>
                       <span>Secs</span>
                     </div>
                   </div>
                   
                  <a href="shop.html"><button>Shop Now <iconify-icon
                           icon="ri:arrow-right-line"></iconify-icon></button></a>
               </div>
               <div class="col-4 d-none d-lg-block">
                  <img class="img-fluid" src="./assets/img/deals.png" alt="">
               </div>
            </div>
         </div>
      </section>
      <!-- *Best Deals Section end -->

      <!-- *Featured Product Section start -->
      <section id="featureProduct">
         <section id="ProductCardBox">
            <div class="container">
               <h2 class="head">Featured Products</h2>
               <div class="row">
                  <div class="swiper mySwiper">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <div class="cart Vegetables ">
                              <a href="#">
                                 <div class="imgBox">
                                    <img class="img-fluid" src="./assets/img/Image.png" alt="">
                                 </div>
                                 <div class="details text-start">
                                    <a href="#">Big Potatos</a>
                                    <div class="priceAndCard d-flex align-items-center justify-content-between">
                                       <div class="price">
                                          <span class="col-2">$14.99</span>
                                       </div>
                                       <span class="text-end col-6 addCatdBtn">
                                          <iconify-icon icon="ph:handbag" width="20" height="20"></iconify-icon>
                                       </span>
                                    </div>
                                    <div class="review">
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                          style="color: #b3b3b3"></iconify-icon>
                                    </div>
                                 </div>
                              </a>
                              <!-- *Hover Effect Start Here -->
                              <div class="iconBox">
                                 <div class="Wishlist">
                                    <iconify-icon icon="meteor-icons:heart" width="20" height="20"></iconify-icon>
                                 </div>
                                 <div class="View">
                                    <iconify-icon icon="ant-design:eye-outlined" width="20" height="20"></iconify-icon>
                                 </div>
                              </div>
                              <!-- *Hover Effect End Here -->
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="cart Vegetables">
                              <a href="#">
                                 <div class="imgBox">
                                    <img class="img-fluid" src="./assets/img/Chanise.png" alt="">
                                 </div>
                                 <div class="details text-start">
                                    <a href="#">Chanise Cabbage</a>
                                    <div class="priceAndCard d-flex align-items-center justify-content-between">
                                       <div class="price">
                                          <span class="col-2">$14.99</span>
                                       </div>
                                       <span class="text-end col-6 addCatdBtn">
                                          <iconify-icon icon="ph:handbag" width="20" height="20"></iconify-icon>
                                       </span>
                                    </div>
                                    <div class="review">
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                          style="color: #b3b3b3"></iconify-icon>
                                    </div>
                                 </div>
                              </a>
                              <!-- *Hover Effect Start Here -->
                              <div class="iconBox">
                                 <div class="Wishlist">
                                    <iconify-icon icon="meteor-icons:heart" width="20" height="20"></iconify-icon>
                                 </div>
                                 <div class="View">
                                    <iconify-icon icon="ant-design:eye-outlined" width="20" height="20"></iconify-icon>
                                 </div>
                              </div>
                              <!-- *Hover Effect End Here -->
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="cart fruits">
                              <a href="#">
                                 <div class="imgBox">
                                    <img class="img-fluid" src="./assets/img/Ladies.png" alt="">
                                 </div>
                                 <div class="details text-start">
                                    <a href="#">Ladies Finger</a>
                                    <div class="priceAndCard d-flex align-items-center justify-content-between">
                                       <div class="price">
                                          <span class="col-2">$14.99</span>
                                          <span class="col-3 oldPrice">$20.99</span>
                                       </div>
                                       <span class="text-end col-6 addCatdBtn">
                                          <iconify-icon icon="ph:handbag" width="20" height="20"></iconify-icon>
                                       </span>
                                    </div>
                                    <div class="review">
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                          style="color: #b3b3b3"></iconify-icon>
                                    </div>
                                 </div>
                              </a>
                              <!-- *Hover Effect Start Here -->
                              <div class="iconBox">
                                 <div class="Wishlist">
                                    <iconify-icon icon="meteor-icons:heart" width="20" height="20"></iconify-icon>
                                 </div>
                                 <div class="View">
                                    <iconify-icon icon="ant-design:eye-outlined" width="20" height="20"></iconify-icon>
                                 </div>
                              </div>
                              <!-- *Hover Effect End Here -->
                              <!-- *Label Start Here -->
                              <div class="label">
                                 <span>Out of Stock</span>
                              </div>
                              <!-- *Label End Here -->
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="cart Vegetables">
                              <a href="#">
                                 <div class="imgBox">
                                    <img class="img-fluid" src="./assets/img/Eggplant.png" alt="">
                                 </div>
                                 <div class="details text-start">
                                    <a href="#">Eggplant</a>
                                    <div class="priceAndCard d-flex align-items-center justify-content-between">
                                       <div class="price">
                                          <span class="col-2">$14.99</span>
                                          <span class="col-3 oldPrice">$20.99</span>
                                       </div>
                                       <span class="text-end col-6 addCatdBtn">
                                          <iconify-icon icon="ph:handbag" width="20" height="20"></iconify-icon>
                                       </span>
                                    </div>
                                    <div class="review">
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                          style="color: #b3b3b3"></iconify-icon>
                                    </div>
                                 </div>
                              </a>
                              <!-- *Hover Effect Start Here -->
                              <div class="iconBox">
                                 <div class="Wishlist">
                                    <iconify-icon icon="meteor-icons:heart" width="20" height="20"></iconify-icon>
                                 </div>
                                 <div class="View">
                                    <iconify-icon icon="ant-design:eye-outlined" width="20" height="20"></iconify-icon>
                                 </div>
                              </div>
                              <!-- *Hover Effect End Here -->
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="cart Vegetables">
                              <a href="#">
                                 <div class="imgBox">
                                    <img class="img-fluid" src="./assets/img/Fresh.png" alt="">
                                 </div>
                                 <div class="details text-start">
                                    <a href="#">Fresh Cauliflower</a>
                                    <div class="priceAndCard d-flex align-items-center justify-content-between">
                                       <div class="price">
                                          <span class="col-2">$14.99</span>
                                          <span class="col-3 oldPrice">$20.99</span>
                                       </div>
                                       <span class="text-end col-6 addCatdBtn">
                                          <iconify-icon icon="ph:handbag" width="20" height="20"></iconify-icon>
                                       </span>
                                    </div>
                                    <div class="review">
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                          style="color: #b3b3b3"></iconify-icon>
                                    </div>
                                 </div>
                              </a>
                              <!-- *Hover Effect Start Here -->
                              <div class="iconBox">
                                 <div class="Wishlist">
                                    <iconify-icon icon="meteor-icons:heart" width="20" height="20"></iconify-icon>
                                 </div>
                                 <div class="View">
                                    <iconify-icon icon="ant-design:eye-outlined" width="20" height="20"></iconify-icon>
                                 </div>
                              </div>
                              <!-- *Hover Effect End Here -->
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="cart fruits">
                              <a href="#">
                                 <div class="imgBox">
                                    <img class="img-fluid" src="./assets/img/GreenApple.png" alt="">
                                 </div>
                                 <div class="details text-start">
                                    <a href="#">Green Apple</a>
                                    <div class="priceAndCard d-flex align-items-center justify-content-between">
                                       <div class="price">
                                          <span class="col-2">$14.99</span>
                                          <span class="col-3 oldPrice">$20.99</span>
                                       </div>
                                       <span class="text-end col-6 addCatdBtn">
                                          <iconify-icon icon="ph:handbag" width="20" height="20"></iconify-icon>
                                       </span>
                                    </div>
                                    <div class="review">
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                          style="color: #b3b3b3"></iconify-icon>
                                    </div>
                                 </div>
                              </a>
                              <!-- *Hover Effect Start Here -->
                              <div class="iconBox">
                                 <div class="Wishlist">
                                    <iconify-icon icon="meteor-icons:heart" width="20" height="20"></iconify-icon>
                                 </div>
                                 <div class="View">
                                    <iconify-icon icon="ant-design:eye-outlined" width="20" height="20"></iconify-icon>
                                 </div>
                              </div>
                              <!-- *Hover Effect End Here -->
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="cart fruits">
                              <a href="#">
                                 <div class="imgBox">
                                    <img class="img-fluid" src="./assets/img/GreenCapsicum.png" alt="">
                                 </div>
                                 <div class="details text-start">
                                    <a href="#">Green Capsicum</a>
                                    <div class="priceAndCard d-flex align-items-center justify-content-between">
                                       <div class="price">
                                          <span class="col-2">$14.99</span>
                                          <span class="col-3 oldPrice">$20.99</span>
                                       </div>
                                       <span class="text-end col-6 addCatdBtn">
                                          <iconify-icon icon="ph:handbag" width="20" height="20"></iconify-icon>
                                       </span>
                                    </div>
                                    <div class="review">
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                          style="color: #b3b3b3"></iconify-icon>
                                    </div>
                                 </div>
                              </a>
                              <!-- *Hover Effect Start Here -->
                              <div class="iconBox">
                                 <div class="Wishlist">
                                    <iconify-icon icon="meteor-icons:heart" width="20" height="20"></iconify-icon>
                                 </div>
                                 <div class="View">
                                    <iconify-icon icon="ant-design:eye-outlined" width="20" height="20"></iconify-icon>
                                 </div>
                              </div>
                              <!-- *Hover Effect End Here -->
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="cart Vegetables">
                              <a href="#">
                                 <div class="imgBox">
                                    <img class="img-fluid" src="./assets/img/GreenChili.png" alt="">
                                 </div>
                                 <div class="details text-start">
                                    <a href="#">Green Chili</a>
                                    <div class="priceAndCard d-flex align-items-center justify-content-between">
                                       <div class="price">
                                          <span class="col-2">$14.99</span>
                                          <span class="col-3 oldPrice">$20.99</span>
                                       </div>
                                       <span class="text-end col-6 addCatdBtn">
                                          <iconify-icon icon="ph:handbag" width="20" height="20"></iconify-icon>
                                       </span>
                                    </div>
                                    <div class="review">
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                          style="color: #b3b3b3"></iconify-icon>
                                    </div>
                                 </div>
                              </a>
                              <!-- *Hover Effect Start Here -->
                              <div class="iconBox">
                                 <div class="Wishlist">
                                    <iconify-icon icon="meteor-icons:heart" width="20" height="20"></iconify-icon>
                                 </div>
                                 <div class="View">
                                    <iconify-icon icon="ant-design:eye-outlined" width="20" height="20"></iconify-icon>
                                 </div>
                              </div>
                              <!-- *Hover Effect End Here -->
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="cart Vegetables">
                              <a href="#">
                                 <div class="imgBox">
                                    <img class="img-fluid" src="./assets/img/GreenChili.png" alt="">
                                 </div>
                                 <div class="details text-start">
                                    <a href="#">Green Chili</a>
                                    <div class="priceAndCard d-flex align-items-center justify-content-between">
                                       <div class="price">
                                          <span class="col-2">$14.99</span>
                                          <span class="col-3 oldPrice">$20.99</span>
                                       </div>
                                       <span class="text-end col-6 addCatdBtn">
                                          <iconify-icon icon="ph:handbag" width="20" height="20"></iconify-icon>
                                       </span>
                                    </div>
                                    <div class="review">
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                          style="color: #b3b3b3"></iconify-icon>
                                    </div>
                                 </div>
                              </a>
                              <!-- *Hover Effect Start Here -->
                              <div class="iconBox">
                                 <div class="Wishlist">
                                    <iconify-icon icon="meteor-icons:heart" width="20" height="20"></iconify-icon>
                                 </div>
                                 <div class="View">
                                    <iconify-icon icon="ant-design:eye-outlined" width="20" height="20"></iconify-icon>
                                 </div>
                              </div>
                              <!-- *Hover Effect End Here -->
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="cart Vegetables ">
                              <a href="#">
                                 <div class="imgBox">
                                    <img class="img-fluid" src="./assets/img/Image.png" alt="">
                                 </div>
                                 <div class="details text-start">
                                    <a href="#">Big Potatos</a>
                                    <div class="priceAndCard d-flex align-items-center justify-content-between">
                                       <div class="price">
                                          <span class="col-2">$14.99</span>
                                       </div>
                                       <span class="text-end col-6 addCatdBtn">
                                          <iconify-icon icon="ph:handbag" width="20" height="20"></iconify-icon>
                                       </span>
                                    </div>
                                    <div class="review">
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                          style="color: #b3b3b3"></iconify-icon>
                                    </div>
                                 </div>
                              </a>
                              <!-- *Hover Effect Start Here -->
                              <div class="iconBox">
                                 <div class="Wishlist">
                                    <iconify-icon icon="meteor-icons:heart" width="20" height="20"></iconify-icon>
                                 </div>
                                 <div class="View">
                                    <iconify-icon icon="ant-design:eye-outlined" width="20" height="20"></iconify-icon>
                                 </div>
                              </div>
                              <!-- *Hover Effect End Here -->
                           </div>
                        </div>
                     </div>
                     <div class="swiper-button-next">
                        <iconify-icon icon="mynaui:arrow-right"></iconify-icon>
                     </div>
                     <div class="swiper-button-prev">
                        <iconify-icon icon="mynaui:arrow-left"></iconify-icon>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </section>
      <!-- *Featured Product Section end -->


      <!-- *Client Review Section start -->
      <section id="review" class="">
         <div class="container">
            <h2 class="head">What our Clients Says</h2>
            <div class="row">
               <div class="col-lg-4 col-12">
                  <div class="reviewCnt text-center">
                     <img class="img-fluid" src="./assets/img/qoute.png">
                     <p>“Aenean et nisl eget eros consectetur vestibulum vel id erat. Aliquam feugiat massa dui. Sed
                        sagittis diam sit amet ante sodales semper. Aliquam commodo lorem laoreet ultricies ele. ”</p>
                  </div>
                  <div class="client text-center mt-3">
                     <img class="img-fluid" src="./assets/img/client1.png">
                     <p>Jenny Wilson</p>
                     <span>Customer</span>
                  </div>
               </div>
               <div class="col-lg-4 col-12">
                  <div class="reviewCnt text-center">
                     <img class="img-fluid" src="./assets/img/qoute.png">
                     <p>“Aenean et nisl eget eros consectetur vestibulum vel id erat. Aliquam feugiat massa dui. Sed
                        sagittis diam sit amet ante sodales semper. Aliquam commodo lorem laoreet ultricies ele. ”</p>
                  </div>
                  <div class="client text-center mt-3">
                     <img class="img-fluid" src="./assets/img/client2.png">
                     <p>Guy Hawkins</p>
                     <span>Customer</span>
                  </div>
               </div>
               <div class="col-lg-4 col-12">
                  <div class="reviewCnt text-center">
                     <img class="img-fluid" src="./assets/img/qoute.png">
                     <p>“Aenean et nisl eget eros consectetur vestibulum vel id erat. Aliquam feugiat massa dui. Sed
                        sagittis diam sit amet ante sodales semper. Aliquam commodo lorem laoreet ultricies ele. ”</p>
                  </div>
                  <div class="client text-center mt-3">
                     <img class="img-fluid" src="./assets/img/client3.png">
                     <p>Kathryn Murphy</p>
                     <span>Customer</span>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- *Client Review Section end -->


      <!-- *Video Section start -->
      <section id="video">
         <div class="container">
            <div class="row">
               <a class="videoHome" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=zep0sZs7JNA"><img class="img-fluid vid" src="./assets/img/Video.png" alt=""></a>
            </div>
         </div>
      </section>
      <!-- *Video Section end -->

      <!-- *Latest News Section start -->
      <section id="latestNews">
         <div class="container">
            <h2 class="head">Latest News</h2>
            <div class="row">
               <div class="col-lg-4 col-12 mt-4 mt-lg-0">
                  <div class="newsCnt text-center">
                     <div class="image">
                        <img class="img-fluid" src="./assets/img/news2.png" alt="">
                        <div class="date">
                           <p>23</p>
                           <span>Jan</span>
                        </div>
                     </div>
                     <div class="text text-start my-4">
                        <p>Curabitur porttitor orci eget neque accumsan venenatis.</p>
                        <span>Nulla libero lorem, euismod venenatis nibh sed, sodales dictum ex. Etiam nisi augue,
                           malesuada et pulvinar at, posuere eu neque.</span>
                        <a href="#">Read More <iconify-icon icon="mdi-light:arrow-right"></iconify-icon></a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-12">
                  <div class="newsCnt text-center">
                     <div class="image">
                        <img class="img-fluid" src="./assets/img/news2.png" alt="">
                        <div class="date">
                           <p>23</p>
                           <span>Jan</span>
                        </div>
                     </div>
                     <div class="text text-start">
                        <p>Curabitur porttitor orci eget neque accumsan venenatis.</p>
                        <span>Nulla libero lorem, euismod venenatis nibh sed, sodales dictum ex. Etiam nisi augue,
                           malesuada et pulvinar at, posuere eu neque.</span>
                        <a href="#">Read More <iconify-icon icon="mdi-light:arrow-right"></iconify-icon></a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col">
                  <div class="newsCnt text-center">
                     <div class="image">
                        <img class="img-fluid" src="./assets/img/news3.png" alt="">
                        <div class="date">
                           <p>23</p>
                           <span>Jan</span>
                        </div>
                     </div>
                     <div class="text text-start">
                        <p>Curabitur porttitor orci eget neque accumsan venenatis.</p>
                        <span>Nulla libero lorem, euismod venenatis nibh sed, sodales dictum ex. Etiam nisi augue,
                           malesuada et pulvinar at, posuere eu neque.</span>
                        <a href="#">Read More <iconify-icon icon="mdi-light:arrow-right"></iconify-icon></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- *Latest News Section end -->

      <!-- *Newsletter Start Here -->
      <section id="newsLetter">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-4 leftSide">
                  <h2>Subcribe our Newsletter</h2>
                  <p>Pellentesque eu nibh eget mauris congue mattis mattis nec tellus. Phasellus imperdiet elit eu
                     magna.</p>
               </div>
               <div class="col-lg-5 middleSide">
                  <form action="">
                     <div class="d-flex inputBox">
                        <input type="email" placeholder="Your email address">
                        <button>Subscribe</button>
                     </div>
                  </form>
               </div>
               <div class="col-lg-3 right-side text-center text-lg-end">
                  <a href="#" class="active">
                     <iconify-icon icon="fontisto:facebook" width="25" height="20"></iconify-icon>
                  </a>
                  <a href="#">
                     <iconify-icon icon="ri:twitter-fill" width="25" height="20"></iconify-icon>
                  </a>
                  <a href="#">
                     <iconify-icon icon="nrk:some-pinterest" width="25" height="20"></iconify-icon>
                  </a>
                  <a href="#">
                     <iconify-icon icon="iconoir:instagram" width="25" height="20"></iconify-icon>
                  </a>
               </div>
            </div>
         </div>
      </section>
      <!-- *Newsletter End Hear -->

   </main>
   <!-- *Body Part End -->


   <?php require('footer.php') ?>


   <!-- *Popup Box Start -->
   <section id="popup" class="popup d-none">
      <div class="popup2">
         <div class="container">
            <div class="row align-items-center justify-content-center">
               <div class="close-btn text-end"><iconify-icon icon="radix-icons:cross-2"></iconify-icon></div>
               <div class="col-lg-5 col mt-3">
                  <img class="img-fluid" src="./assets/img/BG.png" alt="">
               </div>
               <div class="col-lg-7 col text-center popText">
                  <h3>Subcribe to Our Newsletter</h3>
                  <p class="sub">Subscribe to our newlletter and Save your <span>20% money</span> with discount code
                     today.</p>
                  <div class="subscribe d-flex">
                     <input type="email" placeholder="Enter your email address">
                     <button>Subscribe</button>
                  </div>
                  <div class="dontShow d-flex justify-content-center align-items-center mt-4 mb-2">
                     <input type="checkbox">
                     <p>Don't show this popup again</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- *Popup Box End -->


   <script src="./assets/js/bootstrap.bundle.min.js"></script>
   <script src="./assets/js/jquery-3.7.1.min.js"></script>
   <script src="./assets/js/jquery.countdown.min.js"></script>
   <script src="./assets/js/isotope.pkgd.min.js"></script>
   <script src="./assets/js/venobox.min.js"></script>
   <script src="./assets/js/main.js"></script>
</body>

</html>