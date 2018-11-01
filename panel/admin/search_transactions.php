<?php

if(isset($_GET['search']) && !empty($_GET['search_trans'])){
    $search=mysqli_real_escape_string($con, $_GET['search_trans']);

$sql="SELECT * FROM `transactions` WHERE `invoice` like '%$search%'  ";
    $view_tran=mysqli_query($con, $sql);

    if(mysqli_num_rows($view_tran) !== 0){
    echo "<table class='table table-bordered table-striped table-hover' >";
    echo "<th>created by</th>";
    echo "<th>invoice</th>";
    echo "<th>supplier</th>";
    echo "<th>product</th>";
    echo "<th>quantity</th>";
    echo "<th>date paid</th>";
    echo "<th>amount paid</th>";
    echo "<th>balance</th>";
    echo "<th>total</th>";

    while($row=mysqli_fetch_assoc($view_tran)){
        $cr=mysqli_real_escape_string($con, $row['creater']);
        $invoice=mysqli_real_escape_string($con, $row['invoice']);
        $name=mysqli_real_escape_string($con, $row['supplier']);
        $product=mysqli_real_escape_string($con, $row['product']);
        $quantity=mysqli_real_escape_string($con, $row['quantity']);
        $date=mysqli_real_escape_string($con, $row['date_paid']);
        $amount_paid=mysqli_real_escape_string($con, $row['amount_paid']);
        $balance=mysqli_real_escape_string($con, $row['balance']);
        $total=mysqli_real_escape_string($con, $row['price']);
    
        echo "<tr>";
        echo "<td>".$cr."</td>";
        echo "<td>".$invoice."</td>";
        echo "<td>".$name."</td>";
        echo "<td>".$product."</td>";
        echo "<td>".$quantity."</td>";
        echo "<td>".$date."</td>";
        echo "<td>".$amount_paid."</td>";
        echo "<td>".$balance."</td>";
        echo "<td>".$total."</td>";
        echo "</tr>";
    }

    $get_tpaid=mysqli_query($con, "SELECT SUM(amount_paid) as tpaid FROM transactions WHERE invoice='$search' ");
    $row=mysqli_fetch_assoc($get_tpaid);
    $tpaid=mysqli_real_escape_string($con, $row['tpaid']);

    echo "<tr>";
    echo "<td colspan='6'><b>Total</b></td>";
    echo "<td colspan='3'><b>".$tpaid."</b></td>";
    echo "</tr>";
    echo "</table>";
    echo "<a class='btn btn-primary' onclick='print();' style='color:white;'>print</a>";
}else{
    echo "<p style='color:red;'>No transaction was found for #".$search."</p>";
}
}
?>

<style>

@media print{
    .btn{
        display:none;
    }
    div .sidebar{
        display:none;
        max-width:10%;
    }
    div .main-header{
        display:none;
    }
    div .row{
        display:none;
    }   
    div .print{
        min-width:1024px;
        margin:0px;
    }
    footer{
        display:none;
    }
    h4{
        display:none;
    }
}

</style>