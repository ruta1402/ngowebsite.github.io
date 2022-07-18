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
            <a class="nav-link" href="aboutus.html">About Us</a>
          </li>
        </ul>
        <a href="userprofile.php">
        <?php 
        
            echo "<h5 class='text-black'>".$_SESSION['username']."</h5>";
          ?></a>
      </div>
    </div>
  </nav>

  <div class="main   align-items-center ">
    <div class="container ">
      <form action="donateadd.php" method="POST">
        <br>
       
        <h5 class="text-white">Personal details</h5>
        <div class="form-row">
          <div class="col">
            <input type="text" name='uid' class="form-control" placeholder="User ID"><br>
          </div>

         
          
        </div>

        <br><h6 class="text-white">Gender :</h6>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
          <label class="form-check-label text-white" for="inlineRadio1">Male</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
          <label class="form-check-label text-white" for="inlineRadio2">Female</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
          <label class="form-check-label text-white" for="inlineRadio3">Other</label>
        </div>

        <br>
        <hr>
        <h5 class="text-white">Billing Address</h5>
        <div class="form-group">
          <label for="inputAddress" class="text-white">Address :</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="Apartment"><br>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="inputAddress2" placeholder="Street"><br>
        </div>
        <div class="form-row">
          <div class="col">
            <input type="text" class="form-control" placeholder="City"><br>
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="State"><br>
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="Zip">
          </div>
        </div>

        <br>
        <hr>
        <h5 class="text-white">Payment details</h5>

        <div class="col-auto">
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text">₹</div>
            </div>
            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Amount" name="amount">
          </div>
        </div>
        <br>
        <div class="form-row align-items-center">
          <div class="col-auto my-1">
            <label class="mr-sm-2" for="inlineFormCustomSelect">
              <h5 class="text-white">Mode of Payment</h5>
            </label>
            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="mode">
              <option selected>Select an option</option>
              <option value="Credit/Debit card">Credit/Debit card</option>
              <option value="Netbanking">Netbanking</option>
              <option value="UPI">UPI</option>
            </select>
          </div>




        </div>
        <div class="custom-control custom-checkbox my-1 mr-sm-2">
          <input type="checkbox" class="custom-control-input" id="customControlInline">
          <label class="custom-control-label text-white" for="customControlInline">Remember my preference</label>
        </div>

        <input type="submit" class="btn btn-primary"></button>
</form>
        <br>

    </div>
  </div>
</body>

</html>