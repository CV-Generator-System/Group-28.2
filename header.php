<!DOCTYPE html>
<html>
<head>
    <title>Header</title>
    <link rel="stylesheet" type="text/css" href="assets/css/header.css">
    <style>
        /* Style for the admin bar */
        .admin-bar {
            display: <?php echo $userLoggedIn ? 'block' : 'none'; ?>;
            background-color: #000;
            color: #fff;
            text-align: center;
            padding: 8px 0px;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        .admin-bar-link {
            color: #fff;
            margin-left: 10px;
        }

        .fa-user:before {
            content: "\f007";
            margin-right: 5px;
        }

    </style>
</head>
<body>

    <div class="top-header">
        <ul class="icon-sec">
            <li><a href="tel:+94751234567"><img src="assets/images/phone-call.png"><p>+94 75 123 4567</p></a></li>
            <li><a href="https://api.whatsapp.com/send?phone=94751234567">
            <img src="assets/images/whatsapp.png"><p>+94 75 123 4567</p></a></li>
            <li><a href="mailto:info@cvgenerator.com"><img src="assets/images/mail.png"><p>info@cvgenerator.com</p></a></li>
        </ul>
    </div>

    <header>

        <div class="header-container">
            <div class="logo">
                <a href="http://localhost/cv-generator/">
                <img src="assets/images/logo.png" alt="Footer Logo" href="http://localhost/cv-generator/">
                </a>
            </div>
            <nav>
                <ul class="desktop-menu">
                    <li class="nav-item"><a href="http://localhost/cv-generator/">Home</a></li>
                    <li class="nav-item"><a href="http://localhost/cv-generator/about.php">About Us</a></li>
                    <li class="nav-item"><a href="http://localhost/cv-generator/templates.php">Templates</a></li>
                    <li class="nav-item"><a href="http://localhost/cv-generator/contact.php">Contact Us</a></li>
                    <li class="button"><a href="http://localhost/cv-generator/login.php">Get Started</a></li>
                </ul>
                <div class="mobile-menu-icon" onclick="toggleMobileMenu()">
                    &#9776; <!-- Hamburger icon symbol -->
                </div>
                <ul class="mobile-menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li class="button"><a href="#">Get Started</a></li>
                </ul>
            </nav>
        </div>
    </header>
</body>
</html>
