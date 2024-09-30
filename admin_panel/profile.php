<?php
    include '../components/connect.php';

    if(isset($_COOKIE['seller_id'])){
        $seller_id = $_COOKIE['seller_id'];
    }
    else{
        $seller_id = '';
        header('location:login.php');
    }

    $select_products = $conn->prepare("SELECT * FROM products WHERE seller_id = ?");
    $select_products->execute([$seller_id]);
    $total_products = $select_products->rowCount();

    $select_orders = $conn->prepare("SELECT * FROM orders WHERE seller_id = ?");
    $select_orders->execute([$seller_id]);
    $total_orders = $select_orders->rowCount();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile page</title>
    <link rel="stylesheet" type="text/css" href="../css/admin_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/font-awesome/6.2.0/css/all.min.css">


</head>
<body>
 

    <div class="main-container">
    <?php include '../components/admin_header.php'; ?>
    <section class="seller-profile">
        <div class="heading">
            <h1 >profile details</h1>
        </div>
        <div class="details">
            <div class="seller">
                <img src="../uploaded_files/<?= $fetch_profile['image'];?>">
                <h3 class="name"><?= $fetch_profile['name'];?></h3>
                <span>admin</span>
                <a href="update.php" class="btn">update profile</a>
            </div>
            <div class="flex">
                <div class="box">
                    <span><?= $total_products; ?></span>
                    <p>total event</p>
                    <a href="view_product.php" class="btn">view event</a>
                </div>
                <div class="box">
                    <span><?= $total_orders; ?></span>
                    <p>total orders placed</p>
                    <a href="admin_order.php" class="btn">view orders</a>
                </div>
            </div>
        </div>
    </section>

    </div>




    <!-- sweetalert cdn link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

        <!-- custom js link -->
    <script src="../js/admin_script.js"></script>

    <?php include '../components/alert.php'; ?>

</body>
</html>