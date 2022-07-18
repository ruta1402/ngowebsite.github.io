<?php

$servername = "localhost";
$username = "root"; //default user name is root
$password = ""; //default password is blank
$dbname="ngodatabase";


$conn = mysqli_connect($servername, $username, $password,$dbname);

$uid=$_POST['uid'];


$sql1="SELECT COUNT(user_name) FROM users WHERE user_id='$uid'";
$result1=mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_array($result1);

$sql2="DELETE FROM donates WHERE d_user_id='$uid'";
$sql3="DELETE FROM users WHERE user_id='$uid'";




if($row1[0]==0)
{ 
  //echo "<script>alert('Existing User!')</script>";
  //header("location: login.php");

  echo ("<script LANGUAGE='JavaScript'>
    window.alert('User does not exist');
    window.location.href='userinfo.php';
    </script>");
}
else
{
  mysqli_query($conn,$sql2);
  mysqli_query($conn,$sql3);
  echo ("<script LANGUAGE='JavaScript'>
    window.alert('Deleted');
    window.location.href='userinfo.php';
    </script>");
}


?>

