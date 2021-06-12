<?php 
include('registration_process.php');
?>
<!DOCTYPE html>
<html>
   <head>
      <title>Validate Registration - Registration Form</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
      <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="assets/css/registration_style.css">
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <!-- //web font -->
   </head>
   <body>
      <div id="loading"></div>
      <!-- main -->
      <div class="main-w3layouts wrapper">
         
         <h1>Lunch Box</h1>
         <div class="main-agileinfo">
            <div class="agileits-top">
               <form id="register_form">
                  <div style="font-size: 12px" hidden class="alert alert-danger alert-dismissible fade show" id="error" role="alert">Error: Correct all errors / Fill all fields before submiting
                     <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true" class="text-white">&times;</span>
                     </button>
                  </div>
                  <div>
                  <input type="text" name="fullname" value="" placeholder="Fullname" id="fullname">
                  <span style="font-size: 12px"></span>
                </div>
                <div>
                  <input class="col-md-12" placeholder="Email Address" name="email_reg" type="email" id="email">
                  <span style="font-size: 12px"></span>
                </div>
                <div>
                  <input type="text" name="contact" placeholder="Contact Number" id="contact_number">
                  <span style="font-size: 12px"></span>
                </div>
                <div>
                  <input name="password_reg" minlength="6" type="password" placeholder="Password" id="password">
                  <span style="font-size: 12px"></span>
                </div>
                <div>
                  <input name="cpassword" type="password" placeholder="Confirm Password" id="cpassword">
                  <span style="font-size: 12px"></span>
                </div>
                <div>
                  <button type="button" name="register" style="width: 82%" class="btn btn-primary" id="reg_btn">SIGN UP</button>
                  </div>
               </form>
               <p style="font-size: 12px">Already have an account? <a href="signin.php"> Login Now</a></p>
            </div>
         </div>
         <!-- copyright -->
         <div class="colorlibcopy-agile">
            <p>© 2021 Lunch Box. All rights reserved</p>
         </div>
         <!-- //copyright -->
         <ul class="colorlib-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
         </ul>
      </div>
      <!-- //main -->
      <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
      <script src="assets/js/registration_script.js"></script>
   </body>
</html>
