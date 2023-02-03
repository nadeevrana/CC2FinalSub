<?php
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


<br>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>schedule View Details 
                            <a href="index-municipal.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $schedule_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM schedule WHERE id='$schedule_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $schedule = mysqli_fetch_array($query_run);
                                ?>
                                
                                    <div class="mb-3">
                                        <label>schedule Name</label>
                                        <p class="form-control">
                                            <?=$schedule['truck_name'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>schedule area</label>
                                        <p class="form-control">
                                            <?=$schedule['area'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>schedule division</label>
                                        <p class="form-control">
                                            <?=$schedule['division'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>schedule clock</label>
                                        <p class="form-control">
                                            <?=$schedule['clock'];?>
                                        </p>
                                    </div>

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