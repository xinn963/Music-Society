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
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="css/user_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/font-awesome/6.2.0/css/all.min.css">
</head>

<body>
    <?php include 'components/user_header.php'; ?>

    <!-- slider section start -->
    <div class="slider-container">
        <div class="slider" >
            <div class="slideBox active">
                <div class="textBox">
                    <h1>experience the <br>magic  of live music with us</h1>
                    <p><a href="menu.php" class="btn">Choose now</a></p>
                </div>
                <div class="imgBox">
                    <img src="image/background/colin-lloyd-5TGwSC4dHOU-unsplash.jpg">
                </div>
            </div>

            <div class="slideBox">
                <div class="textBox">
                    <h1>Immerse Yourself in the <br> Enchantment of Live Music with Us</h1>
                    <a href="menu.php" class="btn">Choose now</a>
                </div>
                <div class="imgBox">
                    <img src="image/background/live1.jpeg">
                </div>
            </div>
        </div>
        <ul class="controls">
            <li onclick="nextSlide();" class="next"><i class="bx bx-right-arrow-alt"></i></li>
            <li onclick="prevSlide();" class="prev"><i class="bx bx-left-arrow-alt"></i></li>
        </ul>
    </div>
    <!-- slider section end -->

    <div class="service">
        <div class="box-container">
            <!--service item box-->
            <div class="box">
                <div class="icon">
                    <div class="icon-box">
                        <img src="image/ticket_black.png" class="img1">
                        <img src="image/ticket_white.png" class="img2">
                    </div>
                </div>
                <div class="detail">
                    <h4>ticket</h4>
                    <span>100% secure</span>
                </div>
            </div>
            <!--service item box-->
            <!--service item box-->
            <div class="box">
                <div class="icon">
                    <div class="icon-box">
                        <img src="image/services (5).png" class="img1">
                        <img src="image/services (6).png" class="img2">
                    </div>
                </div>
                <div class="detail">
                    <h4>payment</h4>
                    <span>100% secure</span>
                </div>
            </div>
             <!--service item box-->
             <!--service item box-->
            <div class="box">
                <div class="icon">
                    <div class="icon-box">
                        <img src="image/services (2).png" class="img1">
                        <img src="image/services (3).png" class="img2">
                    </div>
                </div>
                <div class="detail">
                    <h4>support</h4>
                    <span>24*7 hours</span>
                </div>
            </div>
             <!--service item box-->
             <!--service item box-->
            <div class="box">
                <div class="icon">
                    <div class="icon-box">
                        <img src="image/services (7).png" class="img1">
                        <img src="image/services (8).png" class="img2">
                    </div>
                </div>
                <div class="detail">
                    <h4>gift service</h4>
                    <span>support gift service</span>
                </div>
            </div>
             <!--service item box-->
              <!--service item box-->
            <div class="box">
                <div class="icon">
                    <div class="icon-box">
                        <img src="image/service.png" class="img1">
                        <img src="image/service (1).png" class="img2">
                    </div>
                </div>
                <div class="detail">
                    <h4>refunds</h4>
                    <span>24*7 free refund</span>
                </div>
            </div>
             <!--service item box-->
              <!--service item box-->
            <div class="box">
                <div class="icon">
                    <div class="icon-box">
                        <img src="image/ticket_black.png" class="img1">
                        <img src="image/ticket_white.png" class="img2">
                    </div>
                </div>
                <div class="detail">
                    <h4>ticket</h4>
                    <span>24*7 hours</span>
                </div>
            </div>
             <!--service item box-->
        </div>
    </div>
    <!-- service section end -->
    <div class="categories">
        <div class="heading">
            <h1 style="color: #19f5aa;">Recent Events</h1>
        </div>
        <div class="box-container">
            <div class="box">
                <img src="image/img/events/event1.jpg">
                <a href="menu.php" class="btn">Learn More</a>
            </div>
            <div class="box">
            <img src="image/img/events/event2.jpg">
                <a href="menu.php" class="btn">Learn More</a>
            </div>
            <div class="box">
            <img src="image/img/events/event3.jpg">
                <a href="menu.php" class="btn">Learn More</a>
            </div>
            <div class="box">
            <img src="image/img/events/event4.jpg">
                <a href="menu.php" class="btn">Learn More</a>
            </div>
        </div>
    </div>

    <!-- categories section end -->
    <div class="taste">
        <div class="heading">
                
        </div>
    </div>
    <!-- taste section end -->
    <div class="ice-container">
        <div class="overlay"></div>
        <div class="detail">
            <h1>Welcome to the Pulse of Live Entertainment</h1>
            <p>Dive into a World Where Every Beat, Every Melody, and Every Performance Unfolds. From Festivals to Concerts, We're Your Premier Destination for Music Magic. Explore, Discover, and Let the Soundscapes Take You on a Journey Beyond Imagination</p>
            <a href="menu.php" class="btn">Choose Now</a>
        </div>
    </div>
    <!-- container section end -->

    <!-- taste2 section end -->
    
    <!-- flavour section end -->
    <div class="usage">
        <div class="heading">
            <h1 style="color: #19f5aa;">how it works</h1>
        </div>
        <div class="row">
            <div class="box-container">
                <div class="box">
                    <div class="detail">
                        <h3><b>Where Music Comes Alive</b></h3>
                        <p>Discover unforgettable live concerts and festivals featuring today's biggest acts</p>
                    </div>
                </div>
                <div class="box">
                    <div class="detail">
                        <h3><b>Flaunt Your Fandom</b></h3>
                        <p>Rock official band merchandise that lets you represent your favorite artists in style</p>
                    </div>
                </div>
                <div class="box">
                    <div class="detail">
                        <h3><b>The Soundtrack of Summer</b></h3>
                        <p>Don't miss the hotly anticipated festival tour rocking stages across the nation</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- usage section end -->

    <!-- pride section end -->
    <?php include 'components/footer.php'; ?>
    <script src="js/user_script.js"></script>
</body>
</html>