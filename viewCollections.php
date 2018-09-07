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
		<th>Placement</th>
		<th>Branch</th>
		<th>Month</th>
		<th>Collection</th>
		
	</thead>

	<tbody>
		
		<?php

			$query= "SELECT agentName,bank,placement,branch,monthname, SUM(cf) as cf FROM `collections` INNER JOIN agent ON agent.idNumber = collections.agent INNER JOIN month ON month.id = collections.month GROUP BY monthname,agent ORDER BY month,collections.id DESC";

			$selectAllCollections = mysqli_query($connection,$query);

			while($row = mysqli_fetch_assoc($selectAllCollections)){

				$agentName = $row["agentName"];
				$bank = $row["bank"];
				$placement = $row["placement"];
				$branch = $row["branch"];
				$month = $row["monthname"];
				$cf = $row["cf"];


				echo "

					<tr>
						<td>".$agentName."</td>
						<td>".$bank."</td>
						<td>".$placement."</td>
						<td>".$branch."</td>
						<td>".$month."</td>
						<td>".$cf."</td>
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