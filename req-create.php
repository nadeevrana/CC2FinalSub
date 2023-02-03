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


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Order Bulk Truck
                           
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control">
                                  
                         </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Contact</label>
                                <input type="text" name="contact" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Date</label>
                                <input type="text" name="type" class="form-control">
                            </div>
                            

                            <div class="mb-3">
                                <button type="submit" name="save_req" class="btn btn-primary">Order</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>