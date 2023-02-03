<!--uprade account a privileged user-->
<?php
session_start();
?>

<!doctype html>
<html lang="en">
  
    <head>
    <title>ManageLanka/BulkTruckRequest</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="CSS/1.css">
    <link rel="stylesheet" href="CSS/2.css">
    <link rel="stylesheet" href="CSS/3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    
  </head>
<body class="ml-margin ml-light-green">

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
<section style="max-width:60%;"  >
        <div class="row">
            <div class="col-md-12">
                <div class="card" >
                    <div class="card-header">
                        <h4>Upgrade Your Account
                           
                        </h4>
                    </div>
                    <div class="card-body">
                   <form action="code.php" method="POST" >

                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name="name_acc" class="form-control">
                                  
                         </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" name="email_acc" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Contact</label>
                                <input type="text" name="contact_acc" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Account type</label>
                                <select name="type_acc" class="form-control">
                                   <option>- </option>
                                    <option>Restaurant holder</option>
                                    <option>Company</option>
                                    <option>Donation Organization</option>
                                    <option>Municipal council </option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>License no.</label>
                                <input type="text" name="lic_acc" class="form-control">
                            </div>
                            

                            <div class="mb-3">
                                <button type="submit" name="save_acc" class="buttonML roundBorder ml-pale-green ml-block">Send request</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>