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
			<h3 align="center" id="title">SPM Collection Per Bank</h3>  
			<div class="row">


				<form class="form-inline col-lg-12">


					<div class=" input-group mb-2 mr-sm-2">

							<label>Select Branch</label>


							

							<?php
								$branch = new Page();
								$branch->branch();
							?>		
						
					</div>


					<div class="input-group mb-2 mr-sm-2">


						

							<label for="bankSelect">Select Bank</label>
							

							<?php
								$bank = new Page();
								$bank->bank();
							?>						
						



					</div>




					<div class="input-group mb-2 mr-sm-2">
						<label>Buttons</label>
						<span class="agentSelect">

							<input type="button" class="btn btn-sm" name="zoom" value="Zoom in" id="zoomIn"> 
							<input type="button" class="btn btn-sm" name="zoomout" value="Zoom out" id="zoomOut"> 
							<input type="button" class="btn btn-sm" name="back" id="back" value="Back" style="display:none;" onclick="location.reload();">
							
							<?php
									$sortValue = new Page();
									$sortValue->sortValue();
							?>
							

						</span>


					<a class="btn btn-primary" href="stillChartBankAgent.php">Prev</a>
					<a class="btn btn-primary" href="stillChartSpecificAgent.php">Next</a>
				

					</div>
				</form>



				






			</div>
			<!-- /#page-content-wrapper -->
			<div id="chartdiv" ></div>

		</div>



	</div>

	<?php include "partials/footer.php"; ?>
	<script type="text/javascript" src= "stillcharts/js/stillChartsActions.js"></script>




