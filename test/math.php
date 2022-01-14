<?php
session_start();
include("db_connect.php");
include("functions.php");

$sql = "SELECT * FROM test_math;";
$qstn = mysqli_query($connected, $sql);

//submitting answers
$score_math = 0;
$ans1 = $_POST['ans1'] ?? null;
$ans2 = $_POST['ans2'] ?? null;
$ans3 = $_POST['ans3'] ?? null;
$ans4 = $_POST['ans4'] ?? null;
$ans5 = $_POST['ans5'] ?? null;
$ans6 = $_POST['ans6'] ?? null;
$ans7 = $_POST['ans7'] ?? null;
$ans8 = $_POST['ans8'] ?? null;
$ans9 = $_POST['ans9'] ?? null;
$ans10 = $_POST['ans10'] ?? null;
$ans11 = $_POST['ans11'] ?? null;
$ans12 = $_POST['ans12'] ?? null;
$ans13 = $_POST['ans13'] ?? null;
$ans14 = $_POST['ans14'] ?? null;
$ans15 = $_POST['ans15'] ?? null;
$ans16 = $_POST['ans16'] ?? null;
$ans17 = $_POST['ans17'] ?? null;
$ans18 = $_POST['ans18'] ?? null;
$ans19 = $_POST['ans19'] ?? null;
$ans20 = $_POST['an20'] ?? null;
$ans21 = $_POST['ans21'] ?? null;
$ans22 = $_POST['ans22'] ?? null;
$ans23 = $_POST['ans23'] ?? null;
$ans24 = $_POST['ans24'] ?? null;
$ans325 = $_POST['ans25'] ?? null;

