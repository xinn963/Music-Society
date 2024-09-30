<?php 
    include 'components/connect.php';

    if(isset($_COOKIE['user_id'])){
        $user_id = $_COOKIE['user_id'];
    }
    else{
        $user_id = 'location:login.php';
    }

    $select_orders = $conn->prepare("SELECT * FROM orders WHERE user_id = ?");
    $select_orders->execute([$user_id]);
    $total_orders = $select_orders->rowCount();

    $select_message = $conn->prepare("SELECT * FROM message WHERE user_id = ?");
    $select_message->execute([$user_id]);
    $total_message = $select_message->rowCount();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" type="text/css" href="css/user_style.css">
    <!-- font awesome cdn link -->
    <!-- box icon cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <?php include 'components/user_header.php'; ?>
    
    <section class = "profile">
        <div class = "heading">
        <p class="fw-bold text-success mb-2">Profile Details</p>
        </div>
        <div class = "details">
            <div class = "user">
                <img src = "uploaded_files/<?= $fetch_profile['image']; ?>">
                <h3><?= $fetch_profile['name'];?></h3>
                <p>user</p>
                <a href = "update.php" class="btn">update profile</a>
            </div>
            <div class="box-container">
                <div class = "box">
                    <div class = "flex">
                        <i class = "bx bxs-folder-minus"></i>
                        <h3><?=$total_orders; ?></h3>
                    </div>
                    <a href = "order.php" class = "btn">view orders</a>
                </div>
                
            </div>
        </div>
    </section>
    
    <?php include 'components/footer.php'; ?>
    <!-- sweetalert cdn link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

        <!-- custom js link -->
    <script src="js/user_script.js"></script>

    <?php include 'components/alert.php'; ?>