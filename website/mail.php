<?php error_reporting(false);
$mailname = "Rituraj";
$Pnumber = "7000292123";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail</title>
    <style>  
    body{
        background-color:black;
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
  background-color: white;
  padding: 10px;
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
    color: #ffffff;
    margin-top: 60px;
  }
  small{
    font-size: small;
  }
  .message-body{
      width: 90%;
      border: 1px solid black;
      padding: 10px;
      margin-left: 25px;
      text-align: center;
  }.msg-field{
    border: 1px dotted grey;
    text-transform: capitalize;
  }
  .reply{
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-size: large;
    color:firebrick;
  }
  
    </style>
</head>
<body>
    <div class="container">
    <div class="logo center"><img src="assets/images/IIAHM.png" alt="LOGO"></div>
    <hr>
    <div class="heading"><h3>IIAHM MAIL SERVER</h3></div>
    <div class="message-body">
      <p class="msg-field">From : <span class="reply"><?=$mailname?></span></p>
      <p class="msg-field">Contact number : <span class="reply"><?=$Pnumber?></span></p>
      <p class="msg-field">Message : <span class="reply"><?=$mailMsg?></span></p>
    </div>

    </div>
    <footer>
    IIAHM © <?=date("Y")?>. All Rights Reserved.<br><hr>
    <small>NOTE: This is a autogenerated mail from IIAHM Mailserver.Do not reply to this.</small>
    </footer>
</body>
</html>