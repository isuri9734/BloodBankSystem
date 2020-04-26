<?php
session_start();
include "dbcon.php";

//$error=''; // Variable To Store Error Message
if (isset($_POST['login2'])) {

if (empty($_POST['email']) || empty($_POST['passw'])) {
echo "Username or Password is invalid";
}
else
{
// Define $username and $password
$mail=$_POST['email'];
$password=$_POST['passw'];


// To protect MySQL injection for Security purpose
$mail = stripslashes($mail);
$password = stripslashes($password);
$mail = mysqli_real_escape_string($con,$mail);
$password = mysqli_real_escape_string($con,$password);


// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($con,"select * from donor where password='$password' AND email='$mail'");
$rows = mysqli_num_rows($query);
if($rows == 1) {
    $row = mysqli_fetch_assoc($query);

    $_SESSION['email']=$mail;// Initializing Session
    $_SESSION['did']=$row["did"];
    $_SESSION['name']=$row["Name"];
    $_SESSION['bloodgroup']=$row["Blood_group"];
    $_SESSION['tele']=$row["Contact_no"];
    $_SESSION['psw']=$row["Password"];
    header("location:donor.php"); // Redirecting To Other Page

// $row = mysqli_fetch_assoc($query);
// if ($row < 1) {
//     $_SESSION['did']=$did;
//     $_SESSION['name']=$name;
//     $_SESSION['bloodgroup']=$b_group;
//     $_SESSION['email']=$mail;
//     $_SESSION['tele']=$contact;// Initializing Session
//     header("location:donor.php");

//$rows = mysqli_num_rows($query);

 // Redirecting To Other Page
//header("Location: ../Login.php?Login=empty");
//} 
}
else {
echo "Username or Password is invalid";
}

mysqli_close($con); // Closing Connection
}
}

?>

