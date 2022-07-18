<?php 
session_start();
$_SESSION['name']="";
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
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="style.css">
    <title>Donate</title>

</head>

<body>

    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="ngo.png" alt="" width="40" height="40"
                    class="d-inline-block align-text-top"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="events.php">Events</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
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
                <a href="login.php"><button class="btn btn-primary ms-lg-3"><img src="login.png" width="30"
                            height="30">Login/Signup</button></a>
            </div>
        </div>
    </nav>



    <section>
        <div class="container">
            <div class="row">
                <div class="col md-8">
                    <h3 style="align:center;">
                        Donate reusable items.
                        We make sure your donations reach someone who
                        really requires them by delivering them to the beneficiaries directly
                        Keep your unwanted belongings out of landfill by
                        giving them a new life and getting them in hands of someone who really requires them.
                    </h3>
                </div>
            </div>
            <br>
            <div class="row">

                <div class="container">
                    <div class="row height d-flex justify-content-center align-items-center">

                        <form action="search.php" method="POST">
                            <input type="text" name="name" class="form-control" placeholder="Search for nearest location">
                            
                            <center>
                                <input type="submit" value="Search" class="btn btn-primary">
                            </center>
                        </form>


                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <center>
                    <h3>OR</h3>
                    <h5>Drop of at any of these locations</h5>
                </center>

            </div>
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <div class="pic1  card-effect">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3767.6852982701776!2d72.95575055058066!3d19.20894288694803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b9728b647927%3A0x7b5759e4d3a54a4a!2sKores%20Towers%20Devpriya!5e0!3m2!1sen!2sin!4v1651470480710!5m2!1sen!2sin" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      <br>Thane
                    </div>
                </div>
                <div class="col-lg-5 col-sm-6">
                    <div class="pic1  card-effect">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3768.504890267043!2d72.95050755058017!3d19.173137986968573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b8fa0f6fc1e3%3A0xa2589797e3f3b445!2sKonark%20Darshan%2C%2053%2C%20Zaver%20Rd%2C%20Vidya%20Vihar%2C%20Mulund%20West%2C%20Mumbai%2C%20Maharashtra%20400080!5e0!3m2!1sen!2sin!4v1651470515692!5m2!1sen!2sin" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      <br>Mulund
                    </div>
                </div>
                
                <div class="col-lg-5 col-sm-6">
                    <div class="pic1  card-effect">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.7777383742914!2d72.8973512505786!3d19.073507387026027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c627a20bcaa9%3A0xb2fd3bcfeac0052a!2sK.%20J.%20Somaiya%20College%20of%20Engineering!5e0!3m2!1sen!2sin!4v1651470556765!5m2!1sen!2sin" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      <br>Ghatkopar
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>