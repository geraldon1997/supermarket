
<?php

include '../../links/db.php';

if(isset($_GET['search'])){
    if(!empty($_GET['search_items'])){
        $item=mysqli_real_escape_string($con, $_GET['search_items']);
       

        $get_item=mysqli_query($con, "SELECT * FROM products WHERE product_name like '%$item%' or product_type like '%$item%' ");
        echo "<table class='table table-bordered table-striped'>";
        echo "<th class='text-center'>item</th>";
        echo "<th class='text-center'>quantity</th>";
        echo "<th class='text-center'>current quantity</th>";
        echo "<th class='text-center'>amount</th>";
        echo "<th class='text-center'>options</th>";
        if($row=mysqli_fetch_assoc($get_item)){
            $id=mysqli_real_escape_string($con, $row['id']);
            $it=mysqli_real_escape_string($con, $row['product_name']);
            $p=mysqli_real_escape_string($con, $row['selling_price']);
            $cq=mysqli_real_escape_string($con, $row['current_quantity']);
            
            
                      
            echo "<tr>";
            echo "<form action='index.php' method='post'>";
            echo "<td><input type='text' name='it' value='$it' class='form-control'></td>";
            if($cq == NULL){
              echo "<td><input type='number' name='q' placholder='quantity' class='form-control' max='$cq'></td>";
            } elseif($cq == 0){
                echo "<td>out of stock</td>";
            }else{
                echo "<td><input type='number' name='q' placholder='quantity' class='form-control' max='$cq'></td>";
            }
            
            if($cq < 10){ 
                echo "<td class='text-center'><b style='color:red;'>".$cq."</b></td>";
            }elseif($cq > 9){
                echo "<td class='text-center'><b style='color:green;'>".$cq."</b></td>";
            }
            
            echo "<td><input type='number' name='p' value='$p' class='form-control'></td>";
            if($cq == 0){
                echo "<td><input type='submit' class='btn btn-success' name='add' value='add to cart' disabled></td>";
            }else{
                echo "<td><input type='submit' class='btn btn-success' name='add' value='add to cart'></td>";
            }
            
            echo "</form>";
            echo "</tr>";
        }
        echo "</table>";
        echo "<hr>";
        
          
    }
    
}


?>