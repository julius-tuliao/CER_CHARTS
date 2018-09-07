<?php include "connection/db.php"; ?>
<?php include "partials/functions.php"; ?>

<?php include "partials/header.php"; ?>

<?php

$checkIfLogin = new Page();
$checkIfLogin -> checkIfLogin();

?>



<?php include "partials/navigation.php"; ?>




<div class="sect sect--padding-top">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
    <div class="site">
      <h1 class="site__title">CER</h1>
      <h2 class="site__subtitle">Collection,Portfolio,Target</h2>
      <div class="site__box-link">
        <a class="btn btn-info" href="stillChart.php">View CER Charts</a>
        <a class="btn btn-info" href="livechart.php">View Live Charts</a>
       <!--  <a class="btn btn--revert btn--width" href="">Contact</a> -->
      </div>
    
    </div>
    </div>
    </div>
  </div>
</div>






<?php include "partials/footer.php"; ?>

