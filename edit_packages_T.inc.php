<?php
    require_once 'connectionRamindu.php';

    if (isset($_GET['edit'])) {
        $package_Id = $_GET['edit'];
    
            
                if (isset($_POST['update_package_T'])) {
                    $admin_Id = $_POST["admin_Id_T"];
                    $package_name = $_POST["Package_name_T"];
                    $package_Type = $_POST["Package_Type_T"];
                    $description = $_POST["Description_T"];
                    $package_price = $_POST["Package_price_T"];
                    $hotel_Id = $_POST["Hotel_Id_T"];
                    $room_Class_Id = $_POST["Room_Class_Id_T"];
    
                    if (isset($_FILES["Image_T"]) && $_FILES["Image_T"]["error"] === UPLOAD_ERR_OK) {
                        $package_image = $_FILES["Image_T"]["name"];
                        $package_image_tmp_name = $_FILES["Image_T"]["tmp_name"];
                        $package_image_folder = './Images_T/uploadedImages/' . $package_image;
    
                       
                            $update = "UPDATE hotel_package SET Package_Name='$package_name',Package_Price='$package_price',Package_Type='$package_Type',Package_Description='$description',Hotel_ID='$hotel_Id',Room_Class_ID='$room_Class_Id',Administrator_ID='$admin_Id',Image='$package_image_folder' WHERE Package_ID='$package_Id'";
                        
                            $updated=mysqli_query($conn,$update);
                        
                            if($updated==true){
                                move_uploaded_file($package_image_tmp_name,$package_image_folder);
                                header('Location: ./view_packages_T.php');
                                exit();
                            }else{
                                echo "error:".$conn->error;
                            }
                        
                            
                            exit();
                        
                    } else {
                        $update = "UPDATE hotel_package SET Package_Name='$package_name',Package_Price='$package_price',Package_Type='$package_Type',Package_Description='$description',Hotel_ID='$hotel_Id',Room_Class_ID='$room_Class_Id',Administrator_ID='$admin_Id' WHERE Package_ID='$package_Id'";
                        
                        $updated=mysqli_query($conn,$update);
                    
                        if($updated==true){
                            header('Location: ./view_packages_T.php');
                            exit();
                        }else{
                            echo "error:".$conn->error;
                        }
                    
                        
                        exit();
                    }
                }
            }

