<?php
include 'layouts/master.php';
include '../../links/db.php';
 startblock('content') ;
if(isset($_GET['invoice'])){
    $iv=mysqli_real_escape_string($con, $_GET['invoice']);

    $sql="SELECT * FROM sales WHERE invoice='$iv' ";
    $view_sale=mysqli_query($con, $sql);

    echo "<table class='table table-bordered table-striped table-hover table-head-bg-primary'>";
    echo "<th>cashier</th>";
    echo "<th>invoice</th>";
    echo "<th>product</th>";
    echo "<th>price</th>";
    echo "<th>date</th>";

    while($row=mysqli_fetch_assoc($view_sale)){
        $id=mysqli_real_escape_string($con, $row['id']);
        $u=mysqli_real_escape_string($con, $row['user']);
        $p=mysqli_real_escape_string($con, $row['products_sold']);
        $q=mysqli_real_escape_string($con, $row['sold_quantity']);
        $a=mysqli_real_escape_string($con, $row['amount_sold']);
        $d=mysqli_real_escape_string($con, $row['date_sold']);
        $in=mysqli_real_escape_string($con, $row['invoice']);

        echo "<tr>";
        echo "<td>".$u."</td>";
        echo "<td>".$in."</td>";
        echo "<td>".$p."</td>";
        echo "<td>".$a."</td>";
        echo "<td>".$d."</td>";
        echo "</tr>";
        
    }

    $total=mysqli_query($con, "SELECT SUM(amount_sold) as total FROM sales WHERE invoice='$iv' ");
    $row=mysqli_fetch_assoc($total);

    $t=mysqli_real_escape_string($con, $row['total']);

    echo "<td colspan='3'><strong>Total</strong></td>";
    echo "<td colspan='2'>".$t."</td>";
    echo "</table>";
}
endblock();
?>