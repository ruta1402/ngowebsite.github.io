<?php

$servername = "localhost";
$username = "root"; //default user name is root
$password = ""; //default password is blank
$dbname="ngodatabase";


$conn = mysqli_connect($servername, $username, $password,$dbname);

$name=$_POST['name'];
$program=$_POST['program'];
$description=$_POST['description'];
$date=$_POST['date'];
$time=$_POST['time'];
$place=$_POST['place'];



$sql2="INSERT INTO events(event_id,name_,prog_id,description,dates,time_,place)
      VALUES('5','$name','$program','$description','$date','$time','$place')";





  if(preg_match( '/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/', $date))
  {
    
          $result2=mysqli_query($conn,$sql2);
        echo ("<script LANGUAGE='JavaScript'>
          window.alert('Event Created');
          window.location.href='admin.php';
          </script>");
          //header("location: login.php");
  }  
  else
  {
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Invalid date');
    window.location.href='eventinfo.php';
    </script>");
    //header("location: signup.php");
  }



?>

