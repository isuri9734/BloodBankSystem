<?php
session_start();
include 'dbcon.php'
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
                <!-- USER NAME php -->
                <?php
                                        if(isset($_SESSION['uname']))  {
                                            //$usrid $_SESSION['id']; 
                                        // $usrid =$_SESSION['fname'];
                                        echo'<li class="nav-item">
                                        <a class="nav-link" href=" ">'."".$_SESSION['uname']." | ".'</a> </li>';
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
                        <a class="btn btn-danger" href="Registration.php" role="button">Register</a>
                            
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
                        
        <form class=" " action=" " method="GET">

          <input class="form-control my-2 my-sm-0" type="search" name="group" placeholder="Enter Blood group to search" aria-label="Search" >
         <br> <button type="submit" name="search" class="btn btn-outline-danger my-2 my-sm-0">Search</button>
         <button type="submit" name="bcClear" class="btn btn-outline-secondary my-2 my-sm-0">clear</button> <br>
         
<?php


            if(isset($_GET['search']))
            
            {
                $group=$_GET['group'];
                //filter null values
                if($group==null || $group==""){
                    
                    // echo 'Enter a blood group';
                    echo '<script>alert("Enter a blood group to get count")</script>'; 
         
                }else {
                    //-update query
                    $sql="SELECT * FROM donor WHERE Blood_group = '$group'"; 

                    //-run  the query against the mysql query function 
                    if($result=mysqli_query($con, $sql)){
                        $bloodcount = mysqli_num_rows($result) ;
                            // echo '$group'+' count is : '+'$result';
                            // echo $result;
                            echo '<h5 class="text-danger"><br>';
                            echo $group;
                            echo '  type blood count is : ';
                            echo $bloodcount;
                            echo '</h5>';
                    } else{
                        echo "No records matching .";
                    }
                }

                    
            }
            // clear button
            if(isset($_GET['bcClear']))
            
            {
                
         
                echo "";
         
            }
 ?>                                        
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
        <form class=" " action=" " method="GET">

         <input class="form-control my-2 my-sm-0" type="search" name="grp" placeholder="Enter Blood group to search donor" aria-label="Search">
         <br> <button type="submit" name="search2" class="btn btn-outline-danger my-2 my-sm-0">Search</button> 
         <button type="submit" name="sdClear" class="btn btn-outline-secondary my-2 my-sm-0">clear</button> <br>

         <?php
            if(isset($_GET['search2']))
            {
                $group2=$_GET['grp'];
                //check for null values 
                if($group2==null || $group2==""){
                    
                    // echo 'enter a blood group';
                    echo '<script>alert("Enter a blood group to search donor")</script>'; 
         
                }
                else{
                               //-update query
                               $sql="SELECT Name,Email,Contact_no FROM donor WHERE Blood_group = '$group2'  "; 
                     
                               //-run  the query against the mysql query function 
                               if($result=mysqli_query($con, $sql)){
                                   if(mysqli_num_rows($result) > 0){
                                       echo '<table class="table table-hover">';
                                           echo "<tr>";
                                               echo "<th>Name</th>";
                                               
                                               echo "<th>Email</th>";
                                            
                                               echo "<th>Contact No</th>";
                                           echo "</tr>";
           
                           //-create  while loop and loop through result set  
                           while($row = mysqli_fetch_array($result)){
                               echo "<tr>";
                                   echo  "<td>" . $row['Name'] .  "</td>";
                                   echo "<td>" . $row['Email'] . "</td>";
                                   echo "<td>" . $row['Contact_no'] . "</td>";
                               echo "</tr>";
                           }
                           echo "</table>";
        
                       } else{
                           echo "No records matching";
                       }
                   }
                }
            }
            // clear button
            if(isset($_GET['sdClear']))
            
            {
                
         
                echo "";
         
            }
 ?>             

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
        <form class=" " action=" " method="GET">

          <input class="form-control my-2 my-sm-0" type="search" name="hsptl" placeholder="Enter Blood group to search near hospital" aria-label="Search" required>
         <br> <button type="submit" name="search3" class="btn btn-outline-danger my-2 my-sm-0">Search</button> 

         <?php
            if(isset($_GET['search3']))
            {
                $group3=$_GET['hsptl'];

                    //-update query
                    $sql="SELECT * FROM donor WHERE Blood_group = '$group3'  "; 
                     
                    //-run  the query against the mysql query function 
                    if($result=mysqli_query($con, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table>";
                                echo "<tr>";
                                    echo "<th>Hospital Name</th>";
                                echo "</tr>";

                //-create  while loop and loop through result set  
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                        echo "<td>" . $row['Blood_group'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                
            } else{
                echo "No records matching ";
            }
        }
            }
 ?>             

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
