<?php
include '../../links/db.php';

$view_users=mysqli_query($con, "SELECT * FROM users");
    echo "<div class='table-responsive'>";
    echo "<table class='table table-bordered table-hover table-striped'>";
    echo "<th class='text-center'>name</th>";
    echo "<th class='text-center'>username</th>";
    echo "<th class='text-center'>phone number</th>";
    echo "<th class='text-center'>date created</th>";
    echo "<th class='text-center'>options</th>";
while($row=mysqli_fetch_assoc($view_users)){
    $id=mysqli_real_escape_string($con, $row['id']);
    $name=mysqli_real_escape_string($con, $row['fullname']);
    $usr=mysqli_real_escape_string($con, $row['username']);

    echo "<tr>";  
    echo "<td>".$name."</td>";
    echo "<td>".$usr."</td>";
    echo "<td>".$row['phone']."</td>";
    echo "<td>".$row['date_added']."</td>";
    echo "<td><a href='#edit' onclick='passId($id)' data-toggle='modal' title='edit users info' class='btn btn-primary'><i class='fa fa-edit'></i></a> &nbsp <a href='users.php?id=$id' title='delete user' class='btn btn-danger'><i class='fa fa-trash'></i></a> &nbsp <a href='users.php?user_id=$id' title='view users password' class='btn btn-info'><i class='fa fa-eye'></i></a></td>";    
    echo "</tr>";
}
    echo "</table>"; 
    echo "</div>";
?>