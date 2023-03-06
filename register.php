<?php

include 'components/config.php';

if (isset($_POST['submit'])) {

    $id = create_unique_id();
    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
    $pass = filter_var($pass, FILTER_SANITIZE_STRING);
    $c_pass = password_verify($_POST['c_pass'], $pass);
    $c_pass = filter_var($c_pass, FILTER_SANITIZE_STRING);

    $image = $_FILES['image']['name'];
    $image = filter_var($image, FILTER_SANITIZE_STRING);
    $ext = pathinfo($image, PATHINFO_EXTENSION);
    $rename = create_unique_id() . '.' . $ext;
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = 'user_uploaded_files/' . $rename;

    if (!empty($image)) {
        if ($image_size > 2000000) {
            $warning_msg[] = 'Image size is too large!';
        } else {
            move_uploaded_file($image_tmp_name, $image_folder);
        }
    } else {
        $rename = '';
    }

    $verify_email = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
    $verify_email->execute([$email]);

    if ($verify_email->rowCount() > 0) {
        $warning_msg[] = 'Email already taken!';
    } else {
        if ($c_pass == 1) {
            $insert_user = $conn->prepare("INSERT INTO `users`(id, name, email, password, image) VALUES(?,?,?,?,?)");
            $insert_user->execute([$id, $name, $email, $pass, $rename]);
            $success_msg[] = 'Registered successfully!';
        } else {
            $warning_msg[] = 'Confirm password not matched!';
        }
    }
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
    <!-- search form -->
    <form action="" id="search-form">
        <input type="search" placeholder="search here..." name="" id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>

    <!-- header section starts  -->
    <?php include 'components/header.php'; ?>
    <!-- header section ends -->
    <section class="register form">
        <div class="form-container">
            <form action="" method="post" enctype="multipart/form-data">
                <h3>make your account!</h3>
                <p class="placeholder">your name <span>*</span></p>
                <input type="text" name="name" required maxlength="50" placeholder="enter your name" class="box">
                <p class="placeholder">your email <span>*</span></p>
                <input type="email" name="email" required maxlength="50" placeholder="enter your email" class="box">
                <p class="placeholder">your password <span>*</span></p>
                <input type="password" name="pass" required maxlength="50" placeholder="enter your password" class="box">
                <p class="placeholder">confirm password <span>*</span></p>
                <input type="password" name="c_pass" required maxlength="50" placeholder="confirm your password" class="box">
                <p class="placeholder">profile pic</p>
                <input type="file" name="image" class="box" accept="image/*">
                <p class="link">already have an account? <a href="login.php">login now</a></p>
                <input type="submit" value="register now" name="submit" class="form-btn">
            </form>
        </div>

    </section>

    <!-- Footer section start -->
    <?php include 'components/footer.php' ?>
    <!-- Footer section end -->


    <!-- Swipper JS CND -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!-- sweetalart cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- custom js file link -->
    <script src="js/script.js"></script>


    <?php include 'components/alerts.php'; ?>
</body>

</html>