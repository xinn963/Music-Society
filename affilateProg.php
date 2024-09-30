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
    <title>Affiliate Program</title>
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
                    <h2 class="fw-bold">Affiliate Program</h2>
                    <p class="text-muted">Welcome to the MARS Music Event Affiliate Program! Join us in spreading the love for music and earning rewards along the way. Our affiliate program offers a unique opportunity for individuals and organizations to partner with us and promote our music events while earning commissions for every ticket sale generated through their referrals.</p>
                </div>
            </div>
            <section class="py-5" style="padding-bottom: 24px;padding-top: 0px;margin-top: -71px;">
                <div class="container py-5" style="margin-top: -22px;">
                    <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;">
                        <div class="col mb-4">
                            <div><a href="#"></a>
                                <div class="py-4">
                                    <h4 class="fw-bold">Sign Up</h4>
                                    <p class="text-muted">Register for our affiliate program through our online portal. It's quick, easy, and free to join</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div><a href="#"></a>
                                <div class="py-4">
                                    <h4 class="fw-bold">Earn Commision</h4>
                                    <p class="text-muted">Earn commissions for every ticket sale generated through your affiliate link. Track your performance and commission earnings in real-time through our affiliate&nbsp;dashboard.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div><a href="#"></a>
                                <div class="py-4">
                                    <h4 class="fw-bold">Get Your Unique Affiliate Link</h4>
                                    <p class="text-muted">Upon approval, you'll receive a unique affiliate link that you can share with your audience through various channels, including your website, social media platforms, email newsletters, and more.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div><a href="#"></a>
                                <div class="py-4">
                                    <h4 class="fw-bold">Promote MARS Music Events</h4>
                                    <p class="text-muted">Start promoting our upcoming music events to your audience using your affiliate link. Share details about the artists, event highlights, and ticket availability to generate interest and drive traffic to our website.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col offset-xl-3 mb-4">
                            <div><a href="#"></a>
                                <div class="py-4">
                                    <h4 class="fw-bold">Access Marketing Resources</h4>
                                    <p class="text-muted">Gain access to a variety of marketing resources, including banners, images, promotional content, and tracking tools to help you optimize your promotional efforts and maximize your earnings.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="container py-5" style="margin-top: -120px;">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 class="fw-bold">Benefits of Joining</h2>
                    <p class="text-muted"></p>
                </div>
            </div>
            <section>
                <div class="container py-5" style="margin-top: -45px;">
                    <div class="mx-auto" style="max-width: 900px;">
                        <div class="row row-cols-1 row-cols-md-2 d-flex justify-content-center">
                            <div class="col mb-4">
                                <div class="card bg-primary-light">
                                    <div class="card-body text-center px-4 py-5 px-md-5">
                                        <p class="fw-bold text-primary card-text mb-2">Earn Generous Commissions</p>
                                        <h5 class="fw-bold card-title mb-3">Earn competitive commissions for every ticket sale generated through your referrals.</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-4">
                                <div class="card bg-secondary-light">
                                    <div class="card-body text-center px-4 py-5 px-md-5">
                                        <p class="fw-bold text-secondary card-text mb-2">Expand Your Audience</p>
                                        <h5 class="fw-bold card-title mb-3">Tap into our audience base and reach new music enthusiasts who share your passion.</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-4">
                                <div class="card bg-info-light">
                                    <div class="card-body text-center px-4 py-5 px-md-5">
                                        <p class="fw-bold text-info card-text mb-2">Flexible Promotion</p>
                                        <h5 class="fw-bold card-title mb-3">Promote our events on your terms and schedule, using the channels and methods that work best for you.</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-4">
                                <div class="card bg-primary-light">
                                    <div class="card-body text-center px-4 py-5 px-md-5" style="height: 217.6px;">
                                        <p class="fw-bold text-primary card-text mb-2">Track Performance</p>
                                        <h5 class="fw-bold card-title mb-3">Monitor your referral traffic, conversions, and earnings in real-time through our comprehensive affiliate dashboard.</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-4">
                                <div class="card bg-secondary-light">
                                    <div class="card-body text-center px-4 py-5 px-md-5">
                                        <p class="fw-bold text-secondary card-text mb-2">Support and Guidance</p>
                                        <h5 class="fw-bold card-title mb-3">Receive dedicated support from our affiliate team to help you succeed in your promotional efforts.</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;margin-top: 50px;">
                            <div class="col mb-5"><img class="rounded img-fluid shadow" src="image/img/affilateProg1.jpg"></div>
                            <div class="col d-md-flex align-items-md-end align-items-lg-center mb-5">
                                <div>
                                    <h5 class="fw-bold">Join Our Affiliate Program Today!</h5>
                                    <p class="text-muted mb-4">Ready to join the MARS Affiliate Program and start earning rewards for promoting our music events? Sign up now and become part of our affiliate community.</p><a class="btn btn-primary shadow" role="button" href="register.php">Sign Up Now</a>
                                </div>
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
</body>

</html>