//    header("Location: math.php")


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


        #text {
            position: relative;
            height: 35px;
            border-radius: 10px;
            padding: 4px;
            border: solid thin #aaa;
            margin-bottom: 30px;
            margin-left: 70%;

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
                    <div class="exam-section" >
                        <p>SCIENCE</p>
                    </div>
                    <div class="exam-section" style="background-color: #228B22;">
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
                <h1 style="padding-top: 10px; text-align:center;">MATH TEST</h1>

                <div class="inform">
                    <?php
                    if ($score_math == 0) {
                        echo "Make sure to answer all 25 question before clicking the SUBMIT button below";

                    } else {
                        echo "Your answers have been saved, now click the PROCEED button to go to the next section";
                    }
                    ?>
                </div>

                <!-- THIS IS THE EXAM QUESTIONS-->
                <form action="math.php" method="POST">
                    <?php $score_math = 0; ?>
                    <!-- Question Number 1 -->
                    <div class="test_num">
                        <?php
                        if (mysqli_num_rows($qstn) > 0) {
                            $row = mysqli_fetch_assoc($qstn);

                            //check if the answer is correct                        
                            if ($ans1 == $row['correct_answer']) {
                                $score_math++;
                            }

                        ?>
                            <!-- Printing the questions and choices -->
                            <div class="test_question">
                                <?php

                                echo $row['question'], "<br>";
                                ?>
                            </div>
                            <div class="test_choices">
                                <?php
                                echo $row['choice1'], "<br>";
                                echo $row['choice2'], "<br>";
                                echo $row['choice3'], "<br>";
                                echo $row['choice4'], "<br> <br>";
                                ?>
                            </div>
                            <!-- User Response -->
                            <p>Enter the letter of the correct answer (use capital letter)</p>
                            <input type="text" id="text" name="ans1">
                    </div>
                <?php } ?>

                <!-- Question Number 2 -->
                <div class="test_num">
                    <?php
                    if (mysqli_num_rows($qstn) > 0) {
                        $row = mysqli_fetch_assoc($qstn);

                        //check if the answer is correct                        
                        if ($ans2 == $row['correct_answer']) {
                            $score_math++;
                        }

                    ?>
                        <!-- Printing the questions and choices -->
                        <div class="test_question">
                            <?php

                            echo $row['question'], "<br>";
                            ?>
                        </div>
                        <div class="test_choices">
                            <?php
                            echo $row['choice1'], "<br>";
                            echo $row['choice2'], "<br>";
                            echo $row['choice3'], "<br>";
                            echo $row['choice4'], "<br> <br>";
                            ?>
                        </div>
                        <!-- User Response -->
                        <p>Enter the letter of the correct answer (use capital letter)</p>
                        <input type="text" id="text" name="ans2">

                </div>
            <?php } ?>

            <!-- Question Number 3 -->
            <div class="test_num">
                <?php
                if (mysqli_num_rows($qstn) > 0) {
                    $row = mysqli_fetch_assoc($qstn);

                    //check if the answer is correct                        
                    if ($ans3 == $row['correct_answer']) {
                        $score_math++;
                    }

                ?>
                    <!-- Printing the questions and choices -->
                    <div class="test_question">
                        <?php

                        echo $row['question'], "<br>";
                        ?>
                    </div>
                    <div class="test_choices">
                        <?php
                        echo $row['choice1'], "<br>";
                        echo $row['choice2'], "<br>";
                        echo $row['choice3'], "<br>";
                        echo $row['choice4'], "<br> <br>";
                        ?>
                    </div>
                    <!-- User Response -->
                    <p>Enter the letter of the correct answer (use capital letter)</p>
                    <input type="text" id="text" name="ans3">
            </div>
        <?php } ?>

        <!-- Question Number 4 -->
        <div class="test_num">
            <?php
            if (mysqli_num_rows($qstn) > 0) {
                $row = mysqli_fetch_assoc($qstn);

                //check if the answer is correct                        
                if ($ans4 == $row['correct_answer']) {
                    $score_math++;
                }

            ?>
                <!-- Printing the questions and choices -->
                <div class="test_question">
                    <?php

                    echo $row['question'], "<br>";
                    ?>
                </div>
                <div class="test_choices">
                    <?php
                    echo $row['choice1'], "<br>";
                    echo $row['choice2'], "<br>";
                    echo $row['choice3'], "<br>";
                    echo $row['choice4'], "<br> <br>";
                    ?>
                </div>
                <!-- User Response -->
                <p>Enter the letter of the correct answer (use capital letter)</p>
                <input type="text" id="text" name="ans4">
        </div>
    <?php } ?>

    <!-- Question Number 5 -->
    <div class="test_num">
        <?php
        if (mysqli_num_rows($qstn) > 0) {
            $row = mysqli_fetch_assoc($qstn);

            //check if the answer is correct 

            if ($ans5 == $row['correct_answer']) {
                $score_math++;
            } else {
                echo '<script>alert("This alert happens because you either entered more 
                        than the letter of your answer or there are questions you have not responded yet.")</script>';
            }


        ?>
            <!-- Printing the questions and choices -->
            <div class="test_question">
                <?php

                echo $row['question'], "<br>";
                ?>
            </div>
            <div class="test_choices">
                <?php
                echo $row['choice1'], "<br>";
                echo $row['choice2'], "<br>";
                echo $row['choice3'], "<br>";
                echo $row['choice4'], "<br> <br>";
                ?>
            </div>
            <!-- User Response -->
            <p>Enter the letter of the correct answer (use capital letter)</p>
            <input type="text" id="text" name="ans5">
    </div>
<?php } ?>

<!-- Question Number 6 -->
<div class="test_num">
    <?php
    if (mysqli_num_rows($qstn) > 0) {
        $row = mysqli_fetch_assoc($qstn);

        //check if the answer is correct                        
        if ($ans6 == $row['correct_answer']) {
            $score_math++;
        }

    ?>
        <!-- Printing the questions and choices -->
        <div class="test_question">
            <?php

            echo $row['question'], "<br>";
            ?>
        </div>
        <div class="test_choices">
            <?php
            echo $row['choice1'], "<br>";
            echo $row['choice2'], "<br>";
            echo $row['choice3'], "<br>";
            echo $row['choice4'], "<br> <br>";
            ?>
        </div>
        <!-- User Response -->
        <p>Enter the letter of the correct answer (use capital letter)</p>
        <input type="text" id="text" name="ans6">
</div>
<?php } ?>

