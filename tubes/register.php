<?php

require('function.php');

if(isset($_SESSION['login'])){
    header("Location: home.php");
} 

if(isset($_POST['submit'])){

    $conn = koneksi();

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $password_confirm = htmlspecialchars($_POST['password_confirm']);

    $user = query("SELECT * FROM users WHERE email = '$email'");
    
    if(count($user) == 0){
        if($password == $password_confirm){
            
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users(name, email, password, level) VALUE('{$name}', '{$email}', '{$passwordHash}', 'User')";
            $query = mysqli_query($conn, $sql);
    
            echo "<script>alert('Register Berhasil!');</script>";
            echo "<meta http-equiv='refresh' content='0; url=login.php'>";
        } else {
            echo "<script>alert('Konfirmasi kata sandi salah!');</script>";
            echo "<meta http-equiv='refresh' content='0; url=register.php'>";
        }
    } else {
        echo "<script>alert('Email sudah digunakan!');</script>";
        echo "<meta http-equiv='refresh' content='0; url=register.php'>";
    }
    
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register</title>

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

   <a href="home.php" class="logo">Murah Senyum Travel</a>

   <nav class="navbar">
    <a href="home.php">Home</a>
    <a href="menu.php">Wisata</a>
    <a href="about.php">Perjalanan</a>
    <a href="package.php">Paket</a>
    <?php if(isset($_SESSION['login'])): ?>
    <a href="logout.php">Logout</a>
    <?php else: ?>
    <a href="login.php">Login</a>
    <a href="register.php">Register</a>
    <?php endif; ?>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- Mulai Pesanan  -->

<section class="booking">

   <h1 class="heading-title">BUAT AKUN BARU</h1>

   <form action="" method="post" class="book-form">

      <div class="flex">
         <div class="row">
            <div class="col-md-6 p-2">
                <div class="inputBox">
                    <span>Nama Lengkap:</span>
                    <input type="text" name="name" required placeholder="Masukkan nama lengkap">
                </div>
            </div>
            <div class="col-md-6 p-2">
                <div class="inputBox">
                    <span>Email:</span>
                    <input type="email" name="email" required placeholder="Masukkan email">
                </div>
            </div>
            <div class="col-md-6 p-2">
                <div class="inputBox">
                    <span>Kata Sandi:</span>
                    <input type="password" name="password" minlength="6" required placeholder="Masukkan kata sandi">
                </div>
            </div>
            <div class="col-md-6 p-2">
                <div class="inputBox">
                    <span>Konfirmasi Kata Sandi:</span>
                    <input type="password" name="password_confirm" required placeholder="Masukkan konfirmasi kata sandi">
                </div>
            </div>
         </div>
      </div>

      <input type="submit" value="Register" class="btn" name="submit">
      <h3 class="mt-4">Sudah punya akun? <a href="login.php">Login</a></h1>
   </form>

</section>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="script.js"></script>

</body>
</html>
