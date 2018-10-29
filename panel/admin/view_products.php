<?php
include '../../links/db.php';

$view_products=mysqli_query($con, "SELECT * FROM products");
    echo "<div class='table-responsive'>";
    echo "<table class='table table-striped table-bordered table-hover'>";
    echo "<th class='text-center'>Product name</th>";
    echo "<th class='text-center'>Product type</th>";
    echo "<th class='text-center'>description</th>";
    echo "<th class='text-center'>expiry date</th>";
    echo "<th class='text-center'>Initial Quantity</th>";
    echo "<th class='text-center'>current quantity</th>";
    echo "<th class='text-center'>supplier</th>";
    echo "<th class='text-center'>date added</th>";
    echo "<th class='text-center'>options</th>";
    
while($row=mysqli_fetch_assoc($view_products)){
    $id=mysqli_real_escape_string($con, $row['id']);
    $pn=mysqli_real_escape_string($con, $row['product_name']);
    $pt=mysqli_real_escape_string($con, $row['product_type']);
    $pd=mysqli_real_escape_string($con, $row['product_description']);
    $ped=mysqli_real_escape_string($con, $row['product_expiry_date']);
    $pq=mysqli_real_escape_string($con, $row['product_quantity']);
    $pc_q=mysqli_real_escape_string($con, $row['current_quantity']);
    $ps=mysqli_real_escape_string($con, $row['product_supplier']);
    $da=mysqli_real_escape_string($con, $row['date_added']);

    
    echo "<tr>";
    echo "<td>".$pn."</td>";
    echo "<td>".$pt."</td>";
    echo "<td>".$pd."</td>";
    echo "<td>".$ped."</td>";
    echo "<td>".$pq."</td>";
    if($pc_q < 10){
        echo "<td style='color:red;'>".$pc_q."</td>";
    }elseif($pc_q < 1){
        echo "<td style='color:red;'>out of stock</td>";
        
    }else{
        echo "<td style='color:green;'>".$pc_q."</td>";
    }
    echo "<td>".$ps."</td>";
    echo "<td>".$da."</td>";
    echo "<td><a href='#edit' onclick='passId($id)' data-toggle='modal'><i class='fa fa-edit btn btn-primary'></i></a>&nbsp   <a href='products.php?delete_product_id=$id'><i class='fa fa-trash btn btn-danger' style='color:white'></i></a></td>";
    echo "</tr>";
}
    echo "</table>";
    echo "</div>";
    

?>