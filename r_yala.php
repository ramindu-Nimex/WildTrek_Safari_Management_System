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
    <title>Yala</title>
    <link rel="stylesheet" href="styles/r_location.css">
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
                <li class="sign"><a href="#">Hi, <?php echo $_SESSION['userName']; ?> <i class="fa-solid fa-user"></i></a></li>
            </ul>
        </nav>
    </header>

    <!-- yala -->
    <div class="location">

        <h1>Yala Safari Tours</h1>
        <div class="locationphoto">
            <img src="images/yala/yala1.jpg" alt="Yala1">
            <img src="images/yala/yala2.jpg" alt="Yala2">
            <img src="images/yala/yala3.jpg" alt="Yala3">
            <img src="images/yala/yala4.jpg" alt="Yala4">
            <img src="images/yala/yala5.jpg" alt="Yala5">
            <img src="images/yala/yala6.jpg" alt="Yala6">
            <img src="images/yala/yala7.jpg" alt="Yala7">
            <img src="images/yala/yala8.jpg" alt="Yala8">
            <img src="images/yala/yala9.jpg" alt="Yala9">
            <img src="images/yala/yala10.jpg" alt="Yala10">
            <img src="images/yala/yala11.jpg" alt="Yala11">
            <img src="images/yala/yala12.jpg" alt="Yala12">
        </div>
    </div>

    <!-- yala packages -->
    <div class="locationpackages">
        <div class="campjeep">
            <a href="#aboutlocationcamp">Yala Safari Camps Pakages</a>
            <a href="#aboutlocationJeep">Yala Safari Jeep Pakages</a>
        </div>

        <div class="aboutlocation" id="aboutlocationcamp">
            <h1>Yala Safari Camps Pakages</h1>
            <p>The Yala National Park is the second largest and most visited National Park in the country. 
               It is famed as one of the finest places to see Sri Lankan Leopard and Sri Lankan Elephant 
               and if it's your lucky day Sloth bear too. In addition there are over 100 species of birds, 
               32 species of mammals.47 species of reptiles and 18 species of amphibians.<br>
               The Yala Safari Camp gives you the opportunity to enjoy the amazing wildlife 
               from the comfort of your own safari camp. We have pitched tent on the border 
               of the Yala National Park; the jungle experience here is so awesome it's as good 
               as staying inside. The Yala Safari Camp is a permanent facility that includes a spacious 
               living area with real comfortable beds, soft pillows and crispy clean linen in addition to 
               other luxury amenities with en suite shower, toilets, running water and solar powered lamps.
            </p>
            <img src="images/yala/yala camp1.jpg" alt="Yala camp 1">
            <img src="images/yala/yala camp2.jpg" alt="Yala camp 2">
        </div>

        <div class="campackages">
            <div class="package">
                <h2>Yala Standard Camping Package<br>From Rs.30000 /=</h2>
                <h3><br><i class="fa-solid fa-clipboard-list"></i>Itinerary</h3>
                <div class="packagedetails">
                    <div>
                        <ul>
                            <li>1. Duration: 1 night</li>
                            <li>2. Includes a comfortable camping tent with bedding and basic amenities</li>
                            <li>3. Delicious meals provided, including dinner, breakfast, and snacks</li>
                            <li>4. Bonfire and evening entertainment</li>
                            <li>5. Shared bathroom facilities</li>
                            <li>6. Guided morning and evening nature walks around the campsite</li>
                            <li>7. Opportunity to spot wildlife and enjoy the tranquility of the park at night</li>
                        </ul>
                    </div>
                </div>
                <div class="layerPackage">
                    <h4><a href="#">Read More</a></h4>
                </div>
            </div>

            <div class="package">
                <h2>Yala Luxury Camping Package<br>From Rs.60000 /=</h2>
                <h3><br><i class="fa-solid fa-clipboard-list"></i>Itinerary</h3>
                <div class="packagedetails">
                    <div>
                        <ul>
                            <li>1. Duration: 1 or more nights</li>
                            <li>2. Spacious and well-appointed luxury tents with comfortable bedding and private en-suite facilities</li>
                            <li>3. Gourmet meals prepared by a dedicated chef, including multi-course dinners and breakfasts</li>
                            <li>4. Private dining area and personalized service</li>
                            <li>5. Evening campfire, live music, or cultural performances</li>
                            <li>6. Guided nature walks and birdwatching excursions</li>
                            <li>7. Option for additional activities such as wildlife safaris, nature photography workshops, or spa treatments</li>
                        </ul>
                    </div>
                </div>
                <div class="layerPackage">
                    <h4><a href="#">Read More</a></h4>
                </div>
            </div>

            <div class="package">
                <h2>Yala Family Camping Package<br>From Rs.50000 /=</h2>
                <h3><br><i class="fa-solid fa-clipboard-list"></i>Itinerary</h3>
                <div class="packagedetails">
                    <div>
                        <ul>
                            <li>1. Duration: 1 or more nights</li>
                            <li>2. Family-friendly camping experience with larger tents or family suites</li>
                            <li>3. Dedicated activities and entertainment for children, such as nature-themed games and storytelling sessions</li>
                            <li>4. Child-friendly meals and snacks</li>
                            <li>5. Safe and secure campsite environment</li>
                            <li>6. Educational nature walks and wildlife spotting for the whole family</li>
                        </ul>
                    </div>
                </div>
                <div class="layerPackage">
                    <h4><a href="#">Read More</a></h4>
                </div>
            </div>

            <div class="package">
                <h2>Yala Adventure Camping Package<br>From Rs.80000 /=</h2>
                <h3><br><i class="fa-solid fa-clipboard-list"></i>Itinerary</h3>
                <div class="packagedetails">
                    <div>
                        <ul>
                            <li>1. Duration: Customizable based on your preferences</li>
                            <li>2. Camping in more remote and secluded areas of Yala National Park</li>
                            <li>3. Guided hikes, night safaris, or specialized wildlife tracking experiences</li>
                            <li>4. Basic camping facilities with a focus on adventure and outdoor activities</li>
                            <li>5. Opportunities for wildlife research or conservation involvement</li>
                            <li>6. Customized itineraries for thrill-seekers and nature enthusiasts</li>
                        </ul>
                    </div>
                </div>
                <div class="layerPackage">
                    <h4><a href="#">Read More</a></h4>
                </div>
            </div>
        </div>

        <!-- jeep packages -->
        <div class="aboutlocation" id="aboutlocationJeep">
            <h1>Yala Safari Jeep Packages</h1>
            <p>
                Welcome to the Yala Wild Safari Jeep Adventure! Get ready for 
                an exhilarating journey into the heart of Sri Lanka's renowned 
                Yala National Park, one of the best wildlife sanctuaries in the country. 
                Our experienced team of safari guides and drivers are dedicated to providing 
                you with an unforgettable wildlife experience.<br>
                During your safari jeep adventure, you will have the opportunity to explore the 
                diverse ecosystems of Yala National Park, which is home to a wide variety of 
                wildlife species. Keep your eyes peeled for majestic elephants, elusive leopards, 
                sloth bears, crocodiles, and an abundance of birdlife. Our skilled guides will 
                share their knowledge and expertise, ensuring you have the best chances of spotting 
                these incredible creatures in their natural habitat.<br>
                Our customized safari jeeps are specially designed to offer comfort, safety, 
                and excellent visibility, allowing you to enjoy the safari experience to the fullest. 
                Equipped with open-air seating and knowledgeable guides, you will have a panoramic view 
                of the park's stunning landscapes and the opportunity to capture amazing photographs.<br>
                Whether you're a nature enthusiast, a wildlife photographer, or simply seeking an adventure 
                in the wild, our Yala Wild Safari Jeep Adventure promises an immersive and thrilling experience. 
                Join us on this safari journey and create memories that will last a lifetime.
            </p>
            <img src="images/yala/yala jeep 1.jpg" alt="Yala jeep 1">
            <img src="images/yala/yala jeep 2.jpg" alt="Yala jeep 2">
        </div>

        <div class="campackages">
            <div class="package">
                <h2>Yala Half-Day Safari Package<br>From Rs.8000 /=</h2>
                <h3><br><i class="fa-solid fa-clipboard-list"></i>Itinerary</h3>
                <div class="packagedetails">
                    <div>
                        <ul>
                            <li>1. Duration: Approximately 4 hours</li>
                            <li>2. Includes a morning or afternoon jeep safari in Yala National Park</li>
                            <li>3. Opportunity to explore a significant portion of the park and spot various wildlife species</li>
                            <li>4. Experienced safari guide</li>
                            <li>5. Refreshments and snacks during the safari</li>
                        </ul>
                    </div>
                </div>
                <div class="layerPackage">
                    <h4><a href="#">Read More</a></h4>
                </div>
            </div>

            <div class="package">
                <h2>Yala Full-Day Safari Package<br>From Rs.15000 /=</h2>
                <h3><br><i class="fa-solid fa-clipboard-list"></i>Itinerary</h3>
                <div class="packagedetails">
                    <div>
                        <ul>
                            <li>1. Duration: Approximately 8 hours</li>
                            <li>2. Includes a full-day jeep safari in Yala National Park</li>
                            <li>3. Extensive exploration of the park's diverse ecosystems and wildlife habitats</li>
                            <li>4. Increased chances of spotting elusive animals such as leopards and sloth bears</li>
                            <li>5. Experienced safari guide</li>
                            <li>6. Lunch and refreshments during the safari</li>
                        </ul>
                    </div>
                </div>
                <div class="layerPackage">
                    <h4><a href="#">Read More</a></h4>
                </div>
            </div>

            <div class="package">
                <h2>Yala Exclusive Private Safari Package<br>From Rs.40000 /=</h2>
                <h3><br><i class="fa-solid fa-clipboard-list"></i>Itinerary</h3>
                <div class="packagedetails">
                    <div>
                        <ul>
                            <li>1. Duration: Customizable based on your preferences</li>
                            <li>2. Exclusive use of a safari jeep and dedicated safari guide for a personalized experience</li>
                            <li>3. Flexibility to customize the itinerary and spend more time in specific areas of interest</li>
                            <li>4. Ideal for photographers, families, or groups looking for a private and intimate safari experience</li>
                            <li>5. Meals and refreshments included as per your requirements</li>
                        </ul>
                    </div>
                </div>
                <div class="layerPackage">
                    <h4><a href="#">Read More</a></h4>
                </div>
            </div>

            <div class="package">
                <h2>Yala Multi-Day Safari Package<br>From Rs.50000 /=</h2>
                <h3><br><i class="fa-solid fa-clipboard-list"></i>Itinerary</h3>
                <div class="packagedetails">
                    <div>
                        <ul>
                            <li>1. Duration: 2 or more days</li>
                            <li>2. Includes multiple safari drives in Yala National Park over the course of several days</li>
                            <li>3. Opportunity to explore different parts of the park and observe wildlife behavior at different times</li>
                            <li>4. Overnight accommodation options available, including tented camps or nearby lodges/hotels</li>
                            <li>5. Experienced safari guides and all meals included</li>
                        </ul>
                    </div>
                </div>
                <div class="layerPackage">
                    <h4><a href="#">Read More</a></h4>
                </div>
            </div>
        </div>
    </div>

    <div class="locationimg">
        <img src="images/yala/yala footer.jpg" alt="Yala footer">
    </div>

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

    <script src="./Js/r_main.js"></script>
</body>
</html>