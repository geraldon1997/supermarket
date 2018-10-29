<?php
include 'layouts/master.php';
include '../../links/db.php';
if(isset($_GET['invoice'])){ 
    $iv=mysqli_real_escape_string($con, $_GET['invoice']);

    $sql="SELECT * FROM `arrivals` WHERE `invoice`='$iv' ";
    $get_arrivals=mysqli_query($con, $sql);

    while($row=mysqli_fetch_assoc($get_arrivals)){
        $su=mysqli_real_escape_string($con, $row['supplier_name']);
        $p=mysqli_real_escape_string($con, $row['product_supplied']);
        $q=mysqli_real_escape_string($con, $row['quantity']);
        $b=mysqli_real_escape_string($con, $row['balance']);
        $t=mysqli_real_escape_string($con, $row['price']);
        $iv=mysqli_real_escape_string($con, $row['invoice']);
    }
  
    
    
}
?>

<?php startblock('content') ?>
<h4 class="page-title">Create transaction</h4>
<?php include 'create_transaction.php'; ?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="col-8 offset-2 text-center">

    <div class="form-group form-inline">
		<label for="inlineinput" class="col-md-3 col-form-label">Supplier</label>
			<div class="col-md-9 p-0">
				<input type="text" class="form-control input-full" id="inlineinput" value="<?php echo $su ; ?>" name="t_s">
			</div>
	</div>

    <div class="form-group form-inline">
		<label for="inlineinput" class="col-md-3 col-form-label">Product supplied</label>
			<div class="col-md-9 p-0">
				<input type="text" class="form-control input-full" id="inlineinput" value="<?php echo $p ; ?>" name="t_pro">
			</div>
	</div>


    <div class="form-group form-inline">
		<label for="inlineinput" class="col-md-3 col-form-label">quantity</label>
			<div class="col-md-9 p-0">
				<input type="number" class="form-control input-full" id="inlineinput" value="<?php echo $q ; ?>" name="t_q">
			</div>
	</div>


    <div class="form-group form-inline">
		<label for="inlineinput" class="col-md-3 col-form-label">amount to be paid</label>
			<div class="col-md-9 p-0">
				<input type="number" class="form-control input-full" id="inlineinput" placeholder="enter amount you would like to pay" name="t_a">
			</div>
	</div>


    <div class="form-group form-inline">
		<label for="inlineinput" class="col-md-3 col-form-label">remaining balance</label>
			<div class="col-md-9 p-0">
				<input type="number" class="form-control input-full" id="inlineinput" value="<?php echo $b ; ?>" name="t_b">
			</div>
	</div>


    <div class="form-group form-inline">
		<label for="inlineinput" class="col-md-3 col-form-label">total price</label>
			<div class="col-md-9 p-0">
				<input type="number" class="form-control input-full" id="inlineinput" value="<?php echo $t ; ?>" name="t_pri">
			</div>
	</div>


    <div class="form-group form-inline">
		<label for="inlineinput" class="col-md-3 col-form-label">Invoice</label>
			<div class="col-md-9 p-0">
		    	<input type="number" class="form-control input-full" id="inlineinput" value="<?php echo $iv ; ?>" name="t_i">
			</div>
	</div>


<input type="submit" value="create transaction" name="create_transaction" class="btn btn-success">
</form>

<?php endblock() ?>