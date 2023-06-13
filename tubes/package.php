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
   <title>Paket</title>


   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- link font awesome cdn  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- link  css file   -->
   <link rel="stylesheet" href="style.css">

</head>
<body>

<!-- Mulai header   -->

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

<!-- Mulai Heading-->

<div class="heading" style="background:url(image/gambar\ 10.jpg) no-repeat">
   <h1>WISATA INDONESIA</h1>
</div>

<!-- Mulai Paket  -->

<section class="packages">

   <h1 class="heading-title">TEMPAT POPULER</h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="image/gambar 13.png" alt="">
         </div>
         <div class="content">
            <h3> Pantai Lombok, Nusa Tenggara Barat </h3>
            <p>Pantai Kuta Lombok adalah tempat wisata di Desa Kuta, Kecamatan Pujut, Kabupaten Lombok Tengah, Nusa Tenggara Barat, Indonesia. Pantai ini memiliki garis pantai sepanjang 7,2 Kilometer.</p>
            <a href="book.php" class="btn">Pesan Sekarang</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="image/gambar 14.jpg" alt="">
         </div>
         <div class="content">
            <h3>Pantai Sumba, Nusa Tenggara Timur</h3>
            <p>Sumba merupakan sebuah pulau yang terletak di bagian Nusa Tenggara Timur.</p>
            <a href="book.php" class="btn">Pesan Sekarang</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="image/gambar 9.jpg" alt="">
         </div>
         <div class="content">
            <h3>Pantai Kendari, Sulawesi Tenggara</h3>
            <p>Pantai Kendari, atau yang lebih dikenal dengan nama Kebi (dari "Kendari Beach"), adalah salah satu pantai terpanjang di Sulawesi Tenggara. Pantai yang merupakan bagian dari Teluk Kendari ini menawarkan keindahan sendiri bagi para turis baik lokal maupun mancanegara.</p>
            <a href="book.php" class="btn">Pesan Sekarang</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="image/gambar 15.jpg" alt="">
         </div>
         <div class="content">
            <h3>Pantai Sulawesi, Sulawesi Tengah</h3>
            <p>Pantai Talise adalah sebuah pantai yang berlokasi tidak jauh dari Kota Palu, Sulawesi Tengah. Atau lebih tepatnya di sepanjang Teluk Palu. Pantai Talise berada di sepanjang Jalan Rajamoli sampai Jalan Cut Mutia, Palu, Sulawesi Tengah. </p>
            <a href="book.php" class="btn">Pesan Sekarang</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="image/gambar 16.jpg" alt="">
         </div>
         <div class="content">
            <h3>Pantai Losari, Sulawesi Selatan</h3>
            <p>Pantai Losari Makassar adalah sebuah pantai yang terletak di sebelah barat Kota Makassar, Provinsi Sulawesi Selatan, Indonesia.</p>
            <a href="book.php" class="btn">Pesan Sekarang</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="image/gambar 17.jpg" alt="">
         </div>
         <div class="content">
            <h3>Pantai Sanur, Bali</h3>
            <p>Pantai Sanur adalah salah satu pantai wisata yang ada di pulau Bali. Pantai ini terletak persis di sebelah timur kota Denpasar, Bali. </p>
            <a href="book.php" class="btn">Pesan Sekarang</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="image/gambar 2.jpg" alt="">
         </div>
         <div class="content">
            <h3>Bunaken, Sulawesi Utara</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
            <a href="book.php" class="btn">Pesan Sekarang</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="image/gambar 5.jpg" alt="">
         </div>
         <div class="content">
            <h3>Tana Toraja, Sulawesi Selatan</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
            <a href="book.php" class="btn">Pesan Sekarang</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="image/gambar 18.jpg" alt="">
         </div>
         <div class="content">
            <h3>Pantai Mentawai, Sumatera Barat</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
            <a href="book.php" class="btn">Pesan Sekarang</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="image/gambar 19.png" alt="">
         </div>
         <div class="content">
            <h3>Pantai Nias, Sumatera Utara</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
            <a href="book.php" class="btn">Pesan Sekarang</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="image/gambar 20.jpg" alt="">
         </div>
         <div class="content">
            <h3>Pulau Cinta, Gorontalo</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
            <a href="book.php" class="btn">Pesan Sekarang</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="image/gambar 1.jpg" alt="">
         </div>
         <div class="content">
            <h3>Raja Ampat, Papua Barat</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
            <a href="book.php" class="btn">Pesan Sekarang</a>
         </div>
      </div>

   </div>

   <div class="load-more"><span class="btn">Lihat Berikutnya</span></div>

</section>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="script.js"></script>

</body>
</html>
