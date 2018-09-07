<?php include "connection/db.php"; ?>
<?php include "partials/functions.php"; ?>
<?php include "partials/header.php"; ?>
<?php

$checkIfLogin = new Page();
$checkIfLogin -> checkIfLogin();

?>


<?php include "partials/navigation.php"; ?>

<div class="container-fluid">

	

<table id="collectionTable" class="table table-bordered table-hovered table-striped">
	
	<thead>
		<th>Agent</th>
		<th>Bank</th>
		<th>Month</th>
		<th>Target</th>
		
	</thead>

	<tbody>
		
		<?php

			$query= "SELECT agentName,bank,monthname,SUM(target) as target FROM `portfolio` INNER JOIN agent ON agent.idNumber = portfolio.agent INNER JOIN month ON month.id = portfolio.month GROUP BY monthname,agent ORDER BY month,portfolio.id DESC";

			$selectAllCollections = mysqli_query($connection,$query);

			while($row = mysqli_fetch_assoc($selectAllCollections)){

				$agentName = $row["agentName"];
				$bank = $row["bank"];
			
				$month = $row["monthname"];
				$target = $row["target"];


				echo "

					<tr>
						<td>".$agentName."</td>
						<td>".$bank."</td>
					
						<td>".$month."</td>
						<td>".$target."</td>
					</tr>


				";



			} 



		?>



	</tbody>



</table>


</div>




<?php include "partials/footer.php"; ?>


<script type="text/javascript">
	
$(document).ready(function(){


 $('#collectionTable').DataTable();


});

</script>