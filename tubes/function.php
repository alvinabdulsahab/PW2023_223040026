<?php

session_start();

function koneksi()
{
  $conn = mysqli_connect('localhost', 'root', '', 'travel') or die();

  return $conn;
}

function dd($value)
{
  echo "<pre>";
  var_dump($value);
  die;
  echo "</pre>";
}

function query($query)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function book($data)
{
  $conn = koneksi();

  $user_id = htmlspecialchars($data['user_id']);
  $name = htmlspecialchars($data['name']);
  $email = htmlspecialchars($data['email']);
  $phone_number = htmlspecialchars($data['phone_number']);
  $address = htmlspecialchars($data['address']);
  
  $purpose = htmlspecialchars($data['purpose']);
  $quantity_people = htmlspecialchars($data['quantity_people']);
  $travel_date = htmlspecialchars($data['travel_date']);
  $return_date = htmlspecialchars($data['return_date']);

  $queryUser = "UPDATE users SET
    name = '$name',
    email = '$email',
    phone_number = '$phone_number',
    address = '$address'
    WHERE id = '$user_id'";

    mysqli_query($conn, $queryUser) or die(mysqli_error($conn));

    $user = query("SELECT * FROM users WHERE id = '$user_id'")[0];
    $_SESSION['login'] = $user;

  $queryBook = "INSERT INTO bookings (user_id, purpose, quantity_people, travel_date, return_date)
    VALUES ('$user_id', '$purpose','$quantity_people','$travel_date','$return_date')";

  mysqli_query($conn, $queryBook) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}