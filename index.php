<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sri Lakshmi Narayanan Residency</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Residency Website" />
    <meta name="keywords" content="residency, accommodation, Sri Lakshmi Narayanan" />
    <meta name="author" content="" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,600i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="css/flexslider.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">

    <style>
        .card {
            height: 500px; /* Adjust this height if you want to make room for the larger image */
            border: 2px solid black; /* Black outline for the card */
            border-radius: 8px; /* Optional: round the corners */
            padding: 10px; /* Padding inside the card */
            transition: transform 0.3s; /* Animation for hover effect */
            margin-bottom: 30px; /* Space between cards */
        }
    
        .card:hover {
            transform: scale(1.05); /* Slightly enlarge the card on hover */
        }
    
        .card-img-top {
            height: 300px; /* Adjusted height for images */
            width: 100%; /* Make sure images stretch to full width */
            object-fit: cover; /* Ensure the image covers the area while maintaining aspect ratio */
        }
    
        .card-container {
            margin-bottom: 50px; /* Add a margin to create space below the card container */
        }

        .book-now-button {
            background-color: red; /* Red background color */
            color: white; /* Suitable font color for red */
            border: none; /* Remove default border */
            padding: 10px 20px; /* Add some padding */
            border-radius: 5px; /* Round the corners */
            cursor: pointer; /* Change cursor to pointer on hover */
            font-size: 16px; /* Increase font size */
            transition: background-color 0.3s; /* Smooth transition */
        }

        .book-now-button:hover {
            background-color: darkred; /* Darker red on hover */
        }

        #fh5co-header {
            position: relative;
            height: 100vh; /* Full viewport height */
            background-image: url(images/hero_1.jpeg);
            background-size: cover; /* Cover the header */
            background-position: center; /* Center the background image */
        }

        #fh5co-header .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5); /* Dark overlay */
        }

        .fh5co-nav {
            position: absolute;
            width: 100%;
            top: 20px; /* Adjust the top position of the navigation */
            z-index: 1000; /* Bring nav to the front */
        }

        h1 {
            margin-bottom: 0; /* Remove bottom margin */
        }

        h2 {
            margin-top: 0; /* Remove top margin */
            margin-bottom: 20px; /* Add some space below the subtitle */
        }

    </style>
    

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="fh5co-loader"></div>

    <div id="page">
        <nav class="fh5co-nav" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center logo-wrap">
                        <img src="saami.png" alt="Residency Logo" style="width: 150px;height: 100px;">
                    </div>
                    <div class="col-xs-12 text-center menu-1 menu-wrap">
                        <ul>
                            <li class="active"><a href="index.html">Home</a></li>
                            <li><a href="menu.html">Facilities</a></li>
                            <li class="has-dropdown">
                                <a href="gallery.html">Gallery</a>
                            </li>
                            <li><a href="reservation.html">Booking</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="display-t js-fullheight">
                            <div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn" style="padding-top: 30cap;">
                                <h1>SRI LAKSHMI NARAYANAN RESIDENCY</h1>
                                <h2>Welcome to our residency</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header><br>

        <div class="container card-container" style="padding-top: 15px;">
            <h1 style="font: bold; color: dimgrey;">Our Rooms:</h1><br>
            <div class="row">
                <!-- First Card -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <center><h1 style="color: slategray;">Pack name</h1></center>
                        <img src="images/gallery_1.jpeg" class="card-img-top" alt="Card 1">
                        <div class="card-body">
                            <p class="card-text" style="padding-top: 2px;">About that room.</p>
                            <h1 style="color: cadetblue; padding-bottom: 30px;">Price : ₹ 15,000</h1> <!-- Increased padding-bottom -->
                        </div>
                    </div>
                </div>
        
                <!-- Second Card (Duplicate of the First Card) -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <center><h1 style="color: slategray;">Pack name</h1></center>
                        <img src="images/gallery_1.jpeg" class="card-img-top" alt="Card 2">
                        <div class="card-body">
                            <p class="card-text" style="padding-top: 2px;">About that room.</p>
                            <h1 style="color: cadetblue; padding-bottom: 30px;">Price : ₹ 15,000</h1> <!-- Increased padding-bottom -->
                        </div>
                    </div>
                </div>
        
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <center><h1 style="color: slategray;">Pack name</h1></center>
                        <img src="images/gallery_1.jpeg" class="card-img-top" alt="Card 3">
                        <div class="card-body">
                            <p class="card-text" style="padding-top: 2px;">About that room.</p>
                            <h1 style="color: cadetblue; padding-bottom: 30px;">Price : ₹ 15,000</h1> <!-- Increased padding-bottom -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function navigator(){
                window.location.href = "book.php";
            }
        </script>
        <div>
            <center>
                <button class="book-now-button" type="button" onclick="navigator()">Book Now!</button>
            </center>
        </div>
        

        <footer id="fh5co-footer" role="contentinfo">
            <div class="container">
                <div class="row copyright">
                    <div class="col-md-12 text-center">
                        <p>
                            <small class="block">&copy; 2024 Sri Lakshmi Narayanan Residency. All Rights Reserved.</small>
                            <small class="block">Designed by <a href="#" target="_blank">Your Name</a></small>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
