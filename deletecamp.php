<?php

   include "connectionRamindu.php";
   $id = $_GET['id'];
   $sql = "DELETE FROM campreservation WHERE id=$id";
   $result = mysqli_query($conn, $sql);

   if($result) {
     header('location:viewCampDetails.php');
   }
   else {
        die(mysqli_error($conn));
   }
?>