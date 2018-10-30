<?php include 'layouts/master.php';?>

<?php startblock('content') ?>
<h4 class="page-title"> Products</h4>
<button style="margin-left: 20px" data-target="#add_product" data-toggle="modal" class="btn btn-info">Add Product</button>
<hr>
<!-- Modal -->
<div id="add_product" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title text-center">ADD PRODUCTS</h4>
        <button type="button" class="close" data-dismiss="modal" style="color:red;">&times;</button>
        
      </div>
      <div class="modal-body text-center">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon">
                <span class="fa fa-user"></span>
              </span>
              <input type="text" name="p_name" id="" class="form-control" placeholder="product name" required>
            </div>
          </div>

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon">
                <span class="fa fa-user"></span>
              </span>
              <input type="text" name="p_type" id="" class="form-control" placeholder="product type" required>
            </div>
          </div>

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon">
                <span class="fa fa-user"></span>
              </span>
              <input type="text" name="p_desc" id="" class="form-control" placeholder="product description" required>
            </div>
          </div>

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon">
                <span class="fa fa-user"></span>
              </span>
              <input type="date" name="exp_date" id="" class="form-control" title="product expiry date" required>
            </div>
          </div>

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon">
                <span class="fa fa-expeditedssl"></span>
              </span>
              <input type="number" name="p_quantity" id="" class="form-control" placeholder="product quantity" required>
            </div>
          </div>

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon">
                <span class="fa fa-user"></span>
              </span>
              <input type="text" name="supplier" id="" class="form-control" placeholder="Supplier's name" required>
            </div>
          </div>

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon">
                <span class="fa fa-user"></span>
              </span>
              <input type="number" name="cp" id="" class="form-control" placeholder="Cost price" required>
            </div>
          </div>

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon">
                <span class="fa fa-user"></span>
              </span>
              <input type="number" name="sp" id="" class="form-control" placeholder="Selling price" required>
            </div>
          </div>

          <input type="submit" name="add_product" value="ADD" class="btn btn-success">

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<?php include 'edit_product.php'; ?>
<!-- Modal -->
<div id="edit" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content text-center">
      <div class="modal-header">
      <h4 class="modal-title">EDIT PRODUCT</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
          <input type="number" name="new_quantity" id="" title="add quantity" placeholder="new quantity" class="form-control">
          <input type="hidden" name="edit_id" id="edit_id">
          <br>
          <input type="submit" value="update" name="update_quantity" class="btn btn-primary">
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- /.row -->

<div class="col-md-6 ">
  <?php include 'add_product.php'; ?>

  <?php include 'delete_product.php'; ?>
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Products</h4>
      <p class="card-category"></p>
    </div>
    <div class="card-body">
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="get" class="">
        <input type="search" name="search_products" id="" class="form-control" placeholder="search for products">
        <br>
        <input type="submit" value="search" name="search" class="btn btn-primary">
        <br>
        <br>
      </form>
    </div>
  </div>
</div>
<div class="col-md-12">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">
        &nbsp;&nbsp;&nbsp; Products Listing</h4>
      <p class="card-category"></p>
    </div>
    <div class="card-body">
      <div class="text-center table-responsive">

        <?php include 'search_products.php'; ?>
      </div>
    </div>
  </div>
</div>



<?php endblock() ?>

<?php startblock('myscripts') ?>
<?php if ($alert_type != ''){?>
    <script>
        $.notify({
            icon: 'la la-bell',
            title: 'Note',
            message: '<?php echo $alert_message?>',
        },{
            type: '<?php echo $alert_type?>',
            placement: {
                from: "top",
                align: "right"
            },
            time: 1000,
        });
    </script>
    <?php }?>
<script>
    function passId(id){
        $("#edit_id").val(id);
        // alert(id);
    }
</script>
<?php endblock() ?>

