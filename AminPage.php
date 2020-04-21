<?php

include 'dbcon.php';
?>

<html>
<head>
    <title>Admin Page</title>
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
                <li class="nav-item ">
                    <a class="nav-link" href="#reg">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#S_blood">Search Blood</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#s_donor">Search Donor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#availability">Search blood availability</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Login.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <section id="reg">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <div class="card mt-5 p-5">
                        <div class="card-img-top">
                        <h3>Register Donors</h3>
                        <img class="img-fluid mt-2 p-5" src="images\reg.jpg">
                        <div>
                        <a class="btn btn-danger" href="Registration.php" role="button">Link</a>
                            
                    </div>
                    </div>
                </div>
                <div class="col-sm-2"></div>

            </div>
        </div>
        

    <section id="S_blood">
    <div class="container text-center">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <div class="card mt-5 p-5">
                        <div class="card-img-top"></div>
                        <h3>Search Blood Count</h3>
                        
        <!--div class="container h-100"-->
        <form action=" " method="GET">
      <div class="d-flex justify-content-center h-100">
        <div class="searchbar">
        
          <input class="search_input" type="text" name="" placeholder="Search Blood Count...">
          <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
          
        </div>
      </div>
      </form>
    <!--/div-->
   </div>
  </div>
</div>
    <div class="col-sm-2"></div>

</div>
</div>


<section id="s_donor">
    <div class="container text-center">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <div class="card mt-5 p-5">
                        <div class="card-img-top"></div>
                        <h3>Search Donor</h3>
                        
        <!--div class="container h-100"-->
        <form action=" " method="GET">
      <div class="d-flex justify-content-center h-100">
        <div class="searchbar">
          <input class="search_input" type="text" name="" placeholder="Search Donor...">
          <a href="#" class="search_icon"><i class="fas fa-search"></i></a>

        </div>
      </div>
      </form>
    <!--/div-->
   </div>
  </div>
</div>
    <div class="col-sm-2"></div>

</div>
</div>

<section id="availability">
    <div class="container text-center">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <div class="card mt-5 p-5">
                        <div class="card-img-top"></div>
                        <h3>Search in near Hospital</h3>
                    
        <!--div class="container h-100"-->
        <form action=" " method="GET">
      <div class="d-flex justify-content-center h-100">
        <div class="searchbar">
          <input class="search_input" type="text" name="" placeholder="Search Hospital...">
          <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
        </div>
      </div>
      </form>
    <!--/div-->
   </div>
  </div>
</div>
    <div class="col-sm-2"></div>

</div>
</div>

</body>
</html>
