<?php
include_once 'header_T.php';

@include 'connectionRamindu.php';
  

?>

<div class="form_T">
     <h1>Edit Package<span>Give the Greatful Experience to Customer By Giving Best Hotel Packages</span></h1>
    <?php
    include_once 'edit_packages_T.inc.php';
    $select=mysqli_query($conn,"SELECT*FROM `hotel_package` WHERE `Package_ID`='$package_Id'");   
    while($row=mysqli_fetch_assoc($select)){
    ?>

        <form action="edit_packages_T.inc.php?edit=<?php echo $row['Package_ID'];?>" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
            <div class="section"><span>1</span>Administartor Details</div>
            <div class="inner-wrap">
                <label class="label1">Admin Id <input type="text" name="admin_Id_T" value="<?php echo $row['Administrator_ID']; ?>" /></label>
            </div>

            <div class="section"><span>2</span>Package Details</div>
            <div class="inner-wrap">
                <label class="label1">Package Name <input type="text" name="Package_name_T" value="<?php echo $row['Package_Name']; ?>" /></label>
                <label class="label1">Package Type</label>
                <label for="Luxury" class="label2"><input type="radio" name="Package_Type_T" value="LUXURY" <?php if ($row['Package_Type'] == 'LUXURY') { echo "checked"; } ?>>   LUXURY</label>
                <label for="Family" class="label2"><input type="radio" name="Package_Type_T" value="Family" <?php if ($row['Package_Type'] == 'Family') { echo "checked";} ?>>   FAMILY</label>
                <label for="Couple" class="label2"><input type="radio" name="Package_Type_T" value="Couple" <?php if ($row['Package_Type'] == 'Couple') {echo "checked";} ?>>   COUPLE</label>
                <label for="Adventure" class="label2"><input type="radio" name="Package_Type_T" value="Adventure" <?php if ($row['Package_Type'] == 'Adventure') {echo "checked";} ?>>   ADVENTURE</label><br>

                <label class="label1">Description <textarea name="Description_T"><?php echo $row['Package_Description']; ?></textarea></label>
                <label class="label1">Package Price <input type="text" name="Package_price_T" value="<?php echo $row['Package_Price']; ?>" /></label>
            </div>

            <div class="section"><span>3</span>Hotel Details</div>
            <div class="inner-wrap">
                <label for="Hotel_Id" class="label1">Hotel
                    <select id="Hotel_Id" name="Hotel_Id_T">
                        <optgroup label="Hotel_Id">
                            <option value="0"></option>
                            <option value="H001" <?php echo ($row['Hotel_ID'] == 'H001') ? 'selected' : ''; ?>>Wild Coast Tented Lodge</option>
                            <option value="H002" <?php echo ($row['Hotel_ID'] == 'H002') ? 'selected' : ''; ?>>Leopard Nest</option>
                            <option value="H003" <?php echo ($row['Hotel_ID'] == 'H003') ? 'selected' : ''; ?>>Jetwing Yala</option>
                            <option value="H004" <?php echo ($row['Hotel_ID'] == 'H004') ? 'selected' : ''; ?>>Cinnamon Yala</option>
                            <option value="H005" <?php echo ($row['Hotel_ID'] == 'H005') ? 'selected' : ''; ?>>Yala Eco Tree House</option>
                        </optgroup>
                    </select>
                </label>
                <label for="Romm_Class_Id" class="label1">Room Class 
                    <select id="Room_Class_Id" name="Room_Class_Id_T">
                        <optgroup label="Room_Class_Id">
                            <option value="0"></option>
                            <option value="DH003"<?php echo ($row['Room_Class_ID'] == 'DH003') ? 'selected' : ''; ?>>Deluxe-Jetwing Yala</option>
                            <option value="DH004"<?php echo ($row['Room_Class_ID'] == 'DH004') ? 'selected' : ''; ?>>Deluxe-Cinnamon Yala</option>
                            <option value="LH003"<?php echo ($row['Room_Class_ID'] == 'LH003') ? 'selected' : ''; ?>>Lodge-Jetwing Yala</option>
                            <option value="LH004"<?php echo ($row['Room_Class_ID'] == 'LH004') ? 'selected' : ''; ?>>Lodge-Cinnamon Yala</option>
                            <option value="LH001"<?php echo ($row['Room_Class_ID'] == 'LH001') ? 'selected' : ''; ?>>Lodge- Wild Coast Tented Lodge</option>
                            <option value="SH003"<?php echo ($row['Room_Class_ID'] == 'SH003') ? 'selected' : ''; ?>>Standard-Jetwing Yala</option>
                            <option value="SH004"<?php echo ($row['Room_Class_ID'] == 'SH004') ? 'selected' : ''; ?>>Standard-Cinnamon Yala</option>
                            <option value="TH002"<?php echo ($row['Room_Class_ID'] == 'TH002') ? 'selected' : ''; ?>>Tree House - Leopard Nest</option>
                            <option value="TH005"<?php echo ($row['Room_Class_ID'] == 'TH005') ? 'selected' : ''; ?>>Tree House-Yala Eco Tree House</option>
                            
                        </optgroup>
                    </select>
            </label>
            </div>

            <div class="section"><span>4</span>Package Image</div>
            <div class="inner-wrap">
            <label for="Package_Images" class="label1">Hotel Package Images
                <input type="file" name="Image_T" accept="image/png,image/jpeg,image/jpg" class="image">
            </label>
                
            </div>

            <div class="button-section">
                <input type="submit" name="update_package_T" value="Update Package">
            </div>
        </form>
        <?php
    };
    ?>
    
</div>


<?php
    include_once 'footer_T.php';
    ?>