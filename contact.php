<?php

include 'components/config.php';
if ($user_id != '') {

    if (isset($_POST['submit'])) {
        $id = create_unique_id();
        $user_id = $_COOKIE['user_id'];
        $name = $_POST['name'];
        $name = filter_var($name, FILTER_SANITIZE_STRING);
        $email = $_POST['email'];
        $email = filter_var($email, FILTER_SANITIZE_STRING);
        $phone = $_POST['phone'];
        $phone = filter_var($phone, FILTER_SANITIZE_STRING);
        $message = $_POST['message'];
        $message = filter_var($message, FILTER_SANITIZE_STRING);

        $insert_message = $conn->prepare("INSERT INTO `contact_messages`(id, user_id, name, email, phone, message) VALUES(?,?,?,?,?,?)");
        $insert_message->execute([$id, $user_id, $name, $email, $phone, $message]);
        $success_msg[] = 'Message submit successfully!';
        // 
    }
} else {
    $warning_msg[] = 'Please login first!';
}

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
    <section>
        <div class="contact-page-section">
            <h3 class="sub-heading">Contact</h3>
            <h1 class="heading">Why choose us</h1>
            <div class="contact-page">
                <div class="contact-page-left">
                    <img src="images/oontactpage.webp" alt="">
                </div>
                <div class="contact-page-right">
                    <div class="contact">
                        <form action="" method="post">
                            <div class="inputBox">
                                <div class="input">
                                    <span>Your Name:</span>
                                    <input type="text" placeholder="enter your name" name="name" id="" required>
                                </div>
                                <div class="input">
                                    <span>Your Email</span>
                                    <input type="email" placeholder="enter your email" name="email" id="" required>
                                </div>
                                <div class="input">
                                    <span>Your Phone</span>
                                    <input type="text" placeholder="enter your phone number" name="phone" id="" required>
                                </div>
                                <div class="input">
                                    <span>Your Messgae:</span>
                                    <textarea name="message" id="" cols="30" rows="10" placeholder="Write Your Messgae" required></textarea>
                                </div>
                                <div class="input">
                                    <a href="privacy_policy.php">Read : Privacy policy</a>
                                </div>
                                <input type="submit" value="Submit" name="submit" class="btn">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="contact-box">
            <h1>Contact Info</h1>
            <div class="contact-box-info">
                <a href="#"><i class="fas fa-phone"></i><span>+123-456-7890</span></a>
                <a href="#"><i class="fas fa-phone"></i><span>+111-222-7890</span></a>
                <a href="#"><i class="fas fa-envelope"></i><span>info@gwsc.org</span></a>
                <a href="#"><i class="fas fa-address-card"></i><span>Park Street London, United kingdom</span></a>
            </div>
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