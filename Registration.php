
<html>
    <head>
        <title>
            Registration Form
        </title>

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
        <style
        >
        </style>

</head>

<nav class="navbar navbar-expand-md bg-danger navbar-dark fixed-top">
        <a class="navbar-brand" href="Web.html">BloodBank</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse  navbar-md justify-content-end" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="AminPage.php">AdminPage</a>
                </li>
            </ul>
        </div>
    </nav>

<div class="container">
<br><br><br><br>
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Create Account</h4>
	
	<form action ="Registration.php " method="post">
    <?php 
            // Display Error message
            if(!empty($error_message)){
            ?>
            <div class="alert alert-danger">
              <strong>Error!</strong> <?= $error_message ?>
            </div>

            <?php
            }
            ?>

            <?php 
            // Display Success message
            if(!empty($success_message)){
            ?>
            <div class="alert alert-success">
              <strong>Success!</strong> <?= $success_message ?>
            </div>

            <?php
            }
            ?>

	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="name" class="form-control" placeholder="Full name" type="text">
    </div> <!-- form-group// -->

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-tint"></i> </span>
         </div>
    
        <input name="bgroup" class="form-control" placeholder="Blood Group" type="test">
    </div> <!-- form-group// -->

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
         </div>
    
        <input name="email" class="form-control" placeholder="Email address" type="email">
    </div> <!-- form-group// -->

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
    	<input name="tele" class="form-control" placeholder="Contact number" type="text">
    </div> <!-- form-group// -->
    
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input name="psw" class="form-control" placeholder="Create password" type="password">
    </div> <!-- form-group// -->

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input name="cpsw" class="form-control" placeholder="Repeat password" type="password">
    </div> <!-- form-group// --> 

    <div class="form-group">
        <button name="submit" type="submit" class="btn btn-primary btn-block"> Create Account  </button>
    </div> <!-- form-group// -->

    <p class="text-center">Have an account? <a href="Login.php">Log In</a> </p>                                                                 
</form>
</article>
</div> <!-- card.// -->

</div> 

<!-- footer -->
    
<div class="container text-center">
        <footer class="text-muted text-center p-4">
        <p>All right reserved. copyright@2020</p>
    </footer>

      
</body>
</html>
