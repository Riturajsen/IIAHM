<?php
use PHPMailer\PHPMailer\PHPMailer;
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
// require 'otp/index.php';
require 'config.php';
// mail template
// $message = file_get_contents('mailtype/mail_change.php');

$mailto  = $_POST['email'];
$mailsub = $_POST['fname']." Mail Received";
$mailname = $_POST['fname'];
$mailMsg = $_POST['idea'];
// $mail_pass = $_['mail_pass'];


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
$mail ->addReplyTo($replyTo);
$mail ->Subject = $mailsub ;
$mail ->Body =  "<div style='  padding : 1em;
width: 100%;
height: 200px;
padding-right:40px;
box-sizing: border-box;
background-color: #E4E4D9;<span style=' text-align: center;
font-style: italic;'> Hello ".$mailname."!</span> <br><br> Your Idea Is : <br>".$mailMsg."</div> <br><br><br> <span style='text-align: left;color:gray;'>Regards | ".$name_comp."</span>";
$mail ->addAddress($mailto);

error_reporting($err_rp);


if(!$mail ->Send())
{

    header("Location: output.php?msg=Opss!!! Something Went Wrong. It looks like Our Mail Server Is not responding But Don't worry We have Recorded your Idea And will ping you back soon");
//    echo "<script> 
//     if (window.confirm('Mail Not Sent'))
//     {
//         window.history.back();
//     }
//     </script>";
}
else{

    header("Location: sendmailtopulak.php?fname=$mailname&idea=$mailMsg");

    // header("Location: output.php?msg=We Have Received Your Mail");
    // echo "<script> 
    // if (window.confirm('Mail Sent'))
    // {
    //     window.history.back();
    // }
    // else{
    //     window.history.back();
        
    // }
    // </script>";
}
?>
<style>
    .div{
        font-family: 'Times New Roman', Times, serif;
        font-size: 32px;
    }
</style>
