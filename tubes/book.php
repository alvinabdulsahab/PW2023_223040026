<?php
require('function.php');

if(!isset($_SESSION['login'])){
   header("Location: login.php");
} 

if(isset($_POST['submit'])){
   $conn = koneksi();

   if (book($_POST) > 0) {
      echo "<script>
              alert('Berhasil Booking Travel!');
              document.location.href = 'home.php';        
      </script>";
   } else {
      echo "<script>
              alert('Gagal Booking Travel!');
              document.location.href = 'home.php';        
      </script>";
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Pesanan</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!--  css file  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>

<!-- Mulai header   -->

<section class="header">

   <a href="home.php" class="logo">Murah Senyum Travel</a>

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

<!-- Mulai Heading -->
<div class="heading" style="background:url(image/gambar\ 11.jpg) no-repeat">
   <h1>JAKARTA</h1>
</div>

<!-- Mulai Pesanan  -->

<section class="booking">

   <h1 class="heading-title">CEPAT PESAN SEKARANG!</h1>

   <form action="" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>Nama:</span>
            <input type="hidden" name="user_id" value="<?= $_SESSION['login']['id'] ?>">
            <input type="text" placeholder="Masukan  Nama Anda" name="name" value="<?= $_SESSION['login']['name'] ?>" required>
         </div>
         <div class="inputBox">
            <span>Email :</span>
            <input type="email" placeholder="Masukan Email Anda" name="email" value="<?= $_SESSION['login']['email'] ?>" required>
         </div>
         <div class="inputBox">
            <span>Handphone :</span>
            <input type="number" placeholder="Masukan Nomor Anda" name="phone_number" value="<?= $_SESSION['login']['phone_number'] ?>" required>
         </div>
         <div class="inputBox">
            <span>Alamat:</span>
            <input type="text" placeholder="Masukan Alamat Anda" name="address" value="<?= $_SESSION['login']['address'] ?>" required>
         </div>
         <div class="inputBox">
            <span>Tujuan:</span>
            <input type="text" placeholder="Masukan Tujuan Anda" name="purpose" required>
         </div>
         <div class="inputBox">
            <span>Berapa Orang:</span>
            <input type="number" placeholder="Jumlah Orang" name="quantity_people" required>
         </div>
         <div class="inputBox">
            <span>Perjalanan :</span>
            <input type="date" name="travel_date" required>
         </div>
         <div class="inputBox">
            <span>Kembali:</span>
            <input type="date" name="return_date" required>
         </div>
      </div>

      <input type="submit" value="Kirim" class="btn" name="submit">

   </form>

</section>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="script.js"></script>

</body>
</html>
