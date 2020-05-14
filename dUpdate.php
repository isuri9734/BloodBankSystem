<?php
session_start();
include "dbcon.php";

 if(isset($_POST['submit'])){ 
  
    // $id = trim($_POST['id']);
    $id = $_SESSION['did'];
    $name = trim($_POST['name']);
    $bgroup = trim($_POST['bgroup']);
    $email = trim($_POST['email']);
    $telep = trim($_POST['tele']);
    $password = trim($_POST['psw']);

    //-update query
    $sql="UPDATE donor SET Name = '$name', Blood_group='$bgroup', Email = '$email', Contact_no='$telep', Password='$password' WHERE did='$id' ";  
    //-run  the query against the mysql query function 
	$result=mysqli_query($con, $sql);

    //retrieve data from session
    
     $_SESSION['email'] = $email;
     $_SESSION['did'] = $id;
     $_SESSION['name'] = $name;
     $_SESSION['bloodgroup'] = $bgroup;
     $_SESSION['tele'] = $telep;
     $_SESSION['psw'] = $password;
    

     include "alert.php";
	 
    } 

    if(isset($_POST['delete'])){ 

        $id = $_SESSION['did'];

        // Attempt delete query execution
        $sql = "DELETE FROM donor WHERE did='$id'";

        if(mysqli_query($con, $sql)){
            echo "Records were deleted successfully.";
            header("location:Login.php");
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
        }
        
        // Close connection
        mysqli_close($link);


    
    }

?> 