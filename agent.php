<?php include "connection/db.php"; ?>
<?php include "partials/functions.php"; ?>


<?php include "partials/header.php"; ?>

<?php

$checkIfLogin = new Page();
$checkIfLogin -> checkIfLogin();

?>

<?php include "partials/navigation.php"; ?>

<div class="container-fluid">



  <div class="space">
    <input type="button"  class="btn btn-info" name="addAgent" value="Add Agent" data-target='#addModal' data-toggle='modal' href='#addModal'>
  </div>

  <table id="agentTable" class="table table-bordered table-striped table-hovered">

    <thead>
      <th>Id</th>
      <th>Agent</th>
      <th>Agent Code</th>
      <th>Id Number</th>
      <th>Actions</th>

    </thead>


    <tbody>



      <?php
      $query = "SELECT * FROM agent";
      $selectAllAgents = mysqli_query($connection,$query);

      while($row = mysqli_fetch_assoc($selectAllAgents)){

        $id = $row["id"];
        $agentName = $row["agentName"];
        $agentCode = $row["agentCode"];
        $idNumber = $row["idNumber"];


        echo "
        <tr>
        <td>". $id ."</td>
        <td>". $agentName ."</td>
        <td>". $agentCode ."</td>
        <td>". $idNumber ."</td>
        <td><button  value=".$id." class='btn btn-info edit' data-target='#editModal' data-toggle='modal' href='#editModal'> Edit</button><button value=".$id." class='btn btn-warning delete'>Delete</button></td>
        </tr>


        ";



      }


      ?>



    </tbody>


  </table>



</div>






<?php include "partials/footer.php"; ?>

<script type="text/javascript">

  $(document).ready(function() {
    $('#agentTable').DataTable();



    $(".add").on("click",function(){

      $(".modalName").text("ADD");

      $("#submitUpdate").val("Add");


      $("#idAdd").val('');
      $("#nameAdd").val('');
      $("#codeAdd").val('');
      $("#idNumberAdd").val('');

     




    });



    $("#submitAdd").on("click",function(){

      var id =   $("#idAdd").val();
      var name = $("#nameAdd").val();
      var code = $("#codeAdd").val();
      var idNumber = $("#idNumberAdd").val();



      $.ajax({

        type:'post',
        url:'api/updateAgentToDatabase.php',
        data:{id:id,name:name,code:code,idNumber:idNumber},
        success: function(data){

          swal("Good job!", "Agent data successfully added!", "success");

        }


      });

    });


    //view agent data in modal
    $(document).on("click",".edit",function(){




      var id=  $(this).attr("value");





      $.ajax({

        type:'POST',
        data: {id:id},
        url:'api/updateAgent.php',
        dataType:"json",
        success: function(response){

      

          $("#id").val(response[0]["agentId"]);
          $("#name").val(response[0]["agentName"]);
          $("#code").val(response[0]["agentCode"]);
          $("#idNumber").val(response[0]["idNumber"]);
         // $("#bank").val(response[0]["agentBank"]).change();
          

        }


      });

    });


//delete agent data
$(document).on("click",".delete",function(){

  var id= $(this).attr("value");

  swal({
    title: "Are you sure?",
    text: "Once deleted, you will not be able to recover this agent!",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {

      $.ajax({

        type:'POST',
        data: {id:id},
        url:'api/deleteAgent.php',
        success: function(response){

          swal("Poof! Your agent info has been deleted!", {
            icon: "success",
          });

        }


      });


    } else {
      swal("Your agent info is safe!");
    }
  });




});

//update agent data

$("#submitUpdate").on("click", function(){

  var id =   $("#id").val();
  var name = $("#name").val();
  var code = $("#code").val();
  var idNumber = $("#idNumber").val();
  // var branch = $("#branch").val();


  $.ajax({

    type:'post',
    url:'api/updateAgentToDatabase.php',
    data:{id:id,name:name,code:code,idNumber:idNumber},
    success: function(data){

     swal("Good job!", "Agent data successfully updated!", "success");

   }


 });


});











} );

</script>