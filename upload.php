<?php
    session_start();
    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"][$_SESSION['username']]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    
    
    
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo ("<script LANGUAGE='JavaScript'>
          window.alert('Success');
          window.location.href='userprofile.php';
          </script>");
        $uploadOk = 1;
    } else {
        echo ("<script LANGUAGE='JavaScript'>
          window.alert('Error');
          window.location.href='userprofile.php';
          </script>");
        $uploadOk = 0;
    }
    }
?>