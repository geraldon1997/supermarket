<?php
include '../../links/db.php';

if(isset($_POST['update_quantity']) && !empty($_POST['new_quantity']) && !empty($_POST['edit_id'])){
    $n_q=mysqli_real_escape_string($con, $_POST['new_quantity']);
    $id=mysqli_real_escape_string($con, $_POST['edit_id']);
    $d=mysqli_real_escape_string($con, date('d/m/Y'));

    $sql="SELECT * FROM products WHERE id='$id' ";
    $chk_q=mysqli_query($con, $sql);
    while($row=mysqli_fetch_assoc($chk_q)){
        $cq=mysqli_real_escape_string($con, $row['current_quantity']);
        $new_q = $cq + $n_q;
    }

    $sql1="UPDATE products SET product_quantity='$n_q', current_quantity='$new_q', date_added='$d' WHERE id='$id' ";
    $edit_q=mysqli_query($con, $sql1);
    
    if($edit_q){
        $alert_type = 'success';
        $alert_message = 'product updated successfully';
    }
}
?>