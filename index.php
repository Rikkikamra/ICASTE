<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ICASTE</title>
<link rel="icon" type="image/gif/png" href="images/icasteicon.ico">

<link href="css/scrolling-nav.css" rel="stylesheet">
<link href="css/rotating-card.css" rel="stylesheet">
<link rel="stylesheet" href="css/animation.css">
<!-- Bootstrap -->
<!-- <link href="css/bootstrap.css" rel="stylesheet"> -->
<!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
<link href="css/bootstrap-3.3.6.css" rel="stylesheet" type="text/css">
<link href="css/agency.css" rel="stylesheet"> 
<link href="css/loginform.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<!-- <script src="js/bootstrap.js"></script> -->
<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
<script src="js/bootstrap-3.3.6.js"></script>



    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
    <script src='js/css3-animate-it.js'></script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   <!-- <style>body {padding-top:50px;} </style>-->
   
   <script type="text/javascript">
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
function trial()
            {
                document.getElementById('trial-test').innerHTML="<ul><li><a href='profile.php'>Profile</a></li><li><a href='logout.php'>Logout</a></li></ul>";
            }
  </script>
  <script type="text/javascript">
// When the DOM is ready, run this function
$(document).ready(function() {
  //Set the carousel options
  $('#quote-carousel').carousel({
    pause: true,
    interval: 4000,
  });
});

    function scrollToAnchor(aid){
    var aTag = $("a[name='"+ aid +"']");
    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
}

</script>

<script>
  $(document).ready(function(){
        $(window).on("scroll",function(){
          var rk = $(window).scrollTop();
          var ag = $(window).scrollTop();
          var ap = $(window).scrollTop();
          var hv = $(window).scrollTop();
          var am = $(window).scrollTop();
          var sb = $(window).scrollTop();
          var rs = $(window).scrollTop();
         if(rk > 1800){
          document.getElementById('animationrk').style.display="flex";
        document.getElementById('animationrk').classList.add("animated");
        document.getElementById('animationrk').classList.add("fadeInLeft");
        document.getElementById('animationrk').classList.add("go");
        }
        if(ag > 2100){
          document.getElementById('animationag').style.display="flex";
        document.getElementById('animationag').classList.add("animated");
        document.getElementById('animationag').classList.add("fadeInRight");
        document.getElementById('animationag').classList.add("go");
        }
        if(ap > 2350){
          document.getElementById('animationap').style.display="flex";
        document.getElementById('animationap').classList.add("animated");
        document.getElementById('animationap').classList.add("fadeInLeft");
        document.getElementById('animationap').classList.add("go");
        }
        if(hv > 2600){
          document.getElementById('animationhv').style.display="flex";
        document.getElementById('animationhv').classList.add("animated");
        document.getElementById('animationhv').classList.add("fadeInRight");
        document.getElementById('animationhv').classList.add("go");
        }
        if(am > 2900){
          document.getElementById('animationam').style.display="flex";
        document.getElementById('animationam').classList.add("animated");
        document.getElementById('animationam').classList.add("fadeInLeft");
        document.getElementById('animationam').classList.add("go");
        }
        if(sb > 3150){
          document.getElementById('animationsb').style.display="flex";
        document.getElementById('animationsb').classList.add("animated");
        document.getElementById('animationsb').classList.add("fadeInRight");
        document.getElementById('animationsb').classList.add("go");
        }
        if(rs > 3500){
          document.getElementById('animationrs').style.display="flex";
        document.getElementById('animationrs').classList.add("animated");
        document.getElementById('animationrs').classList.add("fadeInLeft");
        document.getElementById('animationrs').classList.add("go");
        }
        });
      });
  </script>

<link rel="stylesheet" href="css/pmad.css"/>

