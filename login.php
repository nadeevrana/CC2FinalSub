<?php

include 'config.php';

session_start();

if (isset($_POST['submit'])) {

   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = md5($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);

   $select = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ?");
   $select->execute([$email, $pass]);
   $row = $select->fetch(PDO::FETCH_ASSOC);

   if ($select->rowCount() > 0) {

      if ($row['user_type'] == 'admin') {

         $_SESSION['admin_id'] = $row['id'];
         header('location:admin.html');

      } elseif ($row['user_type'] == 'user') {

         $_SESSION['user_id'] = $row['id'];
         header('location:Home.html');


      } elseif ($row['user_type'] == 'rep') {

         $_SESSION['user_id'] = $row['id'];
         header('location:municipal.html');

      } elseif ($row['user_type'] == 'restaurant') {

         $_SESSION['user_id'] = $row['id'];
         header('location:restaurants.html');

      } elseif ($row['user_type'] == 'voluntary') {

         $_SESSION['user_id'] = $row['id'];
         header('location:don_orgs.html');

      } elseif ($row['user_type'] == 'company') {

         $_SESSION['user_id'] = $row['id'];
         header('location:companies.html');


   

      } else {
         $message[] = 'no user found!';
      }

   } else {
      $message[] = 'incorrect email or password!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <title>ManageLanka/Home</title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <link rel="stylesheet" href="CSS/1.css">
   <link rel="stylesheet" href="CSS/2.css">
   <link rel="stylesheet" href="CSS/3.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
   </head>
<body class="ml-margin ml-light-green">

   <!-- Navigation bar with links -->
<header>
   <div class="navBar ml-dark-greenie blackText" style="max-width:100%">
      <a href="General_Home.html"><img src="Images/logo-removebg.png" class="left tagML ml-dark-greenie" width="200px"></a>
      <a href="register.php" class="ml-hide-small navBar-item buttonML ml-mobile ml-medium ml-right"
         style="margin-top:15px;">REGISTER</a>
      <a href="ContactUs.html" class="ml-hide-small navBar-item buttonML ml-mobile ml-medium ml-right"
         style="margin-top:15px;">CONTACT US</a>
      <a href="About Us.html" class="ml-hide-small navBar-item buttonML ml-mobile ml-medium ml-right"
         style="margin-top:15px;">ABOUT US</a>
    
      <a href="javascript:void(0)" class="navBar-item buttonML ml-right ml-hide-medium ml-hide-large"
         style="margin-top:15px;" onclick="myFunction()"> &#9776;</a>
   </div>

   <div id="demo" class="navBar-block whiteBg ml-hide ml-hide-large ml-small">
    
      <a href="About Us.html" class="navBar-item buttonML">ABOUT US</a>
      <a href="ContactUs.html" class="navBar-item buttonML">CONTACT US</a>
      <a href="login.php" class="navBar-item buttonML">LOGIN/REGISTER</a>
   </div>
   <br>
</header>
   
   
   
   

      <?php
if (isset($message)) {
   foreach ($message as $message) {
      echo '
         <div class="message">
            <span>' . $message . '</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
   }
}
?>
<div class="ml-content" style="max-width:800px">
<div class="whiteBg" id="Contact" style="border:1mm inset black">
        <div class="ml-container ml-padding-40-16">
            <div class="ml-center ml-padding-40-16">
                <h2 class="ml-wide">LOGIN</h2>
                <p class="ml-opacity"><i></i></p><br>
                
            </div>
            <form action="" method="post" enctype="multipart/form-data" class="ml-center">
               
               <input type="email" required placeholder="enter your email" class="box" name="email"><br><br>
               <input type="password" required placeholder="enter your password" class="box" name="pass">
               <p>don't have an account? <a href="register.php" class="ml-text-red">register now</a></p>
               <input type="submit" value="login now" class="buttonML roundBorder ml-pale-green" name="submit">
            </form>
         </div>
</div>
</div>

      <!-- Footer. This section contains an ad for social media accounts of managelanka. -->
      <footer class="ml-container ml-dark-greenie ml-center ml-margin-top">
        <p>Find us on social media.</p>
        <i class="fa fa-facebook-official ml-hover-opacity"></i>
        <i class="fa fa-instagram ml-hover-opacity"></i>
        <i class="fa fa-snapchat ml-hover-opacity"></i>
        <i class="fa fa-pinterest-p ml-hover-opacity"></i>
        <i class="fa fa-twitter ml-hover-opacity"></i>
        <i class="fa fa-linkedin ml-hover-opacity"></i>
        <br><br>
        <div class="ml-row-padding ml-footer" style="float:left;width: 100%;">
          <div class="ml-third left-align ml-hide-small">
            <a href="General_Home.html"><img src="Images/logo-removebg.png" class="left tagML ml-dark-greenie"
                width="180px"></a>
          </div>
          <div class="ml-third">
            <i><a href="About Us.html">ABOUT US</a><br>
              <a href="privacyPolicy.html">PRIVACY POLICY</a><br>
              <a href="faq.html">FAQ</a></i>
          </div>
          <div class="ml-third ">
            <i><a
                href="https://www.google.com/maps/place/Indian+Bank/@6.9364406,79.8281313,15z/data=!4m10!1m2!2m1!1sIndian+Bank+near+Fort,+Colombo!3m6!1s0x3ae25926b85d1b33:0x42d616e056bd9173!8m2!3d6.9364406!4d79.8456408!15sCh5JbmRpYW4gQmFuayBuZWFyIEZvcnQsIENvbG9tYm8iA4gBAZIBBGJhbmvgAQA!16s%2Fg%2F11b_004t3b">
                LOCATE US
              </a></i>
          </div>
        </div>
        <br><br><br>
        <h6>&reg; 2022 Magma. All rights reserved. The ManageLanka name, logos, and related marks are trademarks of
          Magma.</h6>
      </footer>
      <script>
         function myFunction() {
            var x = document.getElementById("demo");
            if (x.className.indexOf("ml-show") == -1) {
               x.className += " ml-show";
            } else {
               x.className = x.className.replace(" ml-show", "");
            }
         }


      </script>

   </body>

</html>