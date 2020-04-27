<html>
<head>
  <title>
    Blood Bank-Home
  </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <!--script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script-->

  <!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<style>
body, html {
  height: 100%;
  margin: 0;
  font: 400 15px/1.8 "Lato", sans-serif;
  color: #777;
}

.bgimg-1, .bgimg-2, .bgimg-3 {
  position: relative;
  opacity: 0.65;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.bgimg-1 {
  background-image: url("images/img11.png");
  height: 50%;
  min-height: 100%;
}

.bgimg-2 {
  background-image: url("images/pngg.png");
  
  min-height: 400px;
}

.bgimg-3 {
  background-image: url("images/img2.jpg");
  min-height: 400px;
}

.caption {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  text-align: center;
  color: #000;
}

.caption span.border {
  background-color: black;
  color: #fff;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
  /*background-color:transparent;*/
}

h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 20px "Lato", sans-serif;
  color: #111;
}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
  .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: scroll;
  }
}
</style>

</head>

<Body>
  <!-- Navbar start -->
  <nav class="navbar navbar-expand-md bg-danger navbar-dark fixed-top">
    <a class="navbar-brand" href="Web.html">BloodBank</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse  navbar-md justify-content-end" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Login.php">Who can donate blood</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Whocan.php">Why donate blood</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Whyblood.php"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="DonationP.php"></a>
      </li>
    </ul>
    </div>
  </nav>
  <!-- Navbar end -->


<div class="section">
  <div class="container-fluid">
<div class="row">
  <div class="col-sm-12 mt-5 p-3">
  
    <!--paralexx start-->
    <div class="bgimg-1">
        <div class="caption">
        <span class="border">Who we are</span>
        </div>
      </div><div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
        <h3 style="text-align:center;">Blood Donor</h3>
        <p>You are a superhero. This is the street, where the blood donor and recipient connect to each other. WHO recommends collection of blood, plasma and other blood components from regular, voluntary, unpaid donors through the strengthening of donation systems. </p>
      </div>
      
      <div class="bgimg-2">
        <div class="caption">
        <span class="border" >What is blood?</span>
        </div>
      </div>
      
      <div style="position:relative;">
        <div style="color:#777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
        <p>Blood is essential to life. Blood circulates through our body and delivers essential substances like oxygen and nutrients to the body’s cells. It also transports metabolic waste products away from those same cells. There is no substitute for blood. It cannot be made or manufactured. Generous blood donors are the only source of blood for patients in need of a blood transfusion..</p>
        </div>
      </div>
      
      <div class="bgimg-3">
        <div class="caption">
        <span class="border">Blood Components</span>
        </div>
      </div>
      
      <div style="position:relative;">
        <div style="color:#777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
        <p>There are four basic components that comprise human blood: plasma, red blood cells, white blood cells and platelets.</p>
        </div>
      </div>
      
     
      <!--Paraless end-->

  <!-- footer -->
<footer class="text-muted text-center">
  <div class="container">
    <p>All right reserved. copyright@2020</p>
  </div>
</footer>
  
</Body>

</html>