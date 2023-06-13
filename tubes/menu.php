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

   <!--link font awesome cdn   -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!--link  css file  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>

<!--Mulai header   -->

<section class="header">

   <a href="home.php" class="logo"> Travel id</a>

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



<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(image/gambar\ 1.jpg) no-repeat">
            <div class="content">
               <h3>Raja Ampat Papua</h3>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(image/gambar\ 2.jpg) no-repeat">
            <div class="content">
               <span>Berpetualang Dengan Kami</span>
               <h3>Bunaken, Sulawesi Utara</h3>
               <a href="package.php" class="btn">Petualangan Berikutnya</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(image/gambar\ 4.jpg) no-repeat">
            <div class="content">
               <span>Berpetualang Dengan Kami</span>
               <h3>Pulau Nias, Sumatera Utara</h3>
               <a href="package.php" class="btn">Kunjungan Berikutnya</a>
            </div>
         </div>

      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>



<!-- Mulai services  -->

<section class="services">

   <h1 class="heading-title">Pelayanan Kami</h1>

   <div class="box-container">

      <div class="box">
         <img src="image/icon-1.png" alt="">
         <h3>Petualangan</h3>
      </div>

      <div class="box">
         <img src="image/icon-2.png" alt="">
         <h3>Pemandu Wisata</h3>
      </div>

      <div class="box">
         <img src="image/icon-3.png" alt="">
         <h3>Antar Jemput</h3>
      </div>

      <div class="box">
         <img src="image/icon-5.png" alt="">
         <h3>Pemandu</h3>
      </div>

      <div class="box">
         <img src="image/icon-6.png" alt="">
         <h3>Perkemahan</h3>
      </div>

   </div>

</section>

<!-- Mulai home   -->

<section class="home-about">

   <div class="image">
      <img src="image/gambar 5.jpg" alt="">
   </div>

   <div class="content">
      <h3>Tanah Toraja</h3>
      <p>Tana Toraja adalah salah satu kabupaten yang berada di provinsi Sulawesi Selatan, Indonesia. Ibu kota dari kabupaten ini ada di kecamatan Makale. </p>
      <a href="about.php" class="btn">Lihat Semua</a>
   </div>

</section>
<!-- Mulai home packages  -->

<section class="home-packages">

   <h1 class="heading-title"> Semua Wisata </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="image/gambar 6.jpg" alt="">
         </div>
         <div class="content">
            <h3>Keraton Jogja</h3>
            <p>Keraton Ngayogyakarta Hadiningrat atau Keraton Yogyakarta merupakan istana resmi Kesultanan Ngayogyakarta Hadiningrat yang kini berlokasi di Kota Yogyakarta.</p>
            <a href="book.php" class="btn">PesanSekarang</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="image/gambar 7.jpg" alt="">
         </div>
         <div class="content">
            <h3>Sri Wedari Solo</h3>
            <p>Taman Sriwedari adalah sebuah kompleks taman yang terletak di Kecamatan Laweyan, Kota Surakarta. Sejak era Pakubuwana X, Taman Sriwedari menjadi tempat diselenggarakannya tradisi hiburan Malam Selikuran</p>
            <a href="book.php" class="btn">Pesan Sekarang</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="image/gambar 8.jpeg" alt="">
         </div>
         <div class="content">
            <h3>Kota Solo</h3>
            <p>Kota Surakarta atau Solo adalah kota di Jawa Tengah, Indonesia, dengan penduduk 522.364 jiwa, kepadatan 11.861,00/km², dan luas 44,04 km².</p>
            <a href="book.php" class="btn">Pesan Sekarang</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="package.php" class="btn">Lihat Semua</a> </div>

</section>

<!-- Mulai home offer  -->

<section class="home-offer">
   <div class="content">
      <h3>Tungu Apalagi</h3>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure tempora assumenda, debitis aliquid nesciunt maiores quas! Magni cumque quaerat saepe!</p>
      <a href="book.php" class="btn"> Pesan Sekarang</a>
   </div>
</section>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="script.js"></script>

</body>
</html>
