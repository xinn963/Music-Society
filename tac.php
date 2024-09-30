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
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>TAC</title>
    <link rel="stylesheet" type="text/css" href="css/user_style.css">
    <!-- font awesome cdn link -->
    <!-- box icon cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/font-awesome/6.2.0/css/all.min.css">



    <link rel="stylesheet" href="boot/Assignment/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="boot/Assignment/https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="boot/Assignment/https://fonts.googleapis.com/css?family=Roboto&amp;display=swap">
    <link rel="stylesheet" href="boot/Assignment/assets/css/faq.css">
    <link rel="stylesheet" href="boot/Assignment/assets/css/faq.compiled.css">
</head>

<body>
<?php include 'components/user_header.php'; ?>

    <section class="py-5">
        <div class="container py-5">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 class="fw-bold">Terms and Conditions</h2>
                    <p class="text-muted">Welcome to MARS! Before you engage with our website or services, please carefully review the following terms and conditions. By accessing or using our website, you agree to comply with and be bound by these terms. If you do not agree to these terms, please refrain from using our website.</p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;">
                <div class="col mb-4">
                    <div><a href="#"></a>
                        <div class="py-4">
                            <h4 class="fw-bold">Acceptance of Terms</h4>
                            <p class="text-muted">By accessing or using our website, you agree to be bound by these terms and conditions and any additional terms and policies referenced herein.</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div><a href="#"></a>
                        <div class="py-4">
                            <h4 class="fw-bold">Acceptance of Terms</h4>
                            <p class="text-muted">By accessing or using our website, you agree to be bound by these terms and conditions and any additional terms and policies referenced herein.</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div><a href="#"></a>
                        <div class="py-4">
                            <h4 class="fw-bold">Use of Website</h4>
                            <p class="text-muted">You may use our website for lawful purposes only. You agree not to use our website in any way that violates any applicable laws, regulations, or third-party rights.</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div><a href="#"></a>
                        <div class="py-4">
                            <h4 class="fw-bold">Intellectual Property</h4>
                            <p class="text-muted">All content on our website, including text, graphics, logos, images, and software, is the property of MARS and is protected by copyright and other intellectual property laws.</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div><a href="#"></a>
                        <div class="py-4">
                            <h4 class="fw-bold">Disclaimer of Warranties</h4>
                            <p class="text-muted">We make no representations or warranties of any kind, express or implied, regarding the accuracy, reliability, or completeness of the content on our website.</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div><a href="#"></a>
                        <div class="py-4">
                            <h4 class="fw-bold">Limitation of Liability</h4>
                            <p class="text-muted">MARS shall not be liable for any direct, indirect, incidental, special, or consequential damages arising out of or in connection with your use of our website or services.</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div><a href="#"></a>
                        <div class="py-4">
                            <h4 class="fw-bold">Governing Law</h4>
                            <p class="text-muted">These terms and conditions shall be governed by and construed in accordance with the laws of [Jurisdiction], without regard to its conflict of law provisions.</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div><a href="#"></a>
                        <div class="py-4">
                            <h4 class="fw-bold">Changes to Terms</h4>
                            <p class="text-muted">These terms and conditions are subject to the laws of the relevant jurisdiction. Any disputes shall be resolved exclusively in the courts of that jurisdiction, and by using our services, you agree to this jurisdiction. If any provision is found invalid, the remaining provisions remain in effect.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php include 'components/footer.php'; ?>
    
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bold-and-dark.js"></script>
</body>

</html>