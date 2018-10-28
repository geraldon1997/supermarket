<?php 

session_start();
if(!isset($_SESSION['username'])){
    header('location:../../index.php');
  }else{
    include '../../links/db.php';
    $usr=mysqli_real_escape_string($con, $_SESSION['username']);
  }
  
session_destroy();

header('location:../../index.php');

?>