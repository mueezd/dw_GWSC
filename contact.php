<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Wild Swimming and Campining</title>
    <!-- Swipper CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <!-- fontawsam cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Customer CSS fie link -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- header section start -->
    <header>

        <a href="#" class="logo"><img src="images/logo.png" alt=""></a>
        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="information.php">information</a>
            <a href="pitch.php">pitch type</a>
            <a href="availability.php">availability</a>
            <a href="reviews.php">reviews</a>
            <a href="feature.php">feature</a>
            <a href="contact.php">contact</a>
            <a href="localattractions.php">local attractions</a>
            <a class="active" href="login_form.php">Login</a>
        </nav>

        <div class="icons">
            <i class="fas fa-bars" id="menu-bar"></i>
            <i class="fas fa-search" id="search-icons"></i>
            <a href="#" class="fas fa-shopping-cart"></a>
        </div>

    </header>
    <!-- header section end -->

    <!-- search form -->
    <form action="" id="search-form">
        <input type="search" placeholder="search here..." name="" id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>
    
    <!-- Contact section start-->
    <section class="contact" id="contact">
        <h3 class="sub-heading">Contact</h3>
        <h1 class="heading">Why choose us</h1>
        <form action="">
            <div class="inputBox">
                <div class="input">
                    <span>Your Name:</span>
                    <input type="text" placeholder="enter your name" name="" id="">
                </div>
                <div class="input">
                    <span>Your Name:</span>
                    <input type="number" placeholder="enter your number" name="" id="">
                </div>
            </div>
            <div class="inputBox">
                <div class="input">
                    <span>Your Order:</span>
                    <input type="text" placeholder="enter your order" name="" id="">
                </div>
                <div class="input">
                    <span>Your Address:</span>
                    <input type="text" placeholder="enter our address" name="" id="">
                </div>
            </div>
            <div class="inputBox">
                <div class="input">
                    <span>Your Queary:</span>
                    <textarea name="" placeholder="Write your Queary" id="" cols="30" rows="10">
                    </textarea>
                </div>
                <div class="input">
                    <span>Your Message:</span>
                    <textarea name="" placeholder="Write your Message" id="" cols="30" rows="10">
                    </textarea>
                </div>
            </div>
            <input type="submit" value="Contact Now" class="btn">
        </form>
    </section>
    <!-- Contact section End-->

    <!-- Footer section start -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>locations</h3>
                <a href="#">india</a>
                <a href="#">japan</a>
                <a href="#">russia</a>
                <a href="#">USA</a>
                <a href="#">UK</a>
                <a href="#">Bangladesh</a>
            </div>
            <div class="box">
                <h3>Quick Links</h3>
                <a href="#">information</a>
                <a href="#">pitch Type</a>
                <a href="#">Availability</a>
                <a href="#">Reviews</a>
                <a href="#">Features</a>
                <a href="#">Contact</a>
                <a href="#">Local Attractions</a>
            </div>
            <div class="box">
                <h3>Contact Info</h3>
                <a href="#">+123-456-7890</a>
                <a href="#">+111-222-7890</a>
                <a href="#">info@gwsc.org</a>
                <a href="#">Park Street London, United kingdom</a>
            </div>
            <div class="box">
                <h3>follow us</h3>
                <a href="#">facebook</a>
                <a href="#">twitter</a>
                <a href="#">instagram</a>
                <a href="#">youtube</a>
            </div>
        </div>
        <div class="credit">copyright @ 2023 by <span>deepro__</span></div>
    </section>
    <!-- Footer section end -->


    <!-- Swipper JS CND -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!-- custom js file link -->
    <script src="js/script.js"></script>
</body>

</html>