<?php include 'ti.php';?>
<?php include '../../config.php';?>
<?php
session_start();
include $directory."links/db.php";
if(!isset($_SESSION['username'])){
    header("location: ".$directory."index.php");
}
$user=mysqli_real_escape_string($con, $_SESSION['username']);
?>
<!DOCTYPE html>
<html>
    <?php include 'headmeta.php' ?>

    <body>
        <div class="wrapper">
            <?php include 'header.php' ?>
            <?php include 'sidebar.php' ?>
            <div class="main-panel">
			<div class="content">
				<div class="container-fluid">
                    <?php startblock('content') ?>
                    <?php endblock() ?>
                </div>
				</div>
			</div>
			<?php include 'footer.php' ?>
		</div>
	</div>
            

            <?php include 'footmeta.php' ?>
            <?php startblock('myscripts') ?>
            <?php endblock() ?>
    </body>

</html>