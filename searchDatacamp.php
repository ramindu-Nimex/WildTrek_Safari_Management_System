<?php 
   include 'connectionRamindu.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="styles/raminduformmoreview.css">
</head>
<body>
   <?php
      $data = $_GET['data'];

      $sql = "SELECT * FROM campreservation WHERE id=$data";

      $result = mysqli_query($conn, $sql);

      if($result) {
         $row = mysqli_fetch_assoc($result);

         // echo '<h1>'.'Name : '.$row['name'].'</h1>';
         echo '<div class="formview">
         <div class="list">
            <h2>Full Name</h2>
            <p>'.$row['name'].'</p>
         </div>

         <div class="list">
            <h2>Contact Number</h2>
            <p>'.$row['phone'].'</p>
         </div>

         <div class="list">
            <h2>Email</h2>
            <p>'.$row['email'].'</p>
         </div>

         <div class="list"> 
            <h2>Reservation Date</h2>
            <p>'.$row['date'].'</p>
         </div>

         <div class="list">
            <h2>Location</h2>
            <p>'.$row['location'].'</p>
         </div>

         <div class="list">
            <h2>Package</h2>
            <p>'.$row['package'].'</p>
         </div>

         <div class="list">
            <h2>Number of Participants</h2>
            <p>'.$row['Participants'].'</p>
         </div>

         <div class="list">
            <h2>Safari Duration</h2>
            <p>'.$row['duration'].'</p>
         </div>

         <div class="list">
            <h2>Special Request</h2>
            <p>'.$row['request'].'</p>
         </div>
      </div>';
      }
   ?>
</body>
</html>