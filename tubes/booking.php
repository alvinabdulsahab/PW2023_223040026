<?php

require('function.php');

if(!isset($_SESSION['login'])){
    header("Location: login.php");
} 

if($_SESSION['login']['level'] != 'Admin'){
    header("Location: home.php");
} 

$bookings = query("SELECT * FROM bookings LEFT JOIN users ON bookings.user_id = users.id");

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Booking</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
   <!--  css file  -->
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

<h1 class="heading-title p-4">DAFTAR BOOKING</h1>

<div class="container p-4" style="font-size: 2rem;">
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Nomor Telepon</th>
                        <th scope="col">Tujuan</th>
                        <th scope="col">Jumlah Orang</th>
                        <th scope="col">Tgl Perjalanan</th>
                        <th scope="col">Tgl Kembali</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($bookings as $key => $booking): ?>
                    <tr>
                        <th scope="row"><?= $key+1 ?></th>
                        <td><?= $booking['name'] ?></td>
                        <td><?= $booking['email'] ?></td>
                        <td><?= $booking['phone_number'] ?></td>
                        <td><?= $booking['purpose'] ?></td>
                        <td><?= $booking['quantity_people'] ?> orang</td>
                        <td><?= $booking['travel_date'] ?></td>
                        <td><?= $booking['return_date'] ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="script.js"></script>

</body>
</html>
