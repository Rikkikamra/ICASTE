<?php
  session_start();
  error_reporting(E_ALL ^ E_DEPRECATED);
  //Including Database config
  include("db_config.php");

  $_SESSION["admin_email"] =$_POST['admin_email'];
  $_SESSION["admin_pass"] =$_POST['admin_pass'];

   
  
  $table = 'admin';
  $sql = "SELECT * FROM $table WHERE admin_email = '" .$_SESSION["admin_email"]. "'";
  $results = $conn->query($sql);
  $results = $results->fetch_assoc();

  if ($_SESSION["admin_email"]==NULL) 
  {
    echo "<script type='text/javascript'>\n";
    echo "alert('This Email does not exist');\n";
    echo "</script>";
    echo '<script>window.location="admin.php"</script>';
  }
  
  $storedpass = $results['password'];
  if($_SESSION["admin_pass"] == $storedpass)
  {
    $_SESSION["adminloggedon"]=1;
    header("location:allabstracts.php");
  }
  else
  {
    echo "<script type='text/javascript'>\n";
    echo "alert('The Username or Password is Incorrect');\n";
    echo "</script>";
    echo '<script>window.location="admin.php"</script>';
  } 
  mysqli_close($conn);
?>
