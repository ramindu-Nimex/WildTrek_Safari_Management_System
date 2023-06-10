<?php
if (isset($_POST["add_pacakage_T"])) {
    $admin_Id = $_POST["admin_Id_T"];
    $package_name = $_POST["Package_name_T"];
    $package_Type = $_POST["Package_Type_T"];
    $description = $_POST["Description_T"];
    $package_price = $_POST["Package_price_T"];
    $hotel_Id = $_POST["Hotel_Id_T"];
    $room_Class_Id = $_POST["Room_Class_Id_T"];
   

    if (isset($_FILES["Image_T"])) {
        $package_image = $_FILES["Image_T"];
        $package_image_tmp_name = $package_image['tmp_name'];
        $package_image_folder = './Images_T/uploadedImages/' . $package_image['name'];

        require_once 'connectionRamindu.php';
        require_once 'functions_T.inc.php';

        $emptyInput= emptyInputs($admin_Id, $package_name, $package_Type, $description, $package_price, $hotel_Id, $room_Class_Id, $package_image);

        if($emptyInput !==false){
            header('Location: ./add_packages_T.php');
            exit();
        }

        createPackage($conn, $admin_Id, $package_name, $package_Type, $description, $package_price, $hotel_Id, $room_Class_Id, $package_image, $package_image_tmp_name, $package_image_folder);
    } else {
        echo "Error: Image file is not uploaded.";
    }
} else {
    header('Location: ./add_packages_T.php');
}


