<?php include 'layouts/master.php';?>

<?php startblock('content') ?> 
<h4 class="page-title">Staffs</h4>
        <!-- <h4 class="page-title">Sales</h4> -->
        <button data-target="#add_staff" data-toggle="modal" class="btn btn-info">Add Staff</button><hr>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Staffs</h4>
                        <p class="card-category"></p>
                    </div>
                    <div class="card-body">
                    <?php include 'add_user.php'; ?>
                    <?php include 'edit_user.php'; ?>
                    <?php include 'delete_user.php'; ?>
                    <?php include 'view_users.php'; ?>
                    <?php include 'view_users_password.php'; ?>
                    </div>
                </div>
            </div>
        </div>

<!-- Edit user modal        -->
<div id="edit" class="modal fade" role="dialog">
  <div class="modal-dialog">
 
    <!-- Modal content-->
    <div class="modal-content text-center">
      <div class="modal-header">
      <h4 class="modal-title">EDIT STAFF</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
     
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">
                        <span class="la la-phone"></span>
                    </span>
                    <input type="number" name="new_tel" id="" class="form-control" placeholder="new mobile">
                </div>
            </div>
    
            <input type="submit" value="update" class="btn btn-success">
            <input type="hidden" name="edit_id" id="edit_id" value="">
        
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
 
  </div>
</div>

<!-- End of user edit modal -->

<!-- Add new staff -->
                  <!-- Modal -->
<div id="add_staff" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="">ADD NEW STAFF</h4>
        <button type="button" class="close" data-dismiss="modal" style="color:red;">&times;</button>
        
      </div>
      <div class="modal-body text-center">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
          
        <div class="col-md-12">
					<div class="form-group">
						<div class="input-group has-icon">
                <input type="text" name="fullname" id="" placeholder="full name" title="full name" class="form-control" required>
              <div class="input-group-append">
								<span class="input-group-text input-group-icon"><i class="la la-user"></i></span>
							</div>
						</div>
					</div>
				</div>


        <div class="col-md-12">
					<div class="form-group">
						<div class="input-group has-icon">
                <input type="text" name="user" id="" placeholder="username" title="username" class="form-control" required>
              <div class="input-group-append">
								<span class="input-group-text input-group-icon"><i class="la la-user"></i></span>
							</div>
						</div>
					</div>
        </div>
        
        <div class="col-md-12">
					<div class="form-group">
						<div class="input-group has-icon">
                <input type="password" name="pass" id="" placeholder="password" title="password" class="form-control" required>
              <div class="input-group-append">
								<span class="input-group-text input-group-icon"><i class="la la-lock"></i></span>
							</div>
						</div>
					</div>
        </div>
        
        <div class="col-md-12">
					<div class="form-group">
						<div class="input-group has-icon">
                <input type="text" name="state" id="" placeholder="state" title="state" class="form-control" required>
              <div class="input-group-append">
								<span class="input-group-text input-group-icon"><i class="la la-map-marker"></i></span>
							</div>
						</div>
					</div>
        </div>
        
        <div class="col-md-12">
					<div class="form-group">
						<div class="input-group has-icon">
                <input type="text" name="town" id="" placeholder="town" title="town" class="form-control" required>
              <div class="input-group-append">
								<span class="input-group-text input-group-icon"><i class="la la-map-marker"></i></span>
							</div>
						</div>
					</div>
        </div>
        
        <div class="col-md-12">
					<div class="form-group">
						<div class="input-group has-icon">
                <input type="text" name="village" id="" placeholder="village" class="form-control" required>
              <div class="input-group-append">
								<span class="input-group-text input-group-icon"><i class="la la-map-marker"></i></span>
							</div>
						</div>
					</div>
        </div>
        
        <div class="col-md-12">
					<div class="form-group">
						<div class="input-group has-icon">
                <input type="text" name="residence_addr" id="" placeholder="residential address" title="residential address" class="form-control" required>
              <div class="input-group-append">
								<span class="input-group-text input-group-icon"><i class="la la-map-marker"></i></span>
							</div>
						</div>
					</div>
        </div>
        
        <div class="col-md-12">
					<div class="form-group">
						<div class="input-group has-icon">
                <input type="date" name="dob" id="" title="date of birth" class="form-control" required>
              <div class="input-group-append">
								<span class="input-group-text input-group-icon"><i class="la la-calendar"></i></span>
							</div>
						</div>
					</div>
        </div>
         
        <div class="col-md-12">
					<div class="form-group">
						<div class="input-group has-icon">
                <input type="tel" name="tel" id="" placeholder="mobile" class="form-control" required>
              <div class="input-group-append">
								<span class="input-group-text input-group-icon"><i class="la la-phone"></i></span>
							</div>
						</div>
					</div>
        </div>
        
        <div class="col-md-12">
					<div class="form-group">
						<div class="input-group has-icon">
                <select name="position" id="" class="form-control">
                      <option value="">---------- postion ----------</option>
                      <option value="cashier">cashier</option>
                      <option value="admin">admin</option>
                </select>
              <div class="input-group-append">
								<span class="input-group-text input-group-icon"><i class="la la-user"></i></span>
							</div>
						</div>
					</div>
				</div>


          <input type="submit" value="add user" name="add_user" class="btn btn-success">

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- End of add new staff -->

<script>
    function passId(id){
        $("#edit_id").val(id);
        // alert(id);
    }
</script>


<?php endblock() ?>    



