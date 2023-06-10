<?php include_once 'P_header.php'; ?>

<?php
include 'connectionRamindu.php';
//$UName = $_SESSION['userName'];
//$sql = "SELECT * FROM hotel_reservation ORDER BY Hotel_Res_ID DESC";
$sql = "SELECT * FROM hotel_reservation ORDER BY Hotel_Res_ID ";
//WHERE User_ID = $UName
$result = $conn->query($sql);

?>

<div class="row">
    <table class="table">
        <thead>
            <tr>
                <th>Reservation ID</th>
                <th>Package Name</th>
                <th>Hotel Name</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Booking For</th>
                <th>Room Type</th>
                <th>No Of Adults</th>
                <th>No Of Children</th>
                <th>Check In time</th>
                <th>Check Out time</th>
                <th>Total Price</th>
                <th>Special Request</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    // Fetch the package name based on the Package_ID
                    $packageID = $row['Package_ID'];
                    $packageQuery = "SELECT `Package_Name` FROM `hotel_package` WHERE `Package_ID` = '$packageID'";
                    $packageResult = $conn->query($packageQuery);
                    $packageName = '';
                    $HotelQuery = "SELECT `Hotel_Name` FROM `hotel` WHERE `Hotel_ID` = (SELECT `Hotel_ID` FROM `hotel_package` WHERE `Package_ID` = '$packageID')";
                    $HotelResult = $conn->query($HotelQuery);
                    $HotelName = '';

                    if ($packageResult->num_rows > 0) {
                        $packageRow = $packageResult->fetch_assoc();
                        $packageName = $packageRow['Package_Name'];
                    }
                    if ($HotelResult->num_rows > 0) {
                        $HotelRow = $HotelResult->fetch_assoc();
                        $HotelName = $HotelRow['Hotel_Name'];
                    }
                    

        ?>
        <tr>
            <td><?php echo $row['Hotel_Res_ID']; ?></td>
            <td><?php echo $packageName ?></td>
            <td><?php echo $HotelName?></td>
            <td><?php echo $row['Full_Name']; ?></td>
            <td><?php echo $row['Email']; ?></td>
            <td><?php echo $row['Booking_For']; ?></td>
            <td><?php echo $row['Room_Type']; ?></td>
            <td><?php echo $row['No_Of_Adult']; ?></td>
            <td><?php echo $row['No_Of_Children']; ?></td>
            <td><?php echo $row['Check_In_Date']; ?></td>
            <td><?php echo $row['Check_Out_Date']; ?></td>
            <td><?php echo $row['Total_Price']; ?></td>
            <td><?php echo $row['Special_Request']; ?></td>
            <td> <!-- action buttons -->
                <div class = "buttonE">
                    <a href="P_edit.php?edit=<?php echo $row['Hotel_Res_ID']; ?>">Edit</a>
                    <a href="P_delete.php?delete=<?php echo $row['Hotel_Res_ID']; ?>" id = "del">Delete</a>
                </div>
            </td>
        </tr>
        <?php
                }
            }
        ?>
    </table>
    <div  class="add-new-button">
        <a href="P_reserve.php">Add New +</a>
    </div>
</div>

<?php include_once 'P_footer.php'; ?>
