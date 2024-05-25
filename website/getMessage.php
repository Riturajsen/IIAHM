<?php
$fname = $_POST['fname'];
$Pnumber = $_POST['Pnumber'];
session_start();
$captcha = $_SESSION['captcha'];
use PHPMailer\PHPMailer\PHPMailer;
$captchaT = $_POST['captcha'];
if(empty($Pnumber) && empty($Pnumber)){


require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
// require 'otp/index.php';
require 'Email/mailConfig.php';
// mail template
// $message = file_get_contents('mailtype/mail_change.php');

$mailto  = "riturajsen01@gmail.com"; // "iiahm.bho@gmail.com";
$mailsub = $_POST['fname']." Sent a  Inquiry on IIAHM Website form";
$mailname = $_POST['fname'];
$mailMsg = $_POST['msg'];
// $mail_pass = $_['mail_pass'];
 


if($captcha == $captchaT){
$mail = new PHPMailer();
$mail ->isSMTP();
$mail ->SMTPDebug = $is_debug;
$mail ->SMTPAuth = $stmp_auth_main;
$mail ->SMTPSecure = $secure_type;
$mail ->Host = $mail_host;
$mail ->Port = $mail_port;
$mail ->isHTML($is_mail_html);
$mail ->Username = $mail_username;
$mail ->Password = $mail_password;
$mail ->setFrom( $mail_username, $sent_from);
// $mail ->addReplyTo($replyTo);
$mail ->Subject = $mailsub ;
$mail ->Body =  '

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail</title>
    <style>  
    body{
        margin-top: 30px;
    }  
img{           
    width: 150px;
    height: 80px;
 }
 .container
{
    margin: auto;
    width: 70%;
    padding: 10px;
    border: 1px solid black;
    border-radius: 10px;
}
  .center {
   text-align: center;
    margin-top: 20px;
  }
  .heading{
       text-align: center; 
       text-decoration: underline;
  }
  hr{
    width: 40%;
  }
  footer{
    text-align: center;
    color: #000;
    margin-top: 60px;
  }
  small{
    font-size: small;
  }
  .message-body{
      width: 90%;
      padding: 10px;
      margin-left: auto;
      text-align: center;
  }.msg-field{
    text-transform: capitalize;
  }
  .reply{
    font-family: Georgia, "Times New Roman", Times, serif;
    font-size: large;
    color:firebrick;
  }
  
    </style>
</head>
<body>
    <div class="container">
    <div class="logo center"><img src="https://iiahmaviationacademy.com/assets/images/IIAHM.png" alt="LOGO"></div>
    <hr>
    <div class="heading"><h3>IIAHM MAIL SERVER</h3></div>
    <div class="message-body">
      <p class="msg-field">From : <span class="reply">'.$mailname.'</span></p>
      <p class="msg-field">Contact number : <span class="reply">'.$Pnumber.'</span></p>
      <p class="msg-field">Message : <span class="reply">'.$mailMsg.'</span></p>
    </div>

    </div>
    <footer>
    IIAHM © '.date("Y").'. All Rights Reserved.<br><hr>
    <small>NOTE: This is a autogenerated mail from IIAHM Mailserver.Do not reply to this.</small>
    </footer>
</body>
</html>';
$mail ->addAddress($mailto);

error_reporting($err_rp);


if(!$mail ->Send())
{
    $msg = "Opss!!! Something Went Wrong";
    $_SESSION['captcha'] = " ";
    header("Location: contact.php?rmsg=$rmsg");
    exit();
}
else{
   
    $rmsg = "Mail Sent";
    $_SESSION['captcha'] = " ";
    header("Location: contact.php?rmsg=$rmsg");
    exit();
}
?>
<style>
    .div{
        font-family: 'Times New Roman', Times, serif;
        font-size: 32px;
    }
</style>
<?php } else { 
  $rmsg = "The Captcha That you entered is wrong";
  $_SESSION['captcha'] = " ";
  header("Location: contact.php?rmsg=$rmsg");
  exit();
} } 
else{
  $rmsg = "The Phone or the Name Can't Be Empty";
  $_SESSION['captcha'] = " ";
  header("Location: contact.php?rmsg=$rmsg");
  exit();
}
?>

