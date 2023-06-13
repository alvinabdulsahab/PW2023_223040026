<?php
require('function.php');

if(!isset($_SESSION['login'])){
   header("Location: login.php");
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Perjalanan</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>

<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">Travel id</a>

   <nav class="navbar">
      <a href="home.php">Home</a>
      <a href="menu.php">Wisata</a>
      <a href="about.php">Perjalanan</a>
      <a href="package.php">Paket</a>
      <?php if(isset($_SESSION['login'])): ?>
         <?php if($_SESSION['login']['level'] == 'Admin'): ?>
         <a href="booking.php">Booking</a>
         <?php endif;?>
      <a href="logout.php">Logout</a>
      <?php else: ?>
      <a href="login.php">Login</a>
      <a href="register.php">Register</a>
      <?php endif; ?>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(image/gambar\ 3.jpg) no-repeat">
   <h1>Pulau Komodo</h1>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="image">
      <img src="image/gambar 21.jpg" alt="">
   </div>

   <div class="content">
      <h3>Mari Berpetualang Bersama kami</h3>
      <p>pergi wisata bersama kami di travel id rencanakan liburan anda dan nyatakan bersama keluarga</p>

      <div class="icons-container">
         <div class="icons">
            <i class="fas fa-map"></i>
            <span>Tempat Terbaik</span>
         </div>
         <div class="icons">
            <i class="fas fa-hand-holding-usd"></i>
            <span>Daftar harga</span>
         </div>
         <div class="icons">
            <i class="fas fa-headset"></i>
            <span>Customer service</span>
         </div>
      </div>
   </div>

</section>

<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading-title"> Komentar Pelanggan </h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Senang sekali Pesan disini, Ramah.</p>
            <h3>Susan Lee</h3>
            <span>Akuntan</span>
            <img src="image/foto.jpg" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Pelayanannya Mantap ?</p>
            <h3>Susan Lee</h3>
            <span>Sekretaris</span>
            <img src="image/foto 2.jpg" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Senang Sekali!</p>
            <h3>Soo Min </h3>
            <span>Artis</span>
            <img src="image/foto 3.jpg" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Senang bisa pesan disini</p>
            <h3>Lisa Wang</h3>
            <span>Desain</span>
            <img src="image/foto.jpg" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
            </div>
            <p>Senang Bisa Berkunjung?</p>
            <h3>Miryam Chung</h3>
            <span>Sekretaris</span>
            <img src="image/foto1.jpg" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Bagus Pelayanannya?</p>
            <h3>Susan Lee</h3>
            <span>Akuntan</span>
            <img src="image/foto 2.jpg" alt="">
         </div>

      </div>

   </div>

</section>
<!-- reviews section ends -->

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>
