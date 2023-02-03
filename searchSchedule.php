<!doctype html>
<html lang="en">

    <head>
    <title>ManageLanka/Search-schedule</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="CSS/1.css">
    <link rel="stylesheet" href="CSS/2.css">
    <link rel="stylesheet" href="CSS/3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      html {scroll-behavior: smooth;}
      h1,h2,h3,h4,h5,h6 {font-family: "Roboto"}
      body {font-family: "Source Sans Pro"}
      
    </style>

</head>
<body class=" ml-light-green" style="border:2px solid black;">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h5> SCHEDULE </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search location/truck type...">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="ml-table-all">
                            <thead>
                                <tr>
                                    <th class="ml-auto">No.</th>
                                    <th class="ml-auto">Truck Number</th>
                                    <th class="ml-auto">Area</th>
                                    <th class="ml-auto">Division</th>
                                    <th class="ml-auto"> Time</th>
                               
                                   
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","user_form");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM schedule WHERE CONCAT(id,truck_name,area,division,clock) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                <td><?= $items['id']; ?></td>
                                                    <td><?= $items['truck_name']; ?></td>
                                                    <td><?= $items['area']; ?></td>
                                                    <td><?= $items['division']; ?></td>
                                                    <td><?= $items['clock']; ?></td>
                                            
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
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
   <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>-->
</body>
</html>