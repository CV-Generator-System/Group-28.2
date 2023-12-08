<?php
session_start();

$userLoggedIn = isset($_SESSION['user_id']);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>About Us</title>
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

        <div class="sub-page-image-banner">
        <img src="assets/images/about-banner.jpg" alt="About Banner Image">
            <div class="text-overlay">
                <h1>About Us</h1>
            </div>
        </div>

        <div class = "header bg-bright" id = "header">
            <div class = "container">
                <div class = "header-content text-center section-one-3">
                    <h6 class = "sub-title">CV GENERATOR</h6>
                    <h1 class = "lg-title">Our Story: Crafting Your Path to Success.</h1>
                    <p class = "text-dark about-us">At CV Generator, we are dedicated to helping 
                        individuals unlock their full professional potential. Our mission is to empower you to create 
                        eye-catching, professionally designed CVs that set you apart in the competitive job market.
                        What sets us apart is our commitment to providing you with the tools and resources you need to succeed.
                         We offer a wide range of customizable templates, expert tips, and an easy-to-use editor, enabling you to
                          tailor your CV to your unique strengths and aspirations.</br></br>

                        We believe that every career journey deserves a polished and professional representation. 
                        Start creating your standout CV today and let us be a part of your success story.
                    </p>
                    <a href = "http://localhost/cv-generator/templates.php" class = "btn btn-primary text-uppercase">create my resume</a>
                    <img src = "assets/images/dublin-resume-templates.avif" class="about-pg-cv">
                </div>
            </div>
        </div>
        
        <?php include('inc/footer.php'); ?>

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