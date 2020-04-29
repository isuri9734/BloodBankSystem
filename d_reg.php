<?php 
Include('dbcon.php');
// $error_message = "";$success_message = "";

// Register user
if(isset($_POST['submit'])){
   
   $name = trim($_POST['name']);
   $bgroup = trim($_POST['bgroup']);
   $email = trim($_POST['email']);
   $telep = trim($_POST['tele']);
   $password = trim($_POST['psw']);
   $confirmpassword = trim($_POST['cpsw']);

   $isValid = true;

   // Check fields are empty or not
   if( $name == '' || $bgroup == '' || $email == '' || $telep == '' || $password == '' || $confirmpassword == ''){
     $isValid = false;
     $error_message = "Please fill all fields.";
   }

   // Check if confirm password matching or not
   if($isValid && ($password != $confirmpassword) ){
     $isValid = false;
     $error_message = "Confirm password not matching";
   }

   // Check if Email-ID is valid or not
   if ($isValid && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
     $isValid = false;
     $error_message = "Invalid Email-ID.";
   }

   if($isValid){

     // Check if Email-ID already exists
     $stmt = $con->prepare("SELECT * FROM donor WHERE email = ?");
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $result = $stmt->get_result();
     $stmt->close();
     if($result->num_rows > 0){
       $isValid = false;
       $error_message = "Email-ID is already existed.";
     }

   }

   // Insert records
   if($isValid){
     $insertSQL = "INSERT INTO donor(name,blood_group,email,contact_no,password ) values(?,?,?,?,?)";
     $stmt = $con->prepare($insertSQL);
     $stmt->bind_param('sssss',$name,$bgroup,$email,$telep,$password);
     $stmt->execute();
     $stmt->close();

     $success_message = "Account created successfully.";
   }
}
?>