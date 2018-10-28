<?php 

include '../../links/db.php';
if(isset($_GET['sales_person']) && isset($_GET['invoice'])){
    $usr=mysqli_real_escape_string($con, $_GET['sales_person']);
    $invoice=mysqli_real_escape_string($con, $_GET['invoice']);
$sql="SELECT * FROM cart WHERE sales_person='$usr' ";
$get=mysqli_query($con, $sql);

echo "<a href='index.php?sales_person=$usr&invoice=$invoice' class='btn btn-default'>Dashboard</a>";

echo "<br><br><br>";
echo "<div class='col-md-8'>";

echo "<div class='text-center' style='font-family:georgia;'>";
 
echo "<p class='text-left'>".date('F d, Y').' | '.date('h:i:s').'&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Receipt :<b> #'.$invoice."</b></p>";
echo "<img src='../../assets/img/logo.png' width='150' >";
echo "<h5 style='color:darkblue;'><b>Bica Pharmaceuticals</b></h5>";
echo "<p>Ifite Awka, Anambra State.</p>";
echo "<h4><b>cashier : ".$usr."</b></h4>";

echo "<table class='table'>";
echo "<th class='text-center'>Items #</th>";
echo "<th class='text-center'>Quantity</th>";
echo "<th class='text-center'>Price</th>";

while($row=mysqli_fetch_assoc($get)){
$item=mysqli_real_escape_string($con, $row['item']);
$qty=mysqli_real_escape_string($con, $row['quantity']);
$price=mysqli_real_escape_string($con, $row['price']);


echo "<tr>";
echo "<td>".$item."</td>";
echo "<td>".$qty."</td>";
echo "<td>N ".$price."</td>";
echo "</tr>";
}
echo "</table>";

$ct=mysqli_query($con, "SELECT SUM(price) as total FROM cart WHERE sales_person='$usr' ");
$row=mysqli_fetch_assoc($ct);
$total=mysqli_real_escape_string($con, $row['total']);
echo "<h4><b>TOTAL &nbsp &nbsp N ".$total."</b></h4>";
echo "<hr>";
echo "<a class='btn btn-primary' onclick='print();'>print</a>";
echo "</div>";
echo "</div>";

}
?>