<?php
session_start();
include("db_connect.php");
include("functions.php");


$sql = "SELECT * FROM score_science ORDER BY id DESC;";
$qstn = mysqli_query($connected, $sql);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Exam Result</title>

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


        /* Footer part */
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

        /* The Exam Sections of the left */
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
            padding: 5%;
            background: white;
            margin-top: 2%;
            box-shadow: 1px 1px black;
        }

        .exam-section:hover {
            cursor: pointer;
            opacity: 80%;
            transition: .2sec;
        }

        /* The Exam Test on the Right where questions was displayed*/
        .exam-test {
            position: relative;
            margin-left: 29%;
            margin-top: -35%;
            border-radius: 20px;
            background: #0b6623;
            ;
            width: 68%;
            height: auto;
        }

        #button {
            padding: 12px;
            width: auto;
            color: white;
            background-color: #002D62;
            border-radius: 10px;
            margin-left: 30%;
            margin-top: 5%;
            margin-bottom: 3%;
        }

        #button:hover {
            cursor: pointer;
        }



        .test_num {
            width: 90%;
            margin-left: 5%;
            border-radius: 15px;
            padding: 3%;
            background-color: yellowgreen;
            margin-top: 2%;
            height: auto;
        }

        .test_num p {
            margin-left: 70%;

        }

        .test_question {
            font-weight: bold;
        }

        .test_choices {
            padding: 10px;
            margin-left: 10px;
        }

        .inform {
            text-align: center;
            padding: 3%;
            width: 80%;
            margin-left: 10%;
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
                    <div class="exam-section" style="background-color: #228B22;">
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
                <h1 style="padding-top: 10px; text-align:center;">RESULTS</h1>

                <div class="inform">
                    <?php
                    echo "Stated below are the results for of your exam. To see the recommended courses for you, click 
                        the SEE RECOMMENDED COURSES button below.";
                    ?>
                </div>

                <!-- Display the results -->
                <div class="test_num">
                    <?php
                    if (mysqli_num_rows($qstn) > 0) {
                        $row = mysqli_fetch_assoc($qstn);

                    ?>
                        <!-- Printing the questions and choices -->
                        <div class="test_question">
                            <?php
                            echo "Thank you for taking a part in this exam, your results are all written below.";
                            ?>
                        </div>
                        <div class="test_choices">
                            <?php

                            //displayng scores by
                            //connecting to the database and get the latest data
                            echo "Science:  ", $row['science'], "/25<br>";

                            $sql = "SELECT * FROM score_math ORDER BY id DESC;"; 
                            $qstn = mysqli_query($connected, $sql);
                            $row = mysqli_fetch_assoc($qstn);
                            echo "Math:     ", $row['math'], "/25<br>";

                            $sql = "SELECT * FROM score_english ORDER BY id DESC;";
                            $qstn = mysqli_query($connected, $sql);
                            $row = mysqli_fetch_assoc($qstn);
                            echo "English:  ", $row['english'], "/25<br>";

                            $sql = "SELECT * FROM score_filipino ORDER BY id DESC;";
                            $qstn = mysqli_query($connected, $sql);
                            $row = mysqli_fetch_assoc($qstn);
                            echo "Filipino: ", $row['filipino'], "/25<br>";
                            ?>
                        </div>
                </div>
            <?php } ?>

            <!-- the buttons -->
            <div class="inform">
                <a href="course_rec.php">
                    <h4 id="button" style="margin-right: 29%; margin-top: -2%;">SEE RECOMMENDED COURSES</h4>
                </a>
            </div>
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