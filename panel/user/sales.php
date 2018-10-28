<?php include 'layouts/master.php';?>

<?php startblock('content') ?>
<h4 class="page-title">Sales</h4>
        <div class="row">
            <div class="col-6 col-offset-3">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Sales</h4>
                        <p class="card-category"></p>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="get">
                            <input type="date" name="search_sales" id="" class="form-control" title="search for sales"/><br>
                            <input type="submit" value="search" name="search" class="btn btn-info">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">  
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"><i class="fa fa-bar-chart"></i>Report</h4>
                        <p class="card-category"></p>
                    </div>
                    <div class="card-body">
                        <div class="text-center table-responsive">

                            <?php include 'search_sales.php'; ?>
                        </div>
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
<?php endblock() ?>
