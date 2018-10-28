<?php 

include 'db.php';
session_start();
if(isset($_POST['login'])){
    if(!empty($_POST['user'])){
        if(!empty($_POST['pass'])){
            $user=mysqli_real_escape_string($con, $_POST['user']);
            $pass=mysqli_real_escape_string($con, $_POST['pass']);

                $pass=base64_encode($pass);
                $sql1="SELECT * FROM users WHERE username='$user' AND password='$pass' LIMIT 1 ";
                $chkdb=mysqli_query($con, $sql1);

                if($chkdb){
                    if(mysqli_num_rows($chkdb) > 0){
                        while($row=mysqli_fetch_assoc($chkdb)){
                            $ps=$row['position'];

                            if($ps == 'cashier'){
                                echo "<h1 style='color:green;'><i class='fa fa-refresh fa-spin'></i> REDIRECTING</h1>";
                                header('refresh:3 url=panel/user');
                                $_SESSION['username']=$user;
                            }elseif($ps == 'admin'){
                                echo "<h1 style='color:green;'><i class='fa fa-refresh fa-spin'></i> REDIRECTING</h1>";
                                header('refresh:3 url=panel/admin');
                                $_SESSION['username']=$user;   
                            }
                        }
                    }else{
                        echo "<h1>you are not a user on this platform</h1>";
                    }
                }
            

        }
    }
}