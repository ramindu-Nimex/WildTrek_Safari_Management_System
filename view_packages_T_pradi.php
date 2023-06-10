<?php
    include_once 'header_T.php';
    ?>
    <div>
        
          <script>
                        function checkUsername(username) {
                if (username) {
                    window.location.href = "P_reserve.php";
                } else {
                    window.location.href = "s_loginForm.html";
                }
            }
        </script>
     
         <?php
         $select=mysqli_query($conn,"SELECT*FROM hotel_package");
        ?><br><br>
      
    
        <div class="form-group">
            <input type="text" id="myInput" onkeyup="searchTable()" placeholder="Search.." class="form-control">
        </div>
        <section class="View_Data_T2"  >
            
    <div class="content_package1">
                <p>
                    <table id="mySection"  >
                                        <?php
                                    while($row=mysqli_fetch_assoc($select)){
                                ?>

                        <tr>
                            <td>
                                <div class="image12">
                                <img src="<?php echo $row['Image'];?>" height=100 alt="Package_image" class="image1">
                                </div>
                            </td>
               
                           
                                <td>
                                <?php echo $row['Package_Name'];?><br>
                                </td>
                                <td>
                                <?php
                                $Hotel = $row['Hotel_ID'];
                                $hotelSelect = mysqli_query($conn, "SELECT `Hotel_Name` FROM `hotel` WHERE `Hotel_ID`='$Hotel'");
                                $row1 = mysqli_fetch_assoc($hotelSelect); 
                                $hotelName = $row1['Hotel_Name']; 
                                echo $hotelName; 
                                ?>
                                </td>
                                
                            <td>
                                 <?php echo $row['Package_Price'];?> 
                            </td>
                           
                            <td>
                                 <?php echo $row['Package_Type'];?> 
                            </td>
                            <td>
                            <form action="View_fullpackages_T.php" method="POST">
                                <input type="hidden" name="view" value="<?php echo $row['Package_ID']; ?>">
                                <button type="submit" class="view_T">VIEW</button>
                                </form>
                            </td>
                            <td>
                            
                            
                                <button type="submit" class="view_T"onclick="checkUsername('<?php echo $Username; ?>')" >RESERVE</button>
                                
                            </td>
                            
                        </tr>
                  
                        <?php };?>

                    </table>
                </p>
                

            </div>


                   


        </section>
        
    </div>
   
    
    

<?php
    include_once 'footer_T.php';
    ?>


