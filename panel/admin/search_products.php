<?php
include '../../links/db.php';

if(isset($_GET['search'])){
    if(!empty($_GET['search_products'])){
        $sp=mysqli_real_escape_string($con, $_GET['search_products']);
        $s_p=mysqli_query($con, "SELECT * FROM products WHERE  product_name like '%$sp%' or product_type like '%$sp%' 
        or product_description like '%$sp%'  ");
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
        while($row=mysqli_fetch_assoc($s_p)){
            $id=mysqli_real_escape_string($con, $row['id']);
            $pn=mysqli_real_escape_string($con, $row['product_name']);
            $pt=mysqli_real_escape_string($con, $row['product_type']);
            $pd=mysqli_real_escape_string($con, $row['product_description']);
            $ped=mysqli_real_escape_string($con, $row['product_expiry_date']);
            $pq=mysqli_real_escape_string($con, $row['product_quantity']);
            $ps=mysqli_real_escape_string($con, $row['product_supplier']);
            $da=mysqli_real_escape_string($con, $row['date_added']);
            $rq=mysqli_real_escape_string($con, $row['current_quantity']);

            echo "<tr>";
            echo "<td>".$pn."</td>";
            echo "<td>".$pt."</td>";
            echo "<td>".$pd."</td>";
            echo "<td>".$ped."</td>";
            echo "<td>".$pq."</td>";
            if($rq > 9){
                echo "<td style='color:green;'>".$rq."</td>";
            }elseif($rq < 10){
                echo "<td style='color:red;'>".$rq."</td>";
            }
            
            echo "<td>".$ps."</td>";
            echo "<td>".$da."</td>";
            echo "<td><a href='#edit' onclick='passId($id)' data-toggle='modal'><i class='fa fa-edit fa-fw'></i></a>  &nbsp   <a href='products.php?delete_product_id=$id'><i class='fa fa-trash' style='color:red'></i></a></td>";
            echo "</tr>";
        }
            echo "</table>";
            echo "</div>";
    }else{
        include 'view_products.php';
    }
}else{
    include 'view_products.php';
}
?>