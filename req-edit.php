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

    <style>
      html {scroll-behavior: smooth;}
      h1,h2,h3,h4,h5,h6 {font-family: "Roboto"}
      body {font-family: "Source Sans Pro"}
      
    </style>
  </head>
<body class="ml-margin ml-light-green">


<br>
  
    <div class="container mt-5">



        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>CONFIRM ORDERS
                            <a href="accept-decline.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $req_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM bulkreq WHERE id='$req_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $req = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="req_id" value="<?= $req['id']; ?>">

                                    <div class="mb-3">
                                        <label> Truck Number</label>
                                        <input type="text" name="name" value="<?=$req['name'];?>" class="form-control"readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>email</label>
                                        <input type="text" name="email" value="<?=$req['email'];?>" class="form-control"readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>contact</label>
                                        <input type="text" name="contact" value="<?=$req['contact'];?>" class="form-control"readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>address</label>
                                        <input type="text" name="address" value="<?=$req['address'];?>" class="form-control"readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>status</label>
                                        <select name="type" class="form-control">
                                            <option> accepted</option>
                                            <option>decline </option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_req" class="btn btn-primary">
                                            Confirm
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>