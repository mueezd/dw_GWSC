<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
   $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $password = md5($_POST['password']);
   $cpassword = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = "SELECT * FROM user_form WHERE email = '$email'";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
        $error[] = 'User Already Exist!';
   }else{
     if($password != $cpassword){
        $error[] = 'Password not matched!';
     }else{
        $insert = "INSERT INTO user_form(first_name, last_name, email, password, user_type) VALUES ('$first_name','$last_name','$email','$password','$user_type')";
        mysqli_query($conn, $insert);
        header('location:login_form.php');
     }
   }
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register-GWSC</title>
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

    <!-- Register section start -->
    <section class="register">
        <div class="form-container">
            <form action="" method="post">
                <h3>Register Now</h3>
                <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class="error-msg">'.$error.'</span>';
                    };
                };  
                ?>
                <input type="text" name="first_name" required placeholder="First Name">
                <input type="text" name="last_name" required placeholder="Last Name">
                <input type="email" name="email" required placeholder="Enter your Email">
                <input type="password" name="password" required placeholder="Enter your password">
                <input type="password" name="cpassword" required placeholder="Confirm your password">
                <select name="user_type">
                    <option value="user">user</option>
                    <option value="admin">admin</option>
                </select>
                <input type="submit" name="submit" value="Register Now" class="form-btn">
                <p>Already have an account? <a href="login_form.php">login now</a></p>
            </form>
        </div>
    </section>
    <!-- Register section end -->

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