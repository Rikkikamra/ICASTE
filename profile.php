<?php
    session_start();
    if($_SESSION['loggedon'] == 0)
    {
      header("location:login.php");
      session_unset();
    }

    include("db_config.php");
?>
<!DOCTYPE html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Profile</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
      <link rel="stylesheet" href="css/bootstrap-theme.min.css">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/main.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script>
        function trial()
            {
                document.getElementById('trial-test').innerHTML="<ul><li><a href='profile.php'>Profile</a></li><li><a href='logout.php'>Logout</a></li></ul>";
            }
      </script>

    
<style type="text/css">

      body{
        margin: 0px;  
        font-family: "Roboto Slab";
          background-color: #76a4ff;
      }
      
      .drop a:hover{background: #617F8A;}

      .link-nav{
        color: white !important;
        letter-spacing: 1px;
      }

      .link-nav:hover{
        padding-top: 10px;
        border-top: 5px solid #1abc9c;
      }

     .navbar{
        
        border: 0px;
        transition: 0.5s;
      }

      .button{
        color:rgb(23, 20, 20);
        background-color: white; 
        border:0px;
        padding: 20px 60px;
        font-size: 20px;
        letter-spacing: 1px;
        transition: 0.3s
      }

      .button:hover{
        background-color: #1abc9c;
        color: white;

      }

      ::-webkit-scrollbar {
          width: 10px;
      }
       
      ::-webkit-scrollbar-track {
          background-color: #ebebeb;
          -webkit-border-radius: 10px;
          border-radius: 10px;
      }

      ::-webkit-scrollbar-thumb {

          background: #6d6d6d; 
      }
      ::-webkit-scrollbar-button {
        background-color: #aaa; 
      }

     
      .dropdown:hover{
        cursor: pointer;
        padding-top: 10px;
        border-top: 5px solid #1abc9c;
      }

      .dropdown {
          float: right;
          position: relative;
          display: inline-block;
          color: white !important;
          letter-spacing: 1px;
          
      }

      .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f9f9f9;
          min-width: 160px;
          overflow: auto;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          right: 0;
          z-index: 1;
      }

      .dropdown-content a {
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
      }

      .dropdown {padding: 15px;}

      .dropdown-content a:hover {background-color: #f1f1f1}

      .show {display:block;}  
    
    .user_profile,.user_info{
        background-color: white;
        padding:10px;
    }
    span{
        font-size: 18px;
        letter-spacing: 1px;
        font-weight: bold;
      }

    </style>
    <script type="text/javascript">
        function get_domain_list(domain_id){
            $('#domain_list').empty();
            $('#domain_list').append("<option>Loading...</option>");
            $.ajax({
                type:"GET",
                url:"getdomainlist.php?rcv_domain_id="+domain_id,
                contentType:"application/json;",
                dataType:"json",
                success:function(data){
                    $('#domain_list').empty();
                    $('#domain_list').append("<option value=\"\">--Select--</option>");
                    $.each(data,function(key,value){
                        $('#domain_list').append('<option value="'+ data[key].domain_id+'">'+ data[key].domain_name+'</option>');
                    });
                },
                complete: function(){
                }
            });
        }
    </script>
  </head>
  <body>
    <!-- <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="min-height:50px;">
      <div class="container-fluid" style="margin-left: 30px;margin-right: 30px;backgroud-color:black;">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>

          </button>
          <a class="navbar-brand" href="index.php">
            <img alt="Brand" src="Image/logo.png" width="auto" height="50px"/>
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav" style="font-size: 16px;float: right;" >
            <li id="callforpaper"></li>
            <li id="submission"><a class="link-nav" href="submission.php" style=" line-height: 50px;">Submission</a></li>
            <li><a class="link-nav" href="#comittee" style=" line-height: 50px;">Commitee</a></li>
            <li><a class="link-nav" href="schedule.php" style=" line-height: 50px;">Schedule</a></li>
            <li><a class="link-nav" href="#venue" style=" line-height: 50px;">Venue</a></li>
            <li><a class="link-nav" href="#about" style=" line-height: 50px;">About Us</a></li>
            <li><a class="link-nav" href="#contact" style=" line-height: 50px;">Contact Us</a></li>
            
             <?php 
              if($_SESSION["loggedon"] ==1)
               {
                   echo '<div  class="dropdown" style=" line-height: 50px;"><a id="img-click" ><img id="click" onclick="myFunction()" src="Image/image.png" width="50px" height="50px"/></a><div id="myDropdown" class="dropdown-content"><a href="profile.php">Profile</a><a href="logout.php">Logout</a></div></div>';
               }
               else
               {
                   echo '<div  class="dropdown" style=" line-height: 50px;"><a id="img-click" ><img id="click" onclick="myFunction()" src="Image/image.png" width="50px" height="50px"/></a><div id="myDropdown" class="dropdown-content"><a href="submission_form.php">Login</a><a href="register.php">Register</a></div></div>';
                  
               }
            ?>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav> -->

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
                    <?php 
                if( $_SESSION["loggedon"] == 1)
                {
                    echo '<li style="font-weight:bolder; letter-spacing:1px;" class="drop" id="trial-test">
                    <a class="page-scroll" onmouseover="trial()">Hey '.$_SESSION['first_name'].'</a></li>';
                }
                else
                {
                    echo '<li  style="font-weight:bolder; letter-spacing:1px;"><a class="page-scroll" href="login.php">Login/Sign Up</a></li>';
                }
                ?>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container" style="margin-top:100px;">
        <div class="row">
        <div class="col-lg-4 user_profile">
            
                <div class="text-center">
                  <!-- <img src="Image/image.png" class="img-fluid img-thumbnail"> -->
                  Profile
                </div>
            
            <div class="user_info">
            <table class="table table-hover">
              <tr>
                  <th scope="row"><span>UserID:</span></th>
                    <td><?php echo $_SESSION["userid"]; ?></td>
                </tr>
                <tr>
                  <th scope="row"><span>Name:</span></th>
                  <td><?php echo $_SESSION["first_name"]." ".$_SESSION["last_name"]; ?></td>
                </tr>
                <tr>
                  <th scope="row"><span>Email:</span></th>
                  <td colspan="2"><?php echo $_SESSION["email"]; ?></td>
                </tr>
                <tr>
                  <th scope="row"><span>Designation:</span></th>
                  <td colspan="2"><?php echo $_SESSION["designation"]; ?></td>
                </tr>
            </table>
            </div>
            </div>
        <div class="col-lg-8 col-sm-12 ">
           <div class="" style="margin-left:10px;background-color:white;padding:10px;">
        
        <h2 style="letter-spacing: 1px"><b><center>Your Submission</center></b></h2><br/>
        <?php

    $retrive_userid = $_SESSION['userid'];
    $sql = "SELECT * FROM submission where userid=\"".$retrive_userid."\"";

    $result = $conn->query($sql);
    if($result->num_rows >0){
      $row = $result->fetch_assoc();
        // while($row = $result->fetch_assoc())
        // { 
            $submissionid = $row["submissionid"];
            echo "<span>Title :</span>".$row['title'],"<br>";
            $dept_id = $row['dept_id'];
            $domain_id = $row['domain_id'];
           
            //Fetching Department Name from Department
            $sql = "SELECT dept_name FROM department where dept_id=\"".$dept_id."\"";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            echo "<span>Department :</span>".$row['dept_name']."<br>";

            //Fetching Domian Name from Domain
            $sql = "SELECT domain_name FROM domain where domain_id=\"".$domain_id."\"";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            echo "<span>Domain :</span>".$row['domain_name']."<br>";

            //fetching Actual file from abstract folder
            $sql = "SELECT orignal_file_name,file_path from submission where submissionid=\"".$submissionid."\"";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $orignal_file_name =  $row['orignal_file_name'];
            $file_path = $row['file_path'];
            echo "<span>File Name :</span>".$orignal_file_name."<br>";
            echo "<span>Abstract:</span><a href=\"./abstract/".$file_path."\" target=\"_blank\" download>".$orignal_file_name."</a>";
    }
    else{
        echo "No papers uploaded";
    }

    ?>
        <span style="font-size: 18px;text-align: justify;"></span>
      </div> </div>
        </div>
        
      
        <br>
    <div class="row">
        <?php
        if($_SESSION["abstractupload"]==0)
        {
        ?>
        <div class="col-lg-4 col-sm-12 user_profile">
            <span>Add abstract Paper</span>
               <hr>
            <form action="upload_abstract.php" method="post" enctype="multipart/form-data">
            Title:
            <input type="text" name="title" class="form-control custom_input" placeholder="Title" required/>
            <br>
            Department:
            <select name="department_list" onchange="get_domain_list(this.value)" id="designation" class="form-control" style="margin: 20px auto;" required/>
                     <option value="">--Select Department--</option>
                     <option value="1">Humanities & Applied Sciences</option>
                     <option value="2">Computer Engineering</option>
                     <option value="3">Information Technology Engineering</option>
                     <option value="4">Civil Engineering</option>
                     <option value="5">Electronics & Telecommunication Engineering</option>
                     <option value="6">Mechanical Engineering</option>
            </select>
            Domian:
            <select name="domain_list" id="domain_list" class="form-control">
               <option value="">--Select Department--</option>
            </select><br>
            Abstract<input type="file" name="file" class="btn btn-primary" id="file"><br>
        <input type="submit" class="btn btn-primary" name="submit">
            </form>
        </div>
       <?php 
      }
      else
      {
        echo "Abstract is already uploaded";
      }
      ?>
      </div>
    
      </div>
      <?php
     if(isset($_GET['Message'])){
         $upload_status = urldecode($_GET['Message']);
        echo "<script>alert(\"".$upload_status."\");</script>";
    }
        
    ?>
    

  </body>
</html>
