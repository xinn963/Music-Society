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
    <title>FAQs</title>
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
            <div id="faqlist-1" class="accordion accordion-flush">
                <div class="accordion-item" style="margin-bottom: 10px;margin-right: 0px;border-top-left-radius: 5px;border-top-right-radius: 5px;border-bottom-right-radius: 5px;border-bottom-left-radius: 5px;border-top: 1px solid #030311;border-right: 1px solid #030311;border-bottom: 1px solid #030311;border-left: 1px solid #030311;"><details class="accordion">
    <summary class="accordion__title"><b>What is the date and location of the event?</b><span></span></summary>
    <article class="accordion__content">
The details of the event is all provided in the event details section.

    </article>
</details></div>
                <div class="accordion-item" style="margin-bottom: 10px;border-top-left-radius: 5px;border-top-right-radius: 5px;border-bottom-right-radius: 5px;border-bottom-left-radius: 5px;border-top: 1px solid #030311;border-right: 1px solid #030311;border-bottom: 1px solid #030311;border-left: 1px solid #030311;"><details class="accordion">
    <summary class="accordion__title"><b>How can I purchase ticket?</b><span></span></summary>
    <article class="accordion__content">
Tickets can be purchased through online, at the venue or through authorized sellers.

    </article>
</details></div>
                <div class="accordion-item" style="margin-bottom: 10px;border-bottom-right-radius: 5px;border-bottom-left-radius: 5px;border-top-left-radius: 5px;border-top-right-radius: 5px;border-top: 1px solid #030311;border-right: 1px solid #030311;border-bottom: 1px solid #030311;border-left: 1px solid #030311;"><details class="accordion">
    <summary class="accordion__title"><b>Are there any age restrictions for attending the event?
        </b><span></span></summary>
    <article class="accordion__content">
No. There is no any age restrictions for attending the event.

    </article>
</details></div>
            </div>
            <div id="faqlist-2" class="accordion accordion-flush">
                <div class="accordion-item" style="margin-bottom: 10px;margin-right: 0px;border-top-left-radius: 5px;border-top-right-radius: 5px;border-bottom-right-radius: 5px;border-bottom-left-radius: 5px;border-top: 1px solid #030311;border-right: 1px solid #030311;border-bottom: 1px solid #030311;border-left: 1px solid #030311;"><details class="accordion">
    <summary class="accordion__title"><b>Is there assigned seating or is it general admission?</b><span></span></summary>
    <article class="accordion__content">
No, there is no assigned seating nor general admission.
    </article>
</details></div>
                <div class="accordion-item" style="margin-bottom: 10px;border-top-left-radius: 5px;border-top-right-radius: 5px;border-bottom-right-radius: 5px;border-bottom-left-radius: 5px;border-top: 1px solid #030311;border-right: 1px solid #030311;border-bottom: 1px solid #030311;border-left: 1px solid #030311;"><details class="accordion">
    <summary class="accordion__title"><b>What is the refund policy?</b><span></span></summary>
    <article class="accordion__content">
MARS and/or the Parties do not offer refunds unless the event is canceled or postponed due to a Force Majeure Event. If canceled or postponed, you'll be automatically registered for the new date. Refunds, if any, are subject to deduction of incurred costs.
    </article>
</details></div>
                <div class="accordion-item" style="margin-bottom: 10px;border-bottom-right-radius: 5px;border-bottom-left-radius: 5px;border-top-left-radius: 5px;border-top-right-radius: 5px;border-top: 1px solid #030311;border-right: 1px solid #030311;border-bottom: 1px solid #030311;border-left: 1px solid #030311;"><details class="accordion">
    <summary class="accordion__title"><b>Is there parking available at the venue?</b><span></span></summary>
    <article class="accordion__content">
Yes, parking is available at the venue.
    </article>
</details></div>
            </div>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>
    
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bold-and-dark.js"></script>
</body>

</html>