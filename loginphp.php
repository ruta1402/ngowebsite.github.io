<?php

session_start();

$servername = "localhost";
$username = "root"; //default user name is root
$password = ""; //default password is blank
$dbname="ngodatabase";


$conn = mysqli_connect($servername, $username, $password,$dbname);


$username=$_POST['username'];
$password=$_POST['password'];

$sql1="SELECT * FROM users WHERE user_name='$username' AND password_='$password'";


$result=mysqli_query($conn,$sql1);
$num=mysqli_num_rows($result);


if($num==1)
{
    $_SESSION['username']=$username;
    if($_SESSION['username']=='admin')
    {
        header('location: admin.php');
    }
    else
    {
        header('location: homelogged.php');
    }
    
}
else
{
    header('loaction: login.html');
}




?>