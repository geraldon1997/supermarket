<?php
// suppliers
	$d = date('Y-m-d');
	$no_supplies = mysqli_query($con, "SELECT * FROM arrivals WHERE recipient='$user' ");
	$num_supplies = mysqli_num_rows($no_supplies);
//sales
	$d = date('Y-m-d');
	$raw_sales = mysqli_query($con, "SELECT * FROM sales WHERE date_sold='$d' ");
	$daily_sales = mysqli_num_rows($raw_sales);
// products
	$p=mysqli_query($con, "SELECT * FROM products");
	$products = mysqli_num_rows($p);
//total sales
	$ts=mysqli_query($con, "SELECT * FROM sales");
	$total_sales = mysqli_num_rows($ts);
// total user transaction
	$tt=mysqli_query($con, "SELECT * FROM transactions WHERE creater='$user' ");
	$total_transact = mysqli_num_rows($tt);
	?>

<div class="sidebar">
		<div class="scrollbar-inner sidebar-wrapper">
			<div class="user">
				<div class="photo">
					<img src="<?php echo $base_url ?>assets/img/profile.jpg">
				</div>
				<div class="info">
					<a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
						<span>
						<?php echo $user?>
						
							<span class="user-level">
							<?php 
								$pos=mysqli_query($con, "SELECT position FROM users WHERE username='$user' "); 
								$row=mysqli_fetch_assoc($pos);
								$posi=mysqli_real_escape_string($con, $row['position']);
								echo "(".$posi.")"; 
							?>
							</span>
							
						</span>
					</a>
					<div class="clearfix"></div>

					
				</div>
			</div>
			<ul class="nav">
				<li class="nav-item active">
					<a href="<?php echo $base_url?>panel/user">
						<i class="la la-dashboard"></i>
						<p>Dashboard</p>
						<span class="badge badge-count"></span>
					</a>
				</li> 
				<li class="nav-item">
					<a href="<?php echo $base_url?>panel/user/supplies.php">
						<i class="la la-table"></i>
						<p>Supplies</p>
						<span class="badge badge-count"><?php echo $num_supplies?></span>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo $base_url?>panel/user/sales.php">
						<i class="la la-keyboard-o"></i>
						<p>Sales</p>
						<span class="badge badge-count"><?php echo $daily_sales ?></span>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo $base_url?>panel/user/transactions.php">
						<i class="la la-keyboard-o"></i>
						<p>Transactions</p>
						<span class="badge badge-count"><?php echo $total_transact ?></span>
					</a>
				</li>
				
				
			</ul>
		</div>
	</div>