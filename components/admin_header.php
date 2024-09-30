<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.1.0/css/boxicons.min.css">
<link rel="stylesheet" href="../Assignment/boot/Assignment/assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../Assignment/boot/Assignment/https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
<link rel="stylesheet" href="../Assignment/boot/Assignment/https://fonts.googleapis.com/css?family=Roboto&amp;display=swap">
<link rel="stylesheet" href="../Assignment/boot/Assignment/assets/css/faq.css">
<link rel="stylesheet" href="../Assignment/boot/Assignment/assets/css/faq.compiled.css">
<link rel="stylesheet" href="../Assignment/boot/Assignment/assets/css/faq.compiled.css">

<header>
    <div class="logo">
    <a href="../home.php" class="logo"><img src="../image/img/Mars.png" width="70px"></a>
        
    </div>

    <div class="right">
        <div class="bx bxs-user" id="user-btn"></div>
        <div class="toggle-btn"><i class="bx bx-menu"></i></div>
    </div>

    <div class="profile-detail">
        <?php
            $select_profile = $conn->prepare("SELECT * FROM sellers WHERE id = ?");
            $select_profile->execute([$seller_id]);

            if($select_profile->rowCount() > 0){
                $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
        ?>

        <div class="profile">
            <img src="../uploaded_files/<?= $fetch_profile['image']; ?>" class="logo-img" width="100">
            <p><?= $fetch_profile['name']; ?></p>
            <div class="flex-btn">
                <a href="profile.php" class="btn">profile</a>
                <a href="../components/admin_logout.php" onclick="return confirm('logout from this website?');" class="btn">logout</a>
            </div>
        </div>
        
        <?php } ?>
    </div>
</header>
<div class="sidebar-container">
    <div class="sidebar">
    <?php
            $select_profile = $conn->prepare("SELECT * FROM sellers WHERE id = ?");
            $select_profile->execute([$seller_id]);

            if($select_profile->rowCount() > 0){
                $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
        ?>        
        <div class="profile">
            <img src="../uploaded_files/<?= $fetch_profile['image']; ?>" class="logo-img" width="100">
            <p><?= $fetch_profile['name']; ?></p>
        </div>   
        <?php } ?>
        <h5>menu</h5>
        <div class="navbar">
            <ul>
                <a href="dashboard.php"><li><i class="bx bxs-home-smile"></i>Dashboard</li></a>
                <a href="add_products.php"><li><i class="bx bxs-shopping-bags"></i>Add Event</li></a>
                <a href="view_product.php"><li><i class="bx bxs-food-menu"></i>View Event</li></a>
                <a href="user_accounts.php"><li><i class="bx bxs-user-detail"></i>Accounts</li></a>
                <a href="../components/admin_logout.php" onclick="return confirm('logout from this website')"><li><i class="bx bx-log-out"></i>Log Out</li></a>
            </ul>
        </div>
        <h5>find us</h5>
        <div class="social-links">
            <a href="https://www.facebook.com/tarucmusicsociety?mibextid=ZbWKwL">
        <i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/tarumt_musicsociety?igsh=MXMyZjg3eW03aWZsdw==">
        <i class="bx bxl-instagram-alt"></i></a>
        <a href="https://tarc.edu.my/">
        <i class="bx bxl-linkedin"></i></a>
        <a href="https://tarc.edu.my/">
        <i class="bx bxl-twitter"></i></a>
        <a href="https://tarc.edu.my/">
        <i class="bx bxl-pinterest-alt"></i></a>
        </div>
    </div>
</div>