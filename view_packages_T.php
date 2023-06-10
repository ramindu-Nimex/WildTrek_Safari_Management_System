<?php
    include_once 'header_T.php';
    ?>
    <div>
        <?php
         require_once 'connectionRamindu.php';
         $select=mysqli_query($conn,"SELECT*FROM hotel_package");
        ?><br><br>
        <div class="form-group">
        <input type="text" id="myInput" onkeyup="searchTable()" placeholder="Search.." class="form-control">

        </div>
        <form action="./add_packages_T.php" method="post">
                            <div class="addbutton">
                            <button type="submit" class="addnew_T" name="add_T">ADD NEW</button> 
                        </div>
                    </form>
        <section class="View_Data_T2"  >
                    

            
           

            
            <div class="content_package">
                <p>
                    <table id="mySection" >
                    <?php
                while($row=mysqli_fetch_assoc($select)){
            ?>

                        <tr>
                            <td>
                                <div class="image">
                                <img src="<?php echo $row['Image'];?>" height=100 alt="Package_image" class="image1">
                                </div>
                            </td>
               
                            <td><?php echo $row['Package_ID'];?></td>
                                <td>
                                <?php echo $row['Package_Name'];?>
                                </td>
                                <td>  <?php echo $row['Administrator_ID'];?></td>
                                <td>
                                <?php echo $row['Package_Description'];?>
                            </td>
                            <td>
                                <?php echo $row['Package_Price'];?>
                            </td>

                            <td>
                                 <?php echo $row['Hotel_ID'];?> 
                            </td>
                            <td>
                                 <?php echo $row['Room_Class_ID'];?> 
                            </td>
                            <td>
                                 <?php echo $row['Package_Type'];?> 
                            </td>
                            <td>
                            <form action="edit_packages_T.php" method="GET">
                                <input type="hidden" name="edit" value="<?php echo $row['Package_ID']; ?>">
                                <button type="submit" class="edit_T"><i class="material-icons">edit</i></button>
                                </form>
                            </td>
                            <td>
                            
                            <form action="delete_packages_T.inc.php" method="GET">
                                <input type="hidden" name="delete" value="<?php echo $row['Package_ID']; ?>">
                                <button type="submit" class="delete_T"><i class="material-icons">delete</i></button>
                                </form>
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