<style type="text/css">
  /*Hollow Button Code*/
    .btn.outline {
        background: none;
        padding: 12px 22px;
    }


    .drop a:hover{background: #617F8A;}
    
    .btn-primary.outline {
        border: 2px solid #0099cc;
        color: #0099cc;
    }

    .btn-primary.outline:hover, .btn-primary.outline:focus, .btn-primary.outline:active, .btn-primary.outline.active, .open > .dropdown-toggle.btn-primary {
        color: #33a6cc;
        border-color: #33a6cc;
    }
    .btn-primary.outline:active, .btn-primary.outline.active {
        border-color: #007299;
        color: #007299;
        box-shadow: none;
    }
    /*Hollow input type code*/
    .input.outline {
        background: none;
        /*padding: 16px 22px;*/
    }


    .input-primary.outline {
        border: 2px solid #0099cc;
        color: #0099cc;
    }

    .input-primary.outline:hover, .input-primary.outline:focus, .input-primary.outline:active, .input-primary.outline.active, .open > .dropdown-toggle.input-primary {
        color: #33a6cc;
        border-color: #33a6cc;
    }
    .input-primary.outline:active, .input-primary.outline.active {
        border-color: #007299;
        color: #007299;
        box-shadow: none;
    }

    .event_head{
              height:255px;
              letter-spacing:5px;
              background-color: black;
              color:white;
              width: 90%;
              font-size:35px;
              text-align:center;
              padding:100px 0px;
              border-top-left-radius: 10px;
              border-top-right-radius: 10px;
              margin: 0px 5%;
            }

    .more_info{
              font-size:20px;
              letter-spacing:2px;
              width:90%;
              border-top-width: 0px;
              margin: 0px 5%;
              border-top-left-radius: 0px;
              border-top-right-radius: 0px;
            }

    .custom-btn{
        color: white !important;
        border-color: white !important;
        width: 90% !important;
    }

    .domain{
        list-style-type: none;
        font-size: 16px;
        letter-spacing: 1px;
        line-height: 25px;
        font-weight: bold;
        width: 100%;
        text-align: center;
    }

    .domain a:hover{
        background-color: #149896 !important;
        color: white;
        border-radius: 5px;
    }

    .domain-tab{
        background-color: #149896 !important;
        color: white !important;
        border-radius: 5px;

    }

    .domain-list-tab{
        background-color: #3498db !important;
        color: white;
        border-radius: 5px;
        text-align: center;
        
    }

    .domain a{
        color: black;
    }

    .domain-list{
        width: 100%;
        padding-top: 10px;
        padding-bottom: 10px;
        list-style-type: none;
        font-size: 16px;
        letter-spacing: 0.5px;
        line-height: 20px;

    }

    .domain-list-tab::-webkit-scrollbar {
                width: 5px;

            }
           
          .domain-list-tab::-webkit-scrollbar-track {
              background-color: transparent;
              -webkit-border-radius: 10px;
              border-radius: 10px;
          }

          .domain-list-tab::-webkit-scrollbar-thumb {

              background: #34495e; 
          }

    .hr {
        margin: 0px auto;
        width: 80%;
    }

     .overlay:before{
          position: absolute;
          content:" ";

          width:100%;
          height:100%;
          z-index:0;
          background-color: rgba(0,0,0,0.5);
        }

        .c-overlay {
          position: relative;
          color:white;
        }

        .c-overlay * {
            position: relative;
        }

         .com-int-name{
            background-color: #8e44ad;
            padding-top: 20px;
            padding-bottom: 20px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .com-int-org{
            background-color: #9b59b6;
             padding-top: 20px;
            padding-bottom: 20px;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
        }

        .com-nal-name{
            background-color: #27ae60;
            padding-top: 20px;
            padding-bottom: 20px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .com-nal-org{
            background-color: #2ecc71;
             padding-top: 20px;
            padding-bottom: 20px;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
        }

         .com-tech-name{
            background-color: #2980b9;
            padding-top: 20px;
            padding-bottom: 20px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .com-tech-org{
            background-color: #3498db;
             padding-top: 20px;
            padding-bottom: 20px;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;

        }

        .com-org-name{
            background-color: #c0392b;
            padding-top: 20px;
            padding-bottom: 20px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .com-org-org{
            background-color: #e74c3c;
             padding-top: 20px;
            padding-bottom: 20px;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;

        }

        .com-padding{
            margin-bottom: 50px;
        }

        .com-blurb{
            margin: auto;
            border-radius: 100%;
            width: 180px;
            height: 180px;
            background-color: white
        }

        .com-blurb:hover{
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            transition: 0.3s;
        }

        .call-padding{
            padding: 0px;
        }

        .navbar-right{

            margin-top: 10px;
        }

        .comittee-head{
            border: 5px solid #dddddd;
            border-radius: 100%;
            overflow: hidden;
            width: auto;
            height: 200px
        }

        .subodd{
            width: 100%;
            padding: 20px 40px;
            list-style-type: none;
            font-size: 20px;
            letter-spacing: 1.5px;
            line-height: 20px;
            background-color: #2c3e50;
            color: white;
            line-height: 30px;
            text-align: justify;
        }

        .subeven{
            width: 100%;
            padding: 20px 40px;
            list-style-type: none;
            font-size: 20px;
            letter-spacing: 1.5px;
            line-height: 20px;
            background-color: #34495e;
            color: white;
            line-height: 30px;
            text-align: justify;
        }

        .cover-img {
            margin: 250px auto 30px auto;
        }

        .cover-text{
            letter-spacing: 2px;
            font-size: 23px;
            color: white;
            font-weight: bold;
        }

        .cus-flex {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .cover {
            background: url(images/coer.jpg) no-repeat center center fixed;
            background-size: cover;
            height: 800px;
        }

        .about {
            padding-right: 30px;
            padding-left: 30px;
        }

        .aboutContainer {
            width:85%;margin-left:auto; margin-right:auto;
        }

        .about-content {
            font-size:16px !important;
            line-height:35px !important;
            text-align: justify !important;
        }

        .com-head {
            background-color: #2c3e50;font-size: 30px;
            color: white;
            letter-spacing: 2px;
            text-align: center;
            margin: 20px auto;
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .com {
            text-align: center;
            font-size: 24px;
            letter-spacing: 1px;
            color: white;
        }


        @media only screen and (max-width: 480px){
        .btn-lg{
            font-size: 10px;
        }
        .call-row {
            width: 100% !important;
            margin: 0px !important;
        }
        .custom-btn-width{
            width: 100% !important;
        }

        .custom-size{
            margin-bottom: 50px !important;

        }

        .row{
            width: 90%;
            margin-right: auto;
            margin-left: auto;
        }

        .img-logo{
            height: 50px;
            width: auto;

        }

        .cover-img {
            margin: 130px auto 30px auto;
            
        }

        .cover-text {
            letter-spacing: 1px;
            font-size: 18px;
            font-weight: bold;
            color: white
        }

        .cover {
            height: 650px;
        }

        .about {
            padding-right: 0px;
            padding-left: 0px;
        }

        .aboutContainer {
            width:90%;margin-left:auto; margin-right:auto;
        }

        .about-content {
            line-height: 30px !important;
        }

        .section-heading {
            font-size: 26px !important;
            line-height: 30px !important;
        }

        .subodd {
            padding: 20px;
            font-size: 16px;
            line-height: 25px;
        }

        .subeven {
            padding: 20px;
            font-size: 16px;
            line-height: 25px;
        }


        .call-head {
            font-size: 18px !important;
        }

        .com-head {
            font-size: 18px;
            letter-spacing: 1px;
        }

        .com {
            font-size: 16px;
        }

        .com-padding {
            padding: 0px;
            margin-bottom: 30px;
        }

        .com-info {
            padding: 10px 5px;

        }

        .guide {
            padding: 0px;
        }

        

    }
          
             
</style>

</head>

<body  id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

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


  
  
 <!--Background Image--> 
<!-- <img src="images/wallnew.jpg" class="img-responsive" alt="Placeholder image"> -->

<!--<div style="background: linear-gradient(to right, #62559b,#149896);">-->
      <!-- <div style="background-image: url('Image/1.jpg');height: 600px;"> -->

        <div class="overlay c-overlay cover" style="background: linear-gradient(to right, #62559b,#149896);">
        
          <div class="container" style="padding-top: 0px;width: fit-content;">
            <div class="col-lg-12 cover-img">
                <div class="cus-flex"><img src="images/apsitlogo.png" height="80px" width="auto"></div>
            </div>
            <div class="row" style="text-align: center;"> <span class="cover-text">A. P. Shah Institute of Technology</span><br/><br/>
                <span class="cover-text">International Conference on Advances in Science,<br/> Technology and Engineering (ICASTe-2018)</span><br/>
            <!-- <div style="width: inherit;margin: auto;display: flex;align-items: center;justify-content: center;">
              <div  class="col-lg-5 col-xs-5" style="display: inline-block;"> <span style="letter-spacing: 1px;font-size: 18px;color: white;">SUBMIT A PROPOSAL</span></div>
              <div  class="col-lg-2 col-xs-2" style="display: inline-block;"><span style="color:white;font-size: 18px;">|</span></div>
              <div  class="col-lg-5 col-xs-5" style="display: inline-block;"><span style="letter-spacing: 1px;font-size: 18px;color: white;">SOMETHING</span></div></div>
            </div> -->

            <div align="center" style="margin-top: 70px">
                <div class="col-lg-6 col-sm-6 col-xs-12" style="margin-bottom: 20px;"> 
                    <a href="IEEE_Conf_Paper_format.doc" class="custom-btn-width" style="width: 50%;" download>
                        <button type="submit" class="btn btn-primary btn-lg outline button_bg custom-btn"  style="width: 100%">Paper Template</button>
                    </a>
                </div>
                 <div class="col-lg-6 col-sm-6 col-xs-12"> 
                    <form action="testuser.php" class="custom-btn-width" style="width: 100%">
                        <button type="submit" class="btn btn-primary btn-lg outline button_bg custom-btn"  style="width: 100%">Submit your Abstract</button>
                    </form>
                </div>
            </div>
          </div>
      </div>
      </div>



<!--Main Information-->
        <div class="jumbotron maininfo" id="maininfo" style="background-color:#EBEBEB;color:#151515;">
          <span style="font-size: 30px;font-weight: bold"> <center> ICASTe-2018 </center></span><br><br><br>
            <div class="TextContainer aboutContainer">
                <div class="row">
                    
                    <div class="col-md-6 about">
                        <p  class="text-content about-content"><span style="font-weight:bold;">About Conference</span><br/>International Conference on Advances in Science, Technology and Engineering ( ICASTe-2018 ) to be organised by the allied departments of A. P. Shah Institute of Technology, Thane in the college campus on 20th and 21st April 2018.
                        The broader objective of ICASTe-2018 is to provide a forum for students, faculty, industry and researchers to share their ideas, stimulate creativity, facilitate interdisciplinary development, motivate and inspire emerging talents.
                        The purpose of the conference is to bring together researcher from around the world who are interested in exploring new trends in the field of technology. 
                        </p><br>  
                    </div>
                    <div class="col-md-6 about">
                        <p class="text-content about-content"><span style="font-weight:bold;">About College</span><br/>A. P. Shah Institute of Technology (APSIT) has started functioning with commitment of imparting state of art technical education so as to inculcate conceptual know-how, analyzing skills, decision making abilities and leadership qualities in the students. APSIT stands committed to the intellectual and moral growth of every student.
                        APSIT has experienced and proficient team which aspires to unlock the hidden potential in subconscious minds of students and to create competent Engineers with vision &amp; social commitment.
                        </p>
                        <p  class="text-content about-content"><span style="font-weight:bold;">Vision</span><br/>APSIT aspires to evolve as a renowned center for technological training and research.</p>
                        <p class="text-content about-content"><span style="font-weight:bold;">Mission</span><br/>APSIT endeavors to impart in-depth and authentic technical knowhow and to inculcate professional and human values in the budding minds of the aspirants.     </p>
                    </div>
                    
                </div>
            </div>
        </div>
       
  <!--Main Information Ends--> 
             

<!--General Information-->
<!-- background: url(images/cover.jpg) no-repeat center center fixed;background-size: cover;height: 800px; -->
<div class="jumbotron maininfo" style="background-color:#149896;background: url('images/IcasteDoodle2.png')no-repeat center center fixed;background-size: cover;color:white;">
    <h2 style="color: white"> <center> General Information </center></h2><br><br><br>
    <div class="TextContainer aboutContainer">
        <div class="row">
            <div class="col-md-6 about">
                <p class="text-content about-content" style="color: white"><span style="font-weight:bold;">Objectives</span><br/>Strengthening collaboration among universities, research centers and industry exchanging and sharing professional skills among students, academicians, researchers and industry personnel. Addressing the current challenges faced by the industry. Providing an international forum for information dissemination and discussions on research and practices. Forum exchange with the various researchers.</p>
            </div>
            <div class="col-md-6 about">
                <p class="text-content about-content" style="color: white"><span style="font-weight:bold;">Scope &amp; benefits</span><br/>Skill &amp; entrepreneurship development facilitating business incubation services conducting frontier area research developing world class managerial talent promoting co-operation and networking provides the premier interdisciplinary and multidisciplinary forum for researchers, practitioners and educators to present and discuss the most recent innovations, trends and concerns, practical challenges encountered and the solutions adopted</p>
            </div>
        </div>
      <!--<div class="row">
      <div class="col-lg-12">
      <img src="images/IcasteDoodleTranspa.png" class="img-fluid" style="width:100%;">
      </div>
      </div>-->
    </div>
</div>
             <!--General Information Ends-->
                         
     <!-- About Section -->
    <section id="schedule">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Schedule</h2>
                   <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li style="display:flex;">
                            <div class="timeline-image">
                                <img class=" img-circle img-responsive ratio" alt="" style="background-image: url(images/upload.png);">
                            </div>
                            <div id="animationrk" class="timeline-panel" style="display: none;align-items: center;justify-content: center;padding-bottom: 0px;">
                                <div class="timeline-heading">
                                    <h4>Oct 4<sup>th</sup>,2017</h4>
                                    <h4 class="subheading">Start uploading of Abstract and Full Paper</h4>
                                </div>
                                
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive ratio" style="background-image: url(images/lastdate2.png);" alt="">
                            </div>
                            <div id="animationag" class="timeline-panel" style="display: none;padding-bottom: 0px;">
                                    <div class="timeline-heading">
                                        <h4>Nov 20<sup>th</sup>,2017</h4>
                                        <h4 class="subheading">Last date of Abstract Submission</h4>
                                    </div>
                            </div>
                        </li>
                        <li style="display:flex;">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive ratio" style="background-image: url(images/lastdate3.png);" alt="">
                            </div>
                            <div id="animationap" class="timeline-panel" style="display: none;align-items: center;justify-content: center;padding-bottom: 0px;">
                                <div class="timeline-heading">
                                    <h4>Dec 30<sup>th</sup>,2017</h4>
                                    <h4 class="subheading">Last date of Full length Paper Submission</h4>
                                </div>
                                
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive ratio" style="background-image: url(images/noti.png);" alt="">
                            </div>
                            <div id="animationhv" class="timeline-panel" style="display: none;align-items: center;justify-content: center;padding-bottom: 0px;">
                                <div class="timeline-heading">
                                    <h4>Feb 10<sup>th</sup>,2018</h4>
                                    <h4 class="subheading">Notification of Acceptance</h4>
                                </div>
                                
                            </div>
                        </li>
                        <li style="display:flex;">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive ratio" style="background-image: url(images/registeration.png);" alt="">
                            </div>
                            <div id="animationam" class="timeline-panel" style="display: none;align-items: center;justify-content: center;padding-bottom: 0px;">
                                <div class="timeline-heading">
                                    <h4>Feb 20<sup>th</sup>,2018</h4>
                                    <h4 class="subheading">Early Bird Registration</h4>
                                </div>
                                
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive ratio" style="background-image: url(images/registeration.png);" alt="">
                            </div>
                            <div id="animationsb" class="timeline-panel" style="display: none;align-items: center;justify-content: center;padding-bottom: 0px;">
                                <div class="timeline-heading">
                                    <h4>Mar 01<sup>st</sup>,2018</h4>
                                    <h4 class="subheading">Last date of Registration</h4>
                                </div>
                                
                            </div>
                        </li>
                        <li style="display:flex;">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive ratio" style="background-image: url(images/cameraready.png);" alt="">
                            </div>
                            <div id="animationrs" class="timeline-panel" style="display: none;align-items: center;justify-content: center;padding-bottom: 0px;">
                                <div class="timeline-heading">
                                    <h4>Mar 05<sup>th</sup>,2018</h4>
                                    <h4 class="subheading">Camera ready copy</h4>
                                </div>
                                
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image" style="background-color:#0287c2;">
                                <h4 style="display: block; text-align: center;">Be Part<br>Of Our<br>Story!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<!-- About us ends-->


<!--SUBMISSION GUIDELINES STARTS-->

    <section id="submissionguide">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">GUIDELINES FOR SUBMISSION OF PAPER</h2><br><br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 guide">
                    <!--<li class="subodd">Please submit the full paper, in the prescribed template, by uploading the paper on the easychair​ ​website. The easy chair link is available below.</li>-->
                    <li class="subeven">Please DO NOT send the full paper by email. The papers sent by email will not be considered.</li>
                    <li class="subodd">The anti-plagiarism policy is applicable to all submissions. Only the author(s) is responsible for any plagiarized submission. The similarity index for a submitted paper should be below 10%. It is responsibility of the organizers to ensure plagiarism free research and therefore we will submit plagiarism checked papers to review</li>
                    <li class="subeven">The authors are requested to strictly follow and adhere to the prescribed template and page restrictions.</li>
                    <li class="subodd">Papers submitted to ICASTE 2018 should be written in the English language and can be a minimum of FOUR pages long and a maximum of SIX pages long (papers that are less than 4 pages long or more than 6 pages long will not be considered for review). This limit is inclusive of all text, figures, tables, acknowledgements, references, and appendices.</li>
                    <li class="subeven">While uploading the paper, the authors should provide the title of the paper, an abstract of no more than 250 words, and keywords in the respective text boxes in the paper submission page.</li>
                    <li class="subodd">Full paper needs to be submitted for presentation at the conference as an oral or poster presentation. Oral/ poster presentation will not be allowed without submission of full paper.</li>
                    <li class="subeven">Each paper will be peer-reviewed by experts in the field for originality, contribution and soundness.</li>
                    <li class="subodd">The authors may choose to publish the paper for publication in journals, the decision whether to publish the full paper in journals after peer review is left to the discretion of the authors.</li>
                    <li class="subeven">Multiple submission of the same paper should be avoided. Papers must not be submitted to more than one conference or journal at the same time.</li>
                    <li class="subodd">We are currently in contact with different journals for publication of papers presented in the conference. The list of the same will be updated in this website.</li>
                </div>
            </div>
            
        </div>
    </section>

<!--SUBMISSION GUIDELINES ENDS-->

<!--Call for paper STARTS-->

<section id="callforpapers"  class="bg-light-gray">
    
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">CALL FOR PAPERS</h2><br><br>   
            </div>
        </div>        
    </div>



    <div class="container">
        <div class="row">
           <div class="col-md-12 col-xs-12">
                <div class="text-center" style="margin-top:20px;">
                    <br><hr>
                </div>     
            </div>
            <div class="row call-row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                     <div class="card-container">
                        <div class="card">
                            <div class="front" style="display: flex; align-items: center;justify-content: center;">
                                <div class="text-center">
                                    <img src="images/civil.png" style="width:150px;margin-bottom: 50px;">
                                    <h3 class="call-head">Civil Engineering</h3>
                                </div>
                            </div> <!-- end front panel -->
                            <div class="back">
                                <li class="domain-list navbar-fixed-top" style="background-color: #2980b9;text-align: center;color: white"><h4>Civil <br>Engineering</h4></li>
                                <ul id="civil" class="domain-list-tab" style="background-color: white;padding: 10px;overflow-y:scroll;height:340px;margin-top: 50px;margin-bottom: 0px;">
                              
                                  <li class="domain-list">Structures and materials</li><hr>
                                  <li class="domain-list">Earthquake Engineering</li><hr>
                                  <li class="domain-list">Geotechnical Engineering</li><hr>
                                  <li class="domain-list">Transportation Engineering</li><hr>
                                  <li class="domain-list">Concrete Technology</li><hr>
                                  <li class="domain-list">Water and Environmental Engineering</li><hr>
                                  <li class="domain-list">Construction Management</li><hr>
                                  <li class="domain-list">Sustainability and Green Structures</li><hr>
                                  <li class="domain-list">Remote Sensing and GIS</li>
                                </ul>
                            </div> <!-- end back panel -->
                        </div> <!-- end card -->
                    </div> <!-- end card-container -->
                </div> <!-- end col sm 3 -->
            <!--         <div class="col-sm-1"></div> -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="card-container">
                        <div class="card">
                            <div class="front" style="display: flex; align-items: center;justify-content: center;">
                                <div class="text-center">
                                    <img src="images/Electronics.png" style="width:150px;margin-bottom: 50px;">
                                    <h3 class="call-head">Electronics &amp; Telecommunication Engineering</h3> 
                                </div>
                            </div> <!-- end front panel -->
                            <div class="back">
                                <li class="domain-list navbar-fixed-top" style="background-color: #2980b9;text-align: center;color: white"><h4>Electronics &amp; <br> Telecommunication Engineering</h4> </li>
                                <ul id="electronics" class="domain-list-tab" style="background-color: white;padding: 10px;overflow-y:scroll;height:340px;margin-top: 50px;margin-bottom: 0px;">
                              
                                  <li class="domain-list">Antenna and Wave Propagation </li><hr>
                                  <li class="domain-list">Communication Electronics and Microwave </li><hr>
                                  <li class="domain-list">Communication Network and Systems </li><hr>
                                  <li class="domain-list">Computer Architecture</li><hr>
                                  <li class="domain-list">Computer Network</li><hr>
                                  <li class="domain-list">Computer Security</li><hr>
                                  <li class="domain-list">Computer Security</li><hr>
                                  <li class="domain-list">Dependable Computing</li><hr>
                                  <li class="domain-list">Design and Implementation of Application Specific Integrated Circuits (ASIC)</li><hr>
                                  <li class="domain-list">Digital Signal Processing</li><hr>
                                  <li class="domain-list">Distributed Platform</li><hr>

                                  <li class="domain-list">Electric Power Generation</li><hr>
                                  <li class="domain-list">Electric Traction</li><hr>
                                  <li class="domain-list">Electrical Engineering Materials</li><hr>
                                  <li class="domain-list">Electrical Measurements</li><hr>
                                  <li class="domain-list">Electromagnetic Compatibility</li><hr>
                                  <li class="domain-list">Electronic Instrumentation Using CAD Tools</li><hr>
                                  <li class="domain-list">Electronic Materials</li><hr>
                                  <li class="domain-list">Embedded System</li><hr>


                                  <li class="domain-list">High Performance Computing</li><hr>
                                  <li class="domain-list">High Voltage Insulation Technologies</li><hr>
                                  <li class="domain-list">Human—Computer Interaction</li><hr>
                                  <li class="domain-list">Human-Machine Interface</li><hr>
                                  <li class="domain-list">Information Theory and Coding</li><hr>
                                  <li class="domain-list">Intelligent Systems</li><hr>
                                  <li class="domain-list">Microelectronic System</li><hr>
                                  <li class="domain-list">Modulation and Signal Processing for Telecommunication</li><hr>
                                  <li class="domain-list">Networking Technology</li><hr>
                                  <li class="domain-list">Optical Communication Technology</li><hr>
                                  <li class="domain-list">Parallel and Distributed Computer</li><hr>
                                  <li class="domain-list">Performance Modeling</li><hr>
                                  <li class="domain-list">Pervasive Computing</li><hr>
                                  <li class="domain-list">Power Economic</li><hr>
                                  <li class="domain-list">Power Electronics</li><hr>
                                  <li class="domain-list">Power Quality</li><hr>
                                  <li class="domain-list">Power System Analysis</li><hr>
                                  <li class="domain-list">Radar Imaging</li><hr>
                                  <li class="domain-list">Radio Communication</li><hr>
                                  <li class="domain-list">Renewable Energy</li><hr>
                                  <li class="domain-list">SCADA</li><hr>
                                  <li class="domain-list">Security Network</li><hr>
                                  <li class="domain-list">System-on-a-Chip (SoC)</li><hr>
                                  <li class="domain-list">Telecommunication Engineering</li><hr>
                                  <li class="domain-list">Telematics Services</li><hr>
                                  <li class="domain-list">Transmission and Distribution</li><hr>
                                  <li class="domain-list">Virtual/Augmented Reality</li><hr>
                                  <li class="domain-list">VLSI Design-Network Traffic Modeling</li><hr>
                                  <li class="domain-list">Wireless and Mobile Communications</li>
                                </ul>

                            </div> <!-- end back panel -->
                        </div> <!-- end card -->
                    </div> <!-- end card-container -->
                </div> <!-- end col sm 3 -->
            <!--         <div class="col-sm-1"></div> -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="card-container">
                            <div class="card">
                                <div class="front" style="display: flex; align-items: center;justify-content: center;">


                                    <div class="text-center">

                                <img src="images/CGIP.png" style="width:150px;margin-bottom: 50px;">
                                        <h3 class="call-head">COMPUTER Engineering  &amp; Information technology</h3>
                                    </div>



                                </div> <!-- end front panel -->
                                <div class="back" style="width:auto;">
                                    <li class="domain-list navbar-fixed-top" style="background-color: #2980b9;text-align: center;color: white"> <h4>COMPUTER Engineering  &amp; Information technology</h4></li>
                                    <ul id="comp-it" class="domain-list-tab" style="background-color: white;padding: 10px;overflow-y:scroll;height:340px;margin-top: 50px;margin-bottom: 0px;">
                                  <li class="domain-list">Algorithms Performance Evaluation and Optimization.</li><hr> 
                                  <li class="domain-list">Computer Architecture, VLSI and Embedded Systems </li><hr>
                                  <li class="domain-list">Computer networks, network security and Data Communication</li><hr> 
                                  <li class="domain-list">Computer Simulation and Vision</li><hr>
                                  <li class="domain-list">Database, data mining and big data</li><hr>
                                  <li class="domain-list">Distributed and Parallel Processing </li><hr>
                                  <li class="domain-list">Artificial Intelligence, Computational Intelligence, Virtual Reality &amp; Expert Systems </li><hr>
                                  <li class="domain-list">E-commerce, E-governance, Internet and Web Applications </li><hr>
                                  <li class="domain-list">High-performance and cloud computing</li><hr>
                                  <li class="domain-list">Human Computer Interaction and Ubiquitous Computing</li><hr>
                                  <li class="domain-list">Image Processing and Data Compression</li><hr>
                                  <li class="domain-list">Information Systems &amp; Retrieval </li><hr>
                                  <li class="domain-list">Mass network storage system, parallel storage system</li><hr>
                                  <li class="domain-list">Wireless,  Ad hoc Networks and Sensors/actuators network</li><hr>
                                  <li class="domain-list">Software Engineering</li><hr>
                                  <li class="domain-list">Computer Graphics, Multimedia technology and application</li><hr>
                                  <li class="domain-list">Natural Language Processing and Neural Networks </li><hr>
                                  <li class="domain-list">Network computing and Mobile Computing</li><hr>
                                  <li class="domain-list">Security &amp; Cryptography </li><hr>
                                  <li class="domain-list">Theoretical Computer Science, Compilers and Interpreters </li>
                        </ul>

                                </div> <!-- end back panel -->
                            </div> <!-- end card -->
                        </div> <!-- end card-container -->
                    </div> <!-- end col sm 3 -->
            <!--         <div class="col-sm-1"></div> -->
                </div><!-- end row -->

            <div class="row call-row">
                    <div class="col-md-2"></div>
                     <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="card-container">
                            <div class="card">
                                <div class="front" style="display: flex; align-items: center;justify-content: center;">


                                    <div class="text-center">

                                        <img src="images/H&AS.png" style="width:150px;margin-bottom: 50px;">
                                        <h3 class="call-head">Humanities &amp; Applied Sciences</h3>
                                    </div>



                                </div> <!-- end front panel -->
                                <div class="back">
                                    <li class="domain-list navbar-fixed-top" style="background-color: #2980b9;text-align: center;color: white"><h4>Humanities &amp; Applied <br>Sciences</h4></li>
                                    <ul id="h-as" class="domain-list-tab" style="background-color: white;padding: 10px;overflow-y:scroll;height:340px;margin-top: 50px;margin-bottom: 0px;">
                                   
                                  <li class="domain-list">Physics</li><hr>
                                  <li class="domain-list">Chemistry</li><hr>
                                  <li class="domain-list">Environmental Science Applied Mathematics </li><hr>
                                  <li class="domain-list">Quantitative Techniques</li><hr>
                                  <li class="domain-list">Cryptography </li><hr>
                                  <li class="domain-list">Coding theory</li><hr>
                                  <li class="domain-list">Computational mathematics </li><hr>
                                  <li class="domain-list">Mathematical  Modelling and simulation</li><hr>
                                  <li class="domain-list">Numerical analysis</li><hr>
                                  <li class="domain-list">Optimization</li><hr>
                                  <li class="domain-list">Financial Mathematics</li><hr>
                                  <li class="domain-list">Linear Algebra and Applications</li><hr>
                                  <li class="domain-list">Industrial Mathematics</li><hr>
                                  <li class="domain-list">Applications of Mathematics in Virtual Reality</li><hr>
                                  <li class="domain-list">Statistics</li>
                        </ul> 
                                </div> <!-- end back panel -->
                            </div> <!-- end card -->
                        </div> <!-- end card-container -->
                    </div> <!-- end col sm 3 -->
            <!--         <div class="col-sm-1"></div> -->
                  <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="card-container">
                            <div class="card">
                                <div class="front" style="display: flex; align-items: center;justify-content: center;">


                                    <div class="text-center">

                                        <img src="images/Mech.png" style="width:150px;margin-bottom: 50px;">
                                        <h3 class="call-head">Mechanical Engineering</h3> 
                                    </div>



                                </div> <!-- end front panel -->
                                <div class="back">
                                    <li class="domain-list navbar-fixed-top" style="background-color: #2980b9;text-align: center;color: white"><h4>Mechanical <br>Engineering</h4></li>
                                    <ul id="civil" class="domain-list-tab" style="background-color: white;padding: 10px;overflow-y:scroll;height:340px;margin-top: 50px;margin-bottom: 0px;"> 
                                        <li class="domain-list">Quality management and tools.</li><hr>
                                        <li class="domain-list">E- Manufacturing.</li><hr>
                                        <li class="domain-list">Engineering economy and cost analysis.</li><hr>
                                        <li class="domain-list">Sustainable manufacturing.</li><hr>
                                        <li class="domain-list">Industrial Design and training.</li><hr>
                                        <li class="domain-list">Supply Chain Management (SCM).</li><hr>
                                        <li class="domain-list">Trends in Industrial Manufacturing.</li><hr>
                                        <li class="domain-list">Advance energy systems and management.</li><hr>
                                        <li class="domain-list">Material and energy recovery.</li><hr>
                                        <li class="domain-list">Process industries.</li><hr>
                                        <li class="domain-list">Plant engineering and Maintenance.</li><hr>
                                        <li class="domain-list">Fluid power system and technology.</li><hr>
                                        <li class="domain-list">Risk Management.</li><hr>
                                        <li class="domain-list">Electromechanical Engineering.</li>

                        </ul>

                                </div> <!-- end back panel -->
                            </div> <!-- end card -->
                        </div> <!-- end card-container -->
                    </div> <!-- end col sm 3 -->
                    <div class="col-md-2"></div>
                </div>
        </div>

    </div>            

            


    
</div>



</section>

<!--Call for paper ENDS-->
 <!--Registration Fees-->
 <section class="bg-light-gray">
    <div class="container-fluid" style="padding: 0px;">
       <div class="row">
             <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Registration Fees</h2><br><br>
             </div>
       </div>
       <div class="row text-center">
            <div class="col-lg-4">
             <h2>Student</h2>
             <h3><i class="fa fa-rupee"></i> 1200/-</h3>
            </div>
            <div class="col-lg-4">
             <h2>Faculty</h2>
             <h3><i class="fa fa-rupee"></i> 1800/-</h3>
            </div>
            <div class="col-lg-4">
             <h2>Industry</h2>
             <h3><i class="fa fa-rupee"></i> 3500/-</h3>
            </div>
       </div>
    </div>
 </section>
 <!--Registration Fees ENDS-->

 <!--Team Information-->
    <section id="teaminfo" style="background-color: white;">
        <div class="container-fluid" style="padding: 0px;">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Committees</h2><br><br>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4" style="display: block;margin-top:50px;text-align: center">
                    <img src="images/image.png" class=" comittee-head">
                    <h4 style="margin-top: 20px">Shri Chirag bhai Shah</h4>
                    <h5 style="margin-top: 10px">Chief Patron</h5>
                </div>
                <div class="col-lg-4" style="display: block;margin-top:50px;text-align: center">
                    <img src="images/image.png" class=" comittee-head">
                    <h4 style="margin-top: 20px">Dr. U. D. Kolekar</h4>
                    <h5 style="margin-top: 10px">Patron</h5>
                </div>
                <div class="col-lg-4" style="display: block;margin-top:50px;text-align: center">
                    <img src="images/image.png" class=" comittee-head">
                    <h4 style="margin-top: 20px">Prof. A. M. Deshpande</h4>
                    <h5 style="margin-top: 10px"><!--Vice - Principal-->Conference Chair</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-lg-4" style="display: block;margin-top:50px;text-align: center">
                    <img src="images/image.png" class=" comittee-head">
                    <h4 style="margin-top: 20px">Prof. S. S. Nanivadekar</h4>
                    <h5 style="margin-top: 10px">Convenor</h5>
                </div>
                <div class="col-lg-4" style="display: block;margin-top:50px;text-align: center">
                    <img src="images/image.png" class=" comittee-head">
                    <h4 style="margin-top: 20px">Prof. S. L. shelgaonkar</h4>
                    <h5 style="margin-top: 10px">Co-Convenor</h5>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row">
                
                <div class="row" style="margin:100px 0px 50px 0px;width: 100%">
                    
                    <div class="col-lg-12 col-xs-12 com-head">
                        INTERNATIONAL ADVISORY COMMITTEE
                    </div>
                    
                </div>
                <div class="row com">
                    
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-4 com-padding">
                                <div class="com-int-name com-info">Dr. Jose Humberto Dias da Silva</div>
                                <div class="com-int-org com-info">Brazil</div>
                            </div>
                            <div class="col-lg-4 com-padding">
                               <div class="com-int-name com-info">Dr. Jolanta Prywer</div>
                                <div class="com-int-org com-info">Poland</div>
                            </div>
                       
                            <div class="col-lg-4 com-padding">
                               <div class="com-int-name com-info">Dr. Kontanstinos Moutzouris</div>
                                <div class="com-int-org com-info">Greece</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 com-padding">
                                <div class="com-int-name com-info">Dr. Ijeoma B. Anumaka</div>
                                <div class="com-int-org com-info">Uganda</div>
                            </div>
                            <div class="col-lg-4 com-padding">
                               <div class="com-int-name com-info">Prof. Shiv Prasad Peddi</div>
                                <div class="com-int-org com-info">Saudi Arabia</div>
                            </div>
                       
                            <div class="col-lg-4 com-padding">
                               <div class="com-int-name com-info">Mr. Manish Kumar Singh</div>
                                <div class="com-int-org com-info">Johnson and Johnson (USA)</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4"></div>
                            <div class="col-lg-4 com-padding">
                                <div class="com-int-name com-info">Mr. Ashish Yadav</div>
                                <div class="com-int-org com-info">The Digital Group (USA)</div>
                            </div>
                            <div class="col-lg-4"></div>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="row">
                
                <div class="row" style="margin:50px 0px 50px 0px;width: 100%">
                    
                    <div class="col-lg-12 col-xs-12 com-head">
                        NATIONAL ADVISORY COMMITTEE
                    </div>
                    
                </div>
                <div class="row com">
                    
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-4 com-padding">
                                <div class="com-nal-name com-info">Dr. Varadraj Bapat</div>
                                <div class="com-nal-org com-info">IIT Bombay</div>
                            </div>
                            <div class="col-lg-4 com-padding">
                               <div class="com-nal-name com-info">Dr. Mahesh Kolekar</div>
                                <div class="com-nal-org com-info">IIT Bombay</div>
                            </div>
                       
                            <div class="col-lg-4 com-padding">
                               <div class="com-nal-name com-info">Dr. B.K. Lande</div>
                                <div class="com-nal-org com-info">NMIMS Mumbai</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 com-padding">
                                <div class="com-nal-name com-info">Dr. Kshirsagar</div>
                                <div class="com-nal-org com-info">Nagpur University</div>
                            </div>
                            <div class="col-lg-4 com-padding">
                               <div class="com-nal-name com-info">Dr. Jai Bhatnagar</div>
                                <div class="com-nal-org com-info">Manav Rachna University, Delhi</div>
                            </div>
                       
                            <div class="col-lg-4 com-padding">
                               <div class="com-nal-name com-info">Dr. D K Bodhe</div>
                                <div class="com-nal-org com-info">P K Institute, Pune</div>
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="col-lg-4 com-padding">
                                <div class="com-nal-name com-info">Dr. Anil Nandgaokar</div>
                                <div class="com-nal-org com-info">Babasaheb Ambedkar Technological University, Lonere</div>
                            </div>
                            <div class="col-lg-4 com-padding">
                               <div class="com-nal-name com-info">Dr. Udhav Bhosale</div>
                                <div class="com-nal-org com-info">Rajiv Gandhi Institute of Technology, Mumbai</div>
                            </div>
                            <div class="col-lg-4 com-padding">
                               <div class="com-nal-name com-info">Dr. Sanjay Kherde</div>
                                <div class="com-nal-org com-info">Konkan Gyanpeeth College of Engineering, Amravati</div>
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="col-lg-4 com-padding">
                               <div class="com-nal-name com-info">Dr. Hemant Kothari</div>
                                <div class="com-nal-org com-info">Paher Udaipur</div>
                            </div>
                            <div class="col-lg-4 com-padding">
                                <div class="com-nal-name com-info">Dr. D.G. Wakade</div>
                                <div class="com-nal-org com-info">P R Potte College of Engineering, Amravati</div>
                            </div>
                       
                            <div class="col-lg-4 com-padding">
                               <div class="com-nal-name com-info">Prof. Sandip Bhale</div>
                                <div class="com-nal-org com-info">Cognizant</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-lg-4 com-padding">
                                <div class="com-nal-name com-info">Dr S S Inamdaar</div>
                                <div class="com-nal-org com-info">Vishawaniketan College iMEET</div>
                            </div>
                            <div class="col-lg-4 com-padding">
                                <div class="com-nal-name com-info">Dr Shekhar Chandratre</div>
                                <div class="com-nal-org com-info">Academistion</div>
                            </div>
                           <div class="col-md-2"></div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="row">
                
                <div class="row" style="margin:50px 0px 50px 0px;width: 100%">
                    
                    <div class="col-lg-12 col-xs-12 com-head">
                        TECHNICAL PROGRAM COMMITTEE
                    </div>
                    
                </div>
                <div class="row com">
                    
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-4 com-padding">
                                <div class="com-tech-name com-info">Dr. A W Kiwlekar</div>
                                <div class="com-tech-org com-info">BATU</div>
                            </div>
                            <div class="col-lg-4 com-padding">
                               <div class="com-tech-name com-info">Dr. B R Patil</div>
                                <div class="com-tech-org com-info">Vishawaniketan College iMEET</div>
                            </div>
                       
                            <div class="col-lg-4 com-padding">
                               <div class="com-tech-name com-info">Dr. R.B. Ghongade</div>
                                <div class="com-tech-org com-info">Bharti Vidyapeeth</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 com-padding">
                                <div class="com-tech-name com-info">Dr. Mahendra Khandpekar</div>
                                <div class="com-tech-org com-info">Birla College</div>
                            </div>
                            <div class="col-lg-4 com-padding">
                               <div class="com-tech-name com-info">Dr. Madhukar Lengare</div>
                                <div class="com-tech-org com-info">Konkan Gyanpeeth</div>
                            </div>
                       
                            <div class="col-lg-4 com-padding">
                               <div class="com-tech-name com-info">Dr. Rashmi Chaugule</div>
                                <div class="com-tech-org com-info">S G Godavat Kolhapur</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 com-padding">
                                <div class="com-tech-name com-info">Dr. Ulhas Shivurkar</div>
                                <div class="com-tech-org com-info">Devgiri College of Engineering</div>
                            </div>
                            <div class="col-lg-4 com-padding">
                               <div class="com-tech-name com-info">Dr. M S Kurhade</div>
                                <div class="com-tech-org com-info">DTSS Mumbai</div>
                            </div>
                       
                            <div class="col-lg-4 com-padding">
                               <div class="com-tech-name com-info">Dr. Uday Pandit Khot</div>
                                <div class="com-tech-org com-info">SFIT Mumbai</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 com-padding">
                                <div class="com-tech-name com-info">Mr. Sachin Chavan</div>
                                <div class="com-tech-org com-info">Oil and Gas Company</div>
                            </div>
                            <div class="col-lg-4 com-padding">
                               <div class="com-tech-name com-info">Mr. Sandip Kuprekar</div>
                                <div class="com-tech-org com-info">Industrialist</div>
                            </div>
                       
                            <div class="col-lg-4 com-padding">
                               <div class="com-tech-name com-info">Ms. Sandhya Pandey</div>
                                <div class="com-tech-org com-info">Industrialist</div>
                            </div>
                        </div>
                        <!--<div class="row">
                            <div class="col-lg-4"></div>
                            <div class="col-lg-4 com-padding">
                                <div class="com-tech-name com-info">Dr. B N Jagdale</div>
                                <div class="com-tech-org com-info">Organization</div>
                            </div>
                            <div class="col-lg-4"></div>
                        </div>-->
                    </div>
                    
                </div>
            </div>
            <div class="row">
                
                <div class="row" style="margin:50px 0px 50px 0px;width: 100%">
                    
                    <div class="col-lg-12 col-xs-12 com-head">
                        LOCAL ORGANIZING COMMITTEE
                    </div>
                    
                </div>
                <div class="row com">
                    
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-4 com-padding">
                                <div class="com-org-name com-info">Prof. R. K. Ambekar</div>
                                <div class="com-org-org com-info">Organizing Chair</div>
                            </div>
                            <div class="col-lg-4 com-padding">
                               <div class="com-org-name com-info">Prof. V. E. Narawade</div>
                                <div class="com-org-org com-info">Organizing Chair</div>
                            </div>
                            <div class="col-lg-4 com-padding">
                               <div class="com-org-name com-info">Prof. J. S. Mehta</div>
                                <div class="com-org-org com-info">Organizing Chair</div>
                            </div>                   
                            
                        </div>
                        <div class="row">
                            
                            <div class="col-lg-4 com-padding">
                                <div class="com-org-name com-info">Prof. A. S. Shinde</div>
                                <div class="com-org-org com-info">Organizing Chair</div>
                            </div>
                            <div class="col-lg-4 com-padding">
                               <div class="com-org-name com-info">Prof. S. H. Malave</div>
                                <div class="com-org-org com-info">Technical Program Chair</div>
                            </div>
                            <div class="col-lg-4 com-padding">
                                <div class="com-org-name com-info">Prof. K. B. Deshpande</div>
                                <div class="com-org-org com-info">Technical Program Chair</div>
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="col-lg-4 com-padding">
                               <div class="com-org-name com-info">Prof. D. V. Kunte</div>
                                <div class="com-org-org com-info">Technical Program Chair</div>
                            </div>
                       
                            <div class="col-lg-4 com-padding">
                               <div class="com-org-name com-info">Prof. P. S. Rao</div>
                                <div class="com-org-org com-info">Technical Program Chair</div>
                            </div>
                            <div class="col-lg-4 com-padding">
                                <div class="com-org-name com-info">Prof. S. S. Kore</div>
                                <div class="com-org-org com-info">Technical Program Chair</div>
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="col-lg-4 com-padding">
                               <div class="com-org-name com-info">Prof. S. B. Savargave</div>
                                <div class="com-org-org com-info">Publication Chair</div>
                            </div>
                       
                            <div class="col-lg-4 com-padding">
                               <div class="com-org-name com-info">Prof. G. D. Gourshetye</div>
                                <div class="com-org-org com-info">Publication Chair</div>
                            </div>
                            <div class="col-lg-4 com-padding">
                                <div class="com-org-name com-info">Prof. N.R. Chindarkar</div>
                                <div class="com-org-org com-info">Publicity Chair</div>
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="col-lg-4 com-padding">
                               <div class="com-org-name com-info">Prof. M.G. Gadale</div>
                                <div class="com-org-org com-info">Publicity Chair</div>
                            </div>
                       
                            <div class="col-lg-4 com-padding">
                               <div class="com-org-name com-info">Prof. M. A. Jain</div>
                                <div class="com-org-org com-info">Website &amp; Content Development</div>
                            </div>
                            <div class="col-lg-4 com-padding">
                                <div class="com-org-name com-info">Prof. B. M. Colaco</div>
                                <div class="com-org-org com-info">Website &amp; Content Development</div>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-lg-offset-2 text-center">
                    <p class="large text-muted"></p>
                </div>
            </div>
        </div>
    </section>

 <!--Team Information Ends-->



    <!-- Venue Details Starts -->

  
    <section id="venue" style="padding-bottom: 0px;" class="bg-light-gray">
        <div class="container-fluid">
            <div class="aboutContainer">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Conference Venue</h2>
                        <!--<h3 class="section-subheading text-muted"></h3>-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h3 class="section-heading">A P Shah Institute of Technology</h3>
                        <h3 class="section-subheading">Survey No. 12, Opp. Hypercity Mall, Kasarvadavali, Ghodhunder Road, Thane(W) 400615</h3>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-lg-6 text-center about">
                        <h4>About Thane</h4>
                        <p class="text-content about-content">Thane is a northern district of Konkan Maharashtra. Known as 'Cacade De Tana', its original name being Sristhanaka, named after Lord Ganpati, also known as the ‘City of Lakes’ It is one of the most popular metropolitan cities in India. Being a residential suburb of Mumbai, Thane has number of large industrial complexes of chemicals, engineering products, and textiles. Along with being the headquarter of the taluka and the district, it also has many historical buildings,including a fort and several churches.</p>
                        <p class="text-content about-content"><b>Reaching ​ ​Thane:</b><br>Nearest airport is at Mumbai (25 km) and the international airport 35 km from the main town Mumbai. Thane has a railway station and many trains pass connecting it with the major cities of Maharashtra. ​ ​It ​ ​is​ ​well ​ ​connected ​ ​by​ ​road ​ ​as​ ​well.</p>
                    </div>
                    <div class="col-lg-6 text-center about">
                        <div class="row">
                            <div class="col-lg-12">
                        <img src="images/collage2.png" class="img-fluid" style="width:100%;">
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.3326484100703!2d72.9652036144368!3d19.267895050920608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7bba2e15f6c7b%3A0x20e1357d640bef7e!2sA.+P.+Shah+Institute+of+Technology!5e0!3m2!1sen!2sin!4v1505903976451" width="100%" height="350px" frameborder="0" style="border-bottom-left-radius:15px;border-bottom-right-radius: 15px; margin-top: 20px;" allowfullscreen></iframe>
           
         </div>



    </section>
    <!-- <div id="googlemaps" ></div>
            <div id="contactform">
              <! You can even embed a Google Form here 
            </div>-->

    <!-- Venue Details Ends -->
             
    <!-- Contact Form Starts -->
    <section id="contact"  style="background-color:#44ACDF;color:white;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="Memail" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="Mphone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div><br><br><br>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl" style="background-color: #1C6CD8;">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--Form Ends-->

    

<!--Footer-->
<!--          <div id="footer" class="text-content"><br>
          		 <br><br>
                <a class="btn btn-social-icon btn-linkedin" href="https://www.linkedin.com/in/" style="background-color:#3BBAF8; border-radius:50%;">
    				<span class="fa fa-linkedin"></span>
  				</a>
                <a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com/" style="background-color:#3BBAF8;border-radius:50%;">
    				<span class="fa fa-facebook"></span>
  				</a>
  				<a class="btn btn-social-icon btn-instagram" href="https://www.instagram.com/" style="background-color:#3BBAF8;border-radius:50%;">
    				<span class="fa fa-instagram"></span>
  				</a>
                <br> <br> <br>-->
<section id="footer" class="text-content" style="background-color:#272727"><br>
<div class="container">
    <div class="row">
        <div class="col-lg-3">
         <div class="text-center"><img src="images/apsitlogo.png" height="200px" width="auto"></div>
        </div>
        <div class="col-lg-3" style="text-align:justify;text-justify:inter-word;">
            <h5 ><strong>
                    Address
                </strong></h5>
               <p >A P Shah of Institute of Technology, Survey No. 12, Opp. Hypercity Mall, Kasarvadavali, Ghodhunder Road, Thane(W) 400615 <br>Maharashtra, India</p>
        </div>
        <div class="col-lg-3" style="text-align:justify;text-justify:inter-word;">
            <h5 ><strong>
                     Organizing Secretary
                </strong></h5>
                
                 	Prof. R.K. Ambekar <br>Prof. Vaibhav Narawde
        </div>
        <div class="col-lg-3" style="text-align:justify;text-justify:inter-word;">
            <h5 ><strong>
                   Contact
                </strong></h5>
            <p >Email:  <a href="mailto:rkambekar@apsit.org.in" >rkambekar@apsit.org.in</a><br></p>
            <p >Phone No.:<br>  +91-22-2597-3737<br>
                +91-22-25973738</p>
        </div>
    </div>
    
</div>
 <br>

<div class="text-center"><h5><span>Designed and Developed By <a href="webteam.php">NOTNULL</a></span></h5>
</div>
<div class="text-center"><h6><span>©2017 ICASTe | ALL RIGHT RESERVED</span></h6></div>
</section>

</body>
</html>
