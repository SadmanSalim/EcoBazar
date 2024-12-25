<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="EcoBazar - Your one-stop shop for all things eco-friendly.">

   <title>EcoBazar</title>
   <link rel="shortcut icon" href="./assets/img/fav.png" type="image/x-icon">
   <link
      href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"
      rel="stylesheet" />
   <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
   <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="./assets/css/cart.css">
   <link rel="stylesheet" href="./assets/css/cart.responsive.css">
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
                  <a class="active" href="cart.html">Shopping Cart</a>
               </li>
            </ul>
         </div>
      </section>
      <!-- *Breadcrumbs End Hear -->

      <!-- *Cart Main Body Part Section start -->
      <section id="cart">
         <div class="container">
            <div class="heading">
               <h2>My Shopping Cart</h2>
            </div>
            <div class="row">
               <div class="col-lg-8 pdCnt">
                  <div class="row productHeading">
                     <div class="col-lg-6 col-6">
                        <p>Product</p>
                     </div>
                     <div class="col-lg-2 col-3">
                        <p>Price</p>
                     </div>
                     <div class="col-lg-2 col-3">
                        <p>Quantity</p>
                     </div>
                     <div class="col-lg-2 col d-none d-lg-flex">
                        <p>Subtotal</p>
                     </div>
                  </div>
                  <div class="row productCnt align-items-center">
                     <div class="col-lg-6  col-6  d-flex align-items-center">
                        <img class="img-fluid" src="./assets/img/cartpd1.png" alt="">
                        <p>Green Capsicum</p>
                     </div>
                     <div class="col-lg-2 col-3">$14.00</div>
                     <div class="col-lg-2 col-3 d-flex align-items-center quantity justify-content-end">
                        <iconify-icon icon="ic:baseline-minus"></iconify-icon>
                        <input type="number" value="5">
                        <iconify-icon icon="ic:baseline-plus"></iconify-icon>
                     </div>
                     <div class="col-lg-2 d-none d-lg-flex">
                        <p>$70.00</p>
                     </div>
                  </div>
                  <div class="row productCnt align-items-center">
                     <div class="col-lg-6  col-6  d-flex align-items-center">
                        <img class="img-fluid" src="./assets/img/cartpd2.png" alt="">
                        <p>Red Capsicum</p>
                     </div>
                     <div class="col-lg-2 col-3">$14.00</div>
                     <div class="col-lg-2 col-3 d-flex align-items-center quantity justify-content-end">
                        <iconify-icon icon="ic:baseline-minus"></iconify-icon>
                        <input type="number" value="5">
                        <iconify-icon icon="ic:baseline-plus"></iconify-icon>
                     </div>
                     <div class="col-lg-2 d-none d-lg-flex">
                        <p>$70.00</p>
                     </div>
                  </div>
                  <div class="row actionBtns">
                     <div class="col-lg-6 col-12">
                        <a href="shop.html"><button>Resume to Shop</button></a>
                     </div>
                     <div class="col-lg-6 col-12 text-lg-end">
                        <button>Update Cart</button>
                     </div>
                  </div>

               </div>
               <div class="col-lg-4 mt-2 mt-lg-0">
                  <div class="cartCnt">
                     <h5>Cart Total</h5>
                     <div class="row align-items-center">
                        <div class="col-6">
                           <p>Subtotal:</p>
                        </div>
                        <div class="col-6 text-end">
                           <span>$84.00</span>
                        </div>
                     </div>
                     <div class="row align-items-center">
                        <div class="col-6">
                           <p>Shipping:</p>
                        </div>
                        <div class="col-6 text-end">
                           <span>Free</span>
                        </div>
                     </div>
                     <div class="row align-items-center">
                        <div class="col-6">
                           <p>Total:</p>
                        </div>
                        <div class="col-6 text-end">
                           <h6>$84.00</h6>
                        </div>
                     </div>
                     <div class="row d-lg-none cpLinks">
                        <div class="col-6">
                           <input type="text" placeholder="Enter Code">
                        </div>
                        <div class="col-6">
                           <button>Apply</button>
                        </div>
                     </div>
                     <a href="checkout.html"><button>Proceed to Checkout</button></a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- *Cart Main Body Part Section end -->

      <!-- *cupon Section start -->
      <section id="cupon" class="d-none d-lg-block">
         <div class="container">
            <div class="row cupon mt-3">
               <div class="col-12">
                  <div class="cuponCnt d-flex align-items-center">
                     <h4>Cupon Code</h4>
                     <div class="cuponInput d-flex">
                        <input type="text" placeholder="Enter Code">
                        <button>Apply Cupon</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- *cupon Section end -->


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

   <?php require('footer.php') ?>

   <script src="./assets/js/bootstrap.bundle.min.js"></script>
   <script src="./assets/js/jquery-3.7.1.min.js"></script>
   <script src="./assets/js/cart.js"></script>
</body>

</html>