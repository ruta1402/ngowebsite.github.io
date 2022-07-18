<?php 

session_destroy();

echo ("<script LANGUAGE='JavaScript'>
          window.alert('Logged out');
          window.location.href='login.php';
          </script>");

?>