<?php
session_start();

// Check if user is logged in or not
$userLoggedIn = isset($_SESSION['user_id']);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Contact Us</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    </head>

    <body>

        <?php include('inc/header.php'); ?>

        <!-- Admin Bar -->
        <div class="admin-bar">
            <?php echo $userLoggedIn ? 'Welcome to CV Generator, ' : 'Login to create your CV'; ?>
            <a href = "http://localhost/cv-generator/update_profile.php" class = "admin-bar-link"><i class="fa fa-user" aria-hidden="true">
            </i>View Your Profile</a>
        </div>
<!-- Contact Banner -->
        <div class="sub-page-image-banner">
        <img src="assets/images/contact-banner.jpg" alt="Contact Banner Image">
            <div class="text-overlay">
                <h1>Contact Us</h1>
            </div>
        </div>

        <div class="container">
            <div class="contact-section">
                <div class="contact-details">
                    <h2>Contact Details</h2>
                    <ul>
                        <li><a href="#"><i class="fa fa-location-arrow"></i> 123 Main St, City, Country</a></li>
                        <li><a href="tel:+94751234567"><i class="fa fa-phone"></i> +94 75 123 4567</a></li>
                        <li><a href="mailto:info@cvgenerator.com"><i class="fa fa-envelope"></i> info@cvgenerator.com</a></li>
                    </ul>
                    <div class="contact-pic">
                        <img src = "assets/images/contact-pic1.png">
                    </div>
                </div>
                <div class="contact-form">
                    <h2>Contact Us</h2>
                    <?php echo((!empty($errorMessage)) ? $errorMessage : '') ?>
                    <form method="post" action="inc/contact-email.php" id="contact-form">
                        <input type="text" name="name" placeholder="Your Name" class="text-input" required>
                        <input type="email" name="email" placeholder="Your Email" class="text-input" required>
                        <input type="text" name="subject" placeholder="Subject" class="text-input" required>
                        <textarea name="message" placeholder="Your Message" required></textarea>
                        <button type="submit">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
        <?php include('inc/footer.php'); ?>

        <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
                var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
                (function(){
                var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                s1.async=true;
                s1.src='https://embed.tawk.to/6547c2a4a84dd54dc488c076/1heg50ld4';
                s1.charset='UTF-8';
                s1.setAttribute('crossorigin','*');
                s0.parentNode.insertBefore(s1,s0);
                })();
            </script>
        <!--End of Tawk.to Script-->
        
    </body>
</html>
