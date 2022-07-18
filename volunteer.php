<?php
session_start();

if(isset($_SESSION['username']))
{
        $servername = "localhost";
    $username = "root"; //default user name is root
    $password = ""; //default password is blank
    $dbname="ngodatabase";


    $conn = mysqli_connect($servername, $username, $password,$dbname);
    $uname=$_SESSION['username'];
    $eid=$_SESSION['eveid'];

    //insert into volunteer table
    $sql1="SELECT prog_id FROM events WHERE event_id='$eid'";
    $result1=mysqli_query($conn,$sql1);
    $progid = mysqli_fetch_array($result1)[0];

    $sql2="SELECT user_id FROM users WHERE user_name='$uname'";
    $result2=mysqli_query($conn,$sql2);
    $uid = mysqli_fetch_array($result2)['user_id'];
    
    
    $sql3="INSERT INTO volunteer(user_id,vol_id,event_id,prog_id) VALUES('$uid',5,'$eid','$progid')";
    $result3=mysqli_query($conn,$sql3);

        // the message
    $msg = $_SESSION['username'].", Thank you for volunteering!";

    // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,70);

    $sql4="SELECT * FROM users WHERE user_name='$uname'";
    $result4=mysqli_query($conn,$sql4);
    $row4 = mysqli_fetch_array($result4);
    $email=$row4['email'];

    echo "<script type='text/javascript'>
      function sendEmail(){
      Email.send({
      Host : 'smtp.yourisp.com',
      Username : 'ruta.kulkarni@somaiya.edu',
      Password : '48F6AF7E3BF16DF1C2652F0A476D1F03119D',
      To : 'kulkarni.ruta2002@gmail.com',
      From : 'you@isp.com',
      Subject : 'NGO',
      Body : 'Successfully volunteer'
      }).then(
      message => alert('done')
      );
      }
      </script>
      ";


    // require 'PHPMailer/PHPMailerAutoload.php'  ;
    // $mail=new PHPMailer();
    // $mail->isSMTP=true;
    // $mail->Host='smtp.gmail.com';
    // $mail->Port=465;
    // $mail->SMTPAuth=true;
    // $mail->SMTPSecure='sls';

    


    // $mail->Username='kulkarni.ruta2002@gmail.com';
    // $mail->Password='';

    // $mail->setFrom('kulkarni.ruta2002@gmail.com','NGO Admin');
    // $mail->addAddress($email);

    // $mail->isHTML(true);
    // $mail->Subject='NGO';
    // $mail->Body=$msg;

    // if(!$mail->send())
    // {
    //     echo ("<script LANGUAGE='JavaScript'>
    //       window.alert('mail not sent');
    //       window.location.href='userprofile.php';
    //       </script>");
    // }
    // else
    // {
    //     echo ("<script LANGUAGE='JavaScript'>
    //       window.alert('mail sent');
    //       window.location.href='userprofile.php';
    //       </script>");
    // }






    echo ("<script LANGUAGE='JavaScript'>
          window.alert('Volunteer Successfull');
          window.location.href='userprofile.php';
          </script>");
    
}
else
{
    echo ("<script LANGUAGE='JavaScript'>
          window.alert('To volunteer first login');
          window.location.href='login.php';
          </script>");
}


?>