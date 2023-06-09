<?php
 

 include "connectionRamindu.php";

$fullName = $_POST['fullName'];
$uName = $_POST['userName'];
$Email = $_POST['email'];
$pwd = $_POST['password'];
$type = $_POST['citizens'];
$gender = $_POST['gender'];
$nic = $_POST['nic'];
$phone = $_POST['contact'];

createUser($fullName,$uName,$Email,$pwd,$type,$gender,$nic,$phone);

function createUser($fullName,$uName,$Email,$pwd,$type,$gender,$nic,$phone) {
    global $conn;
    $sql ="INSERT INTO users(fullName,userName,email,password,cType,gender,nicPass,contactNo) VALUES('$fullName','$uName','$Email','$pwd','$type','$gender','$nic','$phone')";
		
    if($conn->query($sql))
		{
			echo "Inserted Successfully ";
			header ("Location:s_loginForm.html");
		}
		else{
			echo "Error:".$conn->error;
		}
	}

	$conn->close();
	?>


























?>