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
    <style>
        @media (max-width: 768px) {
            #video-section video {
                width: 100%; 
                height: auto; 
            }
        }
        @media (min-width: 768px) {
            #video-section video {
                width: 50%; 
                height: auto; 
            }
        }
        

/* Import Google font - Poppins */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

.all{
    position: relative;
    display: flex;
    background-color:#ffffff;

}
.section1{
    background-color: #ffffff;
    align-items: center;
}


.left{
    position: static;
    margin-left: 6vh;
    margin-top: 10vh;
    margin-bottom: 10vh;
    background-color: white;
    text-align: center;
}
.contribute{
    text-align: center;
    align-items: center;
}
.right{
    position: static;
    margin-top: 2%;
    margin-bottom: 2%;
    margin-right: 4%;
}


.textPart{
    position: static;
    margin-top: 4vh;
    margin-left: 2vw;
    margin-right: 1vw;
}


.seperateCard {
    scroll-snap-align: start; /* Snap each card to the start of the container */
    perspective: 500px;
}
    .wrapper {
    display: flex;
    padding: 0 35px;
    align-items: center;
    justify-content: center;
    min-height: 51vh;
    position: relative;
    }
    .wrapper i {
    top: 50%;
    height: 50px;
    width: 50px;
    cursor: pointer;
    font-size: 1.25rem;
    position: absolute;
    text-align: center;
    line-height: 50px;
    background: #ffffff;
    border-radius: 50%;
    box-shadow: #ffffff;
    transform: translateY(-50%);
    transition: transform 0.1s linear;
    }
    .wrapper i:active{
    transform: translateY(-50%) scale(0.85);
    }
    .wrapper i:first-child{
    left: -22px;
    }
    .wrapper i:last-child{
    right: -22px;
    }
    .wrapper .carousel{
    display: grid;
    grid-auto-flow: column;
    grid-auto-columns: calc((100% / 3) - 12px);
    overflow-x: auto;
    scroll-snap-type: x mandatory;
    gap: 16px;
    scroll-behavior: smooth;
    scrollbar-width: none;
    }
    .carousel::-webkit-scrollbar {
    display: none;
    }
    .carousel.no-transition {
    scroll-behavior: auto;
    }
    .carousel.dragging {
    scroll-snap-type: none;
    scroll-behavior: auto;
    }
    .carousel.dragging .card {
    cursor: grab;
    user-select: none;
    }
    .carousel :where(.card, .img) {
    display: flex;
    justify-content: center;
    align-items: center;
    }
    .carousel .card {
    scroll-snap-align: start;
    height: 450px;
    list-style: none;
    background: #ffffff;
    border-color: #ffffff;
    cursor: pointer;
    flex-direction: column;
    border-radius: 10px;
    }
    @media screen and (max-width: 900px) {
    .wrapper .carousel {
        grid-auto-columns: calc((100% / 2) - 9px);
    }
    }

    @media screen and (max-width: 600px) {
    .wrapper .carousel {
        grid-auto-columns: 100%;
    }
    .carousel img{
        max-height: 70%;
    }
    }

        
    </style>

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
                            <a href = "http://localhost/cv-generator/gethelp.php" class = "btn btn-secondary">Get Help <i class="fas fa-arrow-right"></i></a>
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

            <section  id="video-section" style="margin-top:50px;" >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <center>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/D14YEwiEmN0" frameborder="0" allowfullscreen></iframe>
                    </div>
                </center>
            </div>
        </div>
    </div>
