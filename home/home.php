<?php


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!--The site is written using universal characters-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Gets the default width from the dimension of the device currently being run on-->

    <title>Exam System</title>

    <style>
    /*FOR THE HOME PAGE!*/
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial;
    }

    /* Style for the holistic format of the page*/
    section {
        position: relative;
        width: 100%;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        background: url(main_background.png);
        background-color: #99daff;
        background-repeat: no-repeat;
        background-position-y: 20%;
        background-position-x: 70%;
        background-size: 90%;

    }

    @keyframes background {
        0% {
            opacity: 0%;

        }

        50% {
            opacity: 50%;
            margin-top: 4rem;
        }

        100% {
            opacity: 100%;
            margin-top: 0rem;
        }

    }

    /* THIS IS FOR THE HEADER or the menu's and the school logo */
    header {
        position: relative;
        padding: 30px 100px;
        display: flex;
        justify-content: space-between;
        /* This makes sure that there is a flexible blank space between the menu buttons and the logo*/
        align-items: center;
        background-color: #226A80;
        margin: 1%;
        margin-right: 1%;
        border-radius: 20px;
        width: 98%;
        height: 140px;
    }

    label {
        display: none;
    }

    header .logo {
        width: 100px;
        border-radius: 50%;
    }

    /* Hover and click response */
    header .navigation a {
        color: #000;
        font-size: 18px;
        text-decoration: none;
        font-weight: 500;
        letter-spacing: 1px;
        padding: 2px 15px;
        border-radius: 20px;
        transition: 0.3s;
    }

    header .navigation a:not(:last-child) {
        margin-right: 30px;
    }

    header .navigation a:hover {
        background: #fff;
    }

    /**THIS IS FOR THE FOOTER */
    footer {
        background-color: #226A80;
        margin: 1%;
        margin-right: 1%;
        border-radius: 20px;
        width: 98%;
        height: 200px;
        position: bottom;
    }

    footer .footsie1 {
        position: absolute;
        width: 40%;
        margin-top: 1%;
        margin-left: 2%;

    }

    footer .footsie2 {
        position: absolute;
        width: 25%;
        margin-top: 1%;
        margin-left: 79%;

    }

    footer .footsie3 {
        position: absolute;
        width: 25%;
        margin-top: 1%;
        margin-left: 89%;

    }

    footer .logo {
        width: 150px;
        border-radius: 50%;
        position: absolute;
        margin-top: 1.7%;
        margin-left: 39%;
    }

    footer .logo:hover {
        width: 165px;
        transition: 0.2s;
        margin-left: 38%;
        cursor: pointer;
    }



    /* The body of the page */
    .content {
        margin: 60px;
        max-width: 100%;
    }

    .content .info h1 {
        /* Style for the name of the system */
        color: black;
        font-size: 60px;
        text-transform: uppercase;
        font-weight: 800;
        text-align: left;

    }

    .content .info h2 {
        text-align: left;
        color: maroon;
        font-size: 45px;
        margin-top: -40px;

    }

    .content .info p {
        /* The paragraph description*/
        font-size: 16px;
        font-weight: 500;
        margin-bottom: 40px;
        max-width: 40%;
    }

    .content .info-btn {
        /* Login and Signup button */
        color: #fff;
        background: #226A80;
        text-decoration: none;
        text-transform: uppercase;
        font-weight: 700;
        letter-spacing: 2px;
        padding: 10px 20px;
        border-radius: 5px;
        transition: 0.3s;
    }

    .content .info-btn:hover {
        background: #226A80;
        opacity: 80%;
        transition: 0.5;
    }

    /* THIS IS FOR THE FEATURES SECTION */
    .features {
        padding: 20px;
        margin-bottom: 30px;
        align-self: center;
        background-color: #e9e3de;
        border-radius: 20px;
        background-blend-mode: lighten;
        width: 90%;
        display: flex;
    }

    .features h1 {
        /* The text "Features" */
        text-align: center;
        font-size: 50px;
        align-items: center;

    }

    .features .featurrette {
        /* The boxes inside the larger feature box */
        position: relative;
        background-color: #88886b;
        border-radius: 10px;
        text-align: center;
        height: 300px;
        width: 300px;
        margin-left: 20px;
        margin-right: 20px;
    }

    .features .featurrette h4 {
        font-size: 25px;
        text-align: center;
    }

    .features .featurrette img {
        /* style for the images inside the feature */
        align-self: center;
        width: 80%;
        border-radius: 30px;
    }

    .features .featurrette img:hover {
        size: 1.2%;
        transition: 0.5s;
        opacity: 60%;
        cursor: pointer;
    }


    /* This is for the media icons of facebook, twitter, and IG */
    .media-icons {
        display: flex;
        justify-content: left;
        text-align: left;
        margin: auto;
        max-width: 100%;
    }

    .media-icons a {
        position: relative;
        color: #111;
        font-size: 25px;
        transition: 0.1s;
        transition-property: transform;
        align-items: left;
    }

    .media-icons a:not(:last-child) {
        /* Provides space between the icons */
        margin-right: 60px;
    }

    .media-icons a:hover {
        transform: scale(1.5);
    }

    /**
 FOR THE IMAGE SLIDER AT THE BOTTOM
 */
    @-webkit-keyframes autoplay {

        /* position of the first slide */
        0% {
            left: 0;
        }

        /* position of the second slide */
        25% {
            left: -40.625rem;
        }

        /* position of the third slide */
        50% {
            left: -81.25rem;
        }

        /* position of the fourth slide */
        100% {
            left: -121.875rem;
        }
    }

    @keyframes autoplay {

        /* position of the first slide */
        0% {
            left: 0;
        }

        /* position of the second slide */
        25% {
            left: -40.625rem;
        }

        /* position of the third slide */
        50% {
            left: -81.25rem;
        }

        /* position of the fourth slide */
        100% {
            left: -121.875rem;
        }
    }

    /**
 * Slider
 */
    .slider {
        position: relative;
        /* top margin is for purposes of demo */
        margin-right: auto;
        margin-left: auto;
        overflow: hidden;
        width: 40.625rem;
        height: 26.25rem;
        box-shadow: 0 4px 14px rgba(0, 0, 0, 0.25);
    }

    .slider__list {
        position: absolute;
        left: 0;
        width: 162.5rem;
        margin: 0;
        padding: 0;
    }

    .slider__slide {
        float: left;
    }

    /**
 * Slider control
 */
    .slider__control {
        margin-right: auto;
        margin-left: auto;
        width: 4.5rem;
        font-family: sans-serif;
    }

    .slider__control label {
        position: relative;
        display: block;
        margin-top: 2rem;
        margin-bottom: 1rem;
        width: 4.5rem;
        height: 2rem;
        font-size: 1rem;
        font-weight: normal;
        line-height: 1.5;
        color: transparent;
        background: #96a5df;
        border-radius: 2rem;
        cursor: pointer;
        transition: left 0.15s ease-out;
    }

    .slider__control label:before {
        content: "autoplay";
        position: absolute;
        top: 2.5rem;
        left: 0;
        color: #333;
        font-size: .95rem;
        font-weight: bold;
        text-transform: uppercase;
    }

    .slider__control label:after {
        content: "";
        position: absolute;
        top: .25rem;
        left: .25rem;
        display: block;
        width: 1.5rem;
        height: 1.5rem;
        border-radius: 2rem;
        background: #fff;
        transition: left 0.15s ease-out;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }

    .slider__switch:checked+.slider>.slider__list {
        -webkit-animation-name: autoplay;
        animation-name: autoplay;
        /* This will change the time it takes to move to next slide */
        -webkit-animation-duration: 10s;
        animation-duration: 10s;
        -webkit-animation-iteration-count: infinite;
        animation-iteration-count: infinite;
    }

    .slider__switch:checked+.slider+.slider__control>label {
        background: #455a64;
    }

    .slider__switch:checked+.slider+.slider__control>label:after {
        left: 2.75rem;
    }



    .rt-container {
        margin: 0 auto;
        padding-left: 12px;
        padding-right: 12px;
    }

    .rt-row:before,
    .rt-row:after {
        display: table;
        line-height: 0;
        content: "";
    }

    .rt-row:after {
        clear: both;
    }

    [class^="col-rt-"] {
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        -o-box-sizing: border-box;
        -ms-box-sizing: border-box;
        padding: 0 15px;
        min-height: 1px;
        position: relative;
    }

    .col-rt-12 h2 {
        font-size: 52px;
        text-align: center;
        margin-top: 2.5rem;
    }
    </style>
