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
  <title>About Us</title>

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
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
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
            <a class="nav-link active" href="aboutus.html">About Us</a>
          </li>
        </ul>
        <a href="userprofile.php">
        <?php 
        
            echo "<h5 class='text-black'>".$_SESSION['username']."</h5>";
          ?></a>
      </div>
    </div>
  </nav>

  <section id="about">
      <div class="container">
          <div class="row mb-5">
              <div class="col-md-8 mx-auto ">
                  <h4 class="text-primary">ABOUT US</h4>
                  <h3>We are a group of likeminded people who have come together to undo the relentless abuse caused to the planet by humans. 
                    Why do we have to travel out of the city to enjoy fresh air and serene surroundings?
                    <br>We are aiming to make our cities more sustainble in line with the United Nation's Sustainable Goal 11.</h3>
              </div>
              <div class="col-md mx-auto">
                  <img src="aboutusgif.gif" height="300" width="300">
              </div>
          </div>
      </div>

 

  
    <div class="container">
      <div class="row">
        <div class="col ">
          <h4 class="text-primary">CONTACT US</h4>
          <h5>
            Address : Kores Towers, Vartak Nagar,<br> Thane(West) - 400606<br>
            Phone : 022-27836492<br>
            Email : <a href="mailto:xyz@gmail.com">xyz@gmail.com</a>

          </h5>  
        </div>
        <div class="col md-8"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1923.521692450544!2d72.95778422355616!3d19.209039481802908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1643270638778!5m2!1sen!2sin" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        </div>
    </div>
  </section>




</body>

</html>