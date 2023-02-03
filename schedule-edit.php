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

<br>
  
    <div class="container mt-5">

        

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>schedule Edit 
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
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="schedule_id" value="<?= $schedule['id']; ?>">

                                    <div class="mb-3">
                                        <label> Truck Number</label>
                                        <input type="text" name="truck_name" value="<?=$schedule['truck_name'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Area</label>
                                        <input type="text" name="area" value="<?=$schedule['area'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Division</label>
                                        <input type="text" name="division" value="<?=$schedule['division'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Time</label>
                                        <input type="text" name="clock" value="<?=$schedule['clock'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_schedule" class="btn btn-primary">
                                            Update schedule
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