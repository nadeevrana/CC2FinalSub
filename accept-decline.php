<!--THIS PAGE : municipal council >> to list accepted/declined bulk truck Orders-->
<?php
    session_start();
    require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
<head>
    <title>ManageLanka/Bulk truck orders</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="CSS/1.css">
    <link rel="stylesheet" href="CSS/2.css">
    <link rel="stylesheet" href="CSS/3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

  </head>
<body class="ml-margin ml-light-green">

    <div class="container mt-4">


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>BULK TRUCK ORDERS
                
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Accept/Decline</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM bulkreq";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $req)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $req['id']; ?></td>
                                                <td><?= $req['email']; ?></td>
                                                <td><?= $req['address']; ?></td>
                                                <td><?= $req['type']; ?></td>
                                                <td>
                                                  
                                                    <a href="req-edit.php?id=<?= $req['id']; ?>" class="btn btn-success btn-smy">ACCEPT/DECLINE</a>
                                                  
                                                </td>
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

    
</body>
<html> 