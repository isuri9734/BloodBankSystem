<?php
include "dbcon.php";

//session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['login2'])) {
if (empty($_POST['email']) || empty($_POST['passw'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$mail=$_POST['email'];
$password=$_POST['passw'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
//$connection = mysql_connect("localhost", "root", "",);
// To protect MySQL injection for Security purpose
$mail = stripslashes($mail);
$password = stripslashes($password);
$mail = mysqli_real_escape_string($con,$mail);
$password = mysqli_real_escape_string($con,$password);
// Selecting Database
//$db = mysqli_select_db("blood_bank", $con);
// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($con,"select * from donor where password='$password' AND email='$mail'");
$rows = mysqli_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$mail; // Initializing Session
header("location: donor.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysql_close($con); // Closing Connection
}
}

?>

