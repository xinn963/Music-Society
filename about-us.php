<?php 
    include 'components/connect.php';

    if(isset($_COOKIE['user_id'])){
        $user_id = $_COOKIE['user_id'];
    }
    else{
        $user_id = '';
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" type="text/css" href="css/user_style.css">
    <!-- font awesome cdn link -->
    <!-- box icon cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/font-awesome/6.2.0/css/all.min.css">



    <link rel="stylesheet" href="../Assignment/boot/Assignment/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Assignment/boot/Assignment/https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="../Assignment/boot/Assignment/https://fonts.googleapis.com/css?family=Roboto&amp;display=swap">
    <link rel="stylesheet" href="../Assignment/boot/Assignment/assets/css/faq.css">
    <link rel="stylesheet" href="../Assignment/boot/Assignment/assets/css/faq.compiled.css">
</head>
<body>
    <?php include 'components/user_header.php'; ?>
   
    <section class="py-5">
        <div class="container py-5">
            <div class="row mb-4 mb-lg-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <p class="fw-bold text-success mb-2">About Us</p>
                    <h3 class="fw-bold">Your Ultimate Music Experience Hub</h3>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;">
                <div class="col mb-5" style="text-align: center;"><img src="image/img/live1.jpeg" style="width: 426px;height: initial;border-radius: 16px;max-width: 100%;max-height: 260px;min-height: 92px;min-width: auto;"></div>
                <div class="col d-md-flex align-items-md-end align-items-lg-center mb-5" style="max-width: none;">
                    <div style="text-align: center;">
                        <h5 class="fw-bold">Our Story</h5>
                        <p class="text-muted mb-4" style="text-align: left;">Welcome to MARS, where we transform ordinary moments into extraordinary memories through the power of music.&nbsp;</p>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;">
                <div class="col order-md-last mb-5" style="text-align: center;"><img src="image/img/live2.jpg" style="border-radius: 16px;width: 426px;min-width: auto;min-height: 92px;max-height: 260px;max-width: 100%;height: initial;"></div>
                <div class="col d-md-flex align-items-md-end align-items-lg-center mb-5">
                    <div style="text-align: center;">
                        <h5 class="fw-bold">Passion In Performance</h5>
                        <p class="text-muted mb-4" style="text-align: left;">As avid music lovers and enthusiasts, we understand the profound impact that live performances can have on individuals and communities alike. That's why we're dedicated to curating exceptional music events that resonate with every beat of your heart and every note of your soul.</p>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;">
                <div class="col mb-5" style="text-align: center;"><img class="rounded img-fluid shadow" src="image/img/live3.jpg" style="height: initial;max-height: 260px;width: 426px;min-width: auto;max-width: 100%;min-height: 92px;"></div>
                <div class="col d-md-flex align-items-md-end align-items-lg-center mb-5">
                    <div style="text-align: center;">
                        <h5 class="fw-bold">Uniting Souls</h5>
                        <p class="text-muted mb-4" style="text-align: left;">At MARS, we believe that music is more than just entertainment—it's a universal language that connects people from all walks of life. Whether you're a passionate music aficionado, an aspiring artist, or someone simply looking to immerse yourself in the rhythm of life, we have something special in store for you.</p>
                    </div>
                </div>
            </div>
            <section class="py-5">
                <div class="container py-5">
                    <div class="row mb-4 mb-lg-5">
                        <div class="col-md-8 col-xl-6 text-center mx-auto">
                            <p class="fw-bold text-success mb-2"></p>
                            <h2 class="fw-bold">All Star Talent</h2>
                            <p class="text-muted w-lg-50">No matter the project, our team can handle it.&nbsp;</p>
                        </div>
                    </div>
                    <div class="row row-cols-2 row-cols-md-3 mx-auto" style="max-width: 700px;">
                        <div class="col-12 col-md-6 col-xl-6 offset-xl-0 mb-4">
                            <div class="text-center"><img class="rounded mb-3 fit-cover" width="150" height="150" src="image/img/team/YongXin.jpg" style="width: 200px;height: 200px;">
                                <h5 class="fw-bold mb-0" style="text-align: center;">Tai Yong Xin</h5>
                                <p class="text-muted mb-2">Administrator</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-6 offset-0 offset-xl-0 mb-4">
                            <div class="text-center"><img class="rounded mb-3 fit-cover" width="150" height="150" src="image/img/team/WeiHeng.jpg" style="width: 200px;height: 200px;">
                                <h5 class="fw-bold mb-0" style="text-align: center;"><strong>Leng Wei Heng</strong></h5>
                                <p class="text-muted mb-2">Administrator</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-6 offset-md-0 offset-xl-0 mb-4">
                            <div class="text-center"><img class="rounded mb-3 fit-cover" width="150" height="150" src="image/img/team/KaiHann.jpg" style="width: 200px;height: 200px;">
                                <h5 class="fw-bold mb-0" style="text-align: center;"><strong>Tiu Kai Hann</strong></h5>
                                <p class="text-muted mb-2">Administrator</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-6 offset-0 offset-xl-0 mb-4">
                            <div class="text-center"><img class="rounded mb-3 fit-cover" width="150" height="150" src="image/img/team/LiQian.jpg" style="width: 200px;height: 200px;">
                                <h5 class="fw-bold mb-0" style="text-align: center;"><strong>Chong Li Qian</strong></h5>
                                <p class="text-muted mb-2">Administrator</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bold-and-dark.js"></script>
    <script src="js/user_script.js"></script>

</body>
</html>