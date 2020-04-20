<?php
include "dbcon.php";

if(isset($_POST['login'])){

    $uname = mysqli_real_escape_string($con,$_POST['uname']);
    $password = mysqli_real_escape_string($con,$_POST['psw']);

    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as password from admin where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['password'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: AminPage.php');
        }else{
            echo "Invalid username and password";
        }

    }

}