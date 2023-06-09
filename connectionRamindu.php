<?php

   $serverName = 'localhost';
   $userName = 'root';
   $password = 'RH#2000@nimes';
   $dbName = 'wild_safari';

   // create connection
   $conn = new mysqli($serverName, $userName, $password, $dbName);

   // check connection
   if($conn->connect_error) {
      die("connection failed" . $conn->connect_error);
   }
   else {
      // echo "connection successfully <br>";
   }
?>