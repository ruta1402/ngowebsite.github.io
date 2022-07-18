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
    <script src="https://smtpjs.com/v3/smtp.js">
      
    </script>
  <link rel="stylesheet" href="style.css">
  <title>About Us</title>

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
            <a class="nav-link" aria-current="page" href="homelogged.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="eventslogged.php">Events</a>
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
            <a class="nav-link " href="aboutus.html">About Us</a>
          </li>
        </ul>
        <a href="userprofile.php">
        <?php 
                    echo "<h4 class='text-black'>".$_SESSION['username']."</h4>";
                    ?>
      </div></a>
    </div>
  </nav>
  
  <?php

$servername = "localhost";
$username = "root"; //default user name is root
$password = ""; //default password is blank
$dbname="ngodatabase";


$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql1="SELECT * FROM events WHERE done='Upcoming'";

$result=mysqli_query($conn,$sql1);
echo "<ol>";
while($row = mysqli_fetch_array($result))
{
    
    echo "<li>";
    echo "<br><h2 class='text-white'>".$row['event_id'].". ".$row['name_']."</h2>";
    echo "<br><h4 class='text-black'>".$row['description']."</h4>";
    echo "<br><h5 class='text-black'>Location : ".$row['place']."</h5>";
    echo "<br><h5 class='text-black'>Date : ".$row['dates']."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Time : ".$row['time_']."</h5>";
    echo "<a href='volunteer.php'><input type='button' class='btn btn-primary' value='Volunteer' onclick='SendEmail()'>Volunteer</a>";
    
    $_SESSION['eveid']=$row['event_id'];
    echo "</li>";
}

echo "</ol>";
        ?>
  



</body>

</html>