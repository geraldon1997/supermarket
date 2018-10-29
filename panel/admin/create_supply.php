<?php

include '../../links/db.php';

if(isset($_POST['create_supply'])){
    if(!empty($_POST['supplier_name']) && !empty($_POST['product_supplied']) && !empty($_POST['quantity']) && !empty($_POST['price']) && !empty($_POST['invoice'])){

        $supplier=mysqli_real_escape_string($con, $_POST['supplier_name']);
        $product=mysqli_real_escape_string($con, $_POST['product_supplied']);
        $quantity=mysqli_real_escape_string($con, $_POST['quantity']);
        $price=mysqli_real_escape_string($con, $_POST['price']);
        $invoice=mysqli_real_escape_string($con, $_POST['invoice']);

        $sql="CREATE TABLE IF NOT EXISTS `arrivals` (id INT(11) AUTO_INCREMENT PRIMARY KEY, supplier_name VARCHAR(40), product_supplied VARCHAR(40), quantity INT(11), balance INT(11), price INT(11), invoice INT(11), date_arrived VARCHAR(20), status VARCHAR(20)) ";
        $create_arrival=mysqli_query($con, $sql);

        if($create_arrival){
            $date=date('d/M/Y');
            $sql1="INSERT INTO `arrivals` (supplier_name,product_supplied,quantity,balance,price,
            invoice,date_arrived,status) 
            VALUES ('$supplier','$product','$quantity','$price','$price','$invoice','$date','no payment') ";
            $add_supply=mysqli_query($con, $sql1);

            if($add_supply){    
                echo "supply created";
            }
        }else{
            
            ;
        }
    }else{
        echo "didnt work";
    }
}
?>