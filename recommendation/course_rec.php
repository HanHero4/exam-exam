<?php
session_start();
include("db_connect.php");
include("functions.php");

//accessing the score for science test
$sql = "SELECT * FROM score_science;";
$qstn = mysqli_query($connected, $sql);
$row = mysqli_fetch_assoc($qstn);
$score_science = $row['science'];

//accessing the score for math test
$sql = "SELECT * FROM score_math;";
$qstn = mysqli_query($connected, $sql);
$row = mysqli_fetch_assoc($qstn);
$score_math = $row['math'];

//accessing the score for english test
$sql = "SELECT * FROM score_english;";
$qstn = mysqli_query($connected, $sql);
$row = mysqli_fetch_assoc($qstn);
$score_english = $row['english'];

//accessing the score for filipino test
$sql = "SELECT * FROM score_filipino;";
$qstn = mysqli_query($connected, $sql);
$row = mysqli_fetch_assoc($qstn);
$score_filipino = $row['filipino'];


//variables for each college courses
$BSBA = 0;
$BSA = 0;
$BSN = 0;
$BSP = 0;
$BSDevCom = 0;
$BSM = 0;
$BSEd = 0;
$BEEd = 0;
$BEEng = 0;
$BSCS = 0;
$BSF = 0;
$BSCrim = 0;
$BSBio = 0;
$BSPS = 0;
$BSE = 0;
$BSEE = 0;
$BSH = 0;
$BSLA = 0;
$BSS = 0;
$BSFA = 0;
$BSCG = 0;
$BSGE = 0;
$BSJ = 0;
$BSIT = 0;
$BSCW = 0;

//computation for which is to be recommended
//100% = 70
if($score_math > $score_filipino){
    $BSBA =+ 18;
    $BSA =+ 11;
    $BSN =+ 1;
    $BSP =+ 2;
    $BSDevCom =+ 4;
    $BSM =+ 3;
    $BSEd =+ 3;
 //   $BEEd =+ 3;
    $BEEng =+ 19;
    $BSCS =+ 15;
    $BSF =+ 13;
    $BSCrim =+ 1;
    $BSBio =+ 2;
    $BSPS =+ 2;
    $BSE =+ 3;
    $BSEE =+ 7;
    $BSH =+ 8;
    $BSLA =+ 10;
    $BSS =+ 11;
    $BSFA =+ 2;
    $BSCG =+ 2;
    $BSGE =+ 3;
    $BSJ =+ 4;
    $BSIT =+ 5;
    $BSCW =+ 1;
}
if($score_english > $score_math){
    $BSBA =+ 4;
    $BSA =+ 4;
    $BSN =+ 5;
    $BSP =+ 5;
    $BSDevCom =+ 7;
    $BSM =+ 9;
    $BSEd =+ 15;
//    $BEEd =+ 14;
    $BEEng =+ 5;
    $BSCS =+ 5;
    $BSF =+ 5;
    $BSCrim =+ 11;
    $BSBio =+ 9;
    $BSPS =+ 12;
    $BSE =+ 14;
    $BSEE =+ 18;
    $BSH =+ 12;
    $BSLA =+ 12;
    $BSS =+ 13;
    $BSFA =+ 5;
    $BSCG =+ 6;
    $BSGE =+ 3;
    $BSJ =+ 7;
    $BSIT =+ 6;
    $BSCW =+ 2;
}
if($score_filipino > $score_english){
    $BSBA =+ 2;
    $BSA =+ 2;
    $BSN =+ 2;
    $BSP =+ 4;
    $BSDevCom =+ 14;
    $BSM =+ 14;
    $BSEd =+ 19;
 //   $BEEd =+ 19;
    $BEEng =+ 5;
    $BSCS =+ 6;
    $BSF =+ 8;
    $BSCrim =+ 12;
    $BSBio =+ 14;
    $BSPS =+ 4;
    $BSE =+ 5;
    $BSEE =+ 6;
    $BSH =+ 7;
    $BSLA =+ 14;
    $BSS =+ 14;
    $BSFA =+ 2;
    $BSCG =+ 13;
    $BSGE =+ 11;
    $BSJ =+ 10;
    $BSIT =+ 5;
    $BSCW =+ 1;
}
if($score_science > $score_math){
    $BSBA =+ 9;
    $BSA =+ 9;
    $BSN =+ 10;
    $BSP =+ 8;
    $BSDevCom =+ 14;
    $BSM =+ 15;
    $BSEd =+ 3;
  //  $BEEd =+ 3;
    $BEEng =+ 14;
    $BSCS =+ 9;
    $BSF =+ 14;
    $BSCrim =+ 4;
    $BSBio =+ 19;
    $BSPS =+ 12;
    $BSE =+ 15;
    $BSEE =+ 5;
    $BSH =+ 5;
    $BSLA =+ 18;
    $BSS =+ 17;
    $BSFA =+ 15;
    $BSCG =+ 11;
    $BSGE =+ 15;
    $BSJ =+ 15;
    $BSIT =+ 12;
    $BSCW =+ 18;
}


