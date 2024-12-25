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
   <link rel="stylesheet" href="./assets/css/Register.css">
   <link rel="stylesheet" href="./assets/css/registerRasponsiv.css">
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
                  <a href="#">Account</a>
                  <iconify-icon icon="formkit:right" width="15" height="15" style="color: #999"></iconify-icon>
               </li>
               <li>
                  <a href="#" class="active">Login</a>
               </li>
            </ul>
         </div>
      </section>
      <!-- *Breadcrumbs End Hear -->


      <!-- *Sign In Start Here -->
      <section id="signIn" class="signIn">
         <div class="container">
            <form action="" method="">
               <h1 class="text-center">Sign In</h1>
               <input type="email" placeholder="Email" required>
               <div class="passwordBox">
                  <input type="password" id="passwordInputSignIn" placeholder="Password" required>
                  <span class="pasToggl">
                     <iconify-icon icon="ion:eye-off-outline" width="25" height="25" style="color: #000"></iconify-icon>
                  </span>
               </div>

               <div class="d-flex justify-content-between align-items-center checkbox">
                  <label for="checkboxSignIn" class="d-flex align-items-center">
                     <input type="checkbox" id="checkboxSignIn">
                     Remember me
                  </label>
                  <a href="#" class="text-end">Forget Password</a>
               </div>
               <button class="d-inline-block">Login</button>
               <p class="text-center">Don’t have an account?
                  <a href="#" class="RegisterBtn">Register</a>
               </p>
            </form>
         </div>
      </section>
      <!-- *Sign In End Here -->

      <!-- *Register Start Here -->
      <section id="signIn" class="d-none Register">
         <div class="container">
            <form action="" method="">
               <h1 class="text-center">Create Account</h1>
               <input type="email" placeholder="Email" required>

               <div class="passwordBox">
                  <input type="password" id="passwordInputRegister" placeholder="Password" required>
                  <span class="pasToggl">
                     <iconify-icon icon="ion:eye-off-outline" width="25" height="25" style="color: #000"></iconify-icon>
                  </span>
               </div>

               <div class="passwordBox">
                  <input type="password" id="passwordInputConfirm" placeholder="Confirm Password" required>
                  <span class="pasToggl">
                     <iconify-icon icon="ion:eye-off-outline" width="25" height="25" style="color: #000"></iconify-icon>
                  </span>
               </div>

               <div class="d-flex justify-content-between align-items-center checkbox">
                  <label for="checkboxRegister" class="d-flex align-items-center">
                     <input type="checkbox" id="checkboxRegister">
                     Accept all terms & Conditions
                  </label>
               </div>

               <button class="d-inline-block">Register</button>
               <p class="text-center">Already have an account?
                  <a href="#" class="signInBtn">Sign In</a>
               </p>
            </form>
         </div>
      </section>
      <!-- *Register End Here -->

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
   <script src="./assets/js/main.js"></script>
</body>

</html>