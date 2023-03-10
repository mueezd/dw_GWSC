<?php
session_start();
include 'components/config.php';
if (!isset($_SESSION['attempt'])) {
    $_SESSION['attempt'] = 0;
}

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $pass = $_POST['pass'];
    $pass = filter_var($pass, FILTER_SANITIZE_STRING);

    $verify_email = $conn->prepare("SELECT * FROM `users` WHERE email = ? LIMIT 1");
    $verify_email->execute([$email]);


    if ($verify_email->rowCount() > 0) {
        $fetch = $verify_email->fetch(PDO::FETCH_ASSOC);
        $verfiy_pass = password_verify($pass, $fetch['password']);
        if ($verfiy_pass == 1) {
            setcookie('user_id', $fetch['id'], time() + 60 * 60 * 24 * 30, '/');
            header('location:index.php');
            session_destroy();
        } else {
            $warning_msg[] = 'Incorrect password!';

            $_SESSION['attempt'] += 1;

            if ($_SESSION['attempt'] === 3) {
                $error_msg[] = 'account locked for 10 minutes!';
                header("Refresh:600;url=components/reset.php");
            }
        }
    } else {
        $warning_msg[] = 'Incorrect email!';
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

    <!-- header section starts  -->
    <?php include 'components/header.php'; ?>
    <!-- header section ends -->

    <!-- login section starts  -->

    <section>
        <div class="form-container">
            <form action="" method="post" enctype="multipart/form-data">
                <h3>welcome</h3>

                <p class="placeholder">your email <span>*</span></p>
                <input type="email" name="email" required maxlength="50" placeholder="enter your email" class="box" <?php if ($_SESSION['attempt'] === 3) {
                                                                                                                        echo 'disabled';
                                                                                                                    } ?>>
                <p class="placeholder">your password <span>*</span></p>
                <input type="password" name="pass" required maxlength="50" placeholder="enter your password" class="box" <?php if ($_SESSION['attempt'] === 3) {
                                                                                                                                echo 'disabled';
                                                                                                                            } ?>>
                <p class="link">don't have an account? <a href="register.php">register now</a></p>
                <input type="submit" <?php if ($_SESSION['attempt'] === 3) {echo 'value="Account locked! - try after 10 minutes"';}else{echo 'value="login now"';} ?>  name="submit" class="form-btn" <?php if ($_SESSION['attempt'] === 3) {
                                                                                            echo 'disabled';
                                                                                        } ?>>
            </form>
        </div>
    </section>

    <!-- login section ends -->

    <!-- Swipper JS CND -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!-- custom js file link -->
    <script src="js/script.js"></script>
</body>

</html>



<!-- sweetalert cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<?php include 'components/alerts.php'; ?>

</body>

</html>