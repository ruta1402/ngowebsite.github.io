<?php

$servername = "localhost";
$username = "root"; //default user name is root
$password = ""; //default password is blank
$dbname="ngodatabase";


$conn = mysqli_connect($servername, $username, $password,$dbname);

$uid=$_POST['uid'];
$mode=$_POST['mode'];
$amount=$_POST['amount'];

$todaydate=date("Y-m-d");
$sql="INSERT INTO donates(don_id,amount,mode,dates,d_user_id)
      VALUES(16,'$amount','$mode','$todaydate','$uid')";
if(mysqli_query($conn,$sql))
{
    echo ("<script LANGUAGE='JavaScript'>
          window.alert('Success');
          window.location.href='index.php';
          </script>");
}
else
{
    echo ("<script LANGUAGE='JavaScript'>
          window.alert('Erro');
          window.location.href='donatemoney.php';
          </script>");
}
