<?php
include 'layouts/master.php';

?>


<?php startblock('content') ?>
<div class="col-md-5 pull-left">
<?php include 'cart.php'; ?>
<?php include 'del_cart.php'; ?>
<?php include 'sell.php'; ?>
</div>

<div class="col-md-6 pull-right">

  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="get" class="well">
    
    <div class="form-group" >
      <div class="input-group" >
        <span class="input-group-addon" >
          <span class="glyphicon glyphicon-search" ></span>  
        </span>
        <input type="search" name="search_items" class="form-control" placeholder="search for items">
      </div>
    </div>

    <input type="submit" value="search" name="search" class="btn btn-primary btn-block" >

  </form>
  <hr>
<?php include 'search_items.php'; ?>
</div>

<style>
    .link:hover{
        text-decoration: none;
    }
</style>
<?php endblock() ?>

