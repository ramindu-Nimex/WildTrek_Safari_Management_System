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
   <title>Camping Reservation Form</title>
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
      <h1>Camping Reservation Form</h1>
      <form action="insertForcamping.php" method="post" class="form">
         <div class="inputbox">
            <label for="">Full Name : </label>
            <input type="text" name="name" placeholder="Enter Full Name" required>
         </div>

         <div class="inputbox">
            <label for="">Mobile Number : </label>
            <input type="text" name="phone" placeholder="Enter Mobile Number" required>
         </div>

         <div class="inputbox">
            <label for="">E-mail Address : </label>
            <input type="text" name="email" placeholder="Enter Email Address" required>
         </div>

         <div class="inputbox">
            <label for="">Date of Reservation : </label>
            <input type="date" name="date" required>
         </div>

         <div class="inputbox">
            <label for="">Location : </label>
            <select name="location" id="">
               <option value="">Select Location</option>
               <option value="Yala">Yala</option>
               <option value="Udawalawe">Udawalawe</option>
               <option value="Wilpattu">Wilpattu</option>
               <option value="Kumana">Kumana</option>
               <option value="Bundala">Bundala</option>
               <option value="Minneriya">Minneriya</option>
            </select>
         </div>

         <div class="inputbox">
            <label for="">Package : </label>
            <select name="package" id="">
               <option value="">Select Package</option>
               <option value="Yala Standard Camping Package">Yala Standard Camping Package</option>
               <option value="Yala Luxury Camping Package">Yala Luxury Camping Package</option>
               <option value="Yala Family Camping Package">Yala Family Camping Package</option>
               <option value="Yala Adventure Camping Package">Yala Adventure Camping Package</option>
               <option value="Udawalawe Overnight Camping Package">Udawalawe Overnight Camping Package</option>
               <option value="Udawalawe Luxury Camping Package">Udawalawe Luxury Camping Package</option>
               <option value="Udawalawe Family Camping Package">Udawalawe Family Camping Package</option>
               <option value="Wilpattu Standard Camping Package">Wilpattu Standard Camping Package</option>
               <option value="Wilpattu Luxury Camping Package">Wilpattu Luxury Camping Package</option>
               <option value="Wilpattu Family Camping Package">Wilpattu Family Camping Package</option>
               <option value="Wilpattu Adventure Camping Package">Wilpattu Adventure Camping Package</option>
               <option value="Kumana Overnight Camping package">Kumana Overnight Camping package</option>
               <option value="Kumana Wilderness Camping Package">Kumana Wilderness Camping Package</option>
               <option value="Kumana Customizable Camping Package">Kumana Customizable Camping Package</option>
               <option value="Bundala Standard Camping Package">Bundala Standard Camping Package</option>
               <option value="Bundala Luxury Camping Package">Bundala Luxury Camping Package</option>
               <option value="Bundala Premium Exclusive Camping Package">Bundala Premium Exclusive Camping Package</option>
               <option value="Minneriya Overnight Camping Package">Minneriya Overnight Camping Package</option>
               <option value="Minneriya Luxury Camping Package">Minneriya Luxury Camping Package</option>
               <option value="Minneriya Family Camping Package">Minneriya Family Camping Package</option>
            </select>
         </div>

         <div class="inputbox">
            <label for="">Number of Participants : </label>
            <input type="text" name="Participants" placeholder="Enter Number of Participants" required>
         </div>

         <div class="inputbox">
            <label for="">Safari Duration : </label>

            <input type="text" name="duration" placeholder="Enter Safari Duration" required>
         </div>

         <div class="inputbox">
            <label for="">Special Request : </label>
            <input type="text" name="request" placeholder="Enter Special Request" required>
         </div>

         <div class="inputbox"></div>
            <input type="checkbox"  id="checkBox" class="inputStyle" onclick="enableButton()"> Accept Privacy policy and Terms
        </div>

        <div class="inputbox">
            <input type="submit" value="Submit" name="create" class="formbtn" id="submitBtn" disabled>
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