<!-- Question Number 7 -->
<div class="test_num">
    <?php
    if (mysqli_num_rows($qstn) > 0) {
        $row = mysqli_fetch_assoc($qstn);

        //check if the answer is correct                        
        if ($ans7 == $row['correct_answer']) {
            $score_math++;
        }

    ?>
        <!-- Printing the questions and choices -->
        <div class="test_question">
            <?php

            echo $row['question'], "<br>";
            ?>
        </div>
        <div class="test_choices">
            <?php
            echo $row['choice1'], "<br>";
            echo $row['choice2'], "<br>";
            echo $row['choice3'], "<br>";
            echo $row['choice4'], "<br> <br>";
            ?>
        </div>
        <!-- User Response -->
        <p>Enter the letter of the correct answer (use capital letter)</p>
        <input type="text" id="text" name="ans7">
</div>
<?php } ?>

<!-- Question Number 8 -->
<div class="test_num">
    <?php
    if (mysqli_num_rows($qstn) > 0) {
        $row = mysqli_fetch_assoc($qstn);

        //check if the answer is correct                        
        if ($ans8 == $row['correct_answer']) {
            $score_math++;
        }

    ?>
        <!-- Printing the questions and choices -->
        <div class="test_question">
            <?php

            echo $row['question'], "<br>";
            ?>
        </div>
        <div class="test_choices">
            <?php
            echo $row['choice1'], "<br>";
            echo $row['choice2'], "<br>";
            echo $row['choice3'], "<br>";
            echo $row['choice4'], "<br> <br>";
            ?>
        </div>
        <!-- User Response -->
        <p>Enter the letter of the correct answer (use capital letter)</p>
        <input type="text" id="text" name="ans8">
</div>
<?php } ?>

<!-- Question Number 9 -->
<div class="test_num">
    <?php
    if (mysqli_num_rows($qstn) > 0) {
        $row = mysqli_fetch_assoc($qstn);

        //check if the answer is correct                        
        if ($ans9 == $row['correct_answer']) {
            $score_math++;
        }

    ?>
        <!-- Printing the questions and choices -->
        <div class="test_question">
            <?php

            echo $row['question'], "<br>";
            ?>
        </div>
        <div class="test_choices">
            <?php
            echo $row['choice1'], "<br>";
            echo $row['choice2'], "<br>";
            echo $row['choice3'], "<br>";
            echo $row['choice4'], "<br> <br>";
            ?>
        </div>
        <!-- User Response -->
        <p>Enter the letter of the correct answer (use capital letter)</p>
        <input type="text" id="text" name="ans9">
</div>
<?php } ?>

<!-- Question Number 10 -->
<div class="test_num">
    <?php
    if (mysqli_num_rows($qstn) > 0) {
        $row = mysqli_fetch_assoc($qstn);

        //check if the answer is correct                        
        if ($ans10 == $row['correct_answer']) {
            $score_math++;
        }

    ?>
        <!-- Printing the questions and choices -->
        <div class="test_question">
            <?php

            echo $row['question'], "<br>";
            ?>
        </div>
        <div class="test_choices">
            <?php
            echo $row['choice1'], "<br>";
            echo $row['choice2'], "<br>";
            echo $row['choice3'], "<br>";
            echo $row['choice4'], "<br> <br>";
            ?>
        </div>
        <!-- User Response -->
        <p>Enter the letter of the correct answer (use capital letter)</p>
        <input type="text" id="text" name="ans10">
</div>
<?php } ?>

<!-- Question Number 11 -->
<div class="test_num">
    <?php
    if (mysqli_num_rows($qstn) > 0) {
        $row = mysqli_fetch_assoc($qstn);

        //check if the answer is correct                        
        if ($ans11 == $row['correct_answer']) {
            $score_math++;
        }

    ?>
        <!-- Printing the questions and choices -->
        <div class="test_question">
            <?php

            echo $row['question'], "<br>";
            ?>
        </div>
        <div class="test_choices">
            <?php
            echo $row['choice1'], "<br>";
            echo $row['choice2'], "<br>";
            echo $row['choice3'], "<br>";
            echo $row['choice4'], "<br> <br>";
            ?>
        </div>
        <!-- User Response -->
        <p>Enter the letter of the correct answer (use capital letter)</p>
        <input type="text" id="text" name="ans11">
</div>
<?php } ?>

