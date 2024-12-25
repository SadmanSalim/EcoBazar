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
   <link rel="stylesheet" href="./assets/css/contact.css">
   <link rel="stylesheet" href="./assets/css/registerRasponsiv.css">
   <link rel="stylesheet" href="./assets/css/responsive.css">
</head>

<body>
<?php require('header.php') ?>



    <!-- *Main Part  START HERE -->
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
                 <a href="#" class="active">Contact Us</a>
              </li>
           </ul>
        </div>
     </section>
     <!-- *Breadcrumbs End Hear -->


    <!-- *Details fill Section start -->
     <section id="details">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12 leftSide">
                    <div class="row">
                        <div class="col-12">
                            <div class="cntBox text-center">
                                <img class="img-fluid" src="./assets/img/Map Pin.png" alt="">
                                <p>2715 Ash Dr. San Jose, South Dakota 83475</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="cntBox text-center">
                                <img class="img-fluid" src="./assets/img/Email.png" alt="">
                                <a href="mailto:ecobazar@gmail.com" target="_blank">
                                   <p>Proxy@gmail.com
                                       Help.proxy@gmail.com</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="cntBox text-center">
                                <img class="img-fluid" src="./assets/img/PhoneCall.png" alt="">
                                <a href="tel:2195550114">
                                   <p>(219) 555-0114</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-12 rightSide">
                    <div class="formCnt">
                        <div class="formd">
                            <h4>Just Say Hello!</h4>
                            <p>Do you fancy saying hi to me or you want to get started with your project and you need my help? Feel free to contact me.</p>
                            <form action="">
                                <div class="d-flex">
                                    <input type="text" placeholder="Full Name">
                                    <input type="email" placeholder="youremail@gmail.com">
                                </div>
                                <input class="sub" type="text" placeholder="Subject">
                                <textarea name="" id="" placeholder="Message"></textarea>
                                <button>Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
     <!-- *Details fill Section end -->


      <!-- *Map Section start -->
     <section id="Map">
         <div class="container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.8700197525127!2d91.83677857434643!3d22.35853624078379!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ad277ab0cff8a7%3A0x13eb8ccef8a22dde!2sCreative%20IT%20Institute%2C%20Chattogram%20Branch!5e0!3m2!1sen!2sbd!4v1733474173038!5m2!1sen!2sbd" width="100%" height="400px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>
     </section>
     <!-- *Map Section end -->
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
    
   <!-- *Main Part  START HERE -->

   <?php require('footer.php') ?>

   <script src="./assets/js/bootstrap.bundle.min.js"></script>
   <script src="./assets/js/jquery-3.7.1.min.js"></script>
   <script src="./assets/js/shop.js"></script>

   </body>
   </html>