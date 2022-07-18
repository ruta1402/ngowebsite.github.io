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
  <title>Home</title>

</head>

<body>

  <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="homelogged.php"><img src="ngo.png" alt="" width="40" height="40"
          class="d-inline-block align-text-top"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto ">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="homelogged.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="eventslogged.php">Events</a>
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

  <!---main-->

  <div class="main vh-100 d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <h1 class="display-4 text-white my-4">
            To make cities inclusive, safe, resilient and sustainable
          </h1>
          <a href="donatelogged.php" class="btn btn-primary">Donate<img src="kindness.png" width="30" height="30"></a>
        </div>
      </div>
    </div>
  </div>

  <section id="section">
    <div class="container">
      <div class="row">
        <div class="col md-8">
          <center><h6 >NGO focuses on improving civic issues of the city through citizen engagement</h6>
          <h1>PROGRAMS</h1>  </center>
        </div>
        <div class="row">
          <div class="col-lg-4 col-sm-6">
            <div class="pic1  card-effect">
              <div class="images">
                <image class="img img-comment-detail" src="pic1.png" height="300px" width="300px"></image>
              </div>
              <h5>Solid Waste Management</h5>
            </div>
            </div>
            <div class="col-lg-4 col-sm-6">
              <div class="pic1  card-effect">
                <div class="images">
                  <image class="img img-comment-detail" src="pic2.png" height="300px" width="300px"></image>
                </div>
                <h5>Paper Recycling</h5>
              </div>
              </div>
              <div class="col-lg-4 col-sm-6">
                <div class="pic1  card-effect">
                  <div class="images">
                    <image class="img img-comment-detail" src="pic3.png" height="300px" width="300px"></image>
                  </div>
                  <h5>Road Safety</h5>
                </div>
                </div>
        </div>
        
      </div>
    </div>
  </section>

  <footer class="footer">
    <div class="footcontainer">
      <div class="row">
        <div class="footer-col">
          <h4>Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>About Us</h4>
          <ul>
            <li><a href="#">Home</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Contact us</h4>
          <ul>
            <li><a href="#">Home</a></li>
          </ul>
        </div>

      </div>

  </div>
  </footer>

</body>

</html>