<?php
session_start();
include "dbcon.php";
include "dlogin.php";
?>

<html>
<head>
    <title>Donor Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="css/Admin.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


</head>
<body>

<!-- Navbar start -->
<nav class="navbar navbar-expand-md bg-danger navbar-dark fixed-top">
        <a class="navbar-brand" href="Web.html">BloodBank</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse  navbar-md justify-content-end" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#profile">View Profile</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#update">Update Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#delete">Delete Details</a>
                </li>
                
                    <!-- USER NAME php -->
                    <?php
                                        if(isset($_SESSION['email']))  {
                                            //$usrid $_SESSION['id']; 
                                        // $usrid =$_SESSION['fname'];
                                        echo'<li class="nav-item">
                                        <a class="nav-link" href=" ">'."".$_SESSION['email']." | ".'</a> </li>';
                                        }
                                        else {
                                            $usrii = "User Name";
                                            echo'<li class="nav-item">
                                            <a class="nav-link" href=" ">'.$usrii.'</a> </li>';
                                        }
                                        ?>
               
                <li class="nav-item">
                    <a class="nav-link" href="Login.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <!--nav end-->

    <section id="view">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <div class="card mt-5 p-5">
                        <div class="card-img-top"></div>
                        <h3>View Profile</h3>
                        
<!-- UPDATE FORM - START-->


<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Update profile</h4>
	
	<form action ="dUpdate.php " method="post">
    <!-- <h5 class="card-title mt-3 text-center">ID :<?php echo $_SESSION['did'];?></h5> -->
    <input name="id" class="form-control" type="text" value="<?php echo $_SESSION['did'];?> " disabled>


	<div class="form-group input-group">
		<div class="input-group-prepend">

		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="name" class="form-control" placeholder="Full name" type="text" value="<?php echo $_SESSION['name'];?> "required>
    </div> <!-- form-group// -->

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-tint"></i> </span>
         </div>
    
        <input name="bgroup" class="form-control" placeholder="Blood Group" type="test" value="<?php echo $_SESSION['bloodgroup'];?> "required>
    </div> <!-- form-group// -->

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
         </div>
    
        <input name="email" class="form-control" placeholder="Email address" type="email" value="<?php echo $_SESSION['email'];?> "required>
    </div> <!-- form-group// -->

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
    	<input name="tele" class="form-control" placeholder="Contact number" type="text" value="<?php echo $_SESSION['tele'];?> "required>
    </div> <!-- form-group// -->
    
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input name="psw" class="form-control" placeholder="Create password" type="password" value="<?php echo $_SESSION['psw'];?> "required>
    </div> <!-- form-group// -->

    <div class="form-group">
        <button name="submit" type="submit" class="btn btn-primary btn-block"> Update Account  </button>
    </div> <!-- form-group// -->                                                             
</form>
</article>
<!-- UPDATE FORM - END -->
                            <!-- <div class="d-flex justify-content-center h-100">
                            <div class="searchbar">
                                <input class="search_input" type="text" name="did" placeholder="Id to get details...">
                                <a href="#" class="search_icon" name="search"><i class="fas fa-search"  name="search"></i></a>
                         </div>
                        </div> -->

<!-- <input type="text" name="did" placeholder="Id to Search"><br><br>
 <input type="submit" name="search" value="Filter"><br><br> -->
                         
                    </div>
                </div>
                <div class="col-sm-2">
                </div>  
            </div>
        </div>
        </section>

    
</body>
</html>