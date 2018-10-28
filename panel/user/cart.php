<?php 

include '../../links/db.php';

if(isset($_POST['add'])){
    if(!empty($_POST['it'])){
        if(!empty($_POST['q'])){
            if(!empty($_POST['p'])){
                

                $it=mysqli_real_escape_string($con, $_POST['it']);
                $q=mysqli_real_escape_string($con, $_POST['q']);
                $p=mysqli_real_escape_string($con, $_POST['p']);

                $create_cart=mysqli_query($con, "CREATE TABLE IF NOT EXISTS cart(sales_person VARCHAR(20), item VARCHAR(40), quantity INT, price INT) ");
                if($create_cart){
                  
                            $price = $q * $p;
                            $add_to_cart=mysqli_query($con, "INSERT INTO cart (sales_person,item,quantity,price) VALUES ('$usr', '$it', '$q', '$price') ");
                            if($add_to_cart){
                                include 'view_cart.php';
                            }else{
                                include 'view_cart.php';
                            }
                                         
                    
                
            }
        }
        }else{
            include 'view_cart.php';
        }
    }
}else{
    include 'view_cart.php';
}

?>