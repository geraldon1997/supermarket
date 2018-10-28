<?php
include '../../links/db.php';

if(isset($_POST['new_tel']) && isset($_POST['edit_id'])){
        $id=mysqli_real_escape_string($con, $_POST['edit_id']);
        $new_tel=mysqli_real_escape_string($con, $_POST['new_tel']);

        $update=mysqli_query($con, "UPDATE users SET phone='$new_tel' WHERE id=$id ");
        if($update){
           echo "<div class='alert alert-success'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <h1 class='text-center'>user updated successfully</h1>
              </div>"; 
           
        }else{
            echo "<div class='alert alert-warning'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <h1 class='text-center'>user not updated</h1>
              </div>";
    }
}

?>
