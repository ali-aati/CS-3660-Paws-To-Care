<?php 
//founcation for all of database, users, and session. 
include('model/functions.php');

if (!isAdmin()) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}
if (!isLoggedIn()) {
  $_SESSION['msg'] = "You must log in first";
  header('location: ../index.php');
}
?>



<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
    crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

  <title>Paws to Care</title> 
  <style type="text/css">
        th {
            cursor: pointer;
        }
    </style>
</head>
<body>

<!--Nav-->
  <nav class="navbar navbar-dark navbar-expand-md bg-dark justify-content-between">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-nav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse dual-nav w-50 order-1 order-md-0">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link pl-0" href="index.php">Home
              <span class="sr-only">Home</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dogs.php">Dogs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cats.php">Cats</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="exotics.php">Exotics</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Owners.php">Owners</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../contactus.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../aboutus.php">About Us</a>
          </li>
        </ul>
      </div>
      <a href="/" class="navbar-brand mx-auto d-block text-center order-0 order-md-1 w-25">Paws to Care</a>
      <div class="navbar-collapse collapse dual-nav w-50 order-2">
        <ul class="nav navbar-nav ml-auto">
        <li class="nav-item">
          <a href="#" class="nav-link"><?php echo $_SESSION['user']['fname']; ?></a>
        </li>
        <li class="nav-item">
          <a href="index.php?logout='1'" class="nav-link">Sign Out</a>
        </li>

          <li class="nav-item">
          <a href="#myModal" class="nav-link" data-toggle="modal"></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

