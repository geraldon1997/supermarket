<?php 
include 'layouts/master.php';
include '../../links/db.php';
?>

<?php startblock('content'); ?>

<h4 class='page-title'>Transactions</h4>
        <div class="row">
            <div class="col-6 col-offset-3" id="nt">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Search Transactions</h4>
                        <p class="card-category"></p>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="get">
                            <input type="number" name="search_trans" id="" class="form-control" title="search for transactions" placeholder="enter your invoice number here"><br>
                            <input type="submit" value="search" name="search" class="btn btn-info">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="print">  
            <div class="col-md-12">
                <div class="card" id="tr">
                    <div class="card-header">
                        <h4 class="card-title"><i class="fa fa-bar-chart"></i>Transactions</h4>
                        <p class="card-category"></p>
                    </div>
                    <div class="card-body">
                        <div class="container-fluid text-center table-responsive">

                            <?php include 'search_transactions.php'; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php  endblock() ?>