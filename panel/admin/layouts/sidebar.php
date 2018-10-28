<?php
// sales
	$d = date('Y-m-d');
	$raw_sales = mysqli_query($con, "SELECT * FROM sales WHERE date_sold='$d' ");
	$daily_sales = mysqli_num_rows($raw_sales);
//users
	$raw_users=mysqli_query($con, "SELECT * FROM users");
    $users = mysqli_num_rows($raw_users);
// products
	$p=mysqli_query($con, "SELECT * FROM products");
	$products = mysqli_num_rows($p);
//total sales
	$ts=mysqli_query($con, "SELECT * FROM sales");
    $total_sales = mysqli_num_rows($ts);
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
					<a href="<?php echo $base_url?>panel/admin">
						<i class="la la-dashboard"></i>
						<p>Dashboard</p>
						<span class="badge badge-count"></span>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo $base_url?>panel/admin/users.php">
						<i class="la la-table"></i>
						<p>Staffs</p>
						<span class="badge badge-count"><?php echo $users?></span>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo $base_url?>panel/admin/sales.php">
						<i class="la la-keyboard-o"></i>
						<p>Sales</p>
						<span class="badge badge-count"><?php echo $daily_sales?></span>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo $base_url?>panel/admin/products.php">
						<i class="la la-th"></i>
						<p>Products</p>
						<span class="badge badge-count"><?php echo $products?></span>
					</a>
				</li>
				
			</ul>
		</div>
	</div>