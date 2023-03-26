<?php
@include 'config.php';

$title = "User Page";

session_start();

if (!isset($_SESSION['user_name'])) {
    header('location:login_form.php');
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title; ?> | Global Wild Swimming and Campining</title>
    <title>User-GWSC</title>
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
        <a href="#" class="logo"><i class="fas fa-utensils"></i>GWSC.</a>
        <nav class="navbar">
            <a class="active" href="#home">home</a>
            <a href="#information">information</a>
            <a href="#pitch">pitch type</a>
            <a href="#availability">availability</a>
            <a href="#reviews">reviews</a>
            <a href="#feature">feature</a>
            <a href="#feature">contact</a>
            <a href="#localattractions">local attractions</a>
        </nav>

        <div class="icons">
            <i class="fas fa-bars" id="menu-bar"></i>
            <i class="fas fa-search" id="search-icons"></i>
            <a href="#" class="fas fa-shopping-cart"></a>
        </div>

    </header>
    <!-- header section end -->

    <!-- search form start -->
    <form action="" id="search-form">
        <input type="search" placeholder="search here..." name="" id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>
    <!-- search form End -->

    <!-- user section start -->
    <section class="adminpage">
        <div class="container">
            <div class="content">
                <h3>Hi, <span>user</span></h3>
                <h1>Welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
                <p>this is an user page</p>
                <a href="login_form.php" class="btn">login</a>
                <a href="register_form.php" class="btn">Register</a>
                <a href="logout.php" class="btn">logout</a>
            </div>
        </div>
    </section>
    <!-- admin section end -->


    <!-- Chat section start -->
    <?php include 'components/chat.php'; ?>
    <!-- Chat section end -->


    <!-- Footer section start -->
    <?php include 'components/footer.php' ?>
    <!-- Footer section end -->



    <!-- Swipper JS CND -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!-- custom js file link -->
    <script src="js/script.js"></script>
</body>

</html>