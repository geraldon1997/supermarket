<?php
include '../../links/db.php';
if(isset($_GET['id'])){
$id=mysqli_real_escape_string($con, $_GET['id']);

$remove=mysqli_query($con, "DELETE FROM users WHERE id=$id ");
if($remove){
    echo "<div class='alert alert-success'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <h1 class='text-center'>user deleted successfully</h1>
         </div>";
}else{
    echo "<div class='alert alert-warning'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <h1 class='text-center'>user not deleted</h1>
         </div>";
}
}
?>