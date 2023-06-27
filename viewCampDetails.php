<?php
    include "connectionRamindu.php";
    session_start();
    $UserID = $_SESSION['uID'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>View Camping Details</title>
   <link rel="stylesheet" href="styles/raminduformview.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
   <!-- header -->
   <header>
        <p>WildTrek - Best Under Sri Lankan Sky</p>
        <!-- navigation bar-->
        <nav>
            <div class="pic">
                <img src="images/logo & footer image/download.png" alt="logo" width="32px" height="32px">
                <h1 class="logo">WILD<span>TREK</span></h1>
            </div>

            <input type="checkbox" name="" id="menu">
            <label for="menu"><i class="fas fa-bars"></i></label>
            <label for="menu"><i class="fas fa-times"></i></label>

            <ul class="menu">
                <li><a href="./r_main.php" target="_blank">Home</a></li>
                <li><a href="#">Safari Hotels</a></li>
                <li class="drop"><a href="#">Safari Tours<i class="fa-solid fa-caret-down"></i></a>
                    <ul class="submenu">
                        <li><a href="./r_jeepreservation.php" target="_blank">Safari Jeep Reservation</a></li>
                        <li><a href="./r_campingreservation.php" target="_blank">Camping Reservation</a></li>
                    </ul>
                </li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="./r_ourteam.php" target="_blank">Meet our team</a></li>
                <li><a href="#">About Us</a></li>
                <li class="sign"><a href="#">Hi, <?php echo $_SESSION['userName']; ?><i class="fa-solid fa-user"></i></a></li>
            </ul>
        </nav>
    </header>

    <!-- form view -->
    <section>
      <div class="tableviewhead">
         <h1>Camp Reservation List</h1>
         <div class="left">
            <form action="searchcampingdata.php" method="post">
                <input type="text" placeholder="search data" name="search">
                <button name="submit">Search</button>
            </form>
            <a href="./campingForm.php">Add</a>
         </div>
      </div>
      <table border="1">
         <thead>
            <th>Reservation_ID</th>
            <th>Full Name</th>
            <th>Contact Number</th>
            <th>E-mail</th>
            <th>Date of Reservation</th>
            <th>Locations</th>
            <th>Packages</th>
            <th>No_Of_Participants</th>
            <th>Safari Duration</th>
            <th>Special Request</th>
            <th style="width:30%">Operations</th>
         </thead>

         <tbody>
            <?php
               include "connectionRamindu.php";
               $sql = "SELECT * FROM campreservation";
               $result = mysqli_query($conn, $sql);

               while($row = mysqli_fetch_assoc($result)) {
                  ?>
                     <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["name"]; ?></td>
                        <td><?php echo $row["phone"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["date"]; ?></td>
                        <td><?php echo $row["location"]; ?></td>
                        <td><?php echo $row["package"]; ?></td>
                        <td><?php echo $row["Participants"]; ?></td>
                        <td><?php echo $row["duration"]; ?></td>
                        <td><?php echo $row["request"]; ?></td>

                        <td>
                           <a href="moredetailscamp.php?id=<?php echo $row["id"]; ?>" target="_blank" class="read">Read More</a>
                           <a href="updateCampdetails.php?id=<?php echo $row["id"]; ?>" target="_blank" class="update">Update</a>
                           <a href="deletecamp.php?id=<?php echo $row["id"]; ?>" target="_blank" class="delete" onclick="return confirmDelete();">Delete</a>
                        </td>
                     </tr>
                  <?php
               }
            ?>
         </tbody>
      </table>
   </section>

   <!-- footer -->
   <footer>
        <div class="Mcontent">
            <div class="left box">
                <h2>Abou Us</h2>
                <div class="content">
                    <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Delectus voluptates sapiente, consectetur id quos reiciendis
                    omnis, ab, ex unde sequi earum dignissimos. Sit architecto 
                    blanditiis impedit dolores harum quam. Inventore sed eaque 
                    libero et, similique repellendus exercitationem quos nihil 
                    totam dolore, laudantium facilis nostrum modi assumenda hic 
                    dolores, rerum nulla!</P>

                    <div class="social">
                        <a href="#"><i class="fa-brands fa-facebook"></i></span></a>
                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    </div>
    
                    <div class="tearms">
                        <a href="#">Tearms of condition | </a>
                        <a href="#">Privacy policy | </a>
                        <a href="#">Faq</a>
                    </div>
                </div>

            </div>

            <div class="center box">
                <h2>Contact Us</h2>
                <div class="content">
                    <div class="place">
                        <span class="fas fa-map-marker-alt"></span>
                        <span class="text">
                            No.122/A Malabe, Colombo
                        </span>
                    </div>
                    <div class="phone">
                        <span class="fas fa-phone-alt"></span>
                        <span class="text">
                            +94773322443
                        </span>
                    </div>
                    <div class="email">
                        <span class="fas fa-envelope"></span>
                        <span class="text">
                            info@wildtrek.com
                        </span>
                    </div>
                    <div class="latest">
                        <img src="images/logo & footer image/5.avif" alt="" width="100px" height="80px">
                        <img src="images/logo & footer image/5.jpg" alt="" width="100px" height="80px">
                        <img src="images/logo & footer image/6.jpg" alt="" width="100px" height="80px">
                        <img src="images/logo & footer image/8.jpg" alt="" width="100px" height="80px">
                    </div>
                </div>
            </div>

            <div class="right box">
                <h2>News Letter</h2>
                <div class="content">
                    <form action="">
                        <div class="email">
                            <input type="email" placeholder="Your Email" required>
                        </div>
                        <div class="btn">
                            <button type="submit">Send</button>
                        </div>
                    </form>
                    <div class="logo2">
                    <img src="images/logo & footer image/download.png" alt="logo" width="32px" height="32px">
                    <h1>WILD<span>TREK</span></h1>
                    </div>

                    <div class="top"> 
                        <a href="#"><i class="fa-solid fa-arrow-up"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom">
            <div>
                <span class="credit">
                    Designed & Developed By
                    <a href="">Team Wild-Trek</a>
                    |
                </span>
                <span>
                    &copy;
                </span>
                <span>
                    2023 All Right Reserved
                </span>
            </div>
        </div>

    </footer>
    <script src="./raminduform.js"></script>
    
    <script>
          function confirmDelete() {
            var text = confirm("Do you want to delete");
            if(!text) {
                return false;
            }
        }
    </script>
</body>
</html>