<!-- Question Number 12 -->
<div class="test_num">
    <?php
    if (mysqli_num_rows($qstn) > 0) {
        $row = mysqli_fetch_assoc($qstn);

        //check if the answer is correct                        
        if ($ans12 == $row['correct_answer']) {
            $score_math++;
        }

    ?>
        <!-- Printing the questions and choices -->
        <div class="test_question">
            <?php

            echo $row['question'], "<br>";
            ?>
        </div>
        <div class="test_choices">
            <?php
            echo $row['choice1'], "<br>";
            echo $row['choice2'], "<br>";
            echo $row['choice3'], "<br>";
            echo $row['choice4'], "<br> <br>";
            ?>
        </div>
        <!-- User Response -->
        <p>Enter the letter of the correct answer (use capital letter)</p>
        <input type="text" id="text" name="ans12">
</div>
<?php } ?>

<!-- Question Number 13 -->
<div class="test_num">
    <?php
    if (mysqli_num_rows($qstn) > 0) {
        $row = mysqli_fetch_assoc($qstn);

        //check if the answer is correct                        
        if ($ans13 == $row['correct_answer']) {
            $score_math++;
        }

    ?>
        <!-- Printing the questions and choices -->
        <div class="test_question">
            <?php

            echo $row['question'], "<br>";
            ?>
        </div>
        <div class="test_choices">
            <?php
            echo $row['choice1'], "<br>";
            echo $row['choice2'], "<br>";
            echo $row['choice3'], "<br>";
            echo $row['choice4'], "<br> <br>";
            ?>
        </div>
        <!-- User Response -->
        <p>Enter the letter of the correct answer (use capital letter)</p>
        <input type="text" id="text" name="ans13">
</div>
<?php } ?>

<!-- Question Number 14 -->
<div class="test_num">
    <?php
    if (mysqli_num_rows($qstn) > 0) {
        $row = mysqli_fetch_assoc($qstn);

        //check if the answer is correct                        
        if ($ans14 == $row['correct_answer']) {
            $score_math++;
        }

    ?>
        <!-- Printing the questions and choices -->
        <div class="test_question">
            <?php

            echo $row['question'], "<br>";
            ?>
        </div>
        <div class="test_choices">
            <?php
            echo $row['choice1'], "<br>";
            echo $row['choice2'], "<br>";
            echo $row['choice3'], "<br>";
            echo $row['choice4'], "<br> <br>";
            ?>
        </div>
        <!-- User Response -->
        <p>Enter the letter of the correct answer (use capital letter)</p>
        <input type="text" id="text" name="ans14">
</div>
<?php } ?>

<!-- Question Number 15 -->
<div class="test_num">
    <?php
    if (mysqli_num_rows($qstn) > 0) {
        $row = mysqli_fetch_assoc($qstn);

        //check if the answer is correct                        
        if ($ans15 == $row['correct_answer']) {
            $score_math++;
        }

    ?>
        <!-- Printing the questions and choices -->
        <div class="test_question">
            <?php

            echo $row['question'], "<br>";
            ?>
        </div>
        <div class="test_choices">
            <?php
            echo $row['choice1'], "<br>";
            echo $row['choice2'], "<br>";
            echo $row['choice3'], "<br>";
            echo $row['choice4'], "<br> <br>";
            ?>
        </div>
        <!-- User Response -->
        <p>Enter the letter of the correct answer (use capital letter)</p>
        <input type="text" id="text" name="ans15">
</div>
<?php } ?>

<!-- Question Number 16 -->
<div class="test_num">
    <?php
    if (mysqli_num_rows($qstn) > 0) {
        $row = mysqli_fetch_assoc($qstn);

        //check if the answer is correct                        
        if ($ans16 == $row['correct_answer']) {
            $score_math++;
        }

    ?>
        <!-- Printing the questions and choices -->
        <div class="test_question">
            <?php

            echo $row['question'], "<br>";
            ?>
        </div>
        <div class="test_choices">
            <?php
            echo $row['choice1'], "<br>";
            echo $row['choice2'], "<br>";
            echo $row['choice3'], "<br>";
            echo $row['choice4'], "<br> <br>";
            ?>
        </div>
        <!-- User Response -->
        <p>Enter the letter of the correct answer (use capital letter)</p>
        <input type="text" id="text" name="ans16">
</div>
<?php } ?>

