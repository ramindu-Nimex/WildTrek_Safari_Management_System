<?php include_once 'P_header.php'; ?>
<?php
include 'connectionRamindu.php';

if (isset($_GET['edit'])) {
    $Hotel_Res_ID = $_GET['edit'];

    if (isset($_POST['update'])) {
        $Full_Name = $_POST["FullName"];
        $Email = $_POST["Email"];
        $Booking_For = $_POST["BookingFor"];
        $Hotel_Name = $_POST["HotelName"];
        $Package_Name = $_POST["HotelPackage"];
        $Check_In_Date = $_POST["CheckIntime"];
        $Check_Out_Date = $_POST["CheckOuttime"];
        $Room_Type = $_POST["countR"];
        $No_Of_Adult = $_POST["countA"];
        $No_Of_Children = $_POST["countC"];
        $Special_Request = $_POST["SpecialRequest"];

        $query = "SELECT `Package_ID` FROM `hotel_package` WHERE `Package_Name` = '$Package_Name'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $Package_ID = $row['Package_ID'];
    
            $query = "SELECT `Package_Price` FROM `hotel_package` WHERE `Package_ID`='$Package_ID'";
            $result = $conn->query($query);
            
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $packagePrice2 = $row['Package_Price'];
            
                $checkInDateTime = new DateTime($Check_In_Date);
                $checkOutDateTime = new DateTime($Check_Out_Date);
                $interval = $checkInDateTime->diff($checkOutDateTime);
                $numNights = $interval->format('%a');
    
                $totalPrice = $packagePrice2 * ($No_Of_Adult + $No_Of_Children) * $numNights;

            $update = "UPDATE hotel_reservation SET Package_ID = '$Package_ID', Full_Name = '$Full_Name', Email = '$Email', Booking_For = '$Booking_For', Check_In_Date = '$Check_In_Date', Check_Out_Date = '$Check_Out_Date', Room_Type = '$Room_Type', No_Of_Adult = '$No_Of_Adult', No_Of_Children = '$No_Of_Children', Total_Price = '$totalPrice', Special_Request = '$Special_Request' 
            WHERE Hotel_Res_ID = '$Hotel_Res_ID'";

            $upload = mysqli_query($conn,$update);

            if ($upload) {
                // Redirect to the view page
                header("Location: P_view.php");
                exit();
            } else {
                echo "Error updating reservation: " . $conn->error;
            }
        } else {
            echo "Error: Package not found";
        }
    }
 }
    $select = mysqli_query($conn, "SELECT * FROM hotel_reservation WHERE Hotel_Res_ID = '$Hotel_Res_ID'");
    $row = mysqli_fetch_assoc($select);

    if ($row){
?>
 <script src="P_Script.js"></script>
        <div class="background">
            <div class="transbox">
                <!--update form-->
                <div class="form">
                    <form method="POST" action="" onsubmit="return validateForm()">
                        <fieldset>
                            <legend><span class="number">1</span>Reservation Details</legend>
                            <input type="text" id="FullName" name="FullName" value="<?php echo $row["Full_Name"]; ?>" placeholder="Full Name *" required autocomplete="off">
                            <input type="email" id="Email" name="Email" value="<?php echo $row["Email"]; ?>" placeholder="Email *" required autocomplete="off">
                            <label for="guest">Who are you booking for?</label>
                            <select id="guest" name="BookingFor" required>
                                <optgroup label="Booking For"> 
                                    <option value="main_Guest" <?php if ($row["Booking_For"] == "main_Guest") echo "selected"; ?>>I am the main Guest</option>
                                    <option value="Guest" <?php if ($row["Booking_For"] == "Guest") echo "selected"; ?>>Booking is for someone else</option>
                                </optgroup>
                            </select>
                            <label for="hotel">Select your Hotel :</label>
                            <select id="hotel" name="HotelName" required>
                                <optgroup label="Hotel Name"> 
                                    <option value="Wild Coast Tented Lodge" <?php if ($row["Package_ID"] == "C001") echo "selected"; ?>>Wild Coast Tented Lodge</option>
                                    <option value="Leopard Nest" <?php if ($row["Package_ID"] == "A001") echo "selected"; ?>>Leopard Nest</option>
                                    <option value="Jetwing Yala" <?php if ($row["Package_ID"] == "L002") echo "selected"; ?>>Jetwing Yala</option>
                                    <option value="Cinnamon Yala" <?php if ($row["Package_ID"] == "L001" OR $row["Package_ID"] == "F001") echo "selected"; ?>>Cinnamon Yala</option>
                                    <option value="Yala Eco Tree House" <?php if ($row["Package_ID"] == "A002") echo "selected"; ?>>Yala Eco Tree House</option>
                                </optgroup>
                            </select>
                            <label for="package">Select your Hotel Package:</label>
                            <select id="package" name="HotelPackage" required>
                                <optgroup label="Hotel Package"> 
                                    <option value="Adventure Leopard Package" <?php if ($row["Package_ID"] == "A001") echo "selected"; ?>>Adventure Leopard Package</option>
                                    <option value="Adventure Eco Budget Tree Package" <?php if ($row["Package_ID"] == "A002") echo "selected"; ?>>Adventure Eco Budget Tree Package</option>
                                    <option value="Wild Lodge Package" <?php if ($row["Package_ID"] == "C001") echo "selected"; ?>>Wild Lodge Package</option>
                                    <option value="Sweet Family Package" <?php if ($row["Package_ID"] == "F001") echo "selected"; ?>>Sweet Family Package</option>
                                    <option value="Cinnamon Luxury Package" <?php if ($row["Package_ID"] == "L001") echo "selected"; ?>>Cinnamon Luxury Package</option>
                                    <option value="Jetwing Luxury Package" <?php if ($row["Package_ID"] == "L002") echo "selected"; ?>>Jetwing Luxury Package</option>
                                </optgroup>
                            </select>
                            <label for="count">Room Type: </label>
                            <input type="number" id="countR" name="countR" min="1" max="3" value="<?php echo $row["Room_Type"]; ?>" placeholder="Bed Count *" required>
                            <label for="count">No Of Adults: </label>
                            <input type="number" id="countA" name="countA" min="1" value="<?php echo $row["No_Of_Adult"]; ?>" placeholder="No Of Adults *" required>
                            <label for="count">No Of Children: </label>
                            <input type="number" id="countC" name="countC" min="0" value="<?php echo $row["No_Of_Children"]; ?>" placeholder="No Of Children *" required>
                            <label for="CheckInDate">Check In Date:</label>
                            <input type="datetime-local" id="CheckIntime" name="CheckIntime" value="<?php echo $row["Check_In_Date"]; ?>" required>
                            <label for="CheckOutDate">Check Out Date:</label>
                            <input type="datetime-local" id="CheckOuttime" name="CheckOuttime" value="<?php echo $row["Check_Out_Date"]; ?>" required>    
                        </fieldset>
                        <fieldset>
                            <legend><span class="number">2</span> Special Request</legend>
                            <textarea name="SpecialRequest" id="SpecialRequest" placeholder="Write your special request here. (optional)" autocomplete="off"><?php echo $row["Special_Request"]; ?></textarea>
                        </fieldset>
                        <input type="submit" id="resbtn" name="update" value="Update">
                    </form>
                </div>
            </div>
        </div>
<?php 
    } else {
        echo "no reservation found";
    }
    
}else {
    echo "Invalid reservation ID.";
}
?>

<?php include_once 'P_footer.php'; ?>
