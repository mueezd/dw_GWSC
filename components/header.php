    <!-- header section start -->
    <header>
        <a href="index.php" class="logo"><img src="images/logo.png" alt=""></a>
        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="information.php">information</a>
            <a href="pitch.php">pitch type & availability</a>
            <a href="review.php">reviews</a>
            <a href="feature.php">features</a>
            <a href="contact.php">contact</a>
            <a href="localattractions.php">local attractions</a>
            <?php
            if ($user_id == '') {
                echo '<a class="active" href="login.php">Login</a>';
            }
            ?>

        </nav>

        <div class="icons">
            <i class="fas fa-bars" id="menu-bar"></i>
            <i class="fas fa-search" id="search-icons"></i>
            <?php
            if ($user_id != '') {
            ?>
                <div id="user-btn" class="far fa-user"></div>
                <?php
                $count_cart_items = $conn->prepare("SELECT * FROM `booking` WHERE user_id = ?");
                $count_cart_items->execute([$user_id]);
                $total_cart_items = $count_cart_items->rowCount();
                ?>
                <a href="booking_cart.php" class="fas fa-shopping-cart"><span><?= $total_cart_items; ?></span></a>
            <?php }; ?>
        </div>
        <?php
        if ($user_id != '') {
        ?>
            <div class="profile">
                <?php
                $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ? LIMIT 1");
                $select_profile->execute([$user_id]);
                if ($select_profile->rowCount() > 0) {
                    $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
                ?>
                    <?php if ($fetch_profile['image'] != '') { ?>
                        <img src="user_uploaded_files/<?= $fetch_profile['image']; ?>" alt="" class="image">
                    <?php }; ?>
                    <p><?= $fetch_profile['name']; ?></p>
                    <a href="update_profile.php" class="form-btn">update profile</a>
                    <?php
                    if ($user_id == 'EUmQeGo4BaVW00oUr9aV') {
                        echo '<a class="form-btn" href="add_pitch_type.php">Add Pitch</a>';
                        echo '<a class="form-btn" href="add_review_posts.php">add review topic</a>';
                    }
                    ?>

                    <a href="components/logout.php" class="danger-btn">logout</a>
                <?php } else { ?>
                    <div class="flex-btn">
                        <p>please login or register!</p>
                        <a href="login.php" class="inline-option-btn">login</a>
                        <a href="register.php" class="inline-option-btn">register</a>
                    </div>
                <?php }; ?>
            </div>
        <?php }; ?>
    </header>
    <!-- header section end -->

    <!-- search form -->
    <form action="" id="search-form">
        <input type="search" placeholder="search here..." name="" id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>