<?php 

include '../../links/db.php';

if(isset($_GET['invoice'])){
    $iv=mysqli_real_escape_string($con, $_GET['invoice']);
    

    $sql="SELECT * FROM `transactions` WHERE `invoice`='$iv' ";
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

    echo "</table>";
}

?>