<!-- Question Number 17 -->
<div class="test_num">
    <?php
    if (mysqli_num_rows($qstn) > 0) {
        $row = mysqli_fetch_assoc($qstn);

        //check if the answer is correct                        
        if ($ans17 == $row['correct_answer']) {
            $score_math++;
        }

    ?>
        <!-- Printing the questions and choices -->
        <div class="test_question">
            <?php

            echo $row['question'], "<br>";
            ?>
        </div>
        <div class="test_choices">
            <?php
            echo $row['choice1'], "<br>";
            echo $row['choice2'], "<br>";
            echo $row['choice3'], "<br>";
            echo $row['choice4'], "<br> <br>";
            ?>
        </div>
        <!-- User Response -->
        <p>Enter the letter of the correct answer (use capital letter)</p>
        <input type="text" id="text" name="ans17">
</div>
<?php } ?>

<!-- Question Number 18 -->
<div class="test_num">
    <?php
    if (mysqli_num_rows($qstn) > 0) {
        $row = mysqli_fetch_assoc($qstn);

        //check if the answer is correct                        
        if ($ans18 == $row['correct_answer']) {
            $score_math++;
        }

    ?>
        <!-- Printing the questions and choices -->
        <div class="test_question">
            <?php

            echo $row['question'], "<br>";
            ?>
        </div>
        <div class="test_choices">
            <?php
            echo $row['choice1'], "<br>";
            echo $row['choice2'], "<br>";
            echo $row['choice3'], "<br>";
            echo $row['choice4'], "<br> <br>";
            ?>
        </div>
        <!-- User Response -->
        <p>Enter the letter of the correct answer (use capital letter)</p>
        <input type="text" id="text" name="ans18">
</div>
<?php } ?>

<!-- Question Number 19 -->
<div class="test_num">
    <?php
    if (mysqli_num_rows($qstn) > 0) {
        $row = mysqli_fetch_assoc($qstn);

        //check if the answer is correct                        
        if ($ans19 == $row['correct_answer']) {
            $score_math++;
        }

    ?>
        <!-- Printing the questions and choices -->
        <div class="test_question">
            <?php

            echo $row['question'], "<br>";
            ?>
        </div>
        <div class="test_choices">
            <?php
            echo $row['choice1'], "<br>";
            echo $row['choice2'], "<br>";
            echo $row['choice3'], "<br>";
            echo $row['choice4'], "<br> <br>";
            ?>
        </div>
        <!-- User Response -->
        <p>Enter the letter of the correct answer (use capital letter)</p>
        <input type="text" id="text" name="ans19">
</div>
<?php } ?>

<!-- Question Number 20 -->
<div class="test_num">
    <?php
    if (mysqli_num_rows($qstn) > 0) {
        $row = mysqli_fetch_assoc($qstn);

        //check if the answer is correct                        
        if ($ans20 == $row['correct_answer']) {
            $score_math++;
        }

    ?>
        <!-- Printing the questions and choices -->
        <div class="test_question">
            <?php

            echo $row['question'], "<br>";
            ?>
        </div>
        <div class="test_choices">
            <?php
            echo $row['choice1'], "<br>";
            echo $row['choice2'], "<br>";
            echo $row['choice3'], "<br>";
            echo $row['choice4'], "<br> <br>";
            ?>
        </div>
        <!-- User Response -->
        <p>Enter the letter of the correct answer (use capital letter)</p>
        <input type="text" id="text" name="ans20">
</div>
<?php } ?>

<!-- Question Number 21 -->
<div class="test_num">
    <?php
    if (mysqli_num_rows($qstn) > 0) {
        $row = mysqli_fetch_assoc($qstn);

        //check if the answer is correct                        
        if ($ans21 == $row['correct_answer']) {
            $score_math++;
        }

    ?>
        <!-- Printing the questions and choices -->
        <div class="test_question">
            <?php

            echo $row['question'], "<br>";
            ?>
        </div>
        <div class="test_choices">
            <?php
            echo $row['choice1'], "<br>";
            echo $row['choice2'], "<br>";
            echo $row['choice3'], "<br>";
            echo $row['choice4'], "<br> <br>";
            ?>
        </div>
        <!-- User Response -->
        <p>Enter the letter of the correct answer (use capital letter)</p>
        <input type="text" id="text" name="ans21">
</div>
<?php } ?>

