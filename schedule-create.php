<?php
session_start();
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

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Schedule Add
                            <a href="index-municipal.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>Truck Id</label>
                                <select name="truck_name" class="form-control">
                                   <option>- </option>
                                    <option>WP CA 3030 - FOOD WASTE </option>
                                    <option>WP JS 9876 -  PLASTIC/POLYTHENE WASTE </option>
                                    <option>WP HAP 3080 - GENERAL WASTE </option>
                                    <option>WP AP 6080 - GENERAL WASTE </option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>Area</label>
                                <select name="area" class="form-control">
                                <option>- </option>
                                    <option>Nug</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>Division</label>
                                <select name="division" class="form-control">
                                <option>- </option>
                                <option>Gangdowila-526A</option>
                                    <option>pepliyana-535</option>
                                    <option>jambugasmulla -205</option>
                                    <option>wijerama-195 </option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>Time</label>
                                <select name="clock" class="form-control">
                                <option>- </option>
                                    <option>10.00a.m-10.45 a.m</option>
                                    <option>11.00a.m-12.00 p.m</option>
                                    <option>10.30 a.m-11.30 a.m </option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_schedule" class="btn btn-primary">Save schedule</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
