<?php
session_start();

$userLoggedIn = isset($_SESSION['user_id']);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>CV Generator-Home</title>
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

        <div class="image-banner">
        <img src="assets/images/home-banner.jpg" alt="Home Banner Image">
            <div class="text-overlay">
                <h1>Simplest way to create your professional CV</h1>
                <p>Create Your Perfect CV with Ease. Build, Customize, and Showcase Your Professional Story in Minutes. 
                    Stand Out from the Crowd and Land Your Dream Job. Get Started Today!</p>
            </div>
        </div>

        <div class="section-one">
            <div class="container">
                <div class = "section-one-content">
                    <div class="section-one-l">
                        <img src = "assets/images/visual-0c7080adf17f1f207276f613447c924f667dab34b7ac415cd7ef653172defd0b.svg">
                    </div>
                    <div class = "section-one-r text-center">
                        <h2>Use the best resume maker as your guide!</h2>
                        <p>Getting that dream job can seem like an impossible task. We're here to change that. 
                            Give yourself a real advantage with the best online resume maker: created by experts, 
                            imporved by data, trusted by millions of professionals.</p>
                        <div class = "btn-group">
                            <a href = "http://localhost/cv-generator/templates.php" class = "btn btn-primary">Create Resume</a>
                            <a href = "http://localhost/cv-generator/contact.php" class = "btn btn-secondary">Get Help <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class = "section-two bg-bright">
            <div class="container">
                <div class="section-items">
                    <div class = "section-item">
                        <div class = "section-item-icon">
                            <img src = "assets/images/feactures-1.png" alt = "">
                        </div>
                        <h5 class = "section-item-title">Create Professional CVs</h5>
                        <p class = "text"> Use a visually appealing icon to represent the ability to create polished and professional CVs. 
                            This point highlights the primary function of your website, emphasizing that users can easily craft impressive resumes.</p>
                    </div>
                    
                    <div class = "section-item">
                        <div class = "section-item-icon">
                            <img src = "assets/images/feactures-2.png" alt = "">
                        </div>
                        <h5 class = "section-item-title">Customize and Personalize</h5>
                        <p class = "text">Use an icon that suggests customization or personalization options. This point conveys the idea that users can tailor 
                            their CVs to reflect their unique skills and experiences, making them stand out to potential employers.</p>
                    </div>

                    <div class = "section-item">
                        <div class = "section-item-icon">
                            <img src = "assets/images/feactures-3.png" alt = "">
                        </div>
                        <h5 class = "section-item-title">Save and Share Effortlessly</h5>
                        <p class = "text">An icon symbolizing a "save" or "share" action can represent the convenience of your website. It indicates 
                            that users can effortlessly save their CVs, download them in various formats, and share them with potential employers or on job platforms.</p>
                    </div>
                </div>
            </div>
        </div>

                
                
        <?php include('inc/footer.php'); ?>

        <!-- custom js -->
        <script src = "assets/js/script.js"></script>

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