<?php 
include "connectionRamindu.php";
?>

<?php

$inquiry_detail_list = '';

//getting the list of users

$query = "SELECT * FROM contactus ORDER BY User_Name";
$users = mysqli_query($conn,$query);

if($users) {
    while ($user = mysqli_fetch_assoc($users)){
        $inquiry_detail_list .= "<tr>";
        $inquiry_detail_list .= "<td>{$user['User_Name']}</td>";
        $inquiry_detail_list .= "<td>{$user['Email']}</td>";
        $inquiry_detail_list .= "<td>{$user['Phone']}</td>";
        $inquiry_detail_list .= "<td>{$user['Message']}</td>";
        $inquiry_detail_list .= "<td><a href=\"Aedit-contact.php?user_id={$user['Con_ID']}\">Edit</a>></td>";
        $inquiry_detail_list .= "<td><a href=\"Adeletecon.php?user_id={$user['Con_ID']}\" onclick=\"return confirm('Are you sure?')\">Delete</a>></td>";

        $inquiry_detail_list .= "</tr>";





    }
} else{
    echo "Database query failed.";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inquiry Details</title>
    <link rel="stylesheet" href="./main.css">
    <link rel="stylesheet" href="./adii.css/Acontactdetails.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <p>WildTrek - Best Under Sri Lankan Sky</p>
        <!-- navigation bar-->
        <nav>
            <div class="pic">
                <img src="../download.png" alt="logo" width="32px" height="32px">
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
                <li><a href="#">Meet our team</a></li>
                <li><a href="#">About Us</a></li>
                <li class="sign"><a href="#">Login</a></li>
                <li class="sign"><a href="#"><i class="fa-solid fa-user-plus"></i> Sign Up</a></li>
            </ul>
        </nav>
    </header>
    
    <!-- header ends  -->

    <div class="container">
        

            <main>
                <h1>Inquiry Detail <span><a href="Acontact.php"> Add New Inquiry  </a></span></h1>

                <table class="masterlist">

                    <tr>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>

                    <?php echo $inquiry_detail_list; ?>



                </table>



            </main>

        



    </div>












   
    <!--Footer-->
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
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
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
                        <img src="../5.avif" alt="" width="100px" height="80px">
                        <img src="../5.jpg" alt="" width="100px" height="80px">
                        <img src="../6.jpg" alt="" width="100px" height="80px">
                        <img src="../8.jpg" alt="" width="100px" height="80px">
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
                    <img src="../download.png" alt="logo" width="32px" height="32px">
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

    <script src="../main.js"></script>
</body>
</html>