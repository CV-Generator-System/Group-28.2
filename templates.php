<?php
session_start();

$userLoggedIn = isset($_SESSION['user_id']);

if (!$userLoggedIn) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Templates</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    </head>

    <body class="templates-page">

        <?php include('inc/header.php'); ?>
        
        <!-- Admin Bar -->
        <div class="admin-bar">
            <?php echo $userLoggedIn ? 'Welcome to CV Generator, ' : 'Login to create your CV'; ?>
            <a href = "http://localhost/cv-generator/update_profile.php" class = "admin-bar-link"><i class="fa fa-user" aria-hidden="true">
            </i>View Your Profile</a>
        </div>

        <div class="sub-page-image-banner">
        <img src="assets/images/template-banner.jpg" alt="Templates Banner Image">
            <div class="text-overlay">
                <h1>Templates</h1>
            </div>
        </div>

        <div class="container">
            <div class="image-row templates">
                <div class="image-box">
                    <a href="http://localhost/cv-generator/resume-1.php">
                        <img src="assets/images/cv-temp-1.jpg" alt="Image 1">
                        <div class="overlay">
                            <p class = "btn select-btn">Select</p>
                        </div>
                    </a>
                </div>
                <div class="image-box">
                    <a href="http://localhost/cv-generator/resume-2.php">
                        <img src="assets/images/cv-temp-2.jpg" alt="Image 2">
                        <div class="overlay">
                            <p class = "btn select-btn">Select</p>
                        </div>
                    </a>
                </div>
                <div class="image-box">
                    <a href="http://localhost/cv-generator/resume-3.php">
                        <img src="assets/images/cv-temp-3.jpg" alt="Image 3">
                        <div class="overlay">
                            <p class = "btn select-btn">Select</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <?php include('inc/footer.php'); ?>

        <!-- Login Popup -->
        <div id="loginPopup">
            <h2>Please Log In</h2>
            <p>You need to be logged in to access this page.</p>
            <button onclick="location.href='login.php'">Login</button>
        </div>

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