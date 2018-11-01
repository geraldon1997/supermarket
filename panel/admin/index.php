<?php include 'layouts/master.php';?>

<?php startblock('content') ?>
<h4 class="page-title">Dashboard</h4>
        <div class="row">
            <a href="<?php echo $base_url?>panel/admin/users.php" class="col-md-3 link">
                <div class="card card-stats card-warning">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5">
                                <div class="icon-big text-center">
                                    <i class="la la-users"></i>
                                </div>
                            </div>
                            <div class="col-7 d-flex align-items-center">
                                <div class="numbers">
                                    <p class="card-category">Staffs</p>
                                    <h4 class="card-title">
                                    <?php echo $users ?>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="<?php echo $base_url?>panel/admin/sales.php" class="col-md-3 link">
                <div class="card card-stats card-success">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5">
                                <div class="icon-big text-center">
                                    <i class="la la-bar-chart"></i>
                                </div>
                            </div>
                            <div class="col-7 d-flex align-items-center">
                                <div class="numbers">
                                    <p class="card-category">Daily Sales</p>
                                    <h4 class="card-title">
                                    <?php echo $daily_sales?>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="<?php echo $base_url?>panel/admin/products.php" class="col-md-3 link">
                <div class="card card-stats card-danger">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <div class="icon-big text-center">
                                    <i class="la la-newspaper-o"></i>
                                </div>
                            </div>
                            <div class="col-7 d-flex align-items-center">
                                <div class="numbers">
                                    <p class="card-category">Products</p>
                                    <h4 class="card-title">
                                    <?php echo $products ?>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</a>
            <a href="<?php echo $base_url?>panel/admin/sales.php" class="col-md-3 link">
                <div class="card card-stats card-primary">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5">
                                <div class="icon-big text-center">
                                    <i class="la la-check-circle"></i>
                                </div>
                            </div>
                            <div class="col-7 d-flex align-items-center">
                                <div class="numbers">
                                    <p class="card-category">Total Sales</p>
                                    <h4 class="card-title">
                                    <?php echo $total_sales; ?>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</a>
            
        </div>
        <div class="row">
            <div class="col-12 text-center">
            <p>Bica Pharmaceuticals</p>

            <p>Ifite Awka, Anambra State.</p>
            <p>1234567890</p>

            <p>E-mail: support@bicapharmaceuticals.com</p>

            <p>Place your Orders Online:https://www.bicapharmaceuticals.com</p>
</div>
        </div>
<style>
    .link:hover{
        text-decoration: none;
    }
</style>
<?php endblock() ?>                   
