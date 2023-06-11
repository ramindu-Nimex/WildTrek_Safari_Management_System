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
    <title>Wilpattu</title>
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

        <h1>Wilpattu Safari Tours</h1>
        <div class="locationphoto">
            <img src="images/wilpattu/wilpattu1.jpg" alt="Wilpattu1">
            <img src="images/wilpattu/wilpattu2.jpg" alt="Wilpattu2">
            <img src="images/wilpattu/wilpattu3.jpg" alt="Wilpattu3">
            <img src="images/wilpattu/wilpattu4.jpg" alt="Wilpattu4">
            <img src="images/wilpattu/wilpattu5.jpg" alt="Wilpattu5">
            <img src="images/wilpattu/wilpattu6.jpg" alt="Wilpattu6">
            <img src="images/wilpattu/wilpattu7.jpg" alt="Wilpattu7">
            <img src="images/wilpattu/wilpattu8.jpg" alt="Wilpattu8">
            <img src="images/wilpattu/wilpattu9.jpg" alt="Wilpattu9">
            <img src="images/wilpattu/wilpattu10.jpg" alt="Wilpattu10">
            <img src="images/wilpattu/wilpattu11.jpg" alt="Wilpattu11">
            <img src="images/wilpattu/wilpattu12.jpg" alt="Wilpattu12">
        </div>
    </div>

    <!-- yala packages -->
    <div class="locationpackages">
        <div class="campjeep">
            <a href="#aboutlocationcamp">Wilpattu Safari Camps Pakages</a>
            <a href="#aboutlocationJeep">Wilpattu Safari Jeep Pakages</a>
        </div>

        <div class="aboutlocation" id="aboutlocationcamp">
            <h1>Wilpattu Safari Camps Pakages</h1>
            <p>Wilpattu Safari Camp is an all-inclusive safari camp adjacent to the Wilpattu National Park. 
               Wilpattu Safari Camp provides guided wildlife safaris in Wilpattu National Park with 
               it's well experienced naturalist and wildlife photographer when going for safari in Wilpattu National Park, 
               considered one of the best places to see the elusive Leopards and is the largest national park of Sri Lanka.<br>
               Wilpattu Safari Camp is situated on the border of the Wilpattu National Park, just 5 minutes away from the park, 
               making it ideally suited for an early morning safari before the crowds come in. Being so close to the park lets you enjoy 
               the jungle experience even from the privacy of your tent; it's as good as staying inside the park itself. 
               The luxury tented safari camp includes spacious tents with actual beds, soft pillows, freshly laundered linen, 
               en-suite bathrooms with toilet and shower, running water, solar powered lamps; ensuing a luxurious environment 
               and a cozy ambience. Safari Camp is nestled in five acres of wooded forest, tucked between seasonal village rice 
               fields and the Wilpattu National Park. Not a single tree was cut in setting up the campsite. 
               We are located less than 10 minutes from the park entrance.
            </p>
            <img src="images/wilpattu/wilpattu camp 1.jpg" alt="Wilpattu camp 1">
            <img src="images/wilpattu/wilpattu camp 2.jpg" alt="Wilpattu camp 2">
        </div>

        <div class="campackages">
            <div class="package">
                <h2>Wilpattu Standard Camping Package<br>From Rs.30000 /=</h2>
                <h3><br><i class="fa-solid fa-clipboard-list"></i>Itinerary</h3>
                <div class="packagedetails">
                    <div>
                        <ul>
                            <li>1. Duration: 1 night</li>
                            <li>2. Tented camping site within the park</li>
                            <li>3. Basic camping equipment (tent, sleeping bags, camping chairs), shared washroom facilities</li>
                            <li>4. Basic meals (breakfast, dinner)</li>
                            <li>5. Morning and evening game drives, wildlife sightings, bird watching</li>
                        </ul>
                    </div>
                </div>
                <div class="layerPackage">
                    <h4><a href="#">Read More</a></h4>
                </div>
            </div>

            <div class="package">
                <h2>Wilpattu Luxury Camping Package<br>From Rs.60000 /=</h2>
                <h3><br><i class="fa-solid fa-clipboard-list"></i>Itinerary</h3>
                <div class="packagedetails">
                    <div>
                        <ul>
                            <li>1. Duration: 2 nights</li>
                            <li>2. Spacious luxury tents with comfortable beds</li>
                            <li>3. Private ensuite bathroom, electricity, hot water, dining area</li>
                            <li>4. Gourmet meals prepared by a private chef</li>
                            <li>5. Extended game drives, guided nature walks, bird watching, star gazing</li>
                        </ul>
                    </div>
                </div>
                <div class="layerPackage">
                    <h4><a href="#">Read More</a></h4>
                </div>
            </div>

            <div class="package">
                <h2>Wilpattu Family Camping Package<br>From Rs.50000 /=</h2>
                <h3><br><i class="fa-solid fa-clipboard-list"></i>Itinerary</h3>
                <div class="packagedetails">
                    <div>
                        <ul>
                            <li>1. Duration: 1 night</li>
                            <li>2. Family-friendly camping site with separate tents for parents and children</li>
                            <li>3. Shared washroom facilities, common area for family activities</li>
                            <li>4. Family-style meals suitable for children</li>
                            <li>5. Family-friendly game drives, nature walks, storytelling sessions</li>
                        </ul>
                    </div>
                </div>
                <div class="layerPackage">
                    <h4><a href="#">Read More</a></h4>
                </div>
            </div>

            <div class="package">
                <h2>Wilpattu Adventure Camping Package<br>From Rs.80000 /=</h2>
                <h3><br><i class="fa-solid fa-clipboard-list"></i>Itinerary</h3>
                <div class="packagedetails">
                    <div>
                        <ul>
                            <li>1. Duration: 2 nights</li>
                            <li>2. Remote camping locations within the park</li>
                            <li>3. Basic camping equipment, limited facilities</li>
                            <li>4. Campfire cooking, BBQ dinners</li>
                            <li>5.  Night safaris, bushwalks, bird watching, wildlife tracking, camping in remote locations</li>
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
            <h1>Wilpattu Safari Jeep Packages</h1>
            <p>
               Wilpattu National Park is one of the largest and oldest national parks in Sri Lanka, 
               known for its diverse wildlife and beautiful landscapes. A safari jeep tour in Wilpattu 
               offers an exciting opportunity to explore the wilderness and encounter 
               a variety of animal and bird species in their natural habitat.<br>
               During the safari jeep tour in Wilpattu, you will be accompanied by 
               an experienced guide who will navigate through the park's trails and 
               provide valuable insights about the wildlife and their behavior. The open-air jeep allows 
               for better visibility and the chance to capture stunning photographs of the animals and the surrounding scenery.<br>
               The safari jeep tour usually takes place in the early morning or late afternoon when the animals are more active. 
               It is recommended to book your safari in advance to secure your spot and ensure the best wildlife viewing opportunities.
            </p>
            <img src="images/wilpattu/wilpattu jeep 1.jpg" alt="Wilpattu jeep 1">
            <img src="images/wilpattu/wilpattu jeep 2.jpg" alt="Wilpattu jeep 2">
        </div>

        <div class="campackages">
            <div class="package">
                <h2>Wilpattu Half-Day Safari Package<br>From Rs.8000 /=</h2>
                <h3><br><i class="fa-solid fa-clipboard-list"></i>Itinerary</h3>
                <div class="packagedetails">
                    <div>
                        <ul>
                            <li>1. Duration: Approximately 4 hours</li>
                            <li>2. Jeep Type: Open-top safari jeep</li>
                            <li>3. Capacity: Maximum of 6 passengers per jeep</li>
                            <li>4. Experienced safari guide</li>
                            <li>5. Highlights: Exploring the wilpattu National Park, wildlife sightings (including leopards, elephants, deer, birds), photography opportunities</li>
                        </ul>
                    </div>
                </div>
                <div class="layerPackage">
                    <h4><a href="#">Read More</a></h4>
                </div>
            </div>

            <div class="package">
                <h2>Wilpattu Full-Day Safari Package<br>From Rs.15000 /=</h2>
                <h3><br><i class="fa-solid fa-clipboard-list"></i>Itinerary</h3>
                <div class="packagedetails">
                    <div>
                        <ul>
                            <li>1. Duration: Approximately 8 hours</li>
                            <li>2. Jeep Type: Open-top safari jeep</li>
                            <li>3. Capacity: Maximum of 6 passengers per jeep</li>
                            <li>4. Guide: Experienced safari guide</li>
                            <li>5. Highlights: Full-day exploration of wilpattu National Park, extended wildlife sightings, picnic lunch in the park, bird watching, visiting key attractions within the park</li>
                        </ul>
                    </div>
                </div>
                <div class="layerPackage">
                    <h4><a href="#">Read More</a></h4>
                </div>
            </div>

            <div class="package">
                <h2>Wilpattu Exclusive Private Safari Package<br>From Rs.40000 /=</h2>
                <h3><br><i class="fa-solid fa-clipboard-list"></i>Itinerary</h3>
                <div class="packagedetails">
                    <div>
                        <ul>
                            <li>1. Duration: Customizable based on your preferences</li>
                            <li>2. Jeep Type: Private open-top safari jeep</li>
                            <li>3. Capacity: Tailored to your group size and preferences</li>
                            <li>4. Guide: Dedicated safari guide</li>
                            <li>5. Highlights: Customized itinerary and experience, personalized attention from the guide, flexibility in safari timings, priority wildlife sightings</li>
                        </ul>
                    </div>
                </div>
                <div class="layerPackage">
                    <h4><a href="#">Read More</a></h4>
                </div>
            </div>

            <div class="package">
                <h2>Wilpattu Multi-Day Safari Package<br>From Rs.50000 /=</h2>
                <h3><br><i class="fa-solid fa-clipboard-list"></i>Itinerary</h3>
                <div class="packagedetails">
                    <div>
                        <ul>
                            <li>1. Duration: 2-5 days (can be customized)</li>
                            <li>2. Jeep Type: Open-top safari jeep</li>
                            <li>3. Capacity: Maximum of 6 passengers per jeep</li>
                            <li>4. Guide: Experienced safari guide</li>
                            <li>5. Highlights: Extended safari experience, exploring different areas of wilpattu National Park, overnight camping or lodge accommodation, comprehensive wildlife sightings, immersive wildlife photography opportunities</li>
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
        <img src="images/wilpattu/wilpattufooter.jpg" alt="Wilpattu footer">
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

    <script src="Js/r_main.js"></script>
</body>
</html>