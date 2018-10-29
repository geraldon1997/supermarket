<?php 

include 'layouts/master.php';

startblock('content');?>

<h4 class="page-title">Supplies</h4>
<button data-target="#add_supplier" data-toggle="modal" class="btn btn-info">Add Supplier</button>
<button data-target="#create_supply" data-toggle="modal" class="btn btn-primary">Create Supply</button>
<hr>
<?php include 'add_supplier.php'; ?>
<?php include 'create_supply.php'; ?>
<?php include 'view_supply.php'; ?>



<div id="add_supplier" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content text-center">
      <div class="modal-header">
      <h4 class="modal-title">ADD SUPPLIER</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <input type="text" name="supplier" id="" placeholder="Supplier's Name" class="form-control">
                <hr>
            <input type="submit" value="add supplier" name="add_supplier" class="btn btn-primary">
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<div id="create_supply" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content text-center">
      <div class="modal-header">
      <h4 class="modal-title">CREATE SUPPLY</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

        <div class="form-group">    
          <select name="supplier_name" id="" class="form-control">
              <option value="choose a supplier">choose a supplier</option>
                  <?php
                      $sql="SELECT * FROM `suppliers` ";
                      $get=mysqli_query($con, $sql);

                  while($row=mysqli_fetch_assoc($get)){
                      $name=mysqli_real_escape_string($con, $row['name']);
                  echo "<option>".$name."</option><br>";
                  }
                  ?>
          </select>
        </div>

        <div class="form-group">
          <input type="text" name="product_supplied" id="" class="form-control" placeholder="product supplied">
        </div>

        <div class="form-group">
          <input type="number" name="quantity" id="" class="form-control" placeholder="quantity supplied">
        </div>

        <div class="form-group">
          <input type="number" name="price" id="" class="form-control" placeholder="total price">
        </div>

        <div class="form-group">
          <input type="hidden" name="invoice" id="" value="<?php echo rand(111111, 999999); ?>" class="form-control">
        </div>

          <input type="submit" value="create supply" name="create_supply" class="btn btn-primary">

        </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<?php endblock(); ?>



