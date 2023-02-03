
<!--This page is for deals upload-->
<!DOCTYPE html>

<head>
  <title>ManageLanka/UserHome</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="CSS/1.css">
  <link rel="stylesheet" href="CSS/2.css">
  <link rel="stylesheet" href="CSS/3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body class="ml-margin ml-light-green">

  
  <br>
  <!--Slide show-->
  <div class="ml-content ml-section" style="max-width: 1500px;">
    <img class="mySlides ml-image" src="Images/s1.jpeg" style="width:100%">
    <img class="mySlides ml-image" src="Images/s2.jpeg" style="width:100%">
    <img class="mySlides ml-image" src="Images/s4.jpeg" style="width:100%">
  
  </div>

  <div class="ml-content ml-center" style="max-width:1600px">
    <form class="" action="dealsandoffers.php" method="post" enctype="multipart/form-data">
      <textarea name="deals" rows="8" cols="80"
        placeholder="Enter Restaurant name:&#10;Enter details:&#10;Enter coupon code:&#10;Uber Eats link:"
        required></textarea><br><br>

      <input type="submit" name="submit" value="Submit" class="buttonML roundBorder ml-pale-green ml-block">

    </form>
    <?php
    include 'db.php';

    if (isset($_POST['submit'])) {
      $deals = $_POST['deals'];




      $sql = "INSERT INTO deals(deals) values('$deals')";
      $query = mysqli_query($conn, $sql);

    }


    ?>

  </div>


  <p><a href="notifications.php"><button class="buttonML roundBorder ml-pale-green ml-block">Send
        notifications</button></a></p>
















  <script>

    var myIndex = 0;
    carousel();

    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      myIndex++;
      if (myIndex > x.length) { myIndex = 1 }
      x[myIndex - 1].style.display = "block";
      setTimeout(carousel, 4000); // Change image every 2 seconds
    }


  </script>

</body>

</html>