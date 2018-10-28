<?php 

include '../../links/db.php';

if(isset($_GET['item'])){
    $it=mysqli_real_escape_string($con, $_GET['item']);

    $sql="DELETE FROM cart WHERE item='$it' ";
    $del=mysqli_query($con, $sql);
    if($del){
        header('location:index.php');
    }
}
?>