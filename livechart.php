<?php include "connection/db.php"; ?>
<?php include "partials/functions.php"; ?>
<?php include "partials/header.php"; ?>
<?php

$checkIfLogin = new Page();
$checkIfLogin -> checkIfLogin();

?>


<?php include "livecharts/partials/live_chart_head.php"; ?>
<?php include "partials/navigation.php"; ?>

<div id="chartdiv"></div>	

<?php include "partials/footer.php"; ?>
<script type="text/javascript" src= "livecharts/js/livechart.js"></script>

