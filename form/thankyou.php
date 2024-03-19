<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks | IIAHM Aviation Academy</title>
    <!-- Event snippet for Submit lead form | IIAHM Website conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
function gtag_report_conversion(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-16492559573/sod-CLyVzZ0ZENX5obg9',
      'event_callback': callback
  });
  return false;
}
</script>
    <style>
        *{
            padding: 0px;
            margin: 0px;
        }
        body{
            background-color:cornsilk;
            text-align: center;
            margin-top: 150px;
        }
        h1{
            margin-bottom: 20px;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        .img{
            height: 50vh;
            width : 50vw;
        }
        .heading{
            margin-top: 20px;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: large;
            text-decoration: underline;
        }
        button{
        margin-top: 20px;    
        width: 30vh; 
        height: 7vh;    
        background-color: black;   
        color: white;
        cursor: pointer;
        border-radius: 20px;
        box-shadow: 10px 10px 10px grey;
        }
        button:hover{
            background-color: #3d3e40;
            color: white;
        }

    </style>
</head>
<body>
    <h1>THANK YOU !</h1>
    <img class="img" src="images/thanks.png" alt="thanksyou Image">
    <h3 class="heading">We have Recorded Your Response And Will Get back to you Soon</h3>
    <a href="index.php" class="goHome"><button><h3>Go Home</h3> </button></a>
</body>
</html>