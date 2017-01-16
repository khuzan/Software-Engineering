<!DOCTYPE html>
<?php
	session_start();
	include "../functions/function.php";
	$db = connect();

 ?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">
  <script src="../bootstrap-3.3.7-dist/js/jquery-3.1.1.min.js"></script>
  <script src="../bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>


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
			<div class="col-sm-1">
				<br>
				<img src="../images/notepad.png" alt="image" class="notepad">
			</div>
			<div class="col-sm-11"  id="class-list">
				<div align="left">
					<h4 class="text">List of Borrower</h4>
					<hr class="pull-left"></hr>
					<h5 class="text1">SJPIICD</h5>
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

				<table class="table table-hover">
					<thead>
						<tr>
							<th>STUDENT ID#</th>
							<th>NAME</th>
							<th>COURSE</th>
							<th>SUBJECT</th>
							<th>DESCRIPTION</th>
							<th>DATE OF LEND</th>
							<th>CHECKED BY</th>
							<th>OPTION</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach (getinfo() as $g):?>
						<tr>
							<td><?php echo $g->student_id; ?></td>
							<td><?php echo $g->name; ?></td>
							<td><?php echo $g->course; ?></td>
							<td><?php echo $g->subject; ?></td>
							<td><?php echo $g->descr; ?></td>
							<td><?php echo $g->det; ?></td>
							<td><?php echo $g->received; ?></td>
						</tr>
						<?php endforeach;?>
					</tbody>
				</table>

		</div>
	</div>

	<div class="btn-group btn-group-sm" role="group" aria-label="Default button group">
			<button onclick="goBack()" class="btn btn-default" ><i class="glyphicon glyphicon-circle-arrow-left"></i> BACK</button>
			<a  class="btn btn-default	active" href="borrower.php"	> HOME</a>
			<a  class="btn btn-default"	href="page.php" href="page.php"	><i class="glyphicon glyphicon-plus-sign"></i> BORROW</a>
	 </div>

</div>


	</div>
</div>
	</div>
</body>
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
		border: solid 1px red;
		height: 200px;
		margin-top: 90px;
		width: 97%;

	}
	#first-div{
		border: solid 1px black;
		height: 430px;
		width: 95%;
	}
	.group{
		margin-left: 15px;
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
	/*.row{
		margin-left: 50px;
		width: 90%;
	}*/
</style>

<!-- JS -->
<script>
function goBack() {
    window.history.back();
}
</script>
