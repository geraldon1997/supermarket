<?php
session_start();
if(!isset($_SESSION['username'])){
  header('location:../../index.php');
}else{
  include '../../links/db.php';
  $usr=mysqli_real_escape_string($con, $_SESSION['username']);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../../assets/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/font-awesome/css/font-awesome.css">
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>

<style>
@media print{ 
  .btn{display:none;} 
  body{width:250px;}
  
  }
  </style>
    <title class="btn">dashboard</title>
    
</head>
<body class="">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#"><img src="../../assets/img/logo.png" height="150%" alt="" ></a>
    </div>
    
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
         <li><a href="#" style="color:white;"><span class="glyphicon glyphicon-user"></span> hello</a></li>
         <li><a href="logout.php" style="color:white;">Logout <span class="glyphicon glyphicon-log-out"></span></a></li>
         <li><a href="#" style="color:white;"><b><?php echo date('Y:m:d'); ?></b></a></li>
      </ul>
    </div>
  </div>
</nav>    

    <div>
      <?php include 'sales_receipt.php'; ?>
    </div>
        




</body>
</html>