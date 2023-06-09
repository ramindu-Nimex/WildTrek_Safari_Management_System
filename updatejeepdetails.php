<?php
    include "connectionRamindu.php";
    session_start();
    $UserID = $_SESSION['uID'];
?>

<?php
   include "connectionRamindu.php";
   $id = $_GET['id'];
   $sql = "SELECT * FROM jeepreservation WHERE id=$id";
   $result = mysqli_query($conn,$sql);
   $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Update Jeep details</title>
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
                <img src="./download.png" alt="logo" width="32px" height="32px">
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

   <!-- jeep form -->
   <section>
      <h1>Edit Jeep Reservation Form</h1>
      <form action="insertForjeep.php" method="post" class="form">
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
            <label for="">Country : </label>
            <input type="text" name="country" value='<?php echo $row['country']; ?>'>
         </div>

         <div class="inputbox">
            <label for="">Location : </label>
            <select name="loacation" id="">
               <option value="">Select Location</option>
               <option value="Yala" <?php if($row['loacation'] == "Yala"){echo "selected";} ?>>Yala</option>
               <option value="Udawalawe" <?php if($row['loacation'] == "Udawalawe"){echo "selected";} ?>>Udawalawe</option>
               <option value="Wilpattu" <?php if($row['loacation'] == "Wilpattu"){echo "selected";} ?>>Wilpattu</option>
               <option value="Kumana" <?php if($row['loacation'] == "Kumana"){echo "selected";} ?>>Kumana</option>
               <option value="Bundala" <?php if($row['loacation'] == "Bundala"){echo "selected";} ?>>Bundala</option>
               <option value="Minneriya" <?php if($row['loacation'] == "Minneriya"){echo "selected";} ?>>Minneriya</option>
            </select>
         </div>

         <div class="inputbox">
            <label for="">Package : </label>
            <select name="package" id="">
               <option value="">Select Package</option>
               <option value="Yala Half-Day Safari Package" <?php if($row['package'] == "Yala Half-Day Safari Package"){echo "selected";} ?>>Yala Half-Day Safari Package</option>
               <option value="Yala Full-Day Safari Package" <?php if($row['package'] == "Yala Full-Day Safari Package"){echo "selected";} ?>>Yala Full-Day Safari Package</option>
               <option value="Yala Exclusive Private Safari Package" <?php if($row['package'] == "Yala Exclusive Private Safari Package"){echo "selected";} ?>>Yala Exclusive Private Safari Package</option>
               <option value="Yala Multi-Day Safari Package" <?php if($row['package'] == "Yala Multi-Day Safari Package"){echo "selected";} ?>>Yala Multi-Day Safari Package</option>
               <option value="Udawalawe Half-Day Safari Jeep Package" <?php if($row['package'] == "Udawalawe Half-Day Safari Jeep Package"){echo "selected";} ?>>Udawalawe Half-Day Safari Jeep Package</option>
               <option value="Udawalawe Full-Day Safari Jeep Package" <?php if($row['package'] == "Udawalawe Full-Day Safari Jeep Package"){echo "selected";} ?>>Udawalawe Full-Day Safari Jeep Package</option>
               <option value="Udawalawe Exclusive Private Safari Jeep Package" <?php if($row['package'] == "Udawalawe Exclusive Private Safari Jeep Package"){echo "selected";} ?>>Udawalawe Exclusive Private Safari Jeep Package</option>
               <option value="Udawalawe Sunrise or Sunset Safari Jeep Package" <?php if($row['package'] == "Udawalawe Sunrise or Sunset Safari Jeep Package"){echo "selected";} ?>>Udawalawe Sunrise or Sunset Safari Jeep Package</option>
               <option value="Wilpattu Half-Day Safari Package" <?php if($row['package'] == "Wilpattu Half-Day Safari Package"){echo "selected";} ?>>Wilpattu Half-Day Safari Package</option>
               <option value="Wilpattu Full-Day Safari Package" <?php if($row['package'] == "Wilpattu Full-Day Safari Package"){echo "selected";} ?>>Wilpattu Full-Day Safari Package</option>
               <option value="Wilpattu Exclusive Private Safari Package" <?php if($row['package'] == "Wilpattu Exclusive Private Safari Package"){echo "selected";} ?>>Wilpattu Exclusive Private Safari Package</option>
               <option value="Wilpattu Multi-Day Safari Package" <?php if($row['package'] == "Wilpattu Multi-Day Safari Package"){echo "selected";} ?>>Wilpattu Multi-Day Safari Package</option>
               <option value="Exploring Kumana National Park Safari Package" <?php if($row['package'] == "Exploring Kumana National Park Safari Package"){echo "selected";} ?>>Exploring Kumana National Park Safari Package</option>
               <option value="Kumana Sunrise Safari Package" <?php if($row['package'] == "Kumana Sunrise Safari Package"){echo "selected";} ?>>Kumana Sunrise Safari Package</option>
               <option value="Kumana Full-Day Safari Package" <?php if($row['package'] == "Kumana Full-Day Safari Package"){echo "selected";} ?>>Kumana Full-Day Safari Package</option>
               <option value="Kumana Private Jeep Safari Package" <?php if($row['package'] == "Kumana Private Jeep Safari Package"){echo "selected";} ?>>Kumana Private Jeep Safari Package</option>
               <option value="Bundala Morning Safari Package" <?php if($row['package'] == "Bundala Morning Safari Package"){echo "selected";} ?>>Bundala Morning Safari Package</option>
               <option value="Bundala Afternoon Safari Package" <?php if($row['package'] == "Bundala Afternoon Safari Package"){echo "selected";} ?>>Bundala Afternoon Safari Package</option>
               <option value="Bundala Full-Day Safari Package" <?php if($row['package'] == "Bundala Full-Day Safari Package"){echo "selected";} ?>>Bundala Full-Day Safari Package</option>
               <option value="Bundala Customized Safari Package" <?php if($row['package'] == "Bundala Customized Safari Package"){echo "selected";} ?>>Bundala Customized Safari Package</option>
               <option value="Minneriya Half-Day Safari Package" <?php if($row['package'] == "Minneriya Half-Day Safari Package"){echo "selected";} ?>>Minneriya Half-Day Safari Package</option>
               <option value="Minneriya Full-Day Safari Package" <?php if($row['package'] == "Minneriya Full-Day Safari Package"){echo "selected";} ?>>Minneriya Full-Day Safari Package</option>
               <option value="Minneriya Exclusive Private Safari Package" <?php if($row['package'] == "Minneriya Exclusive Private Safari Package"){echo "selected";} ?>>Minneriya Exclusive Private Safari Package</option>
            </select>
         </div>

         <div class="inputbox">
            <label for="">Number of Participants : </label>
            <input type="text" name="Participants" value='<?php echo $row['Participants']; ?>'>
         </div>

         <div class="inputbox">
            <label for="">Tour Guide : </label>
            <select name="tourguide" id="">
               <option value="">Select Tour Guide</option>
               <option value="P. DUMINDA SAMARAKOON" <?php if($row['tourguide'] == "P. DUMINDA SAMARAKOON"){echo "selected";} ?>>P. DUMINDA SAMARAKOON</option>
               <option value="K.P.R. KUMARA DHARMARATNE" <?php if($row['tourguide'] == "K.P.R. KUMARA DHARMARATNE"){echo "selected";} ?>>K.P.R. KUMARA DHARMARATNE</option>
               <option value="Y. SUPUN THARAKA" <?php if($row['tourguide'] == "Y. SUPUN THARAKA"){echo "selected";} ?>>Y. SUPUN THARAKA</option>
               <option value="DAYAN FERNANDO" <?php if($row['tourguide'] == "DAYAN FERNANDO"){echo "selected";} ?>>DAYAN FERNANDO</option>
            </select>
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
                        <img src="./5.avif" alt="" width="100px" height="80px">
                        <img src="./5.jpg" alt="" width="100px" height="80px">
                        <img src="./6.jpg" alt="" width="100px" height="80px">
                        <img src="./8.jpg" alt="" width="100px" height="80px">
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
                    <img src="./download.png" alt="logo" width="32px" height="32px">
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