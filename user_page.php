<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>ManageLanka/Home</title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <link rel="stylesheet" href="CSS/1.css">
   <link rel="stylesheet" href="CSS/2.css">
   <link rel="stylesheet" href="CSS/3.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   

<body class="ml-margin ml-light-green">

   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   </head>


<body>



<section class="profile-container">

   <?php
      $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
      $select_profile->execute([$user_id]);
      $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
   ?>

   <div class="profile">
      <img src="uploaded_img/<?= $fetch_profile['image']; ?>" alt="">
      <h3><?= $fetch_profile['name']; ?></h3>
      <a href="user_profile_update.php" class="btn">update profile</a>
      <a href="logout.php" class="delete-btn">logout</a>
      
   </div>

</section>
   

</body>
</html>