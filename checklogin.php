<?php
  session_start();
  error_reporting(E_ALL ^ E_DEPRECATED);
  //Including Database config
  include("db_config.php");

  $_SESSION["user_email"] =$_POST['user_email'];
  $_SESSION["user_pass"] =$_POST['user_pass'];

   
  
  $table = 'user';
  $sql = "SELECT * FROM $table WHERE email = '" .$_SESSION["user_email"]. "'";
  $results = $conn->query($sql);
  $results = $results->fetch_assoc();
//Getting all information in sessions
  $_SESSION["first_name"]=$results['first_name'];
  $_SESSION["last_name"]=$results['last_name'];
  if ($_SESSION["user_email"]==NULL) 
  {
    echo "<script type='text/javascript'>\n";
    echo "alert('This Email does not exist');\n";
    echo "</script>";
    echo '<script>window.location="register.php"</script>';
  }
  
  $storedpass = $results['password'];
  if($_SESSION['user_pass'] == $storedpass)
  {
    setcookie('website[email]',$_SESSION['user_email'], 0, '', '', '', true);
    setcookie('website[password]',$_SESSION['user_pass'], 0, '', '', '', true);
    $_SESSION["loggedon"]=1;
    $_SESSION["userid"]=$results['userid'];
    $_SESSION["email"]=$results['email'];
    
    $desigid = $results['designationid'];
    $sql = "SELECT name FROM designation WHERE designationid =\"$desigid\"";
    $results = $conn->query($sql);
    $designation_name = $results->fetch_assoc();
    $_SESSION['designation']=$designation_name["name"];
  
    header("location:profile.php");
  }
  else
  {
    echo "<script type='text/javascript'>\n";
    echo "alert('The Username or Password is Incorrect');\n";
    echo "</script>";
    echo '<script>window.location="submission_form.php"</script>';
  } 
  mysqli_close($conn);
?>
