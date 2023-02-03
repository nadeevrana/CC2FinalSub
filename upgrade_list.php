<?php
    session_start();
    require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
<head>
    <title>ManageLanka/Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="CSS/1.css">
    <link rel="stylesheet" href="CSS/2.css">
    <link rel="stylesheet" href="CSS/3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    
  </head>
<body class="ml-margin ml-light-green">
<header>
<!-- Navigation bar with links -->
<div class="navBar ml-dark-greenie blackText" style="max-width:100%">
  <a href="Home.html"><img src="Images/logo-removebg.png" class="left tagML ml-dark-greenie" width="200px"></a>
  <a href="login.php" class="ml-hide-small navBar-item buttonML ml-mobile ml-medium ml-right" style="margin-top:15px;">LOGIN/REGISTER</a>
  <a href="ContactUs.html" class="ml-hide-small navBar-item buttonML ml-mobile ml-medium ml-right" style="margin-top:15px;">CONTACT US</a>
  <a href="About Us.html" class="ml-hide-small navBar-item buttonML ml-mobile ml-medium ml-right" style="margin-top:15px;">ABOUT US</a>
  <a href="#Home.html" class="ml-hide-small navBar-item buttonML ml-mobile ml-medium ml-right" style="margin-top:15px;">HOME</a>
  <a href="javascript:void(0)" class="navBar-item buttonML ml-right ml-hide-medium ml-hide-large" style="margin-top:15px;" onclick="myFunction()"> &#9776;</a>
</div>

<div id="demo" class="navBar-block whiteBg ml-hide ml-hide-large ml-small">
  <a href="#Home" class="navBar-item buttonML">HOME</a>
  <a href="About Us.html" class="navBar-item buttonML">ABOUT US</a>
  <a href="ContactUs.html" class="navBar-item buttonML">CONTACT US</a>
  <a href="signup.php" class="navBar-item buttonML">LOGIN/REGISTER</a>
</div>
<br>
</header>  
    <div class="container mt-4">

        

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>ACCount upgrades
                
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Contact</th>
                                    <th>Email</th>
                                    <th>Type</th>
                                    <th>License no.</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM upgrade_acc";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $req)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $req['id']; ?></td>
                                            
                                                <td><?= $req['name_acc']; ?></td>
                                            
                                                <td><?= $req['contact_acc']; ?></td>
                                                <td><?= $req['email_acc']; ?></td>
                                                <td><?= $req['type_acc']; ?></td>
                                                <td><?= $req['lic_acc']; ?></td>
                                               
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
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
            <a href="Home.html"><img src="Images/logo-removebg.png" class="left tagML ml-dark-greenie"
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>