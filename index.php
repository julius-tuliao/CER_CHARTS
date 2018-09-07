<?php include "connection/db.php"; ?>
<?php include "partials/functions.php"; ?>
<?php include "partials/header.php"; ?>


<div class="limiter">
	<div class="container-login100" style="background-image: url('https://image.ibb.co/de6JzG/bitmap_1_1.png');">
		<div class="wrap-login100 p-t-30 p-b-50">
			<span class="login100-form-title p-b-41">
				CER
			</span>
			<form class="login100-form validate-form p-b-33 p-t-5" method="post" id="frmLogin">

				<div class="wrap-input100 validate-input" data-validate = "Enter username">
					<input class="input100" type="text" name="username" id="username" placeholder="User name" required>
					<span class="focus-input100" data-placeholder="&#xe82a;"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Enter password">
					<input class="input100" type="password" name="password" id="password" placeholder="Password" required>
					<span class="focus-input100" data-placeholder="&#xe80f;"></span>
				</div>

				<div class="container-login100-form-btn m-t-32">
					<input class="login100-form-btn"  type="submit" name="login" id="login" value="Login"  >
					
				</div>

			</form>

			<?php				
	//login code
			$login = new Page();
			$login->login();
			
			?>

			

		</div>
	</div>
</div>


<?php include "partials/footer.php"; ?>