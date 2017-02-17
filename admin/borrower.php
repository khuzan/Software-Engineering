<!DOCTYPE html>
<?php
	session_start();
	include "../functions/function.php";
	$db = connect();


	if(isset($_GET['action']) && $_GET['action']=='delete'){
  	$db = connect();
  	$sth = $db->prepare("DELETE FROM borrower WHERE id = :id");
  	$sth->bindValue('id',$_GET['id']);
  	$sth->execute();
  }
 ?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<script src="../bootstrap-3.3.7-dist/js/jquery.js"></script>
	<script src="../bootstrap-3.3.7-dist/js/bootstrap.js"></script>


  <link rel="stylesheet" href="../css/animate.css">
  <script src="../js/wow.min.js"></script>

	<title>Borrowing System</title>
</head>
<body>

<div class="container">
<div class="row-fluid">
		<div align="center">
    <br>
    <img src="../images/logo.png">
    </div>
<br>


	<div class="row">
		<div class="group">
			<div class="col-md-1">
				<br>
				<img src="../images/notepad.png" alt="image" class="notepad">
			</div>
			<div class="col-md-11"  id="class-list">
				<div align="left">
					<h4 class="text">List of Borrower</h4>
					<hr class="pull-left"></hr>
					<h5 class="text1">Digital Laboratory</h5>
				</div>
			</div>
		</div>


	 <!-- <div class="input-group">
				 <input type="text" class="form-control" name="search" placeholder="Search for...">
					 <span class="input-group-btn">
							<button class="btn btn-default" name="search" type="button">Go!</button>
					 </span>
	 </div> -->
<div align="center">
	<div class="row" id="first-div"><br><br>
		<div	class="row"	id ="border">

    <table class="table table-scroll table-striped">
			<thead>
				<tr>
					<th >STUDENT ID#</th>
					<th >NAME</th>
					<th >COURSE</th>
					<th >SUBJECT</th>
					<!-- <th >DESCRIPTION</th> -->
					<th >DATE OF LEND</th>
					<th >CHECKED BY</th>
					<th >OPTION</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach (getinfo() as $g):?>
				<tr>
					<td ><?php echo $g->student_id; ?></td>
					<td ><?php echo $g->name; ?></td>
					<td ><?php echo $g->course; ?></td>
					<td ><?php echo $g->subject; ?></td>
					<!-- <td ><?php echo $g->descr; ?></td> -->
					<td ><?php echo $g->dates; ?></td>
					<td ><?php echo $g->received; ?></td>
					<td>
						<button title="View items" data-id ="<?php echo $g->id;?>" name="view_data" class="btn btn-info btn-md view glyphicon glyphicon-eye-open" data-toggle="modal" data-target="#myModal"></button>
						<button title="Update" name="update" class="btn btn-success btn-md view glyphicon glyphicon-edit" data-toggle="modal" data-target="#myModal"></button>
					<a href="borrower.php?id=<?php echo $g->id;?>
						&action=delete" onclick="return confirm('Are you sure?')"
						<button name="delete" title="Delete item" class="btn btn-danger btn-md  glyphicon glyphicon-trash"></button>
					</a>
					</td>
				</tr>
				<?php endforeach;?>
			</tbody>
    </table>


		</div>
	</div>

	<div class="btn-group btn-group-sm" role="group" aria-label="Default button group">
			<button onclick="goBack()" class="btn btn-default" ><i class="glyphicon glyphicon-circle-arrow-left"></i> BACK</button>
			<a  class="btn btn-default	active" href="borrower.php" id="modal"	><i class="glyphicon glyphicon-eye-open" ></i> VIEW LIST</a>
			<a  class="btn btn-default"	href="items.php"><i class="glyphicon glyphicon-list"></i> ITEMS</a>
			<a  class="btn btn-default"	href="page.php"><i class="glyphicon glyphicon-plus-sign"></i> BORROW</a>

	 </div>

</div>


	</div>
</div>
	</div>
</body>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" align="center">Borrower's Details</h4>
        </div>
        <div class="modal-body" id="modalview">
          <p id = "test" align="center">Some text in the modal.</p>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

</div>
</html>
<style type="text/css">
  body{
    background-color: #e2e3e4;
  }
  table thead{
    background-color: #333333;
    color: white;
  }
	#border{
		background-color: #e2e3e4;
		border: solid 1px black;
		height: 270px;
		margin-top: 90px;
		width: 97%;

	}
	#first-div{
		background-color: #ccccff;
		border: solid 1px black;
		height: 430px;
		width: 95%;
	}
	.group{
		margin-left: 15px;
		color: #000033;
	}
	.text{
		position: relative;
		bottom: -30px;
	}
	.text1{
		position: relative;
		bottom: -30px;
		left: -205px;

	}
	.pull-left{
	 	border-bottom:  1px solid;
		width: 20%;
	}
	.notepad{
		margin-top: 10px;
		position: relative;
		left: 32px;
	}
  .input-group{
    width: 300px;
    animation-name: search;
    animation-duration: 1s;
		float: right;
		margin-right: 115px;
  }
  @keyframes search{
    0%  {width:100px;}
    100% {width: 300px;}
  }
	/*table-scroll*/
	.table{
		position: relative;
		width: 104%;
	}
	.table-scroll tbody {
	    position: absolute;
	    overflow-y: scroll;
	    height: 230px;
	}

	.table-scroll tr {
	    width: 100%;
	    table-layout: fixed;
	    display: inline-table;
	}

	.table-scroll thead > tr > th {
	    border: none;
	}
	/*END table-scroll*/


</style>

<!-- JS -->


<script>
function goBack() {
    window.history.back();
}
// $(document).on('click', '.view', function(){
//           var id = $(this).data("id");
// 					 $('.modal-body #test').val(id);
// 				});
// modal view script
$(document).on('click', '.view', function(){
           var id = $(this).data("id");

           if(id != '')
           {
                $.ajax({
                     url:"../functions/fetch_process.php",
                     method:"POST",
                     data:{M_view:id},
                     success:function(data){
                          $('#modalview').html(data);
                          $('#myModal').modal('show');
                     }
                });
           }
      });
</script>
