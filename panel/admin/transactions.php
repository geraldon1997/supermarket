<?php 
include 'layouts/master.php';
include '../../links/db.php';
startblock('content');

echo "<h4 class='page-title'>Transactions</h4>";

$sql="SELECT * FROM `transactions` ORDER BY id DESC";
    $view_tran=mysqli_query($con, $sql);
    echo "<table class='table table-bordered table-striped table-hover'>";
    echo "<th>invoice</th>";
    echo "<th>supplier</th>";
    echo "<th>product</th>";
    echo "<th>quantity</th>";
    echo "<th>date paid</th>";
    echo "<th>amount paid</th>";
    echo "<th>balance</th>";
    echo "<th>total</th>";

    while($row=mysqli_fetch_assoc($view_tran)){
        $invoice=mysqli_real_escape_string($con, $row['invoice']);
        $name=mysqli_real_escape_string($con, $row['supplier']);
        $product=mysqli_real_escape_string($con, $row['product']);
        $quantity=mysqli_real_escape_string($con, $row['quantity']);
        $date=mysqli_real_escape_string($con, $row['date_paid']);
        $amount_paid=mysqli_real_escape_string($con, $row['amount_paid']);
        $balance=mysqli_real_escape_string($con, $row['balance']);
        $total=mysqli_real_escape_string($con, $row['price']);
    
        echo "<tr>";
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

    $get_tprice=mysqli_query($con, "SELECT SUM(price) as tprice FROM transactions");
    $row=mysqli_fetch_assoc($get_tprice);
    $tprice=mysqli_real_escape_string($con, $row['tprice']);

    $get_tbal=mysqli_query($con, "SELECT SUM(balance) as tbal FROM transactions ");
    $row=mysqli_fetch_assoc($get_tbal);
    $tbal=mysqli_real_escape_string($con, $row['tbal']);

    $get_tpaid=mysqli_query($con, "SELECT SUM(amount_paid) as tpaid FROM transactions ");
    $row=mysqli_fetch_assoc($get_tpaid);
    $tpaid=mysqli_real_escape_string($con, $row['tpaid']);

    echo "<tr>";
    echo "<td colspan='5'><b>Total</b></td>";
    echo "<td><b>".$tpaid."</b></td>";
    echo "</tr>";
    echo "</table>";

 endblock() ?>