<?php include "connection/db.php"; ?>
<?php include "partials/functions.php"; ?>
<?php include "partials/header.php"; ?>
<?php

$checkIfLogin = new Page();
$checkIfLogin -> checkIfLogin();

$changeProfile = new Page;
$changeProfile -> changePassword();	

?>



<?php include "partials/navigation.php"; ?>

<div class="container">

	<div class="row">
  		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>
  		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
			  <form method="POST" enctype="multipart/form-data">
			  <div class="form-group">
			    <label for="username">Username</label>
			    <input class="form-control" type="text" name="username" value="<?php echo $_SESSION['username']; ?>" readonly>
			  </div>

			  <div class="form-group">
			    <label for="currentPassword">Current Password</label>
			    <input type="currentPassword" class="form-control" id="currentPassword" name="currentPassword" placeholder="password">
			    <small id="help" class="form-text text-muted">Current Password</small>
			  </div>

			  <div class="form-group">
			    <label for="password">New Password</label>
			    <input type="password" class="form-control" id="newPassword" name="newPassword" placeholder="password">
			    <small id="help" class="form-text text-muted">New Password</small>
			  </div>

			  <div class="form-group">
			    <label for="password">Confirm New Password</label>
			    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="password">
			    <small id="help" class="form-text text-muted">Confirm Password.</small>
			  </div>

			  

			  <button type="submit" name="submit" class="btn btn-primary">Save Changes</button>
			</form>
		</div>

	</div>

	    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>

</div>

<?php include "partials/footer.php"; ?>


