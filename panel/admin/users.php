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
            
            <ul class="nav navbar-left top-nav">
              <li><a href="#add_staff" data-toggle="modal" style="color:white;"><b>ADD STAFF</b></a></li>
            </ul>
            
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
                    <li class="active">
                        <a href="users.php"><i class="fa fa-fw fa-group"></i> STAFFS</a>
                    </li>
                    <li>
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
                        <i class="fa fa-group fa-fx5" style="color:lightblue;"></i> <b>STAFFS</b>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
                <!-- /.row -->

                <div class="row text-center">
                <?php include 'add_user.php'; ?>
                <?php include 'edit_user.php'; ?>
                <?php include 'delete_user.php'; ?>
                <?php include 'view_users.php'; ?>
                <?php include 'view_users_password.php'; ?>

<!-- Modal -->
<div id="edit" class="modal fade" role="dialog">
  <div class="modal-dialog">
 
    <!-- Modal content-->
    <div class="modal-content text-center">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">EDIT STAFF</h4>
      </div>
      <div class="modal-body">
     
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon">
                    <span class="fa fa-phone"></span>
                </span>
                <input type="number" name="new_tel" id="" class="form-control" placeholder="new mobile">
            </div>
        </div>
 
        <input type="submit" value="update" class="btn btn-success">
        <input type="hidden" name="edit_id" id="edit_id" value="">
       
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
 
  </div>
</div>


                    <!-- Modal -->
<div id="add_staff" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" style="color:red;">&times;</button>
        <h4 class="modal-title text-center">ADD NEW STAFF</h4>
      </div>
      <div class="modal-body text-center">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
          
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon">
                <span class="fa fa-user"></span>
              </span>
              <input type="text" name="fullname" id="" placeholder="full name" title="full name" class="form-control" required>
            </div>
          </div>

           <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon">
                <span class="fa fa-user"></span>
              </span>
              <input type="text" name="user" id="" placeholder="username" title="username" class="form-control" required>
            </div>
          </div>

           <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon">
                <span class="fa fa-lock"></span>
              </span>
              <input type="password" name="pass" id="" placeholder="password" title="password" class="form-control" required>
            </div>
          </div>

           <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon">
                <span class="fa fa-map-marker"></span>
              </span>
              <input type="text" name="state" id="" placeholder="state" title="state" class="form-control" required>
            </div>
          </div>

           <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon">
                <span class="fa fa-map-marker"></span>
              </span>
              <input type="text" name="town" id="" placeholder="town" title="town" class="form-control" required>
            </div>
          </div>

           <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon">
                <span class="fa fa-map-marker"></span>
              </span>
              <input type="text" name="village" id="" placeholder="village" class="form-control" required>
            </div>
          </div>

           <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon">
                <span class="fa fa-location-arrow"></span>
              </span>
              <input type="text" name="residence_addr" id="" placeholder="residential address" title="residential address" class="form-control" required>
            </div>
          </div>

           <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon">
                <span class="fa fa-calendar"></span>
              </span>
              <input type="date" name="dob" id="" title="date of birth" class="form-control" required>
            </div>
          </div>

           <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon">
                <span class="fa fa-phone"></span>
              </span>
              <input type="tel" name="tel" id="" placeholder="mobile" class="form-control" required>
            </div>
          </div>

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon">
                <span class="fa fa-phone"></span>
              </span>
                <select name="position" id="" class="form-control">
                  <option value="">---------- postion ----------</option>
                  <option value="cashier">cashier</option>
                  <option value="admin">admin</option>
                </select>
            </div>
          </div>

          <input type="submit" value="add user" name="add_user" class="btn btn-success">

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

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

<script>
    function passId(id){
        $("#edit_id").val(id);
    }
</script>
