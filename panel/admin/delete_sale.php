<?php
include '../../links/db.php';

if(isset($_GET['id'])){

$id=mysqli_real_escape_string($con, $_GET['id']);
$sql="DELETE FROM sales WHERE id='$id' ";
$del_sale=mysqli_query($con, $sql);
if($del_sale){
    echo "<div class='alert alert-success'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <h1 class='text-center'>SALE DELETED SUCCESSFULLY</h1>
          </div>";
}
}
?>