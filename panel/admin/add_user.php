<?php 
include '../../links/db.php';

if(isset($_POST['add_user'])){
    if(!empty($_POST['fullname'])){
        if(!empty($_POST['user'])){
            if(!empty($_POST['pass'])){
                if(!empty($_POST['state'])){
                    if(!empty($_POST['town'])){
                        if(!empty($_POST['village'])){
                            if(!empty($_POST['residence_addr'])){
                                if(!empty($_POST['dob'])){
                                    if(!empty($_POST['tel'])){
                                        if(!empty($_POST['position'])){

                                            $fn=mysqli_real_escape_string($con, $_POST['fullname']);
                                            $usr=mysqli_real_escape_string($con, $_POST['user']);
                                            $ps=mysqli_real_escape_string($con, $_POST['pass']);
                                            $st=mysqli_real_escape_string($con, $_POST['state']);
                                            $tn=mysqli_real_escape_string($con, $_POST['town']);
                                            $vi=mysqli_real_escape_string($con, $_POST['village']);
                                            $rs=mysqli_real_escape_string($con, $_POST['residence_addr']);
                                            $db=mysqli_real_escape_string($con, $_POST['dob']);
                                            $tel=mysqli_real_escape_string($con, $_POST['tel']);
                                            $pos=mysqli_real_escape_string($con, $_POST['position']);
                                            $da=mysqli_real_escape_string($con, date('d/m/Y'));
                                            

                                            $create_users_table=mysqli_query($con, "CREATE TABLE IF NOT EXISTS `users`
                                            (id INT PRIMARY KEY AUTO_INCREMENT, fullname VARCHAR(40), username VARCHAR(20), 
                                            password VARCHAR(20), state VARCHAR(20), town VARCHAR(20), village VARCHAR(20), 
                                            house_address VARCHAR(100), date_of_birth VARCHAR(10), phone VARCHAR(20), 
                                            position VARCHAR(20), date_added VARCHAR(10)) ");
                                            
                                            if($create_users_table){
                                                
                                                $sql="SELECT * FROM users WHERE username='$usr' ";
                                                $chk_users=mysqli_query($con, $sql);
                                                
                                                if(mysqli_num_rows($chk_users) < 1){
                                                    
                                                    $pass=base64_encode($ps);
                                                    $sql1="INSERT INTO users (fullname,username,password,state,town,village,
                                                    house_address,date_of_birth,phone,position,date_added) VALUES 
                                                    ('$fn','$usr','$pass','$st','$tn','$vi','$rs','$db','$tel','$pos','$da') ";
                                                    $add_user=mysqli_query($con, $sql1);
                                                    
                                                    if($add_user){
                                                        echo "<div class='alert alert-success'>
                                                                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                                                <h1 class='text-center'>user added</h1>
                                                            </div>";    
                                                    }

                                                }else{
                                                    echo "<div class='alert alert-warning'>
                                                            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                                            <h1 class='text-center'>username already exists</h1>
                                                        </div>";
                                                }

                                            }else{
                                                echo "<h1 class='text-center' style='color:orange;'>table could not be created</h1>";
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
}

?>