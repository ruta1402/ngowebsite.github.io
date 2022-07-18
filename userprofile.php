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
    



  <title>Admin</title>

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
            <a class="nav-link" href="aboutus.html">About Us</a>
          </li>
        </ul>
        <a href="logout.php"><button class="btn btn-primary ms-lg-3" ><img src="logout.png" width="30" height="30">Logout</button></a>

      </div>
    </div>
  </nav>

 


  <section>
      <center>
         
          <img src="images/user.png" height=100 width=100>
          <br>
          <?php 
        
            echo "<h5 class='text-dark'>Welcome ".$_SESSION['username']."</h5>";
            ?>
          
            
        
          
      </center>
</section>

<center>
    <h3 class="text-dark">My Volunteered Events</h3>
<?php

$servername = "localhost";
$username = "root"; //default user name is root
$password = ""; //default password is blank
$dbname="ngodatabase";


$conn = mysqli_connect($servername, $username, $password,$dbname);
$uname=$_SESSION['username'];
$sql1="SELECT user_id FROM users WHERE user_name='$uname'";

$result1=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_array($result1);
$uid=$row1['0'];


$sql2="SELECT * FROM volunteer WHERE user_id='$uid'";
$result2=mysqli_query($conn,$sql2);


while($row = mysqli_fetch_array($result2))
{
    $eid=$row['event_id'];
    $sql3="SELECT * FROM events WHERE event_id='$eid'";
    $result3=mysqli_query($conn,$sql3);
    $row3 = mysqli_fetch_array($result3);
    
    echo "<h6 class='text-dark'";
    echo "<br>".$row3['name_'];
    echo "<br>".$row3['dates'];
    echo "<br>".$row3['time_'];
    echo "<br>".$row3['place'];
    echo "<br><br><br>";
    
}


        ?>

</center>
    




</body>

</html>