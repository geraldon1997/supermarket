<?php 

include '../../links/db.php';

$alert_type = '';

$alert_message = '';

if(isset($_GET['search'])){
    if(!empty($_GET['search_sales'])){
        $search=mysqli_real_escape_string($con, $_GET['search_sales']);
        $get_sales=mysqli_query($con, "SELECT * FROM sales WHERE date_sold like '%$search%' ORDER BY date_sold DESC ");
        echo "<div class='table-responsive'>";
        echo "<table class='table table-bordered table-responsive table-striped table-hover'>";  
        echo "<th class='text-center'>cashier</th>";
        echo "<th class='text-center'>receipt no</th>";
        echo "<th class='text-center'>product sold</th>";
        echo "<th class='text-center'>quantity sold</th>";
        echo "<th class='text-center'>amount</th>";
        echo "<th class='text-center'>date sold</th>";
        echo "<th class='text-center'>options</th>";
    while($row=mysqli_fetch_assoc($get_sales)){
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
        echo "<td>".$q."</td>";
        echo "<td>N".$a."</td>";
        echo "<td>".$d."</td>";
        echo "<td>"."<a href='../user/receipt.php' target='_blank' class='btn btn-info'><i class='fa fa-eye'></i> view</a>&nbsp"."&nbsp<a href='sales.php?id=$id' class='btn btn-danger'><i class='fa fa-trash'></i> delete</a>"."</td>";
        echo "</tr>";

        }
        $result=mysqli_query($con, "SELECT SUM(amount_sold) AS total FROM sales WHERE date_sold='$search' ");
        $row=mysqli_fetch_assoc($result);
        echo "<tr>";
        echo "<th>Total</th>";
        echo "<td></td>";
        echo "<td></td>";
        echo "<th>".$total=$row['total']."</th>";
        echo "<td></td>";
        echo "<td></td>";
        echo "</tr>";

        echo "</table>";
        echo "</div>";

    }else{
        $alert_type = 'warning';
        $alert_message = 'Search box cannot be empty';
        // echo "<div class='alert alert-warning'>
        //         <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        //         <span class='text-center'>THE SEARCH BOX CANNOT BE EMPTY</span>
        //       </div>";
    }
}else{
    $alert_type = 'info';
    $alert_message = 'Fill the search box to get sales report';
        // echo "<div class='alert alert-info'>
        //         <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        //         <span class='text-center'>FILL THE SEARCH BOX TO GET SALES REPORT</span>
        //       </div>";
}
// die($alert_message);
?>
