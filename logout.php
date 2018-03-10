<?php
session_start();
$_SESSION["loggedon"]=0;
$_SESSION["abstractupload"]=0;

header('location:index.php');
?>