<?php
session_start();

include("connection.php");
include("functions.php");


?>

<!DOCTYPE html>
<html>

<head>
    <title>Exam Test</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.00, maximum-scale=2.00, minimum-scale=1.00">

    <style>
        /*FOR THE HOME PAGE!*/

        * {
            min-zoom: 100%;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Times;

        }


        /* Style for the holistic format of the page*/

        section {
            position: relative;
            width: 100%;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            background-color: #99daff;

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


        /* Class that includes the menu's and the school logo */

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

        #container {
            align-self: left;
            margin-left: 1%;
            background-color: #002D62;
            width: 25%;
            height: 250px;
            padding: 10px;
            border-radius: 30px;
            box-shadow: 10px 10px 10px 10px black;
        }

        #mini-container {
            position: relative;
            text-align: center;
            background-color: #7CB9E8;
            width: 92%;
            height: 260px;
            padding: 10px;
            margin-left: 4%;
            border-radius: 30px;
        }

        .exam-section {
            margin-left: 5%;
            align-self: center;
            border-radius: 10px;
            width: 90%;
            height: 18%;
            padding: .5%;
            background: white;
            margin-top: 2%;
            box-shadow: 1px 1px black;
        }

        .exam-test {
            position: relative;
            margin-left: 29%;
            margin-top: -35%;
            border-radius: 20px;
            background: white;
            width: 68%;
            height: auto;
        }

        .exam-intro {
            padding: 10px;
            margin: 2%;
            border-radius: 15px;
        }

        .list-course {
            padding: 3%;
        }

        .exam-button {
            margin-left: 74%;

            text-align: center;

            width: 200px;
            ;
            height: auto;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 1px 2px 5px 5px black;
        }


        #button {
            padding: 12px;
            width: 100px;
            color: white;
            background-color: #002D62;
            border-radius: 10px;
        }

        #button:hover {
            cursor: pointer;
        }

        #text {
            position: absolute;
            height: 35px;
            border-radius: 10px;
            padding: 4px;
            border: solid thin #aaa;
        }

        #text:hover {
            cursor: pointer;
        }

        #shortcut {
            background-color: white;
            padding: 6px;
            color: #002D62;
            border-radius: 20px;
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
                <a href="logout.php">LOGOUT</a>
            </div>

        </header>
        <div>

            <div id="container">
                <div id="mini-container">
                    <h2>EXAM SECTIONS</h2>
                    <br>
                    <div class="exam-section">
                        <p>SCIENCE</p>
                    </div>
                    <div class="exam-section">
                        <p>MATH</p>
                    </div>
                    <div class="exam-section">
                        <p>ENGLISH</p>
                    </div>
                    <div class="exam-section">
                        <p>FILIPINO</p>
                    </div>
                </div>
            </div>

            <br><br>

            <div id="container" style="height: 150px;">
                <div id="mini-container" style="height: 150px;" ;>
                    <br>
                    <div class="exam-section" style="height: 50%">
                        <p>COURSE RECOMMENDATION</p>
                    </div>
                </div>
            </div>

            <div class="exam-test">
                <h1 style="padding-top: 10px; text-align:center;">EXAM TEST</h1>

                <div class="exam-intro">
                    <p>
                        The exam tackles (4) subjects: Science, Math, English, and Filipino. Thus, it was divided into four (4) sections.
                        Each exam section consists of twenty-five (25) questions tackling one same subject.
                        <br><br>
                        The system has associated the questions into 73 different college courses in order to give you the most accurate
                        recommendation possible. You can find the list of college courses below:
                        <br><br>
                    </p>

                    <div class="list-course">
                        <p>
                            1. Bachelor of Science in Business Administration (BSBA) <br>
                            2. Bachelor of Science in Accounting (BSA) <br>
                            3. Bachelor of Science in Nursing (BSN)<br>
                            4. Bachelor of Science in Psychology (BSP)<br>
                            5. Bachelor of Science in Development Communications (BS DevCom)<br>
                            6. Bachelor of Science in Marketing (BSM)<br>
                            7. Bachelor of Education Major in Science (BSEd)<br>
                            8. Bachelor of Elementary Education (BEEd)<br>
                            9. Bachelor of Science in English Education (BE Eng)<br>
                            10. Bachelor of Science in Computer Science (BSCS)<br>
                            11. Bachelor of Science in Finance (BSF)<br>
                            12. Bachelor of Science in Criminal Justice (BS Crim)<br>
                            13. Bachelor of Science in Biology (BS Bio)<br>
                            14. Bachelor of Science in Political Science (BSPS)<br>
                            15. Bachelor of Science in Economics (BSE)<br>
                            16. Bachelor of Science in Electrical Engineering (BSEE)<br>
                            17. Bachelor of Science in History (BSH)<br>
                            18. Bachelor of Science in Liberal Arts (BSLA)<br>
                            19. Bachelor of Science in Sociology (BSS)<br>
                            20. Bachelor of Science in Fine Arts (BSFA)<br>
                            21. Bachelor of Science in Commercial Art & Graphic Design (BSCG)<br>
                            22. Bachelor of Science in General Engineering (BSGE)<br>
                            23. Bachelor of Science in Journalism (BSJ)<br>
                            24. Bachelor of Science in Computer and Information Systems (BSIT)<br>
                            25. Bachelor of Science in Social Work (BSCW)<br>


                        </p>
                    </div>

                    <br><br>

                    <a href="http://localhost/exam/test/science.php">
                        <div id="button" style="margin-left: 74%; width: auto; text-align: center">
                            <h2>START EXAM</h2>
                        </div>
                    </a>

                </div>

                </p>

            </div>


            <br><br>
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