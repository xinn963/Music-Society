<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.1.0/css/boxicons.min.css">
<link rel="stylesheet" href="../Assignment/boot/Assignment/assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../Assignment/boot/Assignment/https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
<link rel="stylesheet" href="../Assignment/boot/Assignment/https://fonts.googleapis.com/css?family=Roboto&amp;display=swap">
<link rel="stylesheet" href="../Assignment/boot/Assignment/assets/css/faq.css">
<link rel="stylesheet" href="../Assignment/boot/Assignment/assets/css/faq.compiled.css">


<header class="header">
    <section class="flex">
        <a href="home.php" class="logo"><img src="image/img/Mars.png" width="70px"></a>
        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about-us.php">about us</a>
            <a href="menu.php">Event</a>
            <a href="order.php">order</a>
            <a href="contact.php">contact us</a>
        </nav>
        <form action="search_product.php" method="post" class="search-form">
            <input type="text" name="search_product" placeholder="search events..." required maxlength="100">
            <button type="submit" class="bx bx-search-alt-2" id="search_product_btn"></button>
        </form>
        <div class="icons">
            <div class="bx bx-list-plus" id="menu-btn"></div>
            <div class="bx bx-search-alt-2" id="search-btn"></div>

            <?php 
                $count_wishlist_item = $conn->prepare("SELECT * FROM wishlist WHERE user_id = ?");
                $count_wishlist_item->execute([$user_id]);
                $total_wishlist_items = $count_wishlist_item->rowCount();
            ?>
            <a href="wishlist.php"><i class="bx bx-heart"></i><sup><?= $total_wishlist_items; ?></sup></a>

            <?php 
                $count_cart_item = $conn->prepare("SELECT * FROM cart WHERE user_id = ?");
                $count_cart_item->execute([$user_id]);
                $total_cart_items = $count_cart_item->rowCount();
            ?>
            <a href="cart.php"><i class="bx bx-cart"></i><sup><?= $total_cart_items; ?></sup></a>
            <div class="bx bxs-user" id="user-btn"></div>
        </div>
        <div class="profile-detail">
            <?php 
                $select_profile = $conn->prepare("SELECT * FROM users WHERE id = ?");
                $select_profile->execute([$user_id]);

                if($select_profile->rowCount() > 0){
                    $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
            ?>
            <img src="uploaded_files/<?= $fetch_profile['image']; ?>">
            <h3 style="margin-bottom: 1rem;"><?= $fetch_profile['name']; ?></h3>
            <div class="flex-btn">
                <a href="profile.php" class="btn">view profile</a>
                <a href="components/user_logout.php" onclick="return confirm('logout from this website');" class="btn">logout</a>
            </div>
            <?php }else{ ?>
                <h3 style="margin-bottom: 1rem;">Please Login or Register</h3>
                <div class="flex-btn">
                    <a href="login.php" class="btn">Login</a>
                    <a href="register.php" class="btn">Register</a>
                </div>
            <?php } ?>
        </div>
    </section>

</header>