<?php
    include_once 'header_T.php';
    ?>
    <div>
        <?php
         require_once 'connectionRamindu.php';
         if (isset($_POST['view'])) {
            $package_Id = $_POST['view'];
         $select=mysqli_query($conn,"SELECT*FROM `hotel_package` WHERE `Package_ID`='$package_Id'");
         }
        ?><br><br>
        
        <section class="View_Data_T"  >
                            <form  class="form-style" action="P_reserve.php" method="POST">
                            <?php
                            $row=mysqli_fetch_assoc($select)
                        ?>
                    <ul>
                    <li>
                    <div class="image">
                                <img src="<?php echo $row['Image'];?>" height=100 alt="Package_image" class="image2">
                                </div>

                    </li>
                    <div class="viewdataContain">
                    <li>
                    <h1>
                            <?php echo $row['Package_ID'];?>
                            </h1>
                       
                    </li>
                    <li>
                    <h3>
                                <?php echo $row['Package_Name'];?>
                                </h3>
                                
                                <?php echo $row['Package_Description'];?><br>
                                Rs. <?php echo $row['Package_Price'];?><br>
                    </li>
                    <li>
                    <?php
                                $Hotel = $row['Hotel_ID'];
                                $hotelSelect = mysqli_query($conn, "SELECT `Hotel_Name` FROM `hotel` WHERE `Hotel_ID`='$Hotel'");
                                $row1 = mysqli_fetch_assoc($hotelSelect); 
                                $hotelName = $row1['Hotel_Name'];
                                
                                echo $hotelName; 
                                ?>
                    </li>
                    <li>
                    <?php 
                                $Room_Class1 = $row['Room_Class_ID'];
                                $Room_Class2 = mysqli_query($conn, "SELECT `Room_Class` FROM `room_class` WHERE `Room_Class_ID`='$Room_Class1'");
                                $row2 = mysqli_fetch_assoc($Room_Class2); 
                                $Room_ClassName = $row2['Room_Class']; 

                                echo $Room_ClassName ; 
                                ?><br>
                        
                                 <?php echo $row['Package_Type'];?> <br>
                                 </li>
                    <li>
                    <button type="submit" class="add_T">RESERVE</button>
                    </li>
                    </ul>
                    </div>
        </form>
                

            </div>


        </section>
        
    </div>

<?php
    include_once 'footer_T.php';
    ?>
