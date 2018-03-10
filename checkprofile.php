<?php
  session_start();
  error_reporting(E_ALL ^ E_DEPRECATED);
  if ($_SESSION["loggedon"]==1) 
  {
  	echo '<script>window.location="profile.php"</script>';
  }
  else
  {
  	echo '<script>window.location="submission_form.php"</script>';
  }
?>