<?php
   include "connectionRamindu.php";
   session_start();
   $UserID = $_SESSION['uID'];
?>

<?php
   include 'connectionRamindu.php';

   if(isset($_POST['create'])) {
      $name = $_POST['name'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $date = $_POST['date'];
      $location = $_POST['location'];
      $package = $_POST['package'];
      $Participants = $_POST['Participants'];
      $duration = $_POST['duration']; 
      $request = $_POST['request'];

      $uname = $_SESSION['userName'];  
      $sql = "INSERT INTO campreservation(name, phone, email, date, location, package, Participants, duration, request,userName) VALUES('$name','$phone','$email','$date','$location', '$package', '$Participants', '$duration', '$request','$uname')";

      $result = mysqli_query($conn,$sql);

      if($result) {
         header('location:viewCampDetails.php');
      }
      else {
         die(mysqli_error($conn));
      }
      $conn->close();
   }

   if(isset($_POST['update'])) {
      $id = $_POST['id'];
      $name = $_POST['name'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $date = $_POST['date'];
      $location = $_POST['location'];
      $package = $_POST['package'];
      $Participants = $_POST['Participants'];
      $duration = $_POST['duration'];
      $request = $_POST['request'];

      $name = $_SESSION['userName'];

      $sql = "UPDATE campreservation SET name = '$name', phone = '$phone', email = '$email', date = '$date', location = '$location', package = '$package' , Participants = '$Participants', duration = '$duration', request = '$request' WHERE id='$id'";

      $result = mysqli_query($conn,$sql);

      if($result) {
         header('location:viewCampDetails.php');
      }
      else {
         die(mysqli_error($conn));
      }
      $conn->close();
   }
?>