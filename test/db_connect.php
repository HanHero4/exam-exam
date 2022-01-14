<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "exam_system";
$connected = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$connected)
{
	die("failed to connect!");
}

//$user_ans = $_POST['post-ans'];
//$submit = "INSERT INTO user_ans_sci (user_ans) VALUES ('$user_ans')";
//mysqli_query($connected, $user_ans);

?>
