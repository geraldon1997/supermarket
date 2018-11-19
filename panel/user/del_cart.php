<?php 

include '../../links/db.php';
include '../../config.php';

if(isset($_GET['item'])){
    $it=mysqli_real_escape_string($con, $_GET['item']);

    $sql="DELETE FROM cart WHERE item='$it' ";
    $del=mysqli_query($con, $sql);
    if($del === true){
        header('location:'.$base_url.'panel/user');
    }
}
?>