<?php
session_start();

$userLoggedIn = isset($_SESSION['user_id']);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Get Help</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body {
            font-family: "Open Sans", sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        .HowItWork {
            width: auto;
            height: auto;
            /* background-color: grey; */
            align-items: center;
            justify-content: center;
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            margin: 20px;
        }

        .topic {
            color: #3498db;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .step {
            color: #e74c3c;
            font-size: 20px;
            margin-top: 20px;
        }

        h3 {
            margin-top: -5px;
        }

        .img {
            width: 10%;
            height: 10%;
            margin-left: 45%;
        }
    </style>

</head>

<body>

    <?php include('inc/header.php'); ?>

    <!-- Admin Bar -->
    <div class="admin-bar">
        <?php echo $userLoggedIn ? 'Welcome to CV Generator, ' : 'Login to create your CV'; ?>
        <a href="http://localhost/cv-generator/update_profile.php" class="admin-bar-link"><i class="fa fa-user"
                aria-hidden="true">
            </i>View Your Profile</a>
    </div>

    <div class="sub-page-image-banner">
        <img src="assets/images/about-banner.jpg" alt="About Banner Image">
        <div class="text-overlay">
            <h1>Get Help</h1>
        </div>
    </div>

    <div class="header bg-bright" id="header">
        <div class="container">
            <div class="header-content text-center section-one-3">
                <h6 class="sub-title">CV GENERATOR</h6>
            </div>
            <div style="margin-bottom:50px">

                <section class="HowItWork">
                    <h1 class="topic">How this works?</h1>
                    <h1 class="topic">Follow this 3 simple steps</h1>
                    <h2 class="step">Step 1</h2>
                    <img src="assets/images/icons8-google-forms-96.png" alt="" class="img" />
                    <h3>First you have to choose the most suitable template for you!</h3>
                    <h2 class="step">Step 2</h2>
                    <img src="assets/images/icons8-fill-in-form-96.png" alt="" style="margin-top: 5px" class="img" />
                    <h3>
                        Then you need to fill your information, customize it as much as you
                        like.
                    </h3>
                    <h2 class="step">Step 3</h2>
                    <img src="assets/images/icons8-cv-96.png" alt="" class="img" />
                    <h3>Download your CV</h3>
                </section>

            </div>
        </div>
    </div>

    <?php include('inc/footer.php'); ?>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/6547c2a4a84dd54dc488c076/1heg50ld4';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

</body>

</html>