<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <img src="header.jpg" alt="">
  <hr>
  <form action="action_page.php" >

    <label for="fname">STUDENT NAME <span class="red">*</span></label>
    <input type="text" id="fname" name="fname" placeholder="Your name.."  required="true">

    <label for="fathersname">FATHER NAME <span class="red">*</span></label>
    <input type="text" id="fathersname" name="fathersname" placeholder="Your fathers name.." required="true">

    <label for="">MOTHER NAME <span class="red">*</span></label>
    <input type="text" id="mothersname" name="mothersname" placeholder="Your mothers name.." required="true">
    <label for="">CONTACT NUMBER <span class="red">*</span></label>
    <input type="number" id="Pnumber" name="Pnumber" placeholder="Your Contact Number.." required="true">
    <label for="">ADDRESS <span class="red">*</span></label>
    <input type="text" id="adress" name="adress" placeholder="Your Address.." required="true">
   

    <label for="course">SELECT A COURSE <span class="red">*</span></label>
    <select name="course" id="" required="true">
      <option value="">Select A Course</option>
      <option value="Diploma">Diploma In Aviation And Hospitality Management</option>
      <option value="Certifiaction">Certifiaction In Ground Staff And Hospitality Management</option>
    </select>
    <label for="currentEdu">CURRENT QUALIFICATION <span class="red">*</span></label>
    <select name="currentEdu" id="" required="true">
      <option value="12th">12th PURSUING </option>
      <option value="graduate">GRADUATE</option>
      <option value="Post-GRADUATE">POST- GRADUATE</option>
      <option value="others">OTHERS</option>
    </select>

    <input type="submit" value="Submit">
  </form>
</div> 
</body>
</html>