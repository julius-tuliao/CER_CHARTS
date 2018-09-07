<?php include "connection/db.php"; ?>
<?php include "partials/functions.php"; ?>
<?php include "partials/header.php"; ?>

<?php

$checkIfLogin = new Page();
$checkIfLogin -> checkIfLogin();

?>



<?php

ini_set('max_execution_time', 1000);

if(isset($_POST["import"]))
{
   
    //importPortfolio code
      $importPortfolio = new Page();
      $importPortfolio->importPortfolio();

}   
?>




<?php include "partials/navigation.php"; ?>

  <div class="container-fluid">
   
     <h3>Import Portfolios File</h3><br />
   <form method="post" class="form-inline" enctype="multipart/form-data">
    <div class="custom-file">
     <label class="custom-file-label" for="excel"><?php  if(isset($file)){echo $_FILES["excel"]["name"];}else{echo "Choose file...";} ?></label>
    <input type="file" name="excel" class="custom-file-input"/>
     </div>
    <br />
    <div class="form-group">
      <label for="date">Portfolios For:</label><br/>
      
        <?php 
          $month = new Page();
          $month->month();

          $year = new Page();
          $year->year();


        ?>
       
     
        
    </div>
     <br /><br />
    <input type="submit" name="import" class="btn btn-info" value="Import" />

    <a class="btn btn-warning" href="template/target_upload.xlsx" download="target_upload.xlsx">Template</a>

   </form>
   <br />

  </div>



<?php include "partials/footer.php"; ?>


