<?php

include 'components/config.php';

?>

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
    <!-- header section starts  -->
    <?php include 'components/header.php'; ?>
    <!-- header section ends -->

    <!-- search form -->
    <form action="" id="search-form">
        <input type="search" placeholder="search here..." name="" id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>

    <!-- Contact section start-->
    <section id="contact">
        <div class="contact">
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
        </div>
    </section>
    <!-- Contact section End-->

    <!-- Footer section start -->
    <?php include 'components/footer.php'; ?>
    <!-- Footer section start -->

    <!-- sweetalart cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Swipper JS CND -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!-- custom js file link -->
    <script src="js/script.js"></script>

    <?php include 'components/alerts.php'; ?>
</body>

</html>