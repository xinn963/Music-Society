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
    <title>Privacy Policy</title>
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
                    <p class="fw-bold text-success mb-2">Privacy Policy</p>
                    <h3 class="fw-bold">For MARS </h3>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;">
                <div class="col mb-5"><img class="rounded img-fluid shadow" src="image/img/priPolicy1.jpg"></div>
                <div class="col d-md-flex align-items-md-end align-items-lg-center mb-5">
                    <div>
                        <h5 class="fw-bold"></h5>
                        <p class="text-muted mb-4">This Privacy Policy describes how MARS collects, uses, and shares personal information when you visit our website and interact with our services. We are committed to protecting your privacy and ensuring the security of your personal information. Please read this Privacy Policy carefully to understand our practices regarding your personal data and how we will treat it.</p>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;">
                <div class="col order-md-last mb-5"><img class="rounded img-fluid shadow" src="image/img/priPolicy2.jpg"></div>
                <div class="col d-md-flex align-items-md-end align-items-lg-center mb-5">
                    <div>
                        <h5 class="fw-bold">Information We Collect</h5>
                        <p class="text-muted mb-4"><strong style="color: rgb(255,255,255);">Personal Information:&nbsp;</strong>&nbsp;When you visit our website or register for our music events, we may collect personal information such as your name, email address, postal address, phone number, and payment information.</p>
                        <p style="color: rgba(255,255,255,0.75);"><strong style="color: rgb(255,255,255);">Usage Information:&nbsp;</strong>We may also collect information about how you use our website, including your browsing actions and patterns. This may include information such as your IP address, browser type, operating system, and referral URLs.</p>
                        <p style="color: rgba(255,255,255,0.75);"><strong style="color: rgb(255,255,255);">Cookies:&nbsp;</strong>Like many websites, we use cookies to enhance your browsing experience and gather information about visitors to our site. You can control cookies through your browser settings.</p>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;">
                <div class="col mb-5"><img class="rounded img-fluid shadow" src="image/img/priPolicy3.jpg"></div>
                <div class="col d-md-flex align-items-md-end align-items-lg-center mb-5">
                    <div>
                        <h5 class="fw-bold">How We Use Your Information</h5>
                        <p class="text-muted mb-4" style="color: rgba(255, 255, 255, 0.75);"><strong style="color: rgb(255,255,255);">To Provide Services:&nbsp;</strong>We use your personal information to provide you with access to our music events and related services, including ticket purchases, event updates, and customer support.</p>
                        <p style="color: rgba(255,255,255,0.75);"><strong style="color: rgb(255,255,255);">Communication:&nbsp;</strong>We may use your contact information to communicate with you about our events, promotions, and other updates. You can opt-out of receiving these communications at any time.</p>
                        <p style="color: rgba(255,255,255,0.75);"><strong style="color: rgb(255,255,255);">Analytics:&nbsp;</strong>We use usage information and cookies to analyze trends, administer the website, track user movements, and gather demographic information for aggregate use.</p>
                        <p style="color: rgba(255,255,255,0.75);"><strong style="color: rgb(255,255,255);">Legal Compliance:&nbsp;</strong>We may use your information to comply with applicable laws, regulations, legal processes, or government requests.</p>
                    </div>
                </div>
            </div>
            <section>
                <div class="container bg-dark py-5" style="background: var(--bs-body-bg);color: var(--bs-body-bg);">
                    <div class="py-5 p-lg-5">
                        <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;">
                            <div class="col mb-5">
                                <div class="card shadow-sm">
                                    <div class="card-body px-4 py-5 px-md-5" style="height: 382px;">
                                        <div class="bs-icon-lg d-flex justify-content-center align-items-center mb-3 bs-icon" style="top: 1rem;right: 1rem;position: absolute;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bell text-success">
                                                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6"></path>
                                            </svg></div>
                                        <h5 class="fw-bold card-title">Information Sharing</h5>
                                        <p class="text-muted card-text mb-4">We do not sell, rent, or trade your personal information to third parties for marketing purposes. However, we may share your information with trusted service providers who assist us in operating our website and providing our services. These service providers are contractually obligated to use your information only as necessary to provide the services to us.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-5">
                                <div class="card shadow-sm">
                                    <div class="card-body px-4 py-5 px-md-5" style="margin: 0px;height: 382px;">
                                        <div class="bs-icon-lg d-flex justify-content-center align-items-center mb-3 bs-icon" style="top: 1rem;right: 1rem;position: absolute;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bezier text-success">
                                                <path fill-rule="evenodd" d="M0 10.5A1.5 1.5 0 0 1 1.5 9h1A1.5 1.5 0 0 1 4 10.5v1A1.5 1.5 0 0 1 2.5 13h-1A1.5 1.5 0 0 1 0 11.5zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm10.5.5A1.5 1.5 0 0 1 13.5 9h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM6 4.5A1.5 1.5 0 0 1 7.5 3h1A1.5 1.5 0 0 1 10 4.5v1A1.5 1.5 0 0 1 8.5 7h-1A1.5 1.5 0 0 1 6 5.5zM7.5 4a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"></path>
                                                <path d="M6 4.5H1.866a1 1 0 1 0 0 1h2.668A6.517 6.517 0 0 0 1.814 9H2.5c.123 0 .244.015.358.043a5.517 5.517 0 0 1 3.185-3.185A1.503 1.503 0 0 1 6 5.5zm3.957 1.358A1.5 1.5 0 0 0 10 5.5v-1h4.134a1 1 0 1 1 0 1h-2.668a6.517 6.517 0 0 1 2.72 3.5H13.5c-.123 0-.243.015-.358.043a5.517 5.517 0 0 0-3.185-3.185z"></path>
                                            </svg></div>
                                        <h5 class="fw-bold card-title">Data Security</h5>
                                        <p class="text-muted card-text mb-4">We implement appropriate technical and organizational measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the internet or electronic storage is 100% secure, and we cannot guarantee absolute security.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-4">
                                <div class="card shadow-sm">
                                    <div class="card-body px-4 py-5 px-md-5">
                                        <div class="bs-icon-lg d-flex justify-content-center align-items-center mb-3 bs-icon" style="top: 1rem;right: 1rem;position: absolute;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-pin-angle text-success">
                                                <path d="M9.828.722a.5.5 0 0 1 .354.146l4.95 4.95a.5.5 0 0 1 0 .707c-.48.48-1.072.588-1.503.588-.177 0-.335-.018-.46-.039l-3.134 3.134a5.927 5.927 0 0 1 .16 1.013c.046.702-.032 1.687-.72 2.375a.5.5 0 0 1-.707 0l-2.829-2.828-3.182 3.182c-.195.195-1.219.902-1.414.707-.195-.195.512-1.22.707-1.414l3.182-3.182-2.828-2.829a.5.5 0 0 1 0-.707c.688-.688 1.673-.767 2.375-.72a5.922 5.922 0 0 1 1.013.16l3.134-3.133a2.772 2.772 0 0 1-.04-.461c0-.43.108-1.022.589-1.503a.5.5 0 0 1 .353-.146zm.122 2.112v-.002zm0-.002v.002a.5.5 0 0 1-.122.51L6.293 6.878a.5.5 0 0 1-.511.12H5.78l-.014-.004a4.507 4.507 0 0 0-.288-.076 4.922 4.922 0 0 0-.765-.116c-.422-.028-.836.008-1.175.15l5.51 5.509c.141-.34.177-.753.149-1.175a4.924 4.924 0 0 0-.192-1.054l-.004-.013v-.001a.5.5 0 0 1 .12-.512l3.536-3.535a.5.5 0 0 1 .532-.115l.096.022c.087.017.208.034.344.034.114 0 .23-.011.343-.04L9.927 2.028c-.029.113-.04.23-.04.343a1.779 1.779 0 0 0 .062.46z"></path>
                                            </svg></div>
                                        <h5 class="fw-bold card-title">Your Choices</h5>
                                        <p class="text-muted card-text mb-4">You have the right to access, update, or delete your personal information. You can also opt-out of receiving marketing communications from us by following the instructions in our emails or contacting us directly.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-4">
                                <div class="card shadow-sm">
                                    <div class="card-body px-4 py-5 px-md-5" style="margin: 0px;height: 280px;">
                                        <div class="bs-icon-lg d-flex justify-content-center align-items-center mb-3 bs-icon" style="top: 1rem;right: 1rem;position: absolute;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-chat-quote text-success">
                                                <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894m-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"></path>
                                                <path d="M7.066 6.76A1.665 1.665 0 0 0 4 7.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 0 0 .6.58c1.486-1.54 1.293-3.214.682-4.112zm4 0A1.665 1.665 0 0 0 8 7.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 0 0 .6.58c1.486-1.54 1.293-3.214.682-4.112z"></path>
                                            </svg></div>
                                        <h5 class="fw-bold card-title">Changes to this Privacy Policy</h5>
                                        <p class="text-muted card-text mb-4">We reserve the right to update or change this Privacy Policy at any time. Any changes will be posted on this page with a revised effective date.</p>
                                    </div>
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