<!-- Question Number 22 -->
<div class="test_num">
    <?php
    if (mysqli_num_rows($qstn) > 0) {
        $row = mysqli_fetch_assoc($qstn);

        //check if the answer is correct                        
        if ($ans22 == $row['correct_answer']) {
            $score_math++;
        }

    ?>
        <!-- Printing the questions and choices -->
        <div class="test_question">
            <?php

            echo $row['question'], "<br>";
            ?>
        </div>
        <div class="test_choices">
            <?php
            echo $row['choice1'], "<br>";
            echo $row['choice2'], "<br>";
            echo $row['choice3'], "<br>";
            echo $row['choice4'], "<br> <br>";
            ?>
        </div>
        <!-- User Response -->
        <p>Enter the letter of the correct answer (use capital letter)</p>
        <input type="text" id="text" name="ans22">
</div>
<?php } ?>

<!-- Question Number 23 -->
<div class="test_num">
    <?php
    if (mysqli_num_rows($qstn) > 0) {
        $row = mysqli_fetch_assoc($qstn);

        //check if the answer is correct                        
        if ($ans23 == $row['correct_answer']) {
            $score_math++;
        }

    ?>
        <!-- Printing the questions and choices -->
        <div class="test_question">
            <?php

            echo $row['question'], "<br>";
            ?>
        </div>
        <div class="test_choices">
            <?php
            echo $row['choice1'], "<br>";
            echo $row['choice2'], "<br>";
            echo $row['choice3'], "<br>";
            echo $row['choice4'], "<br> <br>";
            ?>
        </div>
        <!-- User Response -->
        <p>Enter the letter of the correct answer (use capital letter)</p>
        <input type="text" id="text" name="ans23">
</div>
<?php } ?>

<!-- Question Number 24 -->
<div class="test_num">
    <?php
    if (mysqli_num_rows($qstn) > 0) {
        $row = mysqli_fetch_assoc($qstn);

        //check if the answer is correct                        
        if ($ans24 == $row['correct_answer']) {
            $score_math++;
        }

    ?>
        <!-- Printing the questions and choices -->
        <div class="test_question">
            <?php

            echo $row['question'], "<br>";
            ?>
        </div>
        <div class="test_choices">
            <?php
            echo $row['choice1'], "<br>";
            echo $row['choice2'], "<br>";
            echo $row['choice3'], "<br>";
            echo $row['choice4'], "<br> <br>";
            ?>
        </div>
        <!-- User Response -->
        <p>Enter the letter of the correct answer (use capital letter)</p>
        <input type="text" id="text" name="ans24">
</div>
<?php } ?>

<!-- Question Number 25 -->
<div class="test_num">
    <?php
    if (mysqli_num_rows($qstn) > 0) {
        $row = mysqli_fetch_assoc($qstn);

        //check if the answer is correct                        
        if ($ans25 == $row['correct_answer']) {
            $score_math++;
        }

    ?>
        <!-- Printing the questions and choices -->
        <div class="test_question">
            <?php

            echo $row['question'], "<br>";
            ?>
        </div>
        <div class="test_choices">
            <?php
            echo $row['choice1'], "<br>";
            echo $row['choice2'], "<br>";
            echo $row['choice3'], "<br>";
            echo $row['choice4'], "<br> <br>";
            ?>
        </div>
        <!-- User Response -->
        <p>Enter the letter of the correct answer (use capital letter)</p>
        <input type="text" id="text" name="ans25">
</div>
<?php } ?>

<div class="inform">
    <?php
    if ($score_math == 0) {
        echo "Make sure to answer all 25 question before clicking the SUBMIT button";
        echo "<br>Recorded Score: ";
        echo $score_math;
        echo "/25 <br>";
    } else {
        echo "Your answers have been saved, now click the PROCEED button to go to the next section";
        echo "<br>Recorded Score: ";
        echo $score_math;
        echo "/25 <br>";

        $query = "INSERT INTO score_math(math) VALUES ($score_math)";
        mysqli_query($connected, $query);
    }
    ?>

    <input type="submit" id="button" name="submit" value="SUBMIT ANSWERS" style="margin-left: 0%;">
    <a href="english.php">
        <h4 id="button" style="margin-right: 29%; margin-top: -2%;">PROCEED</h4>
    </a>
</div>

                </form>
            </div>

            <br><br>

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