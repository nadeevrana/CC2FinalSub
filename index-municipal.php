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


  
    <div class="container mt-4">


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Schedule Details
                            <a href="schedule-create.php" class="btn btn-primary float-end">Add schedules</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Truck Number</th>
                                    <th>area</th>
                                    <th>division</th>
                                    <th>Time</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM schedule";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $schedule)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $schedule['id']; ?></td>
                                                <td><?= $schedule['truck_name']; ?></td>
                                                <td><?= $schedule['area']; ?></td>
                                                <td><?= $schedule['division']; ?></td>
                                                <td><?= $schedule['clock']; ?></td>
                                                <td>
                                                    <a href="schedule-view.php?id=<?= $schedule['id']; ?>" class="btn btn-info btn-sm">View</a><br>
                                                    <a href="schedule-edit.php?id=<?= $schedule['id']; ?>" class="btn btn-success btn-sm">Edit</a><br>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_schedule" value="<?=$schedule['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
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
    <br>


</body>
</html>