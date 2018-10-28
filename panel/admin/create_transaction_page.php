<?php
include '../../links/db.php';
if(isset($_GET['invoice'])){
    $iv=mysqli_real_escape_string($con, $_GET['invoice']);

    $sql="SELECT * FROM `arrivals` WHERE `invoice`='$iv' ";
    $get_arrivals=mysqli_query($con, $sql);

    while($row=mysqli_fetch_assoc($get_arrivals)){
        $su=mysqli_real_escape_string($con, $row['supplier_name']);
        $p=mysqli_real_escape_string($con, $row['product_supplied']);
        $q=mysqli_real_escape_string($con, $row['quantity']);
        $b=mysqli_real_escape_string($con, $row['balance']);
        $t=mysqli_real_escape_string($con, $row['price']);
        $iv=mysqli_real_escape_string($con, $row['invoice']);
    }
  
    
    
}
?>

<form action="create_transaction.php" method="post">
<input type="text" name="t_s" id="" value="<?php echo $su; ?>" >
<input type="text" name="t_pro" id="" value="<?php echo $p; ?>" >
<input type="number" name="t_q" id="" value="<?php echo $q; ?>" >
<input type="number" name="t_a" id="" value="5">
<input type="number" name="t_b" id="" value="<?php echo $b; ?>" >
<input type="number" name="t_pri" id="" value="<?php echo $t; ?>" >
<input type="number" name="t_i" id="" value="<?php echo $iv; ?>" >
<input type="submit" value="create transact" name="create_transaction" >
</form>


<a href="create_transaction.php">create transaction</a> |
<a href="create_supply.php">create supply</a> |
<a href="view_suppliers.php">view suppliers</a> |
<a href="add_supplier.php">add supplier</a> |
<a href="delete_supplier.php">delete supplier</a> |
<a href="create_transaction_page.php">create transaction</a> |
<a href="view_transactions.php">view transactions</a> |
<a href="view_supply.php">view supply</a> |
<a href="delete_transaction.php">delete transaction</a> |