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
    



  <title>User Info</title>

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
        <a href="admin.php">
        <?php 
        
            echo "<h5 class='text-black'>".$_SESSION['username']."</h5>";
          ?></a>
      </div>
    </div>
  </nav>
  
    
    
    <div class="container d-grid ">
      <div class="row">
        <h3 class="text-white bold">Add New User</h3>
        <div class="col">

          <form action="admininsert.php"  method="POST">
            <input type="text"  id="fname" name="fname" class="form-control" placeholder="First Name" required>
            <span class="error" id="fname_error"></span>
            <br>
            <input type="text"  id="lname" name="lname" class="form-control" placeholder="Last Name">
            <span class="error" id="lname_error"></span>
            <br>
            <input type="text"  id="mobile" name="mobile" class="form-control" placeholder="+91 Mobile" required>
            <span class="error" id="mobile_error"></span>
            <br>
            <input type="text"  id="email" name="email" class="form-control" placeholder="Email" required>
            <span class="error" id="email_error"></span>
          </div>
          <div class="col">
            <input type="text"  id="username" name="username" class="form-control" placeholder="Username" required>
            <span class="error" id="email_error"></span>
            <br>
            <input type="password" id="password"  name="password" class="form-control" placeholder="Password" required>
            <br>
            <input type="password"  id="confpassword" name="confpassword"  class="form-control" placeholder="Confirm Password" required>
            <br>
            <div class="col-md-4 d-grid">
            <input type="submit"  id="submit" value="Insert" class="submit btn-primary">
            <!--<a href="#"><button class="submit btn-primary" return onclick="validate()"><img src="login.png" width="20" height="20">Signup</button></a>-->
            </div>
          </form>
        </div>
        <div class="col">
          <h3 class="text-white bold">Delete User?</h3>
          <br>
          <h6 class=" bold">Enter User ID of <br>the user to delete -</h6>

          <form action="deleteuser.php"  method="POST">
            <input type="text"  id="uid" name="uid" class="form-control" placeholder="User ID to delete" required>
            
            <br>
            <div class="col-md-4 d-grid">
            <input type="submit"  id="submit" value="Delete" class="submit btn-primary">
            <!--<a href="#"><button class="submit btn-primary" return onclick="validate()"><img src="login.png" width="20" height="20">Signup</button></a>-->
            </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  

 
 


    
      
        


  
    <table class="table">
  <thead>
    <tr>
      <h6>
      <th scope="col" style="width:25%;">ID</th>
      <th scope="col" style="width:25%;">NAME</th>
      <th scope="col" style="width:25%;">USERNAME</th>
      <th scope="col" style="width:25%;">CONTACT</th>
      </h6>
    </tr>
  </thead>
  <tbody>
      <?php

        $servername = "localhost";
        $username = "root"; //default user name is root
        $password = ""; //default password is blank
        $dbname="ngodatabase";


        $conn = mysqli_connect($servername, $username, $password,$dbname);

        $sql1="SELECT * FROM users";

        $result=mysqli_query($conn,$sql1);


        while($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>".$row['user_id']."</td>";
            echo "<td>". $row['f_name']." ".$row['l_name']."</td>";
            echo "<td>".$row['user_name']."</td>";
            echo "<td>".$row['contact']."</td>";
            echo "</tr>";    
        }


      ?>
    
  </tbody>
</table>    

  
    

</body>

</html>