</section>
        </div>
        



        <script>
            $(window).scroll(function() {
                var videoSection = $('#video-section');
                var video = videoSection.find('video')[0];
                var videoTop = videoSection.offset().top;
                var videoBottom = videoTop + videoSection.outerHeight();
                var windowTop = $(window).scrollTop();
                var windowBottom = windowTop + $(window).height();

                if (windowBottom >= videoTop && windowTop <= videoBottom) {
                    video.play();
                } else {
                    video.pause();
                }
            });
        </script>
            <section style="background-image: linear-gradient(to bottom right, #ffffff, #ffffff);">
                <div class="wrapper reveal">
                    <i id="left" class="fa-solid fa-angle-left"><</i>
                    <ul class="carousel">
                        <li class="card">
                            <div class="card-n">
                                <img src="assets/images/about-banner.jpg" class="card-img-top" alt="...">
                                <div class="card-body" style="background-color:#ffffff; border:none; text-align:center;">
                                    <h4 class="card-title" style="color: black; text-align:center; margin-top:10px; font-style:italic; text-decoration:none">
                                    "One of the best CV building web sites I have visited recently"
                                </h4>
                                <h4>-Kamal Dissanayake-</h4>
                                </div>
                            </div>
                        </li>
                        <li class="card">
                            <div class="card-n">
                                <img src="assets/images/contact-banner.jpg" class="card-img-top" alt="...">
                                <div class="card-body" style="background-color:#ffffff; border:none; text-align:center;">
                                    <h4 class="card-title" style="color: black; text-align:center; margin-top:10px; font-style:italic; text-decoration:none">
                                    "CV generated from this web site helped me to find my first internship. Great Website"
                                </h4>
                                <h4>-Amali Ranathunga-</h4>
                                </div>
                            </div>
                        </li>
                        <li class="card">
                            <div class="card-n">
                                <img src="assets/images/about-banner.jpg" class="card-img-top" alt="...">
                                <div class="card-body" style="background-color:#ffffff; border:none; text-align:center;">
                                    <h4 class="card-title" style="color: black; text-align:center; margin-top:10px; font-style:italic; text-decoration:none">
                                    "One of the best CV building web sites I have visited recently"
                                </h4>
                                <h4>-Kamal Dissanayake-</h4>
                                </div>
                            </div>
                        </li>
                        <li class="card">
                            <div class="card-n">
                                <img src="assets/images/contact-banner.jpg" class="card-img-top" alt="...">
                                <div class="card-body" style="background-color:#ffffff; border:none; text-align:center;">
                                    <h4 class="card-title" style="color: black; text-align:center; margin-top:10px; font-style:italic; text-decoration:none">
                                    "CV generated from this web site helped me to find my first internship. Great Website"
                                </h4>
                                <h4>-Amali Ranathunga-</h4>
                                </div>
                            </div>
                        </li>
                        

                    </ul>
                    <i id="right" class="fa-solid fa-angle-right">></i>
                </div>
                <script>
                    const wrapper = document.querySelector(".wrapper");
                    const carousel = document.querySelector(".carousel");
                    const firstCardWidth = carousel.querySelector(".card").offsetWidth;
                    const arrowBtns = document.querySelectorAll(".wrapper i");
                    const carouselChildrens = [...carousel.children];

                    let isDragging = false, isAutoPlay = true, startX, startScrollLeft, timeoutId;

                    // Get the number of cards that can fit in the carousel at once
                    let cardPerView = Math.round(carousel.offsetWidth / firstCardWidth);

                    // Insert copies of the last few cards to beginning of carousel for infinite scrolling
                    carouselChildrens.slice(-cardPerView).reverse().forEach(card => {
                        carousel.insertAdjacentHTML("afterbegin", card.outerHTML);
                    });

                    // Insert copies of the first few cards to end of carousel for infinite scrolling
                    carouselChildrens.slice(0, cardPerView).forEach(card => {
                        carousel.insertAdjacentHTML("beforeend", card.outerHTML);
                    });

                    // Scroll the carousel at appropriate postition to hide first few duplicate cards on Firefox
                    carousel.classList.add("no-transition");
                    carousel.scrollLeft = carousel.offsetWidth;
                    carousel.classList.remove("no-transition");

                    // Add event listeners for the arrow buttons to scroll the carousel left and right
                    arrowBtns.forEach(btn => {
                        btn.addEventListener("click", () => {
                            carousel.scrollLeft += btn.id == "left" ? -firstCardWidth : firstCardWidth;
                        });
                    });

                    const dragStart = (e) => {
                        isDragging = true;
                        carousel.classList.add("dragging");
                        // Records the initial cursor and scroll position of the carousel
                        startX = e.pageX;
                        startScrollLeft = carousel.scrollLeft;
                    }

                    const dragging = (e) => {
                        if(!isDragging) return; // if isDragging is false return from here
                        // Updates the scroll position of the carousel based on the cursor movement
                        carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
                    }

                    const dragStop = () => {
                        isDragging = false;
                        carousel.classList.remove("dragging");
                    }

                    const infiniteScroll = () => {
                        // If the carousel is at the beginning, scroll to the end
                        if(carousel.scrollLeft === 0) {
                            carousel.classList.add("no-transition");
                            carousel.scrollLeft = carousel.scrollWidth - (2 * carousel.offsetWidth);
                            carousel.classList.remove("no-transition");
                        }
                        // If the carousel is at the end, scroll to the beginning
                        else if(Math.ceil(carousel.scrollLeft) === carousel.scrollWidth - carousel.offsetWidth) {
                            carousel.classList.add("no-transition");
                            carousel.scrollLeft = carousel.offsetWidth;
                            carousel.classList.remove("no-transition");
                        }

                        // Clear existing timeout & start autoplay if mouse is not hovering over carousel
                        clearTimeout(timeoutId);
                        if(!wrapper.matches(":hover")) autoPlay();
                    }

                    const autoPlay = () => {
                        if(window.innerWidth < 800 || !isAutoPlay) return; // Return if window is smaller than 800 or isAutoPlay is false
                        // Autoplay the carousel after every 2500 ms
                        timeoutId = setTimeout(() => carousel.scrollLeft += firstCardWidth, 2500);
                    }
                    autoPlay();

                    carousel.addEventListener("mousedown", dragStart);
                    carousel.addEventListener("mousemove", dragging);
                    document.addEventListener("mouseup", dragStop);
                    carousel.addEventListener("scroll", infiniteScroll);
                    wrapper.addEventListener("mouseenter", () => clearTimeout(timeoutId));
                    wrapper.addEventListener("mouseleave", autoPlay);
                </script>

            </section>


                
                
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