<?php

include 'components/config.php';
$title = "Confirm Booking";
if (isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];
} else {
    setcookie('user_id', create_unique_id(), time() + 60 * 60 * 24 * 30);
}

if (isset($_POST['place_confirm_booking'])) {

    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $number = $_POST['number'];
    $number = filter_var($number, FILTER_SANITIZE_STRING);
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $address = $_POST['flat'] . ', ' . $_POST['street'] . ', ' . $_POST['city'] . ', ' . $_POST['country'] . ' - ' . $_POST['pin_code'];
    $address = filter_var($address, FILTER_SANITIZE_STRING);
    $address_type = $_POST['address_type'];
    $address_type = filter_var($address_type, FILTER_SANITIZE_STRING);
    $method = $_POST['method'];
    $method = filter_var($method, FILTER_SANITIZE_STRING);

    $verify_booking = $conn->prepare("SELECT * FROM `booking` WHERE user_id = ?");
    $verify_booking->execute([$user_id]);

    if (isset($_GET['get_id'])) {

        $get_pitch = $conn->prepare("SELECT * FROM `pitch` WHERE id = ? LIMIT 1");
        $get_pitch->execute([$_GET['get_id']]);
        if ($get_pitch->rowCount() > 0) {
            while ($fetch_p = $get_pitch->fetch(PDO::FETCH_ASSOC)) {
                $insert_confirm_booking = $conn->prepare("INSERT INTO `confirm_booking`(id, user_id, name, number, email, address, address_type, method, pitch_id, price, qty) VALUES(?,?,?,?,?,?,?,?,?,?,?)");
                $insert_confirm_booking->execute([create_unique_id(), $user_id, $name, $number, $email, $address, $address_type, $method, $fetch_p['id'], $fetch_p['price'], 1]);
                header('location:booked.php');
            }
        } else {
            $warning_msg[] = 'Something went wrong!';
        }
    } elseif ($verify_booking->rowCount() > 0) {

        while ($f_booking = $verify_booking->fetch(PDO::FETCH_ASSOC)) {

            $insert_confirm_booking = $conn->prepare("INSERT INTO `confirm_booking`(id, user_id, name, number, email, address, address_type, method, pitch_id, price, qty) VALUES(?,?,?,?,?,?,?,?,?,?,?)");
            $insert_confirm_booking->execute([create_unique_id(), $user_id, $name, $number, $email, $address, $address_type, $method, $f_booking['pitch_id'], $f_booking['price'], $f_booking['qty']]);
        }

        if ($insert_confirm_booking) {
            $delete_booking_id = $conn->prepare("DELETE FROM `booking` WHERE user_id = ?");
            $delete_booking_id->execute([$user_id]);
            header('location:booked.php');
        }
    } else {
        $warning_msg[] = 'Your booking is empty!';
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?> | Global Wild Swimming and Campining</title>
    <!-- Swipper CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <!-- fontawsam cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Customer CSS fie link -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- search form start -->
    <form action="" id="search-form">
        <input type="search" placeholder="search here..." name="" id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>
    <!-- search form End -->
    <!-- header section start -->
    <?php include 'components/header.php'; ?>
    <!-- header section end -->

    <!-- confirm booking section start  -->
    <section>
        <div class="confirm-booking-container">
            <h3 class="sub-heading">Confirm your booking Now</h3>
            <h1 class="heading">Booking Summary</h1>
            <div class="row">
                <form action="" method="POST">
                    <h3>billing details</h3>
                    <div class="flex">
                        <div class="box">
                            <p>your name <span>*</span></p>
                            <input type="text" name="name" required maxlength="50" placeholder="enter your name" class="input">
                            <p>your number <span>*</span></p>
                            <input type="number" name="number" required maxlength="10" placeholder="enter your number" class="input" min="0" max="9999999999">
                            <p>your email <span>*</span></p>
                            <input type="email" name="email" required maxlength="50" placeholder="enter your email" class="input">
                            <p>payment method <span>*</span></p>
                            <select name="method" class="input" required>
                                <option value="cash on delivery">cash on delivery</option>
                                <option value="credit or debit card">credit or debit card</option>
                                <option value="net banking">net banking</option>
                                <option value="UPI or wallets">UPI or RuPay</option>
                            </select>
                            <p>address type <span>*</span></p>
                            <select name="address_type" class="input" required>
                                <option value="home">home</option>
                                <option value="office">office</option>
                            </select>
                        </div>
                        <div class="box">
                            <p>address line 01 <span>*</span></p>
                            <input type="text" name="flat" required maxlength="50" placeholder="e.g. flat & building number" class="input">
                            <p>address line 02 <span>*</span></p>
                            <input type="text" name="street" required maxlength="50" placeholder="e.g. street name & locality" class="input">
                            <p>city name <span>*</span></p>
                            <input type="text" name="city" required maxlength="50" placeholder="enter your city name" class="input">
                            <p>country name <span>*</span></p>
                            <input type="text" name="country" required maxlength="50" placeholder="enter your country name" class="input">
                            <p>pin code <span>*</span></p>
                            <input type="number" name="pin_code" required maxlength="6" placeholder="e.g. 123456" class="input" min="0" max="999999">
                        </div>
                    </div>
                    <input type="submit" value="confirm your booking" name="place_confirm_booking" class="btn">
                </form>

                <div class="summary">
                    <h3 class="title">booking items</h3>
                    <?php
                    $grand_total = 0;
                    if (isset($_GET['get_id'])) {
                        $select_get = $conn->prepare("SELECT * FROM `pitch` WHERE id = ?");
                        $select_get->execute([$_GET['get_id']]);
                        while ($fetch_get = $select_get->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                            <div class="flex">
                                <img src="uploaded_files_pitch/<?= $fetch_get['image']; ?>" class="image" alt="">
                                <div>
                                    <h3 class="name"><?= $fetch_get['name']; ?></h3>
                                    <p class="price"><i class="fas fa-pound-sign"></i> <?= $fetch_get['price']; ?> x 1</p>
                                </div>
                            </div>
                            <?php
                        }
                    } else {
                        $select_booking = $conn->prepare("SELECT * FROM `booking` WHERE user_id = ?");
                        $select_booking->execute([$user_id]);
                        if ($select_booking->rowCount() > 0) {
                            while ($fetch_booking = $select_booking->fetch(PDO::FETCH_ASSOC)) {
                                $select_pitch = $conn->prepare("SELECT * FROM `pitch` WHERE id = ?");
                                $select_pitch->execute([$fetch_booking['pitch_id']]);
                                $fetch_pitch = $select_pitch->fetch(PDO::FETCH_ASSOC);
                                $sub_total = ($fetch_booking['qty'] * $fetch_pitch['price']);

                                $grand_total += $sub_total;

                            ?>
                                <div class="flex">
                                    <img src="uploaded_files_pitch/<?= $fetch_pitch['image']; ?>" class="image" alt="">
                                    <div>
                                        <h3 class="name"><?= $fetch_pitch['name']; ?></h3>
                                        <p class="price"><i class="fas fa-pound-sign"></i> <?= $fetch_pitch['price']; ?> x <?= $fetch_booking['qty']; ?></p>
                                    </div>
                                </div>
                    <?php
                            }
                        } else {
                            echo '<p class="empty">your booking is empty</p>';
                        }
                    }
                    ?>
                    <div class="grand-total"><span>grand total :</span>
                        <p><i class="fas fa-pound-sign"></i> <?= $grand_total; ?></p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- confirm booking section End  -->

    <!-- Chat section start -->
    <?php include 'components/chat.php'; ?>
    <!-- Chat section end -->

    <!-- Footer section start -->
    <?php include 'components/footer.php'; ?>
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