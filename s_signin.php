<?php

  session_start();
 
  include "connectionRamindu.php";


  
  // Check if the form is submitted
  if (isset($_POST['login'])) {
      $uName = $_POST['userName'];
      $pwd = $_POST['password'];
      $accType ='account';
  
     //read
     $sql ="SELECT * FROM users WHERE userName = '$uName' AND password = '$pwd' ";
     $result = $conn->query($sql);

     if($result->num_rows >0){
        $row = mysqli_fetch_assoc($result);

        if($row['status'] == 'Deactivate'){
            echo "Your account is currently Deactivated.Please contact the administrator";
        }
        else{
            $_SESSION['loggedIn'] = true;
            echo "Login successful";
            $_SESSION["userName"] = $uName;
            $_SESSION['uID'] = $row['user_ID'];
         
            if ($row['account'] == 'admin') {
                header('Location: s_adminpanel.php'); // Redirect to admin page
                exit();
            } else {
                header('Location: s_homepage2.php'); // Redirect to customer page
                exit();
            }
            }
          
     }
     else{
        echo "Invalid username or password!!";
     }
     $result->free_result(); // Free the result set
     $conn->close();
  }
  ?>


      