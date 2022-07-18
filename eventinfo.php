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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>



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
  
  
  <section id="section">
        <div class="container">
            <div class="row">
                <div class="col md-8">
                    <center>
                        <h1>EVENTS</h1>
                    </center>
                </div>
            </div>
            <div class="row">
                    <div class="col-lg-4 col-sm-6">
                          <div class="pic1  card-effect">

                                          <h6>Total Number of Events</h6><br>
                                          <h3>
                                              <?php

                                  $servername = "localhost";
                                  $username = "root"; //default user name is root
                                  $password = ""; //default password is blank
                                  $dbname="ngodatabase";


                                  $conn = mysqli_connect($servername, $username, $password,$dbname);

                                  $sql1="SELECT COUNT(event_id) FROM events";

                                  $result=mysqli_query($conn,$sql1);


                                  $row = mysqli_fetch_array($result);
                                  echo $row[0];


                              ?>
                              </h3>
                          </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="pic1  card-effect">

                                      <h6>Most Volunteered Event</h6><br>
                                      <h3>
                                          <?php

                              $servername = "localhost";
                              $username = "root"; //default user name is root
                              $password = ""; //default password is blank
                              $dbname="ngodatabase";


                              $conn = mysqli_connect($servername, $username, $password,$dbname);

                              $sql1="SELECT 
                              programs.title as monthname,
                              COUNT(volunteer.vol_id) as amount
                              FROM volunteer,programs
                              WHERE programs.prog_id=volunteer.prog_id
                              GROUP BY programs.title";

                              $result=mysqli_query($conn,$sql1);


                              $row = mysqli_fetch_array($result);
                              $max=0;
                              $mode="";
                              while($row =mysqli_fetch_array($result))
                              {
                                  if($max<$row['amount'])
                                  {
                                      $max=$row['amount'];
                                      $mode=$row['monthname'];
                                  }
                              }
                              echo $mode;


                          ?>
                                      </h3>

                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                          <div class="pic1  card-effect">

                                          <h6>Total Number of Volunteers</h6><br>
                                          <h3>
                                              
                                          <?php 
                                              $servername = "localhost";
                                              $username = "root"; //default user name is root
                                              $password = ""; //default password is blank
                                              $dbname="ngodatabase";
                                              
                                              
                                              $conn = mysqli_connect($servername, $username, $password,$dbname);

                                              $sql1="SELECT COUNT(vol_id) FROM volunteer";
                                              $result=mysqli_query($conn,$sql1);
                                              $row = mysqli_fetch_array($result);
                                              
                                              echo $row[0];


                                            
                                            ?>
                              </h3>
                          </div>
                    </div>
            
            </div>
            <br>
            <div class="row">
                        
                        
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
                                programs.title as monthname,
                                COUNT(events.event_id) as amount
                                FROM events,programs
                                WHERE programs.prog_id=events.prog_id
                                GROUP BY events.prog_id;
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
                                        label: 'Number of Events',
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
  


  <section>  
        <div class="container d-grid ">
        <br><br>
          <div class="row">
          
            <h3 class="text-white bold">Creat a New Event</h3>
            <div class="col">

              <form action="adminaddevent.php"  method="POST">
                <input type="text"  id="name" name="name" class="form-control" placeholder="Name" required>
                
                <br>
                <label class="mr-sm-2" for="inlineFormCustomSelect">
                  <h6 class="bold">Program</h6>
                </label>
                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="program">
                  <option selected>Select an option</option>
                  <option value="1">Solid Waste Management</option>
                  <option value="2">Road Safety</option>
                  <option value="3">Paper Recycling</option>
                </select>

                <br><br>
                
                <input type="text"  id="description" name="description" class="form-control" placeholder="Description" required>
                
                </div>
              <div class="col">

              <input type="text"  id="date" name="date" class="form-control" placeholder="Date yyyy-mm-dd" required>
                <br>

                <input type="text"  id="time" name="time" class="form-control" placeholder="Time" required>
                <br>
                <input type="text"  id="place" name="place" class="form-control" placeholder="Place" required>
                <br>
              
                <div class="col-md-4 d-grid">
                <input type="submit"  id="submit" value="Create" class="submit btn-primary">
                <!--<a href="#"><button class="submit btn-primary" return onclick="validate()"><img src="login.png" width="20" height="20">Signup</button></a>-->
                </div>
              </form>
            </div>
            <div class="col">
              <h3 class="text-white bold">Cancel Event?</h3>
              
              <h6 class=" bold">Enter Event ID of <br>the event to cancel -</h6>

              <form action="deleteevent.php"  method="POST">
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
      


    
    


        
          
            


        <br><center><h2 class="text-white">Upcoming Events</h2></center>
        <table class="table">
      <thead>
        <tr>
          <h6>
          <th scope="col" style="width:25%;">NAME</th>
          <th scope="col" style="width:25%;">DESCRIPTION</th>
          <th scope="col" style="width:25%;">PLACE</th>
          <th scope="col" style="width:25%;">DATE & TIME</th>
          
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

            $sql1="SELECT * FROM events WHERE done='Upcoming'";

            $result=mysqli_query($conn,$sql1);


            while($row = mysqli_fetch_array($result))
            {
                
                
                echo "<tr><td>".$row['name_']."</td>";
                echo "<td>".$row['description']."</td>";
                echo "<td>".$row['place']."</td>";
                echo "<td>".$row['dates']."<br>".$row['time_']."</td></tr>";
              
            }


          ?>

      </tbody>
    </table>    

      
    <center><h2 class="text-white">Past Events</h2></center>
    <table class="table">
      <thead>
        <tr>
          <h6>
          <th scope="col" style="width:25%;">NAME</th>
          <th scope="col" style="width:25%;">DESCRIPTION</th>
          <th scope="col" style="width:25%;">PLACE</th>
          <th scope="col" style="width:25%;">DATE & TIME</th>
          
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

            $sql1="SELECT * FROM events WHERE done='Past'";

            $result=mysqli_query($conn,$sql1);


            while($row = mysqli_fetch_array($result))
            {
                
                
                echo "<tr><td>".$row['name_']."</td>";
                echo "<td>".$row['description']."</td>";
                echo "<td>".$row['place']."</td>";
                echo "<td>".$row['dates']."<br>".$row['time_']."</td></tr>";
              
            }


          ?>

      </tbody>
      </table>
  </section>

    

</body>

</html>

