<?php 

include '../../links/db.php';

$sql="SELECT * FROM `arrivals` ORDER BY `id` DESC";
$show_supply=mysqli_query($con, $sql);

echo "<table class='table table-bordered table-striped table-hover'>";

echo "<th>supplier</th>";
echo "<th>product</th>";
echo "<th>quantity</th>";
echo "<th>balance</th>";
echo "<th>total</th>";
echo "<th>invoice</th>";
echo "<th>date added</th>";
echo "<th>status</th>";
echo "<th>options</th>";

while($row=mysqli_fetch_assoc($show_supply)){
    $id=mysqli_real_escape_string($con, $row['id']);
    $sn=mysqli_real_escape_string($con, $row['supplier_name']);
    $ps=mysqli_real_escape_string($con, $row['product_supplied']);
    $q=mysqli_real_escape_string($con, $row['quantity']);
    $b=mysqli_real_escape_string($con, $row['balance']);
    $p=mysqli_real_escape_string($con, $row['price']);
    $iv=mysqli_real_escape_string($con, $row['invoice']);
    $da=mysqli_real_escape_string($con, $row['date_arrived']);
    $st=mysqli_real_escape_string($con, $row['status']);

    echo "<tr>";
    
    echo "<td>".$sn."</td>";
    echo "<td>".$ps."</td>";
    echo "<td>".$q."</td>";
    echo "<td>".$b."</td>";
    echo "<td>".$p."</td>";
    echo "<td>".$iv."</td>";
    echo "<td>".$da."</td>";
    echo "<td>".$st."</td>";
    

    if($st == "fully paid"){
        echo "<td><a href='view_transactions.php?invoice=$iv' class='btn success'>view transactions</a></td>";
    }else{
        echo "<td><a href='create_transaction_page.php?invoice=$iv' class='btn' >create transaction</a></td>";
    }

    echo "</tr>";

}
echo "</table>";
?>