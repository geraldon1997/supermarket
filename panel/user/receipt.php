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
  .btn{
    display:none;
    } 
  
  body{
    text-align:center;
    }
  
  div{
    width:500px;
    text-align:center;
    }
  
  }
  </style>
    <title class="btn">dashboard</title>
    
</head>
<body class="">



    <div class="col-md-6 col-md-offset-3 text-center">
      <?php include 'sales_receipt.php'; ?>
      </div>
        




</body>
</html>