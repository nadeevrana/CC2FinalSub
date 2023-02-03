<!--This page is for view deals-->
<!DOCTYPE html>

  <head>
    <title>ManageLanka/UserHome</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
   <style media="screen">
      body{
        background-color:#cad2c5;
      }
      .div1{
        border: 2px dashed black ;
        width: 470px;
        float: left;
        margin-left: 10px;
        padding-bottom: 15px; 
        margin-top: 15px;
      }
      .div2{
        width: 200px;
        border: none;
        max-height: 150px;
        overflow: hidden;
        float: center;
        margin-top: 10px;
        margin-left: 10px;
        padding: 1px;
        font-size: 23px;
        font-weight: bold;
      }
      img{
        width: 220px;
        height: 160px;
        float: left;
        margin-left: 20px;
        margin-top: 10px;
      }
      .divmain{
        margin-left: 60px;
      }
      .div3{
        float: left;
        margin-top: 10px;
        margin-right: 200px;

      }
      #label1{
        font-size: 20px;
        font-weight: bold;
        margin-left: 60px;
      }
      #label2{
        font-size: 20px;
        font-weight: bold;
        margin-left: 14px;
      }
      form{
        margin-top: -60px;
        float: right;
        margin-right: 55px;

      }
      #readfulldeals3{
        font-size: 20px;
        font-weight: bold;
        text-decoration:none ;
      }
    </style>
  </head>

  <body style="border: 3px solid black;background-color:#cad2c5">

<center><h1 style="letter-spacing:4px; ">CHECK OUT FOR THE LATEST DEALS ! </h1></center>
<p style="font-size:20px; text-align:center;" > Our stores are open for you always. Buy food for the most discounted price ever with our special coupon codes.</p>

      <br><br>
      <div class="divmain">
      <?php
      include 'db.php';

      $sql="SELECT * from deals order by id desc";
      $query=mysqli_query($conn,$sql);

      while ($info=mysqli_fetch_array($query)) {
        ?>

        <div class="div1" style="background-color:#84a98c">
        
          <div class="div2">
            <?php echo $info['deals']; ?>
          </div>

          <div class="div3" >
            <label id="label1"> <?php echo formatDate3($info['date']); ?> </label><br><br>
            <label id="label2"> <?php echo formatDate1($info['date']); ?></label>
            <label id="label2"> <?php echo formatDate2($info['date']); ?> </label>

          </div>
          <form class="" action="https://www.ubereats.com" method="post">
            <input type="text" name="id" value="<?php echo $info['id']; ?>" hidden>
            <button  style= "border-radius:4px;text-decoration: none;"id="readfulldeals" type="submit" name="fulldeals"><a href="https://www.ubereats.com/lk/feed?diningMode=DELIVERY&pl=JTdCJTIyYWRkcmVzcyUyMiUzQSUyMlVkYXlhJTIwTWF3YXRoYSUyMiUyQyUyMnJlZmVyZW5jZSUyMiUzQSUyMkVpSlZaR0Y1WVNCTllYZGhkR2hoTENCSGIyNWhkMkZzWVN3Z1UzSnBJRXhoYm10aElpNHFMQW9VQ2hJSmdlSVNuOGRYNGpvUldJT1dycmFxY2YwU0ZBb1NDV3U4SGwzcFYtSTZFVDI1bzcyN2k5dGclMjIlMkMlMjJyZWZlcmVuY2VUeXBlJTIyJTNBJTIyZ29vZ2xlX3BsYWNlcyUyMiUyQyUyMmxhdGl0dWRlJTIyJTNBNi45NjQzMjA0JTJDJTIybG9uZ2l0dWRlJTIyJTNBNzkuOTUwOTUzMyU3RA%3D%3D">View on uber eats</a></button>
          
          </form>

        </div>

        <?php
      }

      ?>

    </div>

    
 
</body>
</html>




