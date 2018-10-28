<?php
 
  #This code has several improvement opportunities, its just a sample.
 include '../../links/db.php';
 
  if(isset($_GET['sales_person']) && isset($_GET['invoice']))
  {
    #this line suffers from longlineittis, bad practice.
   #read about not null, decimal (10,2), int(11)
   $sql= "CREATE TABLE IF NOT EXISTS sales
          ( id INT PRIMARY KEY AUTO_INCREMENT, invoice VARCHAR(20), user VARCHAR(20),
            products_sold VARCHAR(40), sold_quantity INT,
            amount_sold INT, date_sold VARCHAR(10) ) ";
    $create_sales=mysqli_query($con, $sql);
 
    #prevent sql injection
   $usr=mysqli_real_escape_string($con,$_GET['sales_person']);
   $invoice=mysqli_real_escape_string($con, $_GET['invoice']);
    #declare this variable here, not down below, saving cycles.
   $date=date('Y-m-d');
    $get_from_cart=mysqli_query($con, "SELECT * FROM cart WHERE sales_person='".$usr."' ");
    while($row=mysqli_fetch_assoc($get_from_cart)){
      
      #this line is useless since we already have $user lines ago.
     #$user=$row['sales_person'];
     
      #escape this lines like $user, to prevent second order sql injection.
     $item=mysqli_real_escape_string($con,$row['item']);
      $sold=mysqli_real_escape_string($con,$row['quantity']);
      $amount=mysqli_real_escape_string($con,$row['price']);
     
      #would be nice to have an order id.  everyone buys only one item ?
     $sql3="INSERT INTO sales
            SET invoice='$invoice', 
                user='$usr',
                products_sold='$item',
                sold_quantity='$sold',
                amount_sold='$amount',
                date_sold='$date' ";
      $insert_into_sales=mysqli_query($con, $sql3);
      if($insert_into_sales){

        

        $sql4="SELECT * FROM products WHERE product_name='$item' ";
          $get_from_products=mysqli_query($con, $sql4);
          while($row=mysqli_fetch_assoc($get_from_products)){
            $i_q=mysqli_real_escape_string($con, $row['product_quantity']);
            $c_q=mysqli_real_escape_string($con, $row['current_quantity']);

                      
          }
          #cart record $id was changed to sales record
          
          $cu=$c_q - $sold ;
          $c_u=$i_q - $sold;

          if($c_q == !NULL){
            $sql7="UPDATE products SET current_quantity='$cu' WHERE product_name='$item' ";
            $insert_if_not_null=mysqli_query($con, $sql7);
            echo "no";
          }elseif($c_q == NULL){
            $sql8="UPDATE products SET current_quantity='$c_u' WHERE product_name='$item' ";
            $insert_if_null=mysqli_query($con, $sql8);
            echo "yesss";
          }
          $delete_cart=mysqli_query($con, "DELETE FROM cart WHERE sales_person='$usr' ");
          if($delete_cart){
            header('location:index.php');
         }
  

          }
        #delete JUST THAT row, if something happens, can be re executed and no duplication/data lost occurs
       
      }
    }
  
   
?>