<?php
include("const.php");
include("connect.php");
include("navbar.php");
?>

<html lang="en">

<head>
  <link rel="stylesheet" href="styles.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage</title>
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<body>
  <!----Link JAVASCRIPT-->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>






  <div class="container text-center">
  <div class="row">
    <div  class="col-md-12" style="padding-bottom:50px;"><img width="50px" height="50px" src="images/phone.png" alt=""></div>
    <div style="padding-bottom:50px;" class="col-md-12"><b>PHONE</B><BR>+20 01096638717</div>
    

    
    <div style="padding-bottom:50px;" class="col-md-12">
    <img width="50px" height="50px" src="images/mail.png" alt="">
  </div>
</div>

  <div class="col-md-12"><B>EMAIL</b><br>yousefelfiky@ubuild-it.com</div>

  
  <div class="row" style="padding-top:100px;">

  <form action="index.php" method="POST">
          <div class="form-group">

    <div class="col-sm-12"><B>IF YOU GOT ANY QUESTIONS<BR>PLEASE DO NOT HESITATE TO SEND US A MESSAGE</b></div>
  </div>
  <div class="row"style="padding-top:50px; padding-bottom:110px;">
    <div style="padding-bottom:50px; class="col-sm-12"><input class="form-control width-height" required type="text"></input></div>
   <div class="col-sm-12"> <button type="submit"  class="btnproject btn-primary">SEND MESSAGE</button></div>
</div>
  </div>
</div>




  




</body>
</html>
  <?php
  include("footer.php");
  ?>