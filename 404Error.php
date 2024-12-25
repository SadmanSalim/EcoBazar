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

   <!-- *Icon Cdn -->
   <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
   <!-- *Icon Cdn -->

   <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="./assets/css/404Error.css">
</head>

<body>
<?php require('header.php') ?>
   <main>
      <!-- *Breadcrumbs Start Here -->
      <section id="Breadcrumbs">
         <div class="container">
            <ul>
               <li class="d-flex align-items-center">
                  <a href="index.html" class="homeIcom">
                     <iconify-icon icon="fluent:home-16-regular" width="20" height="22"></iconify-icon>
                  </a>
                  <iconify-icon icon="formkit:right" width="15" height="15" style="color: #999"></iconify-icon>
               </li>
               <li class="d-flex align-items-center">
                  <a class="active" href="#">404 Error Page</a>
               </li>
         </div>
      </section>
      <!-- *Breadcrumbs End Hear -->
      <!-- * Start Here -->
      <section id="errorImg">
         <div class="container">
            <div class="errorBox">
               <img class="img-fluid" src="./assets/img/404Error.png" alt="">
               <h1>Oops! page not found</h1>
               <p>Ut consequat ac tortor eu vehicula. Aenean accumsan purus eros. Maecenas sagittis tortor at metus
                  mollis</p>
               <div class="backBtn d-block text-center">
                  <button type="button" id="backToHome">Back to Home</button>
               </div>
            </div>
         </div>
      </section>
      <!-- * End Hear -->
   </main>


   <?php require('footer.php') ?>

   <script src=" ./assets/js/bootstrap.bundle.min.js"></script>
   <script src="./assets/js/jquery-3.7.1.min.js"></script>
   <script src="./assets/js/shop.js"></script>
</body>

</html>