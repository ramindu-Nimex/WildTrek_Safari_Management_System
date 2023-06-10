<?php
include "connectionRamindu.php";
session_start();
$UserID = $_SESSION['uID'];


$uName =$_SESSION['userName'];
deleteData($uName);

function deleteData($uName){
    global $conn;

    $sql = "DELETE FROM users WHERE userName = '" . $uName . "'";
    
    if($conn->query($sql) === TRUE) {
        echo "Deleted Successfully";
     
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
