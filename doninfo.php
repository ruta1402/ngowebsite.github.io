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
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="style.css">

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <title>Admin</title>

</head>

<body>

    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="homelogged.php"><img src="ngo.png" alt="" width="40" height="40"
                    class="d-inline-block align-text-top"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
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
                <a href="admin.php">
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
                    <center>
                        <h1>DONATIONS</h1>
                    </center>
                </div>
            </div>
            <div class="row">
                    <div class="col-lg-4 col-sm-6">
                          <div class="pic1  card-effect">

                                          <h6>Total Donation</h6><br>
                                          <h3>
                                              <?php

                                  $servername = "localhost";
                                  $username = "root"; //default user name is root
                                  $password = ""; //default password is blank
                                  $dbname="ngodatabase";


                                  $conn = mysqli_connect($servername, $username, $password,$dbname);

                                  $sql1="SELECT SUM(amount) FROM donates";

                                  $result=mysqli_query($conn,$sql1);


                                  $row = mysqli_fetch_array($result);
                                  echo "Rs. ".$row[0];


                              ?>
                              </h3>
                          </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="pic1  card-effect">

                                      <h6>Most Preferred Mode of Payment</h6><br>
                                      <h3>
                                          <?php

                              $servername = "localhost";
                              $username = "root"; //default user name is root
                              $password = ""; //default password is blank
                              $dbname="ngodatabase";


                              $conn = mysqli_connect($servername, $username, $password,$dbname);

                              $sql1="SELECT mode,count(don_id) FROM donates GROUP BY mode;";

                              $result=mysqli_query($conn,$sql1);


                              $row = mysqli_fetch_array($result);
                              $max=0;$mode;
                              while($row = mysqli_fetch_array($result))
                              {
                                  if($max<$row[1])
                                  {
                                      $max=$row[1];
                                      $mode=$row[0];
                                  }
                              }
                              echo $mode;


                          ?>
                                      </h3>

                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="pic1  card-effect">

                                        <h6>Highest Donor</h6>
                                        <h3>
                                            <?php

                                $servername = "localhost";
                                $username = "root"; //default user name is root
                                $password = ""; //default password is blank
                                $dbname="ngodatabase";


                                $conn = mysqli_connect($servername, $username, $password,$dbname);

                                $sql1="SELECT MAX(amount),d_user_id FROM donates";

                                $result=mysqli_query($conn,$sql1);


                                $row = mysqli_fetch_array($result);
                                $id=$row[1];
                                echo "Rs. ".$row[0];

                                $sql2="SELECT * FROM users WHERE user_id='$id'";
                                $result2=mysqli_query($conn,$sql2);
                                $row2 = mysqli_fetch_array($result2);
                                echo "<br>".$row2['f_name']." ".$row2['l_name'];

                            ?>
                                        </h3>
                        </div>
                    </div>
                    
            </div>
            <br>
            <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="pic1  card-effect">
                                <div class="box">
                                    <div class="percent">
                                        <svg>
                                            <circle cx=70 cy=70 r=70></circle>
                                            <circle cx=70 cy=70 r=70></circle>
                                        </svg>
                                        <div class="number">
                                                                  <h2>
                                                                      <?php 
                                              $servername = "localhost";
                                              $username = "root"; //default user name is root
                                              $password = ""; //default password is blank
                                              $dbname="ngodatabase";
                                              
                                              
                                              $conn = mysqli_connect($servername, $username, $password,$dbname);

                                              $sql1="SELECT SUM(amount) FROM donates";
                                              $result=mysqli_query($conn,$sql1);
                                              $row = mysqli_fetch_array($result);
                                              $per=($row[0]/100000)*100;
                                              echo "$per % ";


                                            
                                            ?>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <h6>Donation goal of 2022 acheived<h6>
                            </div>
                        </div>
                        
                        <div class="col-lg-8 col-sm-6">
                            <div class="pic1  card-effect">
                                              <?php 
                                $servername = "localhost";
                                $username = "root"; //default user name is root
                                $password = ""; //default password is blank
                                $dbname="ngodatabase";


                                $conn = mysqli_connect($servername, $username, $password,$dbname);

                                
                                
                                $query = $conn->query("
                                  SELECT 
                                    mode as monthname,
                                      COUNT(don_id) as amount
                                  FROM donates
                                  GROUP BY mode
                                ");

                                foreach($query as $data)
                                {
                                  $month[] = $data['monthname'];
                                  $amount[] = $data['amount'];
                                }

                              ?>


                                <div style="width: 500px;">
                                    <canvas id="myChart"></canvas>
                                </div>

                                <script>
                                // === include 'setup' then 'config' above ===
                                const labels = <?php echo json_encode($month) ?>;
                                const data = {
                                    labels: labels,
                                    datasets: [{
                                        label: 'Modes of Payment',
                                        data: <?php echo json_encode($amount) ?>,
                                        backgroundColor: [
                                            'rgba(255, 99, 132, 0.2)',
                                            'rgba(255, 159, 64, 0.2)',
                                            'rgba(255, 205, 86, 0.2)',
                                            'rgba(75, 192, 192, 0.2)',
                                            'rgba(54, 162, 235, 0.2)',
                                            'rgba(153, 102, 255, 0.2)',
                                            'rgba(201, 203, 207, 0.2)'
                                        ],
                                        borderColor: [
                                            'rgb(255, 99, 132)',
                                            'rgb(255, 159, 64)',
                                            'rgb(255, 205, 86)',
                                            'rgb(75, 192, 192)',
                                            'rgb(54, 162, 235)',
                                            'rgb(153, 102, 255)',
                                            'rgb(201, 203, 207)'
                                        ],
                                        borderWidth: 1
                                    }]
                                };

                                const config = {
                                    type: 'bar',
                                    data: data,
                                    options: {
                                        scales: {
                                            y: {
                                                beginAtZero: true
                                            }
                                        }
                                    },
                                };

                                var myChart = new Chart(
                                    document.getElementById('myChart'),
                                    config
                                );
                                </script>
                            </div>
                        </div>


                    </div>

             




        </div>
    </section>



</body>

</html>