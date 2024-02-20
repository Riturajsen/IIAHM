<?php
$fname = $_POST['fname'];
$Pnumber = $_POST['Pnumber'];



use PHPMailer\PHPMailer\PHPMailer;
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
$mail ->Body =  "<div style='  padding : 1em;
width: 100%;
height: 200px;
padding-right:40px;
box-sizing: border-box;
background-color: #E4E4D9;<span style=' text-align: center;
font-style: italic;'> Hello IIAHM !</span> <br><br> We have a Inquiry on our Website contact Form : <br> From : ".$mailname."</div> <br> Contact no : ".$Pnumber."<br> Mail Message : ".$mailMsg."<br><br><br> <span style='text-align: left;color:gray;'>Regards,<br> ".$name_comp." Mail Server</span>";
$mail ->addAddress($mailto);

error_reporting($err_rp);


if(!$mail ->Send())
{
    $msg = "Opss!!! Something Went Wrong";
    header("Location: contact.php?rmsg=$rmsg");
    exit();
}
else{
   
    $rmsg = "Mail Sent";
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

?>