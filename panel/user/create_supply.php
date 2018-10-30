<?php

include '../../links/db.php';

if(isset($_POST['create_supply']) && isset($_SESSION['username'])){
    if(!empty($_POST['supplier_name']) && !empty($_POST['product_supplied']) && !empty($_POST['quantity']) && !empty($_POST['price']) && !empty($_POST['invoice'])){

        $user=mysqli_real_escape_string($con, $_SESSION['username']);
        $supplier=mysqli_real_escape_string($con, $_POST['supplier_name']);
        $product=mysqli_real_escape_string($con, $_POST['product_supplied']);
        $quantity=mysqli_real_escape_string($con, $_POST['quantity']);
        $price=mysqli_real_escape_string($con, $_POST['price']);
        $invoice=mysqli_real_escape_string($con, $_POST['invoice']);

        $sql="CREATE TABLE IF NOT EXISTS `arrivals` (id INT(11) AUTO_INCREMENT PRIMARY KEY, recipient VARCHAR(20),supplier_name VARCHAR(40), product_supplied VARCHAR(40), quantity INT(11), balance INT(11), price INT(11), invoice INT(11), date_arrived VARCHAR(20), status VARCHAR(20)) ";
        $create_arrival=mysqli_query($con, $sql);

        if($create_arrival){
            $date=date('d/M/Y');
            $sql1="INSERT INTO `arrivals` (recipient,supplier_name,product_supplied,quantity,balance,price,
            invoice,date_arrived,status) 
            VALUES ('$user','$supplier','$product','$quantity','$price','$price','$invoice','$date','no payment') ";
            $add_supply=mysqli_query($con, $sql1);

            if($add_supply){    
                
                $alert_type = 'success';
                $alert_message = 'Supply created successfully';
            }
        }else{
            
            ;
        }
    }else{
        echo "didnt work";
    }
}
?>