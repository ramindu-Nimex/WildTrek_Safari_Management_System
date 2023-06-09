<?php

   include "connectionRamindu.php";
   $id = $_GET['id'];
   $sql = "DELETE FROM jeepreservation WHERE id=$id";
   $result = mysqli_query($conn, $sql);

   if($result) {
      header('location:viewjeepdetails.php');
   }
   else {
        die(mysqli_error($conn));
   }
?>