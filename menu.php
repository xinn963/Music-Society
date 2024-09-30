<?php
    include 'components/connect.php';

    if(isset($_COOKIE['user_id'])){
        $user_id = $_COOKIE['user_id'];
    }
    else{
        $user_id = '';
    }

    include 'components/add_wishlist.php';
    include 'components/add_cart.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event</title>
    <link rel="stylesheet" type="text/css" href="css/user_style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/font-awesome/6.2.0/css/all.min.css">


</head>
<body>

    <?php include 'components/user_header.php'; ?>
    
    <div class="products">
        <div class="row mb-4 mb-lg-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <p class="fw-bold text-success mb-2">Events</p>
                <h3 class="fw-bold">Your Ultimate Music Adventure Begins Here</h3>
            </div>
        </div>
        <div class="box-container">
            <?php 
                $select_products = $conn->prepare("SELECT * FROM products WHERE status = ?");
                $select_products->execute(['active']);

                if($select_products->rowCount() > 0){
                    while($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)){


            ?>
            <form action="" method="post" class="box <?php if($fetch_products['stock'] == 0){
                echo "disable";} ?>">

                <img src="uploaded_files/<?= $fetch_products['image']; ?>" class="image">

                <?php if($fetch_products['stock'] > 9){ ?>
                    <span class="stock" style="color: green;">In stock</span>
                <?php }else if($fetch_products['stock'] == 0){ ?>
                    <span class="stock" style="color: red;">out of stock</span>
                <?php }else { ?>
                    <span class="stock" style="color: red;">Hurry, only <?= $fetch_products['stock']; ?> stock</span>
                <?php } ?>

                <div class="content">

                    <img src="image/shape-19.png" class="shap">

                    <div class="button">

                        <div><h3 class="name"><?= $fetch_products['name']; ?></h3></div>
                        <div class="icon">
                            <p>
                            <button type="submit" name="add_to_cart"><i class="bx bx-cart"></i></button>
                            <button type="submit" name="add_to_wishlist"><i class="bx bx-heart"></i></button>
                            <a href="view_page.php?pid=<?= $fetch_products['id']; ?>" class="bx bxs-show"></a>
                            </p>
                        </div>

                    </div>

                    <p class="price">RM <?= $fetch_products['price']; ?></p>

                    <input type="hidden" name="product_id" value="<?= $fetch_products['id']; ?>">

                    <div class="flex-btn">
                        <a href="checkout.php?get_id=<?= $fetch_products['id']; ?>" class="btn">buy now</a>
                        <input type="number" name="qty" required min="1" value="1" max="99" maxlength="2" class="qty box">
                    </div>

                </div>
            </form>
            <?php 
                    }
                }else{
                    echo '
                        <div class="empty">
                            <p>no events added yet</p>
                        </div>
                    ';
                }
            ?>

        </div>
    </div>

    <?php include 'components/footer.php'; ?>

    <!-- sweetalert cdn link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

        <!-- custom js link -->
    <script src="js/script.js"></script>

    <?php include 'components/alert.php'; ?>

</body>
</html>