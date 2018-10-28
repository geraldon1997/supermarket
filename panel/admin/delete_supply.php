<?php
include '../../links/db.php';

if(isset($_GET['id'])){
    $id=mysqli_real_escape_string($con, $_GET['id']);

    $sql="DELETE FROM `arrivals` WHERE `id`='$id' ";
    $delete=mysqli_query($con, $sql);

    if($delete){
        echo "supply deleted";
    }
}
?>