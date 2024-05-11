<?php


?>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
  
<h1 class="underline">WhatsApp Settings</h1>


<div class="container mt-5">
<div class="row">
    <div class="col-md-6 ">

   <div class="card">
    <div class="card-header bg-success text-white">
        Add A Template 
    </div>
    <div class="card-body">
    <form action="approveTemp.php" method="post">
    <label for="">Name of Template</label>
    <input type="text" class="form-control mt-1" name="template-name" id="">
    <label for="" class="mt-1">Language of Template</label>
    <select name="lang" id="" class="form-control mt-1">
        <option>Select the Language</option>
        <option value="en">English</option>
        <option value="hi">Hindi</option>
        <option value="he">Hinglish</option>
    </select>
    <label for="" class="mt-1">Input the Message</label>

    <textarea name="temp-text" id="" class="form-control mt-1"></textarea>
    <p>You can use placeholders like : <span><code>$NAME$ , $LOCATION$ , $COLLEGE$</code> </span></p>
   
   </div>
   <div class="card-footer bg-success text-white">
    <input type="submit" class="form-control btn btn-warning" value="Send Request">
   </div>
   </form>
   </div>
    </div>
    <div class="col-md-6">
    Approved A Template

    </div>
</div>
</div>