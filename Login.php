<html>
    <head>
        <title>
            Login
        </title>

        <link rel="stylesheet" type="text/css" href="css\LoginStylesheet.css">
    </head>

<body>
    <ul>
      <li><img src=""></li>
      <li><a class="active" href="Web.html">Home</a></li>
      <li><a href="Login.html">Login Page</a></li>
      <li><a href="Whocan.html">Who can give blood</a></li>
      <li><a href="Whyblood.html">Why give blood</a></li>
      <li><a href="DonationP.html">Donation Process</a></li>
      </ul>

              <br><br>
              
              <div class="row">
                <div class="column" style="background-color:rgb(247, 240, 240);">
                  <h2>Adminstrator Login</h2>
                  <img src="images\admin.png">

                  <p>Seach available Blood groups and Count.
                    <br>
                   Search availability in near by Hospitals.
                </p>
                
                  <button class="bt-lg" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
                
                  <div id="id01" class="modal">
                    
                    <form class="modal-content animate" action="/action_page.php" method="post">
                      <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <img src="images\avatar.png" alt="Avatar" class="avatar">
                      </div>
                  
                      <div class="container">
                        <label for="uname"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="uname" required>
                  
                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>
                          
                        <input type="submit" value="LOGIN" name="login">
                        <br>
                        <label>
                          <input type="checkbox" checked=" checked" name="remember"> Remember me
                        </label>
                      </div>
                  
                      <div class="container" style="background-color:#f1f1f1">
                        <input type="reset" value="CANCEL" name="cancel">
                        <span class="fpsw"> <a href="#">Forgot password?</a></span>
                      </div>
                    </form>
                  </div>
                  <script type="text/javascript" src="javascript\login.js"></script>
                </div>

                <div class="column" style="background-color:rgb(247, 238, 238);">
                  <h2>Donor Login</h2>
                  <img src="images\donor.png">

                  <p>See Your profile update your details login into your account.
                      <br>
                      If you don't have an account please contact Adminstrator.
                  </p>
                  
                  <button class="btn-lg" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

                  <div id="id01" class="modal">
                    
                    <form class="modal-content animate" action="/action_page.php" method="post">
                      <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <img src="images\avatar.png" alt="Avatar" class="avatar">
                      </div>
                  
                      <div class="container">
                        <label for="uname"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="uname" required>
                  
                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>
                          
                        <input type="submit" value="LOGIN" name="login">
                        <br>
                        <label>
                          <input type="checkbox" checked="checked" name="remember"> Remember me
                        </label>
                      </div>
                  
                      <div class="container" style="background-color:#f1f1f1">
                        <input type="reset" value="CANCEL" name="cancel">
                        <span class="fpsw"><a href="#">Forgot password?</a></span>
                      </div>
                    </form>
                  </div>
                  <script type="text/javascript" src="javascript\login.js"></script>
 
                  
                </div>
              </div>

      
    
      <div class="footer">
        <p>All right reserved. copyright@2020</p>
      </div>

</body >
</html>