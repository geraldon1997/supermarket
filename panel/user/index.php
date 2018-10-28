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
    <title>DASHBOARD | CASHIER</title>
    
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
      <a class="navbar-brand" href="index.php"><img src="../../assets/img/logo.png" height="150%" alt="" ></a>
    </div>
    
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
      <li><a href="#" style="color:white;" class="fa fa-calendar"> <b><?php echo date('l, d F, Y'); ?></b></a></li>
         <li><a href="#" style="color:white;"><span class="glyphicon glyphicon-user"></span> hello <?php echo $usr; ?></a></li>
         <li><a href="logout.php" style="color:white;">Logout <span class="glyphicon glyphicon-log-out"></span></a></li>
         
      </ul>
    </div>
  </div>
</nav>    

<div class="col-md-5">
<?php include 'cart.php'; ?>
<?php include 'del_cart.php'; ?>
<?php include 'sell.php'; ?>
</div>

<div class="col-md-6">

  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="get" class="well">
    
    <div class="form-group" >
      <div class="input-group" >
        <span class="input-group-addon" >
          <span class="glyphicon glyphicon-search" ></span>  
        </span>
        <input type="search" name="search_items" class="form-control" placeholder="search for items">
      </div>
    </div>

    <input type="submit" value="search" name="search" class="btn btn-primary btn-block" >

  </form>
  <hr>
<?php include 'search_items.php'; ?>

</div>

<footer class="navbar-default navbar-fixed-bottom text-center"><h4><?php echo "&copy Orbit Brothers Communication ". date('Y'); ?></h4></footer>

</body>
</html>