<?php

include "connectionRamindu.php";;
session_start();
$UserID = $_SESSION['uID'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation and footer</title>
    <link rel="stylesheet" href="s_css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="s_css/s_homepage2.css">
    <link rel="stylesheet" href="s_css/s_profileEdit.css">

</head>
<body>
    <header>
        <p>WildTrek - Best Under Sri Lankan Sky</p>
        <!-- navigation bar-->
        <nav>
            <div class="pic">
                <img src="./s_images/download.png" alt="logo" width="32px" height="32px">
                <h1 class="logo">WILD<span>TREK</span></h1>
            </div>

            <input type="checkbox" name="" id="menu">
            <label for="menu"><i class="fas fa-bars"></i></label>
            <label for="menu"><i class="fas fa-times"></i></label>

            <ul class="menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">Safari Hotels</a></li>
                <li class="drop"><a href="#">Safari Tours<i class="fa-solid fa-caret-down"></i></a>
                    <ul class="submenu">
                        <li><a href="#">Safari Jeep Reservation</a></li>
                        <li><a href="#">Camping Reservation</a></li>
                    </ul>
                </li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Reserve Tours</a></li>
                <li><a href="#">Reserve Hotels</a></li>
                <li class = "sign"><a href ="./s_viewprofile.php">Hi, <?php echo $_SESSION['userName']; ?></a></li>
                <li class="sign"><a href="./s_RegisterForm.html"><i class="fa-solid fa-user-plus"></i> Logout</a></li>
            </ul>
        </nav>
    </header>
    <br> <br> <br> <br> <br> <br>

<?php
    include_once("s_config.php");

if (isset($_POST['btn2'])) {
    $name = $_SESSION['userName'];
    $fullName = $_POST['fullName'];
    $uName = $_POST['userName'];
    $Email = $_POST['email'];
    $pwd = $_POST['password'];
    $type = $_POST['citizens'];
    $gender = $_POST['gender'];
    $nic = $_POST['nic'];
    $phone = $_POST['contact'];

    $result = mysqli_query($conn, "UPDATE users SET fullName='$fullName', userName='$uName', email='$Email', password='$pwd', cType='$type', gender='$gender', nicPass='$nic', contactNo='$phone' WHERE userName='$name'");

    header("location:s_viewprofile.php");
}
?>

<?php
$name = $_SESSION['userName'];

$result = mysqli_query($conn, "SELECT * FROM users WHERE userName='$name'");
if ($result) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $fullName = $row['fullName'];
            $uName = $row['userName'];
            $Email = $row['email'];
            $pwd = $row['Password'];
            $type = $row['cType'];
            $gender = $row['gender'];
            $nic = $row['nicPass'];
            $phone = $row['contactNo'];
        }
    } else {
        echo "No results found.";
    }
} else {
    echo "Query execution failed: " . mysqli_error($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Details</title>
</head>

<fieldset class="fieldset1">
    <legend><h3><b>Your Details</b></h3></legend>
    <form name="update_packages" action="s_profileEdit.php" method="post">

        <label for="fullName">Full Name:</label><br>
        <input type="text" name="fullName" id="fullName" value="<?php echo $fullName; ?>" required><br><br>

        <label>User Name: </label><br>
        <input type="text" name="userName" required value="<?php echo $_SESSION['userName']; ?>"><br><br>

        <label for="email">Email Address:</label><br>
        <input type="text" name="email" id="email" value="<?php echo $Email; ?>" required><br><br>

        <label for="password">Password :</label><br>
        <input type="password" name="password" id="password" value="<?php echo $pwd; ?>" required><br><br>


        <label for="cType">Citizen Type:</label><br>
        <input type="text" name="citizens" id="citizens" value="<?php echo $type; ?>" required><br><br>

        
        <label for="gender">Gender :</label><br>
        <input type="text" name="gender" id="gender" value="<?php echo $gender; ?>" required><br><br>

        <label for="nic">NIC/Passport No:</label><br>
        <input type="text" name="nic" id="nic" value="<?php echo $nic; ?>" required><br><br>

        <label for="contact">Contact No:</label><br>
        <input type="text" name="contact" id="contact" value="<?php echo $phone; ?>" required><br><br>

		
	<input class="button bttn" type="submit" name="btn2" value="Update details">
	
</form>
</fieldset>
</div>



    <br> <br> <br> <br> <br> <br>

     <!--Footer-->
     <footer>
        <div class="Mcontent">
            <div class="left box">
                <h2>About Us</h2>
                <div class="content">
                    <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Delectus voluptates sapiente, consectetur id quos reiciendis
                    omnis, ab, ex unde sequi earum dignissimos. Sit architecto 
                    blanditiis impedit dolores harum quam. Inventore sed eaque 
                    libero et, similique repellendus exercitationem quos nihil 
                    totam dolore, laudantium facilis nostrum modi assumenda hic 
                    dolores, rerum nulla!</P>

                    <div class="social">
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    </div>
    
                    <div class="terms">
                        <a href="#">Terms and conditions | </a>
                        <a href="#">Privacy policy | </a>
                        <a href="#">FAQ</a>
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
                        <img src="s_images/5.avif" alt="" width="100px" height="80px">
                        <img src="s_images/5.jpg" alt="" width="100px" height="80px">
                        <img src="s_images/6.jpg" alt="" width="100px" height="80px">
                        <img src="s_images/8.jpg" alt="" width="100px" height="80px">
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
                    <img src="s_images/download.png" alt="logo" width="32px" height="32px">
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

    <script src="s_js/main.js"></script>
</body>
</html>

