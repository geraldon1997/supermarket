<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <title>BICA PHARMACEUTICALS</title>
    <style>
    #box:hover{
        box-shadow:3px 5px 7px black;
    }
    .btn:hover{
        box-shadow:3px 5px 7px black;
        width:100px;
    }
    img:hover{
        box-shadow:5px 7px 9px black;
    }
    p a{
        color:blue;
    }
    p a:hover{
        color:white;
        text-decoration:none;
        text-shadow:3px 5px 7px black;
    }
    p{
        color:black;
    }
    </style>
</head>
<body style="background-image:url('assets/img/favicon.png'); background-repeat:repeat; background-size:5px;">



    <div class="col-md-4 col-md-offset-4 well text-center" style="background:darkgrey;">
    <?php include 'links/login.php'; ?>    
        <a href="index.php"><img src="assets/img/favicon.png" alt="BICA PHARMACEUTICALS" class="img-thumbnail" width="400"></a>
        <hr>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
            
            <div class="form-group" id="box">
                <div class="input-group">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-user"></span>
                    </span>
                    <input type="text" name="user" id="" placeholder="username" class="form-control" title="username" Required>
                </div>
            </div>

            <div class="form-group" id="box">
                <div class="input-group">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-lock"></span>
                    </span>
                    <input type="password" name="pass" id="" placeholder="password" class="form-control" title="password" Required>
                </div>
            </div>

            <input type="submit" name="login" value="LOGIN" class="btn btn-success text-center">
        
        </form>
        
    </div>

<div class="text-center col-md-4 col-md-offset-4" style=""><strong>
    <p>Bica Pharmaceuticals</p>
<p>Ifite Awka, Anambra State.</p>
<p>1234567890</p>
<p>E-mail: support@bicapharmaceuticals.com</p>

</strong>
</div>

<footer class="navbar-default navbar-fixed-bottom text-center"><h4><?php echo "&copy Orbit Brothers Communication ". date('Y'); ?></h4></footer>
</body>
</html>