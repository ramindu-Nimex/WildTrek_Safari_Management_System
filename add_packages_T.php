<?php
    include_once 'header_T.php';
    ?>
    

<div class="form_T">
<h1>Add Packages<span>Give the Greatful Experience to Customer By Giving Best Hotel Packages</span></h1>
<form action="./add_packages_T.inc.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()" >
    <div class="section"><span>1</span>Administartor Details</div>
    <div class="inner-wrap">
        <label class="label1">Admin Id <input type="text" name="admin_Id_T" required autocomplete="off"/></label>
        
    </div>

    <div class="section"><span>2</span>Package Details</div>
    <div class="inner-wrap">
        <label class="label1">Package Name <input type="text" name="Package_name_T"required autocomplete="off" /></label>
        <label class="label1">Package Type</label>
            <label for="Luxury" class="label2"><input type="radio" name="Package_Type_T" value="LUXURY" required autocomplete="off" >   LUXURY</label>
            <label for="Family" class="label2"><input type="radio" name="Package_Type_T" value="Family"required autocomplete="off">   FAMILY</label>
            <label for="Couple" class="label2"><input type="radio" name="Package_Type_T" value="Couple"required autocomplete="off">   COUPLE</label>
            <label for="Adventure" class="label2"><input type="radio" name="Package_Type_T" value="Adventure" required autocomplete="off">   ADVENTURE</label><br>
        
        
        <label class="label1">Description  <textarea name="Description_T"required autocomplete="off"></textarea></label>
        <label class="label1">Package Price <input type="text" name="Package_price_T" required autocomplete="off" /></label>

    </div>

    <div class="section"><span>3</span>Hotel Details</div>
        <div class="inner-wrap">
        <label for="Hotel_Id" class="label1">Hotel  
                <select id="Hotel_Id" name="Hotel_Id_T"required autocomplete="off">
                        <optgroup label="Hotel_Id">
                        <option value="0"></option>
                            <option value="H001">Wild Coast Tented Lodge</option>
                            <option value="H002">Leopard Nest</option>
                            <option value="H003">Jetwing Yala</option>
                            <option value="H004">Cinnamon Yala</option>
                            <option value="H005">Yala Eco Tree House</option>
                            
                        </optgroup>
                </select>
        </label>
        <label for="Romm_Class_Id" class="label1">Room Class 
                    <select id="Room_Class_Id" name="Room_Class_Id_T" required autocomplete="off"  >
                        <optgroup label="Room_Class_Id">
                            <option value="0"></option>
                            <option value="DH003">Deluxe-Jetwing Yala</option>
                            <option value="DH004">Deluxe-Cinnamon Yala</option>
                            <option value="LH003">Lodge-Jetwing Yala</option>
                            <option value="LH004">Lodge-Cinnamon Yala</option>
                            <option value="LH001">Lodge- Wild Coast Tented Lodge</option>
                            <option value="SH003">Standard-Jetwing Yala</option>
                            <option value="SH004">Standard-Cinnamon Yala</option>
                            <option value="TH002">Tree House - Leopard Nest</option>
                            <option value="TH005">Tree House-Yala Eco Tree House</option>
                            
                        </optgroup>
                    </select>
            </label>
            <label for="Package_Images" class="label1">Hotel Package Images
                <input type="file" name="Image_T" accept="image/png,image/jpeg,image/jpg" class="image"required autocomplete="off">
            </label>
    </div>
    <div class="button-section">
     <input type="submit" name="add_pacakage_T" value="Confirm & Add" />
     
    </div>
</form>
</div>


<?php
    include_once 'footer_T.php';
    ?>
