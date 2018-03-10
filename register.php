<?php
    session_start();
   $_SESSION['loggedon'] = 0;

    include("db_config.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
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
      <div class="col-lg-12 text-center">
    <h1 class="section-heading">Register</h1>
      <hr>
      <form action="register.php" method="POST">
        First Name: <input type="text" name="first_name"><br>
        Last Name: <input type="text" name="last_name"><br>
        EMAIL:<input type="text" name="email"><br>
        Designation:<select name="designation" id="designation">
                        <option value="1">Student</option>
                        <option value="2">Faculty</option>
                        <option value="3">Industrial</option>
                        <option value="4">Others</option>
                    </select><br>
        Password:<input type="password" name="password"><br>
        <input type="submit" name="submit">
    </form>
    <?php
        if(isset($_POST['submit'])){
            /*Credentials obtained from user */
            $get_first_name = $_POST['first_name'];
            $get_last_name = $_POST['last_name'];
            $get_email = $_POST['email'];
            $get_designation = $_POST['designation'];
            $get_password = $_POST['password'];

            $sql = "INSERT INTO user(userid,first_name,last_name,email,password,designationid) VALUES(0,\"$get_first_name\",\"$get_last_name\",\"$get_email\",\"$get_password\",\"$get_designation\")";
            
            if($conn->query($sql)){
                echo "Inserted into table";
            }
            else{
                die("Error: ".$conn->error);
            }
            header("location:index.php");
        }
    ?>
     
      </div>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
<?php
    mysqli_close($conn);
?>