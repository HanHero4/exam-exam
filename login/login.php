<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: exam.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!--The site is written using universal characters-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Gets the default width from the dimension of the device currently being run on-->

    <title>Log In</title>

    <style>
    /*FOR THE HOME PAGE!*/

    * {
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
        align-self: center;
        background-color: #002D62;
        width: 370px;
        height: 400px;
        padding: 10px;
        border-radius: 30px;
        box-shadow: 10px 10px 10px 10px black;
    }

    #mini-container {
        position: relative;
        text-align: center;
        align-self: center;
        background-color: #7CB9E8;
        width: 330px;
        height: 410px;
        padding: 10px;
        margin-left: 10px;
        border-radius: 30px;
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
        height: 35px;
        border-radius: 10px;
        padding: 4px;
        border: solid thin #aaa;
        width: 100%;
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

            </div>

        </header>

        <div id="container">
            <div id="mini-container">
                <form method="post">
                    <div style="font-size: 45px; margin: 15px; color: black; font-weight:bold;">LOG IN</div>

                    <input id="text" type="text" name="user_name"><br><br>
                    <input id="text" type="password" name="password"><br><br>

                    <input id="button" type="submit" value="Login"> <br> <br>
                    <a href="signup.php" id="shortcut">Click to Signup</a>
                </form>
            </div>
        </div>

        <br>
        <br>
        <br>

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