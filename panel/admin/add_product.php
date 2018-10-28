<?php
include '../../links/db.php';

if(isset($_POST['add_product'])){
    if(!empty($_POST['p_name'])){
        if(!empty($_POST['p_type'])){
            if(!empty($_POST['p_desc'])){
                if(!empty($_POST['exp_date'])){
                    if(!empty($_POST['p_quantity'])){
                        if(!empty($_POST['supplier'])){
                            if(!empty($_POST['cp'])){
                                if(!empty($_POST['sp'])){
                                    
                            $create_table_products=mysqli_query($con, 
                            "CREATE TABLE IF NOT EXISTS products 
                            (id INT PRIMARY KEY AUTO_INCREMENT, product_name VARCHAR(20), 
                            product_type VARCHAR(20), product_description VARCHAR(40), 
                            product_expiry_date date, product_quantity INT, current_quantity INT, product_supplier VARCHAR(40), cost_price INT, selling_price INT, date_added VARCHAR(10)) ");

                            if($create_table_products){
                                $pn=mysqli_real_escape_string($con, $_POST['p_name']);
                                $pt=mysqli_real_escape_string($con, $_POST['p_type']);
                                $pd=mysqli_real_escape_string($con, $_POST['p_desc']);
                                $ed=mysqli_real_escape_string($con, $_POST['exp_date']);
                                $pq=mysqli_real_escape_string($con, $_POST['p_quantity']);
                                $su=mysqli_real_escape_string($con, $_POST['supplier']);
                                $cp=mysqli_real_escape_string($con, $_POST['cp']);
                                $sp=mysqli_real_escape_string($con, $_POST['sp']);
                                $da=date('d/m/Y');

                                $put_into_products=mysqli_query($con, "INSERT INTO products 
                                (product_name,product_type,product_description,product_expiry_date,product_quantity,product_supplier,cost_price,selling_price,date_added) 
                                VALUES ('$pn', '$pt', '$pd', '$ed', '$pq', '$su', '$cp', '$sp', '$da') ");

                                        if($put_into_products){
                                            echo "<div class='alert alert-success'>
                                                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                                    <span class='text-center'>product added successfully</span>
                                                </div>";
                                        }else{
                                            echo    "<div class='alert alert-danger'>
                                                        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                                        <span class='text-center'>product not added</span>
                                                    </div>";
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}

?>