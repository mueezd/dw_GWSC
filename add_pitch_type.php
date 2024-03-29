<?php

include 'components/config.php';
$title = "Add Picth";
if (isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];
} else {
    setcookie('user_id', create_unique_id(), time() + 60 * 60 * 24 * 30);
}

if (isset($_POST['add'])) {

    $id = create_unique_id();
    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $description = $_POST['description'];
    $description = filter_var($description, FILTER_SANITIZE_STRING);
    $price = $_POST['price'];
    $price = filter_var($price, FILTER_SANITIZE_STRING);

    $image = $_FILES['image']['name'];
    $image = filter_var($image, FILTER_SANITIZE_STRING);
    $ext = pathinfo($image, PATHINFO_EXTENSION);
    $rename = create_unique_id() . '.' . $ext;
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_size = $_FILES['image']['size'];
    $image_folder = 'uploaded_files_pitch/' . $rename;

    if ($image_size > 2000000) {
        $warning_msg[] = 'Image size is too large!';
    } else {
        $add_pitch = $conn->prepare("INSERT INTO `pitch`(id, name, description, price, image) VALUES(?,?,?,?,?)");
        $add_pitch->execute([$id, $name, $description, $price, $rename]);
        move_uploaded_file($image_tmp_name, $image_folder);
        $success_msg[] = 'Picth added!';
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
    <!-- search form -->
    <form action="" id="search-form">
        <input type="text" placeholder="search here..." name="" id="search-box">
        <label for="search-box" class="fas fa-search" onclick="searchText()"></label>
        <i class="fas fa-times" id="close"></i>
    </form>
    <!-- header section start -->
    <?php include 'components/header.php'; ?>
    <!-- header section end -->


    <!-- add picth type section start  -->
    <section>
        <div class="form-container">
            <form action="" method="POST" enctype="multipart/form-data">
                <h3>add pitch info</h3>
                <p class="placeholder">pitch name <span>*</span></p>
                <input type="text" name="name" placeholder="enter pitch name" required maxlength="50" class="box">
                <p class="placeholder">pitch description<span>*</span></p>
                <textarea name="description" placeholder="enter pitch description" required maxlength="500" class="box" cols="30" rows="10"></textarea>
                <p class="placeholder">pitch price <span>*</span></p>
                <input type="number" name="price" placeholder="enter pitch price" required min="0" max="9999999999" maxlength="10" class="box">
                <p class="placeholder">pitch image <span>*</span></p>
                <input type="file" name="image" required accept="image/*" class="box">
                <input type="submit" class="form-btn" name="add" value="add pitch">
            </form>
        </div>
    </section>
    <!-- add picth type section End  -->

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