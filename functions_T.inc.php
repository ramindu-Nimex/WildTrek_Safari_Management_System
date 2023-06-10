<?php

function emptyInputs($admin_Id, $package_name, $package_Type, $description, $package_price, $hotel_Id, $room_Class_Id, $package_image){

    if(empty($admin_Id)||empty($package_name)||empty($package_price)||empty($package_Type)||empty($description)||empty($hotel_Id)||empty($room_Class_Id)||empty($package_image)){
        $result=true;
    }else{
        $result=false;
    }
    return $result;
}



function createPackage($conn,$admin_Id,$package_name,$package_Type,$description,$package_price,$hotel_Id,$room_Class_Id,$package_image, $package_image_tmp_name,$package_image_folder){

    $sql = "INSERT INTO hotel_package (Package_Name, Package_Price, Package_Type, Package_Description, Hotel_ID, Room_Class_ID, Administrator_ID, Image) VALUES ('$package_name', '$package_price', '$package_Type', '$description', '$hotel_Id', '$room_Class_Id', '$admin_Id', '$package_image_folder')";

    $upload=mysqli_query($conn,$sql);

    if($upload==true){
        move_uploaded_file($package_image_tmp_name,$package_image_folder);
        header('Location: ./view_packages_T.php');
        exit();
    }else{
        //echo "error1:".$conn->error;
    }

    
    exit();
}

function deletePackage($conn,$package_Id){
    $delete="DELETE FROM `hotel_package` WHERE `Package_ID`='$package_Id'";
    mysqli_query($conn,$delete);
    header('Location:./view_packages_T.php');
    exit();
}

function  updatePackage($conn, $admin_Id,$package_Id, $package_name, $package_Type, $description, $package_price, $hotel_Id, $room_Class_Id, $package_image, $package_image_tmp_name, $package_image_folder){
    $update = "UPDATE `hotel_package` SET `Package_Name`='$package_name',`Package_Price`='$package_price',`Package_Type`='$package_Type',`Package_Description`='$description',`Hotel_ID`='$hotel_Id',`Room_Class_ID`='$room_Class_Id',`Administrator_ID`='$admin_Id',`Image`='$package_image_folder' WHERE `Package_ID`='$package_Id'";

    $updated=mysqli_query($conn,$update);

    if($updated==true){
        move_uploaded_file($package_image_tmp_name,$package_image_folder);
        header('Location: ./view_packages_T.php');
        exit();
    }else{
        echo "error:".$conn->error;
    }

    
    exit();
}
