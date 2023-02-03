<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insert Events</title>
    <link rel="stylesheet" href="CSS/1.css">
  <link rel="stylesheet" href="CSS/2.css">
  <link rel="stylesheet" href="CSS/3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
  </head>
  <body class="ml-margin ml-light-green">
  
    
  <div class="ml-content ml-center" style="max-width:1600px">
      <form class="" action="insert.php" method="post" enctype="multipart/form-data">
        <textarea name="news" rows="20" cols="80" placeholder="Upload Advertisment" required></textarea><br><br>
        <input type="file" name="image" value="" required ><br><br>
        <input type="submit" name="submit" value="Submit" class="buttonML roundBorder ml-pale-green ml-block">
        <br> 
        <button
            class="buttonML roundBorder ml-dark-greenie ml-padding-large ml-large ml-hover-opacity-off blackText"><a
              href="news.php">View posted adverts</a></button>
      </form>
      <?php
      include 'db.php';

      if (isset($_POST['submit'])) {
        $news=$_POST['news'];
        $image=$_FILES['image']['name'];
        $image_type=$_FILES['image']['type'];
        $image_size=$_FILES['image']['size'];
        $image_tem_loc=$_FILES['image']['tmp_name'];
        $image_store="image/".$image;

        move_uploaded_file($image_tem_loc,$image_store);

        $sql="INSERT INTO news(news,image) values('$news','$image')";
        $query=mysqli_query($conn,$sql);

      }


       ?>

    </div>
      
  </body>
</html>