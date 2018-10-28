<?php

include '../../links/db.php';
if(isset($_POST['add_supplier'])){
    if(!empty($_POST['supplier'])){
        $supplier=mysqli_real_escape_string($con, $_POST['supplier']);

        $sql="CREATE TABLE IF NOT EXISTS `suppliers` (id INT(11) AUTO_INCREMENT PRIMARY KEY, 
        name VARCHAR(20), date_added VARCHAR(20)) ";
        $make_supplier_table=mysqli_query($con, $sql);

        if($make_supplier_table){
            $sql1="SELECT * FROM `suppliers` WHERE `name`='$supplier' ";
            $chk_supplier_table=mysqli_query($con, $sql1);

            if(mysqli_num_rows($chk_supplier_table) < 1){
                $date=date('d/M/Y');
                $sql2="INSERT INTO `suppliers` (name,date_added) VALUES ('$supplier','$date') ";
                $add_supplier=mysqli_query($con, $sql2);

                if($add_supplier){
                    echo "supplier added successfully";
                }
            }else{
                echo "supplier already exists";
            }
        }
    }
}

?>

<form action="add_supplier.php" method="post">
<input type="text" name="supplier" id="">
<input type="submit" value="add supplier" name="add_supplier">
</form>