?>

<!DOCTYPE html>
<html>

<head>
    <title>Course Recommendation</title>

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
            color: balck;
            background-color: skyblue;
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
                    <div class="exam-section">
                        <p>FILIPINO</p>
                    </div>
                </div>
            </div>

            <br><br>

            <div id="container" style="height: 150px;">
                <div id="mini-container" style="height: 150px;" ;>
                    <br>
                    <div class="exam-section" style="height: 50%; background-color: #228B22;">
                        <p>COURSE RECOMMENDATION</p>
                    </div>
                </div>
            </div>

            <div class="exam-test">
                <h1 style="padding-top: 10px; text-align:center;">COURSE RECOMMENDATION</h1>


                <div class="inform">
                    <?php
                    echo "According to your response to the exam, below are the courses recommended just for you";
                    ?>
                </div>



                <!-- Displaying the recommended results -->
                <div class="test_num">
                    <?php
                    if (mysqli_num_rows($qstn) > 0) {
                        $row = mysqli_fetch_assoc($qstn);
                    ?>
                        <div class="test_question">
                            <?php
                            echo "Thank you for taking a part in this exam, below are the courses recommended just for you.";
                            ?>
                        </div>
                        
                        <!-- Code to compute for what should be number 1,2, so on -->
                        <div class="test_choices">
                            <?php
                           $showed="0";
                            for($i=80, $j=1; $i>=0; $i--){ 
                                if($j==5){
                                    $i=0;
                                }
                                if($BSBA == $i){
                                    echo $j, ". ";                                    
                                    echo "Bachelor of Science in Business Administration (BSBA) -- ";
                                    echo ($i/80)*100, "% <br>";
                                    $j++;
                                }
                                if($BSA == $i){
                                    echo $j, ". ";                                    
                                    echo "Bachelor of Science in Accounting (BSA) -- ";
                                    echo ($i/80)*100, "% <br>";
                                    $j++;
                                }
                                if($BSN == $i){
                                    echo $j, ". ";                                    
                                    echo "Bachelor of Science in Nursing (BSN) -- ";
                                    echo ($i/80)*100, "% <br>";
                                    $j++;
                                }
                                if($BSP == $i){
                                    echo $j, ". ";                                    
                                    echo "Bachelor of Science in Psychology (BSP) -- ";
                                    echo ($i/80)*100, "% <br>";
                                    $j++;
                                }
                                if($BSDevCom == $i){
                                    echo $j, ". ";                                    
                                    echo "Bachelor of Science in Development Communications (BS DevCom) -- ";
                                    echo ($i/80)*100, "% <br>";
                                    $j++;
                                }
                                if($BSM == $i){
                                    echo $j, ". ";                                    
                                    echo "Bachelor of Science in Marketing (BSM) -- ";
                                    echo ($i/80)*100, "% <br>";
                                    $j++;
                                }
                                if($BSEd == $i){
                                    echo $j, ". ";                                    
                                    echo "Bachelor of Education Major in Science (BSEd) -- ";
                                    echo ($i/80)*100, "% <br>";
                                    $j++;
                                }
                                if($BEEd == $i){
                                    echo $j, ". ";                                    
                                    echo "Bachelor of Elementary Education (BEEd) -- ";
                                    echo ($i/80)*100, "% <br>";
                                    $j++;
                                }
                                if($BEEng == $i){
                                    echo $j, ". ";                                    
                                    echo "Bachelor of Science in English Education (BE Eng) -- ";
                                    echo ($i/80)*100, "% <br>";
                                    $j++;
                                }
                                if($BSCS == $i){
                                    echo $j, ". ";                                    
                                    echo "Bachelor of Science in Computer Science (BSCS) -- ";
                                    echo ($i/80)*100, "% <br>";
                                    $j++;
                                }
                                if($BSF == $i){
                                    echo $j, ". ";                                    
                                    echo "Bachelor of Science in Finance (BSF) -- ";
                                    echo ($i/80)*100, "% <br>";
                                    $j++;
                                }
                                if($BSCrim == $i){
                                    echo $j, ". ";                                    
                                    echo "Bachelor of Science in Criminal Justice (BS Crim) -- ";
                                    echo ($i/80)*100, "% <br>";
                                    $j++;
                                }
                                if($BSBio == $i){
                                    echo $j, ". ";                                    
                                    echo "Bachelor of Science in Biology (BS Bio) -- ";
                                    echo ($i/80)*100, "% <br>";
                                    $j++;
                                }
                                if($BSPS == $i){
                                    echo $j, ". ";                                    
                                    echo "Bachelor of Science in Political Science (BSPS) -- ";
                                    echo ($i/80)*100, "% <br>";
                                    $j++;
                                }
                                if($BSE == $i){
                                    echo $j, ". ";                                    
                                    echo "Bachelor of Science in Economics (BSE) -- ";
                                    echo ($i/80)*100, "% <br>";
                                    $j++;
                                }
                                if($BSEE == $i){
                                    echo $j, ". ";                                    
                                    echo "Bachelor of Science in Electrical Engineering (BSEE) -- ";
                                    echo ($i/80)*100, "% <br>";
                                    $j++;
                                }
                                if($BSP == $i){
                                    echo $j, ". ";                                    
                                    echo "Bachelor of Science in Psychology (BSP) -- ";
                                    echo ($i/80)*100, "% <br>";
                                    $j++;
                                }
                                if($BSH == $i){
                                    echo $j, ". ";                                    
                                    echo "Bachelor of Science in History (BSH) -- ";
                                    echo ($i/80)*100, "% <br>";
                                    $j++;
                                }
                                if($BSCG == $i){
                                    echo $j, ". ";                                    
                                    echo "Bachelor of Science in Commercial Art & Graphic Design (BSCG) -- ";
                                    echo ($i/80)*100, "% <br>";
                                    $j++;
                                }
                                if($BSGE == $i){
                                    echo $j, ". ";                                    
                                    echo "Bachelor of Science in General Engineering (BSGE) -- ";
                                    echo ($i/80)*100, "% <br>";
                                    $j++;
                                }
                                if($BSJ == $i){
                                    echo $j, ". ";                                    
                                    echo "Bachelor of Science in Journalism (BSJ) -- ";
                                    echo ($i/80)*100, "% <br>";
                                    $j++;
                                }
                                if($BSIT == $i){
                                    echo $j, ". ";                                    
                                    echo "Bachelor of Science in Computer and Information Systems (BSIT) -- ";
                                    echo ($i/80)*100, "% <br>";
                                    $j++;
                                }
                                if($BSCW == $i){
                                    echo $j, ". ";                                    
                                    echo "Bachelor of Science in Social Work (BSCW) -- ";
                                    echo ($i/80)*100, "% <br>";
                                    $j++;
                                }
                            }

                            ?>
                        </div>
                </div>
            <?php } ?>

            <div class="inform">
                <a href="feedback.php">
                    <h4 id="button" style="margin-left: 35%; margin-top: -2%; width: 30%;">SEND FEEDBACK</h4>
                </a>
                <a href="http://localhost/exam/home/home.php">
                    <h4 id="button" style="margin-right: 29%; margin-top: -2%;">GO BACK TO HOME</h4>
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