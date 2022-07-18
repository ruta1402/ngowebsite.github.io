<?php

$servername = "localhost";
$username = "root"; //default user name is root
$password = ""; //default password is blank
$dbname="ngodatabase";


$conn = mysqli_connect($servername, $username, $password,$dbname);

$uid=$_POST['uid'];


$sql1="SELECT COUNT(name_) FROM events WHERE event_id='$uid'";
$result1=mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_array($result1);

$sql2="DELETE FROM events WHERE event_id='$uid'";





if($row1[0]==0)
{ 
  //echo "<script>alert('Existing User!')</script>";
  //header("location: login.php");

  echo ("<script LANGUAGE='JavaScript'>
    window.alert('Event ID does not exist');
    window.location.href='eventinfo.php';
    </script>");
}
else
{
  mysqli_query($conn,$sql2);

  echo ("<script LANGUAGE='JavaScript'>
    window.alert('Deleted');
    window.location.href='eventinfo.php';
    </script>");
}


?>

