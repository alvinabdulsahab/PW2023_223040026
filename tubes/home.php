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
   <title>Wisata</title>


   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- link font awesome cdn   -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


   <link rel="stylesheet" href="style.css">

</head>
<body>

<!-- Mulai header  -->

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

<!-- Mulai home   -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(image/gambar\ 10.jpg) no-repeat">
            <div class="content">
               <h3>SURABAYA, JAWA TIMUR</h3>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(image/gambar\ 11.jpg) no-repeat">
            <div class="content">
               <span>Keindahan Kota Di Indonesia</span>
               <h3>KOTA JAKARTA, INDONESIA</h3>
               <a href="package.php" class="btn">Petualangan Berikutnya</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(image/gambar\ 12.jpg) no-repeat">
            <div class="content">
               <span>Keindahan Kota Di Indonesia</span>
               <h3>MANADO, SULAWESI UTARA</h3>
               <a href="package.php" class="btn">Petualangan Berikutnya</a>
            </div>
         </div>
         <div class="swiper-slide slide" style="background:url(image/gambar\ 4.jpg) no-repeat">
            <div class="content">
               <span>Keindahan Kota Di Indonesia</span>
               <h3>PULAU NIAS, SUMATERA UTARA</h3>
               <a href="package.php" class="btn">Petualangan Berikutnya</a>
            </div>
         </div>

      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!--Mulai home packages  -->

<section class="home-packages">

   <h1 class="heading-title"> PESONA INDONESIA</h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="image/gambar 1.jpg" alt="">
         </div>
         <div class="content">
            <h3>Raja Ampat Papua</h3>
            <p>Raja Ampat adalah gugusan kepulauan yang berlokasi di barat bagian Semenanjung Kepala Burung Pulau Papua. </p>
            <a href="book.php" class="btn">Pesan Sekarang</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="image/gambar 14.jpg" alt="">
         </div>
         <div class="content">
            <h3>Pantai Sumba, NTT</h3>
            <p>Sumba merupakan sebuah pulau yang terletak di bagian Nusa Tenggara Timur.</p>
            <a href="book.php" class="btn">Pesan Sekarang</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="image/gambar 2.jpg" alt="">
         </div>
         <div class="content">
            <h3>Bunaken, Sulawesi Utara</h3>
            <p>Bunaken adalah sebuah pulau seluas 8,08 km² di Teluk Manado, yang terletak di utara pulau Sulawesi, Indonesia.</p>
            <a href="book.php" class="btn">Pesan Sekarang</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="#" class="btn">Lihat Berikutnya</a> </div>

</section>

<!--  Mulai home  -->

<section class="home-offer">
   <div class="content">
      <h3>Tunggu Apalagi</h3>
      <p>pergi wisata bersama kami di travel id rencanakan liburan anda dan nyatakan bersama keluarga</p>
      <a href="book.php" class="btn">Pesan Sekarang</a>
   </div>
</section>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="script.js"></script>

</body>
</html>
