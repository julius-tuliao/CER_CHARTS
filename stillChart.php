<?php include "connection/db.php"; ?>
<?php include "partials/functions.php"; ?>
<?php include "partials/header.php"; ?>
<?php

$checkIfLogin = new Page();
$checkIfLogin -> checkIfLogin();

?>


<?php include "stillcharts/partials/stillChartHead.php"; ?>
<?php include "partials/navigation.php"; ?>



<div class="container-fluid">

	<div id="wrapper">
		
		<?php include "partials/panel.php"; ?>




		<div class="branchChart">	
			<h3 align="center" id="title">SPM Collection All Banks</h3>  
			<div class="row">

				<a class="btn btn-primary" href="stillChartBranch.php">Next</a>
				<!-- <a class="btn btn-primary" href="">Prev</a> -->

				<div class="col-sm-10 form-inline">
					<div class="form-group">

						<span class="bankSelect">
							<label>Select Bank:</label>

							<?php
							$bank = new Page();
							$bank->bank();
							?>

						</span>
						<input type="button" class="btn btn-sm" name="zoom" value="Zoom in" id="zoomIn"> 
						<input type="button" class="btn btn-sm" name="zoomout" value="Zoom out" id="zoomOut"> 
						<input type="button" class="btn btn-sm" name="back" id="back" value="Back" style="display:none;" onclick="location.reload();">
						

						<?php
						$sortValue = new Page();
						$sortValue->sortValue();
						?>

					</div>
				</div>
			</div>







		</div>
		<!-- /#page-content-wrapper -->
		<div id="chartdiv" ></div>

	</div>



</div>

<?php include "partials/footer.php"; ?>
<script type="text/javascript" src= "stillcharts/js/stillChartsActions.js"></script>




