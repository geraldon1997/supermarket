<div class="main-header">
			<div class="logo-header">
				<a href="index.php" class="logo">
				<img src="../../assets/img/logo.png" alt="BICA PHARMACY" height="30">	Bica Dashboard
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar"
				 aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<button class="topbar-toggler more">
					<i class="la la-ellipsis-v"></i>
				</button>
			</div>
			<nav class="navbar navbar-header navbar-expand-lg">
				<div class="container-fluid">

					
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item">
							<b class="la la-calendar la-2x"></b><b><?php echo date('l, d F, Y'); ?></b> &nbsp
						</li>
						
						<li class="nav-item dropdown">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<img src="<?php echo $base_url ?>assets/img/profile.jpg" alt="user-img" width="36" class="img-circle">
								<span><?php echo $user;?></span>
								</span>
							</a>
							<ul class="dropdown-menu dropdown-user">
								<li>
									<div class="user-box">
										<div class="u-img">
											<img src="<?php echo $base_url ?>assets/img/profile.jpg" alt="user">
										</div>
										<div class="u-text">
											<h4><?php echo $user;?></h4>
											<p class="text-muted">welcome back</p>
											
										</div>
									</div>
								</li>
								<div class="dropdown-divider"></div>
								
								<a class="dropdown-item" href="logout.php">
									<i class="fa fa-power-off"></i> Logout</a>
							</ul>
							<!-- /.dropdown-user -->
						</li>
					</ul>
				</div>
			</nav>
		</div>