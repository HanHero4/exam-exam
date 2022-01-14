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
        background-position-y: 165%;
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

    </style>
</head>


<body>
    <section>
        <header>
        <a href="https://isucauayan.edu.ph/"><img src="schoollogo.png" alt="logo" class="logo"></a>
            <div class="navigation">
                <a href="http://localhost/exam/home/home.php">Home</a>
                <a href="http://localhost/exam/home/about.php">About</a>
                <a href="http://localhost/exam/home/contact.php">Contact</a>

            </div>

        </header>

        <div class="content">
            <div class="info">
                <h1>CONTACT</h1>
                <p>
                    Facebook: ExamSystem <br>
                    Email: examsystem@gmail.com <br>
                    Phone Number: +63910-367-7788 <br>
                    Instagran: ExamSystem
                    <br><br><br><br>
                </p>

            </div>
        </div>

        <!-- FOOTER -->        <footer>
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