<?php
include '../../links/db.php';

if(isset($_GET['delete_product_id'])){
    $id=mysqli_real_escape_string($con, $_GET['delete_product_id']);

    $del_p=mysqli_query($con, "DELETE FROM products WHERE id=$id ");
    
    if($del_p){
        echo "<div class='alert alert-success'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <h1 class='text-center'>product deleted successfully</h1>
              </div>";
    }else{
        echo "<div class='alert alert-warning'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <h1 class='text-center'>product not deleted</h1>
              </div>";
    }
}
?>