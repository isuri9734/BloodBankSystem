<?php
session_start();

?>

<html>

<head>
  <title>Why give Blood</title>
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
        <li class="nav-item ">
          <a class="nav-link" href="Login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Whocan.php">Who can donate blood</a>
        </li>
        <li class="nav-item active">
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
    <div class="container text-center">
      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
          <div class="card mt-5 p-4">
            
              <h1>Why give blood</h1><br>
              <p>Giving blood saves lives.
                The blood you give is a lifeline in an emergency and for people who need long-term treatments.</p>
              <h3>Why do we need you to give blood?</h3>

              <p>
                We need new blood donors from all backgrounds to ensure there is the right blood available for patients
                who need it.</p>
              <h4 style="text-align: justify;">We need:</h4>
              <p style="text-align: justify;">
                1. Nearly 400 new donors a day to meet demand<br>
                2. Around 135,000 new donors a year to replace those who can no longer donate<br>
                3. 40,000 more black donors to meet growing demand for better-matched blood<br>
                4. 30,000 new donors with priority blood types such as O negative every year<br><br>
                More young people to start giving blood so we can make sure we have enough blood in the future
              </p>

              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6">
                    <div class="card mt-2 p-3">
                      <div class="card-img-top">
                        <h3>Blood Types</h3>
                        <img class="img-fluid" src="images/img6.jpg">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet,
                          nulla et dictum interdum, nisi lorem egestas vitae scel.</p>
                        <p><a href="Btypes">Read more....</a></p>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="card mt-2 p-3">
                      <div class="card-img-top">
                        <h3>Demand of Blood</h3>
                        <img class="img-fluid" src="images/img8.jpg">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet,
                          nulla et dictum interdum, nisi lorem egestas vitae scel.</p>
                        <p><a href="Btypes">Read more....</a></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          
      <div class="col-sm-2"></div>
    </div>
    </div>

    <!-- footer -->
    
      <div class="container text-center">
        <footer class="text-muted text-center p-4">
        <p>All right reserved. copyright@2020</p>
    </footer>
  </div>
  </section>
</body>

</html>