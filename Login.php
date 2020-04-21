<?php 
session_start(); 
include 'dbcon.php';
?>

<?php include 'alogin.php';?>
<?php include 'dlogin.php';?>

<html>

<head>
  <title>
    Login Page
  </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="Login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Whocan.php">Who can donate blood</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Whyblood.php">Why donate blood</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="DonationP.php">Donation Process</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- Navbar end -->

  <section>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 ">

      <div class="album py-5 bg-light">
        <div class="container text-center">
          <div class="row">
            <div class="col-md-6">
              <div class="card mt-5 p-3">
                <div class="card-img-top">
                  <h2>Adminstrator Login</h2>
                  <img class="imgcontainer" src="images\admin.png">
                  <p>Seach available Blood groups and Count.
                    Search availability in near by Hospitals.
                  </p>
                  <a href="" class="btn btn-primary my-2" data-toggle="modal" data-target="#adminModal">login</a>
                </div>
              </div>
            </div>
  
            <div class="col-md-6">
              <div class="card mt-5 p-3 ">
                <div class="card-img-top">
                  <h2>Donor Login</h2>
                  <img src="images\donor.png">
    
                  <p>Login into your account see your profile and update details .
                    If you don't have an account please contact Adminstrator.
                  </p>
                  <a href="" class="btn btn-primary my-2" data-toggle="modal" data-target="#donorModal">login</a>
                </div>
              </div>
              
  
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
    

    <!-- Admin Modal -->
    
    <div class="modal fade" id="adminModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Admin Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- admin form -->
            <div class="container">
              <form action="alogin.php " method="post">
               <div class="form-group">
                  <img src="images\avatar.png" alt="Avatar" class="img-responsive">
                </div>
                <div class="form-group">
                  <label for="Username">Username</label>
                  <input type="text" class="form-control" id="Username" name="uname" aria-describedby="username"
                    placeholder="Enter username" required>
                </div>
                <div class="form-group">
                  <label for="InputPassword1">Password</label>
                  <input type="password" class="form-control" id="InputPassword1" name="psw" placeholder="Password"
                    required>
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Remember me</label>
                </div>
                <button type="reset" value="CANCEL" name="cancel" class="btn btn-Danger">Cancel</button>
                <button type="submit" value="LOGIN" name="login" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Admin Modal end-->

    <!-- Donor Modal -->
    <div class="modal fade" id="donorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel2">Donor Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- Donor form -->
            <div class="container">
              <form action="dlogin.php " method="post">
             
                <div class="form-group">
                  <img src="images\avatar.png" alt="Avatar" class="img-responsive">
                </div>
                <div class="form-group">
                  <label for="Email">Email</label>
                  <input type="text" class="form-control" id="Email" name="email" aria-describedby="email"
                    placeholder="Enter email" required>
                </div>
                <div class="form-group">
                  <label for="InputPassword1">Password</label>
                  <input type="password" class="form-control" id="InputPassword2" name="passw" placeholder="Password"
                    required>
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck2">
                  <label class="form-check-label" for="exampleCheck2">Remember me</label>
                </div>
                <button type="reset" value="CANCEL" name="cancel2" class="btn btn-Danger">Cancel</button>
                <button type="submit" value="LOGIN" name="login2" class="btn btn-primary">Submit</button>
                <!--span><?php echo $error; ?></span-->
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Donor Modal end-->
    <!-- footer -->
  <footer class="text-muted text-center p-4">
    <div class="container">
      <p>All right reserved. copyright@2020</p>
    </div>
  </footer>
  </section>
  
</body>

</html>