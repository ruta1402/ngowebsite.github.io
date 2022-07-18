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
  <title>Signup</title>



  <script type="text/javascript" src="jsvalidate.js"></script>
</head>

<body>

  <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img src="ngo.png" alt="" width="40" height="40"
          class="d-inline-block align-text-top"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto ">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Events</a>
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
        <a href="login.html"><button onclick=validate()  class="btn btn-primary ms-lg-3"><img src="login.png" width="30" height="30">Login/Signup</button></a>
      </div>
    </div>
  </nav>

  <!---main-->

  <div class="main vh-100 d-flex align-items-center ">
    <div class="container d-grid ">
      <div class="row">
        <h3 class="text-white bold">SIGNUP</h3>
        <div class="col">

          <form action="sign.php"  method="POST">
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
            <hr>
            <input type="text"  id="username" name="username" class="form-control" placeholder="Username" required>
            <span class="error" id="email_error"></span>
            <br>
            <input type="password" id="password"  name="password" class="form-control" placeholder="Password" required>
            <br>
            <input type="password"  id="confpassword" name="confpassword"  class="form-control" placeholder="Confirm Password" required>
            <br>
            <div class="col-md-4 d-grid">
            <input type="submit"  id="submit" class="submit btn-primary">
            <!--<a href="#"><button class="submit btn-primary" return onclick="validate()"><img src="login.png" width="20" height="20">Signup</button></a>-->
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>



</body>

</html>