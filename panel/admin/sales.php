<?php
session_start();
include '../../links/db.php';
if(!isset($_SESSION['username'])){
    header('location:../../index.php');
}
$user=$_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DASHBOARD | BICA PHARMACEUTICALS</title>

    <link rel="icon" href="../../assets/img/favicon.png">

    <!-- Bootstrap Core CSS -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../assets/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../../assets/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="../../assets/img/logo.png" alt="BICA" width="60"></a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li><a style="color:white;"><b><?php echo "<i class='fa fa-calendar'></i> ". date('l, d F, Y'); ?></b></a></li>
                <li><a style="color:white;"><b>WELCOME: <?php echo $user." "; 
                $pos=mysqli_query($con, "SELECT position FROM users WHERE username='$user' "); 
                $row=mysqli_fetch_assoc($pos);
                $posi=mysqli_real_escape_string($con, $row['position']);
                echo "(".$posi.")"; ?></b></a></li>
                <li><a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a></li>
                     
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="users.php"><i class="fa fa-fw fa-group"></i> STAFFS</a>
                    </li>
                    <li class="active">
                        <a href="sales.php"><i class="fa fa-fw fa-bar-chart"></i> SALES</a>
                    </li>
                    <li>
                        <a href="products.php"><i class="fa fa-fw fa-trello"></i> PRODUCTS</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                        <i class="fa fa-bar-chart fa-fx5"></i><b> SALES</b>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <!-- /.row -->

                <div class="row">
                <div class="container-fluid text-center table-responsive">
  
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="get" class="col-md-6 col-md-offset-3">
    <input type="date" name="search_sales" id="" class="form-control" title="search for sales" style="box-shadow:3px 9px 25px black;"><br>
    <input type="submit" value="search" name="search" class="btn btn-primary">
</form>
</div><br>

                    <?php include 'search_sales.php'; ?>
                </div>
                <!-- /.row -->

                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <footer class="navbar-default navbar-fixed-bottom text-center"><h4><?php echo "&copy Orbit Brothers Communication ". date('Y'); ?></h4></footer>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>


</body>

</html>
