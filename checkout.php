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
   <link rel="stylesheet" href="./assets/css/checkout.css">
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
                  <a href="#">Cart</a>
                  <iconify-icon icon="formkit:right" width="15" height="15" style="color: #999"></iconify-icon>
               </li>
               <li>
                  <a href="#" class="active">Checkout</a>
               </li>
            </ul>
         </div>
      </section>
      <!-- *Breadcrumbs End Hear -->

      <div class="container">
         <div class="row">
            <div class="col-lg-8 col-12 ">
               <div class="formBox">
                  <h2>Billing Information</h2>
                  <form>
                     <div class="row">
                        <div class="F-name col-lg col-12">
                           <label for="F-name">First name</label>
                           <input type="text" id="F-name" placeholder="First name">
                        </div>
                        <div class="L-name col-lg col-12">
                           <label for="F-name">Last name</label>
                           <input type="text" id="L-name" placeholder="Last name">
                        </div>
                        <div class="C-name col-lg col-12">
                           <label for="C-name">Company Name (optional)</label>
                           <input type="text" id="C-name" placeholder="Company Name">
                        </div>
                        <div class="address col-12">
                           <label for="address">Street Address</label>
                           <input type="text" id="address" placeholder="Street Address">
                        </div>
                        <div class="Country col-lg-4 col-12">
                           <label for="Country">Country / Region</label>
                           <select name="Country" id="Country">
                              <option value="1">Select</option>
                           </select>
                        </div>
                        <div class="States col-lg-4 col-12">
                           <label for="States">States</label>

                           <select name="States" id="States">
                              <option value="1">Select</option>
                           </select>
                        </div>
                        <div class="zipCode col-lg-4 col-12">
                           <label for="zipCode">Zip Code</label>
                           <input type="email" id="zipCode" placeholder="Zip Code">
                        </div>
                        <div class="email col-lg col-12">
                           <label for="email">Email</label>
                           <input type="email" id="email" placeholder="Email">
                        </div>
                        <div class="phone col-lg col-12">
                           <label for="phone">Phone number</label>
                           <input type="phone" id="phone" placeholder="Phone number">
                        </div>
                        <div class="different col-12 d-flex align-items-center">
                           <input type="checkbox" id="differentAddress" placeholder="">
                           <label for="differentAddress">Ship to a different address</label>
                        </div>
                        <h2>Additional Info</h2>
                        <div class="textarea col-12">
                           <label for="notes">Order Notes (Optional)</label>
                           <textarea name="" id="notes"
                              placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
            <div class="col-lg-4 col-12 ">
               <div class="orderSummery">
                  <h4>Order Summery</h4>
                  <div class="row">
                     <div class="orderCart d-flex align-items-center justify-content-between">
                        <div class="imgAndname">
                           <img class="img-fluid" src="./assets/img/product.png" alt="">
                           <span class="proName">Green Capsicum <span>x5</span></span>
                        </div>
                        <span class="price">$70.00</span>
                     </div>
                     <div class="orderCart d-flex align-items-center justify-content-between">
                        <div class="imgAndname">
                           <img class="img-fluid" src="./assets/img/GreenApple.png" alt="">
                           <span class="proName">Green Capsicum <span>x5</span></span>
                        </div>
                        <span class="price">$70.00</span>
                     </div>
                  </div>
                  <div class="Subtotal d-flex align-items-center justify-content-between">
                     <span>Subtotal:</span>
                     <span>$84.00</span>
                  </div>
                  <div class="Shipping d-flex align-items-center justify-content-between">
                     <span>Shipping:</span>
                     <span>Free</span>
                  </div>
                  <div class="Total d-flex align-items-center justify-content-between">
                     <span>Total:</span>
                     <span>$84.00</span>
                  </div>
                  <h5>Payment Method</h5>
                  <div class="d-flex Payment">
                     <input type="radio" name="Payment" id="Cash" checked>
                     <label for="Cash">Cash on Delivery</label>
                  </div>
                  <div class="d-flex Payment">
                     <input type="radio" name="Payment" id="Paypal">
                     <label for="Paypal">Paypal</label>
                  </div>
                  <div class="d-flex Payment">
                     <input type="radio" name="Payment" id="amazonPay">
                     <label for="amazonPay">Amazon Pay</label>
                  </div>
                  <button type="button">Place Order</button>
               </div>
            </div>
         </div>
      </div>
   </main>

   <?php require('footer.php') ?>

   <script src=" ./assets/js/bootstrap.bundle.min.js"></script>
   <script src="./assets/js/jquery-3.7.1.min.js"></script>
   <script src="./assets/js/main.js"></script>
</body>

</html>