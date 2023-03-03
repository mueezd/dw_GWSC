<?php

@include 'config.php';

if (isset($_POST['submit'])) {

    $id = create_unique_id();
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
    $user_type = $_POST['user_type'];

    $image = $_FILES['image_file']['name'];
    $image = filter_var($image, FILTER_SANITIZE_STRING);
    $ext = pathinfo($image, PATHINFO_EXTENSION);
    $rename = create_unique_id().'.'.$ext;
    $image_size = $_FILES['image_file']['size'];
    $image_tmp_name = $_FILES['image_file']['tmp_name'];
    $image_folder = 'user_uploaded_files/'.$rename;

    if(!empty($image)){
        if($image_size < 2000000){
            $warning_msg[] = 'Image size is too large!';
        }else{
            move_uploaded_file($image_tmp_name,$image_folder);
        }
    }else{
        $rename = '';
    }

    $select = "SELECT * FROM user WHERE email = '$email'";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $warning_msg[] = 'User Already Exist!';
    } else {
        if ($password != $cpassword) {
            $warning_msg[] = 'Password not matched!';
        } else {
            $insert = "INSERT INTO user(id, first_name, last_name, email, password, user_type, image) VALUES ('$id','$first_name','$last_name','$email','$password','$user_type','$rename')";
            mysqli_query($conn, $insert);
            $success_msg[] = 'Registered successfully';
            // header('location:login_form.php');
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
    <?php include 'components/header.php'; ?>
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
                if (isset($error)) {
                    foreach ($error as $error) {
                        echo '<span class="error-msg">' . $error . '</span>';
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
                    <!-- <option value="admin">admin</option> -->
                </select>
                <input type="file" name="image_file" accept="image/*">
                <input type="submit" name="submit" value="Register Now" class="form-btn">
                <p>Already have an account? <a href="login_form.php">login now</a></p>
            </form>
        </div>
    </section>
    <!-- Register section end -->

    <!-- Footer section start -->
    <?php include 'components/footer.php'?>
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