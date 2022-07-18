<?php
session_start();
?>
<!doctype html>

<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <link rel="stylesheet" href="style.css">
  <title>Donate</title>

</head>

<body>

  <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="home.php"><img src="ngo.png" alt="" width="40" height="40"
          class="d-inline-block align-text-top"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto ">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="events.php">Events</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Programs
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Solid Waste Management</a></li>
              <li><a class="dropdown-item" href="#">Road Safety</a></li>
              <li><a class="dropdown-item" href="#">Paper Recycling</a></li>
              <li><a class="dropdown-item" href="#">Bio Medical Waste Management</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aboutuslogged.php">About Us</a>
          </li>
        </ul>
        <a href="userprofile.php">
        <?php 
        
            echo "<h5 class='text-black'>".$_SESSION['username']."</h5>";
          ?></a>
      </div>
    </div>
  </nav>

  
    <section id="section">
      <div class="container">
        <div class="row">
          <div class="col md-8">
            
            
          <div class="row">
            <div class="col-lg-5 col-sm-6">
              <div class="pic1  card-effect">
              <div class="images">
                <a href="donatemoneylogged.php"><image class="img img-comment-detail" src="kindness.png" height="300px" width="300px"></image></a>
              </div>
                <h3>Donate money</h3>

              </div>
            </div>
            <div class="col-lg-5 col-sm-6">
              <div class="pic1  card-effect">
              <div class="images">
                <a href="donatethingslogged.php"><image class="img img-comment-detail" src="box.png" height="300px" width="300px"></image></a>
              </div>
                <h3>Donate things</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>

</html>