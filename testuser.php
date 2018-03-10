<?php
session_start();
if ($_SESSION['loggedon'] == 1) 
{
	echo '<script>window.location="profile.php"</script>';
}
else
{
	echo '<script>window.location="login.php"</script>';
}

?>
