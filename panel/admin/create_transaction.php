<?php
include '../../links/db.php';

if(isset($_POST['create_transaction'])){
    if(!empty($_POST['t_s']) && !empty($_POST['t_pro']) && !empty($_POST['t_q']) && !empty($_POST['t_a']) && !empty($_POST['t_b']) && !empty($_POST['t_pri']) && !empty($_POST['t_i'])){
        
        $user=mysqli_real_escape_string($con, $_SESSION['username']);
        $t_s=mysqli_real_escape_string($con, $_POST['t_s']);
        $t_pro=mysqli_real_escape_string($con, $_POST['t_pro']);
        $t_q=mysqli_real_escape_string($con, $_POST['t_q']);
        $t_a=mysqli_real_escape_string($con, $_POST['t_a']);
        $t_b=mysqli_real_escape_string($con, $_POST['t_b']);
        $t_pri=mysqli_real_escape_string($con, $_POST['t_pri']);
        $t_i=mysqli_real_escape_string($con, $_POST['t_i']);

    $sql="CREATE TABLE IF NOT EXISTS `transactions` (id INT AUTO_INCREMENT PRIMARY KEY, creater VARCHAR(20),supplier VARCHAR(40), invoice INT(11), product VARCHAR(40), quantity INT(11), amount_paid INT(11), balance INT(11), price INT(11), date_paid VARCHAR(20)) ";
    $create_transaction_table=mysqli_query($con, $sql);
    
    if($create_transaction_table){
        if($t_a <= $t_b){
            if($t_a > 0){
                $new_balance = $t_b - $t_a ;
                $t_d=date('d/M/Y');

               
                $sql1="INSERT INTO `transactions` (creater,supplier,invoice,product,quantity,amount_paid,balance,price,date_paid) VALUES ('$user','$t_s','$t_i','$t_pro','$t_q','$t_a','$new_balance','$t_pri','$t_d') ";
                $insert_transaction=mysqli_query($con, $sql1);

            if($insert_transaction){
                
                $sql2="UPDATE `arrivals` SET `balance`='$new_balance' WHERE `invoice`='$t_i' ";
                $update_balance=mysqli_query($con, $sql2);
                
                if($new_balance == '0'){
                
                    $sql3="UPDATE `arrivals` SET `status`='fully paid' WHERE `invoice`='$t_i' ";
                    $update_status=mysqli_query($con, $sql3);
                
                }else{
                
                    $sql4="UPDATE `arrivals` SET `status`='part payment' WHERE `invoice`='$t_i' ";
                    $update_part_payment=mysqli_query($con, $sql4);
                
                }
                 $base_url.'panel/admin/supplies.php';
            }
        }elseif($t_a == 0){
            echo "please enter a valid amount";
        }else{
            echo "please enter a valid amount";
        }

        }else{
            echo "amount being paid cannot be higher than your current balance";
        }
    }
    

    }else{
        echo "please fill all fields";
    }
}

?>