</head>


<body>
    <section>
        <header>
            <a href="https://isucauayan.edu.ph/"><img src="schoollogo.png" alt="logo" class="logo"> </a>
            <div class="navigation">
                <a href="http://localhost/exam/home/home.php">Home</a>
                <a href="http://localhost/exam/home/about.php">About</a>
                <a href="http://localhost/exam/home/contact.php">Contact</a>

            </div>
            <label for="check">
                <i class="fas fa-bars menu-btn"></i>
                <i class="fas fa-times close-btn"></i>
            </label>
        </header>

        <div class="content">
            <div class="info">
                <h1>WEB-BASED ENTRANCE EXAM</h1><br>
                <h2>WITH COURSE RECOMMENDATION</h2>
                <p>
                    DEVELOPED BY HAN HERO PAGLINAWAN, ANGILYN MIGUEL, AND JOVELYN DELA CRUZ <br>
                    With the advent of technology, newer ways of doing things are being invented.
                    One of them is an exam that doesn't just test your knowledge, but also recommends you
                    the appropriate college course that you should take to maximize that. <br>

                </p>
                <a href="http://localhost/exam/login/signup.php" class="info-btn">Sign Up</a>
                <a href="http://localhost/exam/login/login.php" class="info-btn">Log In</a>
            </div>
        </div>

        <br><br><br>

        <div class="features">
            <h1>FEATURES</h1>
            <div class="featurrette">
                <h4>FREE</h4>
                <img src="2free.jpg">
                <p>Test yourself, free of charge</p>
            </div>
            <div class="featurrette">
                <h4>ACCESSIBILITY</h4>
                <img src="2access.jpg">
                <p>You can take this test anytime, anywho, anywhere</p>
            </div>
            <div class="featurrette">
                <h4>SIMPLICITY</h4>
                <img src="2simple.jpg">
                <p>Designed to be as simple as you</p>
            </div>
            <div class="featurrette">
                <h4>PRIVACY</h4>
                <img src="2secure.jpg">
                <p>Your informations are yours</p>
            </div>
        </div>

        <div class="media-icons">
            <a href="https://web.facebook.com/"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
            <a href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
        </div>

        <!--THE IMAGE SLIDER PART-->
        <div class="rt-container">
            <div class="col-rt-12">
                <h2>GALLERY</h2>
                <input id="sliderSwitch" class="slider__switch" type="checkbox" name="sliderSwitch" hidden />
                <div class="slider">
                    <ul class="slider__list">
                        <li class="slider__slide"><img src="http://localhost/exam/home/gallery1.jpg" /></li>
                        <li class="slider__slide"><img src="http://localhost/exam/home/gallery2.jpg" /></li>
                        <li class="slider__slide"><img src="http://localhost/exam/home/gallery3.jpg" /></li>
                        <li class="slider__slide"><img src="http://localhost/exam/home/gallery4.jpg" /></li>
                    </ul>
                </div>
                <div class="slider__control">
                    <label for="sliderSwitch"></label>
                </div>
            </div>
        </div>

        <br>
        <br>
        <br>

        <!-- FOOTER -->
        <footer>
            <div class="footsie1">
                <h3>Learn More</h2>
                    <a href="https://tinyurl.com/2p82s29s">
                        <p style="color:black;">What is an Online Exam</p>
                    </a>
                    <a href="https://www.speedexam.net/">
                        <p style="color:black;">Other online exam systems</p>
                    </a>
                    <a href="https://tinyurl.com/4htr72zd/">
                        <p style="color:black;">Research and articles</p>
                    </a>
            </div>
            <div class="logo">
                <a href="https://isucauayan.edu.ph/"><img src="schoollogo.png" alt="logo" class="logo"></a>
            </div>
            <div class="footsie2">
                <h3>Contact</h2>
                    <a href="https://web.facebook.com/isucauayancampus">
                        <p style="color:black;">Facebook</p>
                    </a>
                    <a href="https://mail.google.com/mail/">
                        <p style="color:black;">Email</p><a>
                            <a href="http://localhost/exam/home/contact.php">
                                <p style="color:black;">Phone</p>
                            </a>
                            <a href="https://instagram.com/">
                                <p style="color:black;">Instagram</p>
                            </a>
            </div>
            <div class="footsie3">
                <h3>About Us</h2>
                    <a href="http://localhost/exam/home/about.php">
                        <p style="color:black;">Read</p>
                    </a>
            </div>
        </footer>
    </section>

</body>

</html>