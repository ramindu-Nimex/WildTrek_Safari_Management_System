<?php
    include "connectionRamindu.php";
    session_start();
    $UserID = $_SESSION['uID'];
?>

<?php
   include "connectionRamindu.php";
   $id = $_GET['id'];
   $sql = "SELECT * FROM campreservation WHERE id=$id";
   $result = mysqli_query($conn,$sql);
   $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Update camp details</title>
   <link rel="stylesheet" href="styles/raminduform.css">
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
                <li><a href="./main.html" target="_blank">Home</a></li>
                <li><a href="#">Safari Hotels</a></li>
                <li class="drop"><a href="#">Safari Tours<i class="fa-solid fa-caret-down"></i></a>
                    <ul class="submenu">
                        <li><a href="./jeepreservation.html" target="_blank">Safari Jeep Reservation</a></li>
                        <li><a href="./campingreservation.html" target="_blank">Camping Reservation</a></li>
                    </ul>
                </li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="./ourteam.html" target="_blank">Meet our team</a></li>
                <li><a href="#">About Us</a></li>
                <li class="sign"><a href="#">Hi, <?php echo $_SESSION['userName']; ?> <i class="fa-solid fa-user"></i></a></li>
            </ul>
        </nav>
   </header>

   <!-- camping form -->
   <section>
      <h1>Edit Camping Reservation Form</h1>
      <form action="insertForcamping.php" method="post" class="form">
         <div class="inputbox">
            <label for="">Full Name : </label>
            <input type="text" name="name" value='<?php echo $row['name']; ?>'>
         </div>

         <div class="inputbox">
            <label for="">Contact Number : </label>
            <input type="text" name="phone" value='<?php echo $row['phone']; ?>'>
         </div>

         <div class="inputbox">
            <label for="">E-mail : </label>
            <input type="text" name="email" value='<?php echo $row['email']; ?>'>
         </div>

         <div class="inputbox">
            <label for="">Date of Reservation : </label>
            <input type="date" name="date" value='<?php echo $row['date']; ?>'>
         </div>

         <div class="inputbox">
            <label for="">Location : </label>
            <select name="location" id="">
               <option value="">Select Location</option>
               <option value="Yala" <?php if($row['location'] == "Yala"){echo "selected";} ?>>Yala</option>
               <option value="Udawalawe" <?php if($row['location'] == "Udawalawe"){echo "selected";} ?>>Udawalawe</option>
               <option value="Wilpattu" <?php if($row['location'] == "Wilpattu"){echo "selected";} ?>>Wilpattu</option>
               <option value="Kumana" <?php if($row['location'] == "Kumana"){echo "selected";} ?>>Kumana</option>
               <option value="Bundala" <?php if($row['location'] == "Bundala"){echo "selected";} ?>>Bundala</option>
               <option value="Minneriya" <?php if($row['location'] == "Minneriya"){echo "selected";} ?>>Minneriya</option>
            </select>
         </div>

         <div class="inputbox">
            <label for="">Package : </label>
            <select name="package" id="">
               <option value="">Select Package</option>
               <option value="Yala Standard Camping Package" <?php if($row['package'] == "Yala Standard Camping Package"){echo "selected";} ?>>Yala Standard Camping Package</option>
               <option value="Yala Luxury Camping Package" <?php if($row['package'] == "Yala Luxury Camping Package"){echo "selected";} ?>>Yala Luxury Camping Package</option>
               <option value="Yala Family Camping Package" <?php if($row['package'] == "Yala Family Camping Package"){echo "selected";} ?>>Yala Family Camping Package</option>
               <option value="Yala Adventure Camping Package" <?php if($row['package'] == "Yala Adventure Camping Package"){echo "selected";} ?>>Yala Adventure Camping Package</option>
               <option value="Udawalawe Overnight Camping Package" <?php if($row['package'] == "Udawalawe Overnight Camping Package"){echo "selected";} ?>>Udawalawe Overnight Camping Package</option>
               <option value="Udawalawe Luxury Camping Package" <?php if($row['package'] == "Udawalawe Luxury Camping Package"){echo "selected";} ?>>Udawalawe Luxury Camping Package</option>
               <option value="Udawalawe Family Camping Package" <?php if($row['package'] == "Udawalawe Family Camping Package"){echo "selected";} ?>>Udawalawe Family Camping Package</option>
               <option value="Wilpattu Standard Camping Package" <?php if($row['package'] == "Wilpattu Standard Camping Package"){echo "selected";} ?>>Wilpattu Standard Camping Package</option>
               <option value="Wilpattu Luxury Camping Package" <?php if($row['package'] == "Wilpattu Luxury Camping Package"){echo "selected";} ?>>Wilpattu Luxury Camping Package</option>
               <option value="Wilpattu Family Camping Package" <?php if($row['package'] == "Wilpattu Family Camping Package"){echo "selected";} ?>>Wilpattu Family Camping Package</option>
               <option value="Wilpattu Adventure Camping Package" <?php if($row['package'] == "Wilpattu Adventure Camping Package"){echo "selected";} ?>>Wilpattu Adventure Camping Package</option>
               <option value="Kumana Overnight Camping package" <?php if($row['package'] == "Kumana Overnight Camping package"){echo "selected";} ?>>Kumana Overnight Camping package</option>
               <option value="Kumana Wilderness Camping Package" <?php if($row['package'] == "Kumana Wilderness Camping Package"){echo "selected";} ?>>Kumana Wilderness Camping Package</option>
               <option value="Kumana Customizable Camping Package" <?php if($row['package'] == "Kumana Customizable Camping Package"){echo "selected";} ?>>Kumana Customizable Camping Package</option>
               <option value="Bundala Standard Camping Package" <?php if($row['package'] == "Bundala Standard Camping Package"){echo "selected";} ?>>Bundala Standard Camping Package</option>
               <option value="Bundala Luxury Camping Package" <?php if($row['package'] == "Bundala Luxury Camping Package"){echo "selected";} ?>>Bundala Luxury Camping Package</option>
               <option value="Bundala Premium Exclusive Camping Package" <?php if($row['package'] == "Bundala Premium Exclusive Camping Package"){echo "selected";} ?>>Bundala Premium Exclusive Camping Package</option>
               <option value="Minneriya Overnight Camping Package" <?php if($row['package'] == "Minneriya Overnight Camping Package"){echo "selected";} ?>>Minneriya Overnight Camping Package</option>
               <option value="Minneriya Luxury Camping Package" <?php if($row['package'] == "Minneriya Luxury Camping Package"){echo "selected";} ?>>Minneriya Luxury Camping Package</option>
               <option value="Minneriya Family Camping Package" <?php if($row['package'] == "Minneriya Family Camping Package"){echo "selected";} ?>>Minneriya Family Camping Package</option>
            </select>
         </div>

         <div class="inputbox">
            <label for="">Number of Participants : </label>
            <input type="text" name="Participants" value='<?php echo $row['Participants']; ?>'>
         </div>

         <div class="inputbox">
            <label for="">Safari Duration : </label>
            <input type="text" name="duration" value='<?php echo $row['duration']; ?>'>
         </div>

         <div class="inputbox">
            <label for="">Special Request : </label>
            <input type="text" name="request" value='<?php echo $row['request']; ?>'>
         </div>

         <div class="inputbox">
            <input type="hidden" name="id" value='<?php echo $row['id']; ?>'>
         </div>

         <div class="inputbox">
            <input type="submit" value="update" name="update" class="formbtn">
         </div>

      </form>
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
</body>
</html>