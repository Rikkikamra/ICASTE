<?php
    session_start();

    include("db_config.php");
?>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap-grid.min.css">
  <!--  Make sure your always using the latest version of Bootstrap here-->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">


  <style>
    body {
      margin-top: 50px;
      padding-bottom: 40px;
      background-color: #eee;
    }
    .signin-form {
      max-width: 330px;
      padding: 15px;
      margin: 0 auto;
    }
    .signin-form .form-control {
      position: relative;
      font-size: 16px;
      height: auto;
      padding: 10px;
      -webkit-box-sizing: border-box;
         -moz-box-sizing: border-box;
              box-sizing: border-box;
    }
    .signin-form .form-control:focus {
      z-index: 2;
    }
    .signin-form input[type="text"] {
      margin-bottom: -1px;
      border-bottom-left-radius: 0;
      border-bottom-right-radius: 0;
    }
    .signin-form input[type="password"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
    </style>
</head>

<body class="sigin-body">
 <!--Navbar--><!-- Fixed the navbar by class navbar-fixed-top-->
 <!-- Navigation -->
 <nav class="navbar-default navbar-fixed-top navbar" role="navigation" style="min-height: 70px;">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-ex1-collapse" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" style="padding: 0px;" href="#page-top"><img src="images/logo.png" height="70px" width="auto" class="img-logo"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse" style="text-align: center;">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li style="font-weight:bolder; letter-spacing:1px;">
                        <a href="#maininfo" class="page-scroll" >ABOUT</a>
                    </li>
                    <li style="font-weight:bolder; letter-spacing:1px;">
                        <a class="page-scroll" href="#schedule">SCHEDULE</a>
                    </li>
                    <li style="font-weight:bolder; letter-spacing:1px;">
                        <a class="page-scroll" href="#submissionguide">SUBMISSION GUIDELINES</a>
                    </li>
                    <li style="font-weight:bolder; letter-spacing:1px;">
                        <a class="page-scroll" href="#callforpapers">CALL FOR PAPERS</a>
                    </li>
                    <li style="font-weight:bolder; letter-spacing:1px;">
                        <a class="page-scroll" href="#teaminfo">COMMITTEE</a>
                    </li>
                    <li style="font-weight:bolder; letter-spacing:1px;">
                        <a class="page-scroll" href="#venue">VENUE</a>
                    </li>                
                    <li style="font-weight:bolder; letter-spacing:1px;">
                        <a class="page-scroll" href="#contact">CONTACT</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


  <div class="container signin-container">
    <div class="row" ">
      <div class="col-lg-4"></div>
      <div class="col-lg-4" style="margin: 40px auto;display: block">
        <a href="index.php"> <img src="Image/logo.png" class="center-block" /></a>
      </div>
      <div class="col-lg-4"></div>
    </div>
    <div class="row" >
      <div class="col-lg-4"></div>
      <div class="col-lg-4" style="background: #fff;padding: 40px 40px 30px 40px;border-radius: 5px;border: 1px #dddddd solid">
        <div class="card signin-card">
          <div class="card-block">
            
              
            <form class="sigin-form" id="login" method="POST" action="login.php">
              <div class="form-group">
                <input type="text" name="user_email" class="form-control" id="emailInput" placeholder="Email address" required autofocus>
              </div>
              <div class="form-group">
                <input type="password" name="user_pass" class="form-control" id="passwordInput" placeholder="Password" required>
              </div>
              <button type="submit" name="submit" class="btn btn-primary btn-lg outline id_submit button_bg signin-button btn-block">Sign In</button>
            </form>
            <?php 
            ob_start();
            if(isset($_POST['submit'])){
                /*Credentials obtained from user */
                $get_email = mysqli_real_escape_string($conn,$_POST['user_email']);
                $get_password = mysqli_real_escape_string($conn,$_POST['user_pass']);

                // $get_email =$_POST['user_email'];
                // $get_password =$_POST['user_pass'];
              

                $sql = "SELECT * from user where email=\"$get_email\"";
                $result = $conn->query($sql);
                if($result->num_rows >0){
                  $row = $result->fetch_assoc(); 
                  $db_ret_password = $row['password'];/*password returned by database*/
                  if(strcasecmp($get_password,$db_ret_password) ==0){
                      echo "login Successful";
                      $_SESSION['loggedon']=1;
                      $_SESSION['userid']=$row['userid'];
                      $_SESSION['first_name'] = $row['first_name'];
                      $_SESSION['last_name'] = $row['last_name'];
                      $_SESSION['email']=$row['email'];

                      /*Get designation name from designation table */
                      $desigid = $row['designationid'];
                      $sql= "SELECT name from designation where designationid=\"$desigid\"";
                      $result = $conn->query($sql);
                      $designation_name = $result->fetch_assoc();
                      $_SESSION["designation"]=$designation_name["name"];
                      echo '<script>window.location="index.php"</script>';
                    
                  }
                  else{
                      echo "username or password Invalid";
                  }
                }
                else{
                    echo "Account not found";
                }  
            }
            ob_end_flush();
            ?>
            </div>
        </div>
      </div>
      <div class="col-lg-4"></div>
    </div>

    <div class="row">
      <div class="col-lg-4"></div>
      <div class="col-lg-4" style="background: #fff;padding: 20px;border-radius: 5px;border: 1px #dddddd solid;margin-top: 40px;text-align: center;font-size: 18px;">
        Not register yet? <a href="register.php">Register here.</a>
      </div>
      <div class="col-lg-4"></div>

    </div>

  </div>



  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <!--  Always Download latest version of Boostrap and add here-->
  <script src="js/bootstrap.min.js"></script>
</body>

</html>