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
    <title>Our Service</title>
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
            <div class="row mb-4 mb-lg-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <p class="fw-bold text-success mb-2">Our Services</p>
                    <h3 class="fw-bold">What we can do for you</h3>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;">
                <div class="col mb-5"><img class="rounded img-fluid shadow" src="image/img/ourService2.jpg"></div>
                <div class="col d-md-flex align-items-md-end align-items-lg-center mb-5">
                    <div>
                        <h5 class="fw-bold">MARS</h5>
                        <p class="text-muted mb-4">Welcome to MARS,&nbsp;where we strive to provide an unforgettable experience for music enthusiasts from all walks of life. Our services are tailored to ensure that every aspect of your musical journey with us is seamless, enjoyable, and memorable.</p>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;">
                <div class="col order-md-last mb-5"><img class="rounded img-fluid shadow" src="image/img/ourService3.jpg"></div>
                <div class="col d-md-flex align-items-md-end align-items-lg-center mb-5">
                    <div>
                        <h5 class="fw-bold">Services</h5>
                        <p class="text-muted mb-4"><strong style="color: rgb(255,255,255);">Exciting Music Events:&nbsp;</strong>Experience the thrill of live music performances from top artists and emerging talents. From intimate acoustic sessions to electrifying music festivals, we curate a diverse range of events to cater to every musical taste.</p>
                        <p style="color: rgba(255,255,255,0.75);"><strong style="color: rgb(255,255,255);">Ticket Sales:&nbsp;</strong>Easily purchase tickets to our upcoming music events through our user-friendly online ticketing platform. Whether you're planning a solo adventure or a group outing with friends, securing your spot at our events is just a few clicks away.</p>
                        <p style="color: rgba(255,255,255,0.75);"><strong style="color: rgb(255,255,255);">Event Information:&nbsp;</strong>Stay informed about our latest events, lineup announcements, venue details, and schedule updates. Our comprehensive event information ensures that you have all the details you need to plan your attendance and make the most of your experience.</p>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;">
                <div class="col mb-5"><img class="rounded img-fluid shadow" src="image/img/ourService1.jpg"></div>
                <div class="col d-md-flex align-items-md-end align-items-lg-center mb-5">
                    <div>
                        <p class="text-muted mb-4" style="color: rgba(255, 255, 255, 0.75);"><strong style="color: rgb(255,255,255);">Interactive Community:&nbsp;</strong>Join our vibrant community of music enthusiasts and connect with like-minded individuals who share your passion for music. Engage in discussions, share your favorite artists and songs, and stay updated on the latest music trends and news.</p>
                        <p style="color: rgba(255,255,255,0.75);"><strong style="color: rgb(255,255,255);">Exclusive Offers and Promotions:&nbsp;</strong>Enjoy exclusive offers, discounts, and promotions as a valued member of our community. From early bird ticket specials to VIP packages, we provide opportunities for our members to access premium experiences and special perks.</p>
                        <p style="color: rgba(255,255,255,0.75);"><strong style="color: rgb(255,255,255);">Customer Support:&nbsp;</strong>Our dedicated customer support team is here to assist you with any questions, concerns, or issues you may encounter. Whether you need assistance with ticket purchases, event inquiries, or technical support, we're committed to providing prompt and helpful assistance to ensure your satisfaction.</p>
                        <p style="color: rgba(255,255,255,0.75);"><strong style="color: rgb(255,255,255);">Feedback and Suggestions:&nbsp;</strong>Your feedback is invaluable to us as we strive to continually improve and enhance our services. Share your thoughts, suggestions, and ideas with us, and help shape the future of XYZ Music Event.</p>
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