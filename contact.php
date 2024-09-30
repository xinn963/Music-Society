<?php
    include 'components/connect.php';

    if(isset($_COOKIE['user_id'])){
        $user_id = $_COOKIE['user_id'];
    }
    else{
        $user_id = 'location:login.php';
    }

    //sending message
    if(isset($_POST['send_message'])){
        if($user_id != ''){
            $id = unique_id();
            $name = $_POST['name'];
            $name = filter_var($name, FILTER_SANITIZE_STRING);

            $email = $_POST['email'];
            $email = filter_var($email, FILTER_SANITIZE_STRING);

            $subject = $_POST['subject'];
            $subject = filter_var($subject, FILTER_SANITIZE_STRING);

            $message = $_POST['message'];
            $message = filter_var($message, FILTER_SANITIZE_STRING);      
            
            $verify_message = $conn->prepare("SELECT * FROM message WHERE user_id = ? AND name = ? AND email = ? AND subject = ? AND message = ?");
            $verify_message->execute([$user_id, $name, $email, $subject, $message]);

            if($verify_message->rowCount() > 0){
                $warning_msg[] = 'message already exist';
            }
            else{
                $insert_message = $conn->prepare("INSERT INTO message (id, user_id, name, email, subject, message) VALUES(?, ?, ?, ?, ?, ?)");
                $insert_message->execute([$id, $user_id, $name, $email, $subject, $message]);

                $success_msg[] = 'comment inserted successfully';
            }
        }else{
            $warning_msg[] = 'please login first';
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="css/user_style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <?php include 'components/user_header.php'; ?>
    

    <div class="contact">
        <div class="row mb-4 mb-lg-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <p class="fw-bold text-success mb-2">Contacts</p>
                <h3 class="fw-bold">Reach Out and Rock On</h3>
            </div>
        </div>

        <div style="text-align:center;">
            <h3>Navigate the Beat with Our Interactive Map</h3>
        </div>    

    <div class="map" style="display: flex; justify-content: center; margin-top:1%;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15934.12705739616!2d101.71304674735295!3d3.216803298133159!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc3843bfb6a031%3A0x2dc5e067aae3ab84!2sTunku%20Abdul%20Rahman%20University%20of%20Management%20and%20Technology%20(TAR%20UMT)!5e0!3m2!1sen!2smy!4v1715242739184!5m2!1sen!2smy" 
            width="80%" height="500px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="form-container">
        <div class="heading">
            <h1 style="color: #3763f4;">Your Voice, Our Beat</h1>
            <p>Drop a Feedback, Shape the Rhythm of Tomorrow's Events</p>
        </div>
        <form action="" method="post" class="register">
            <div class="input-field">
                <label>name <sup>*</sup></label>
                <input type="text" name="name" required placeholder="enter your name" class="box">
            </div>
            <div class="input-field">
                <label>email <sup>*</sup></label>
                <input type="text" name="email" required placeholder="enter your email" class="box">
            </div>
            <div class="input-field">
                <label>subject <sup>*</sup></label>
                <input type="text" name="subject" required placeholder="reason..." class="box">
            </div>
            <div class="input-field">
                <label>comment <sup>*</sup></label>
                <textarea name="message" cols="30" rows="30" required placeholder="" class="box"></textarea>
            </div>
            <button type="submit" name="send_message" class="btn">send message</button>
        </form>
    </div>

    <div class="address">
        <div class="heading">
            <h1 style="color: #3763f4;">our contact details</h1>
            <p>Find Us Here for Your Event Needs</p>
        </div>
        <div class="box-container">
            <div class="box">
                <i class="bx bxs-map-alt"></i>
                <div class="contact_details">
                    <h4>address</h4>
                    <div>
                        <p>Tunku Abdul Rahman University <br>of Management and Technology <br>(TAR UMT)</p>
                    </div>
                </div>
            </div>
            <div class="box">
                <i class="bx bxs-phone-incoming"></i>
                <div class="contact_details">
                    <h4>phone number</h4>
                    <div>
                        <p>+6012-345 6789</p>
                    </div>
                </div>
            </div>
            <div class="box">
                <i class="bx bxs-envelope"></i>
                <div class="contact_details">
                    <h4>email</h4>
                    <div>
                        <p>mars@gmail.com</p>
                    </div>
                    
                 </div>
            </div>
            <div class="box">
                <i class="fa-regular fa-clock"></i>
                <div class="contact_details">
                    <h4>operating hour</h4>
                    <div>
                        <p>8:30 am - 5:30 pm</p>
                    </div>
                    
                 </div>
            </div>
        </div>
    </div>
    </div>

    <?php include 'components/footer.php'; ?>

    <!-- sweetalert cdn link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="https://kit.fontawesome.com/d7f8a03d88.js" crossorigin="anonymous"></script>

    <!-- custom js link -->
    <script src="js/user_script.js"></script>

    <?php include 'components/alert.php'; ?>
</body>
</html>