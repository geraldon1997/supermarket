<?php
session_start();
session_destroy();
echo "<h1 class='well well-lg text-center'>LOGGING OUT <i class='fa fa-refresh fa-spin'></i></h1>";
header('refresh:3 url=../../index.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../../assets/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <title>LOGOUT</title>
</head>
<body>
</body>
</html>