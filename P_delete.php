<?php include_once 'P_header.php'; ?>
<?php
include 'connectionRamindu.php';

if(isset($_GET['delete'])){
    $Hotel_Res_ID = $_GET['delete'];

    $deleteQuery = "DELETE FROM `hotel_reservation` WHERE Hotel_Res_ID = '$Hotel_Res_ID'";
    if ($conn->query($deleteQuery) === TRUE) {

        // Delete successful
        header("Location: P_view.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<?php include_once 'P_footer.php'; ?>