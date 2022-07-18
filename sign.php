<?php

$servername = "localhost";
$username = "root"; //default user name is root
$password = ""; //default password is blank
$dbname="ngodatabase";


$conn = mysqli_connect($servername, $username, $password,$dbname);

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$confpassword=$_POST['confpassword'];


$sql1="SELECT COUNT(user_name) FROM users WHERE user_name='$username'";
$result1=mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_array($result1);

$sql2="INSERT INTO users(user_id,f_name,l_name,password_,user_name,contact)
      VALUES('11','$fname','$lname','$password','$username','$mobile')";




if($row1[0]==1)
{ 
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Existing user');
    window.location.href='login.php';
    </script>");
}
else
{
  if(preg_match( '/^[a-zA-Z0-9]([._-](?![._-])|[a-zA-Z0-9]){3,18}[a-zA-Z0-9]$/', $username))
  {
    if(preg_match('/^[A-Za-z]+$/', $fname) && preg_match('/^[A-Za-z]+$/', $lname))
    {
      if(preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/',$email) && preg_match('/^[0-9]{10}+$/',$mobile))
      {
        if($password == $confpassword)
        {
          $result2=mysqli_query($conn,$sql2);
                echo ("<script LANGUAGE='JavaScript'>
          window.alert('Sign up successful! Login to continue...');
          window.location.href='login.php';
          </script>");
        }
        else
        {
          echo ("<script LANGUAGE='JavaScript'>
          window.alert('Passwords do not match');
          window.location.href='signup.php';
          </script>");
        }
      }
      else
      {
        echo ("<script LANGUAGE='JavaScript'>
    window.alert('Invalid Mobile or Email');
    window.location.href='signup.php';
    </script>");
        //header("location: signup.php");
      }
    }
    else
    {
      echo ("<script LANGUAGE='JavaScript'>
    window.alert('Invalid Name');
    window.location.href='signup.php';
    </script>");
      //header("location: signup.php");
    }
  }
  else
  {
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Invalid Username');
    window.location.href='signup.php';
    </script>");
    //header("location: signup.php");
  }
}


?>

