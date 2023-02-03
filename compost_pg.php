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
<body class=" ml-light-green" style="border:2px solid black;">

<!-- Navigation bar with links -->


<section> 
        <div class="row" >
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Compost marketplace
                           
                        </h4>
                    </div>
                    <div class="card-body">
                   <form action="code.php" method="POST" style="align-content:start; align-content:center;">

                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name="name_com" class="form-control">
                                  
                         </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" name="email_com" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Contact</label>
                                <input type="text" name="contact_com" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Price per 500g (LKR)</label>
                                <input type="text" name="gram_com" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Area</label>
                                <input type="text" name="area_com" class="form-control">
                            </div>
                            

                            <div class="mb-3">
                                <button type="submit" name="save_com" class="buttonML roundBorder ml-pale-green ml-block">Post </button>
                            </div>
                            <div class="mb-3">
                                <a href="compost_list.php" name="save_com" class="buttonML roundBorder ml-pale-green ml-block">View List </a>
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