<?php 
include '../../links/db.php';
if(isset($_GET['user_id'])){
    $id=mysqli_real_escape_string($con, $_GET['user_id']);
$view_pass=mysqli_query($con, "SELECT * FROM users WHERE id=$id ");
while($row=mysqli_fetch_assoc($view_pass)){
    $pass=mysqli_real_escape_string($con, $row['password']);
    $pass=base64_decode($pass);
    echo "<div class='alert alert-success'>";
    echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
    echo "<strong>".$pass."</strong>";
    echo "</div>";
}
}
?>