<?php

include '../../links/db.php';

$sql="SELECT * FROM `suppliers` ";
$get=mysqli_query($con, $sql);
echo "<table class='table table-bordered table-striped table-hover>";
while($row=mysqli_fetch_assoc($get)){
    $id=mysqli_real_escape_string($con, $row['id']);
    $name=mysqli_real_escape_string($con, $row['name']);
    $date=mysqli_real_escape_string($con, $row['date_added']);

    echo "<tr>";
    echo "<td><a href='create_supply.php' data-toggle='' data-target='' >create supply</a></td>";
    echo "</tr>";
}
echo "</table>";
?>