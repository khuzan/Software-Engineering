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
<div align="center">
	<div class="row" id="first-div">
			<div class="row" id="second-div">

<form class="form-inline" method="POST"	action="../functions/borrowprocess.php">

<div class="row">
	<div class="col-sm-5">

			<div class="row-group">
				<div class="form-group pull-left">
			<label for="exampleInputName1" >Name:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="text" class="noBorder" id="exampleInputName1" maxlength="50"  name="name" required>
				</div>
			<div class="form-group	pull-left">
					<label for="exampleInputName3">ID#:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<input type="text" class="noBorder" id="exampleInputName3" maxlength="9" placeholder="     201*-****" name="id" required>
			</div>
				<div class="form-group	pull-left">
						<label for="exampleInputName7">DATE:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<input type="date" class="form-control"  id="exampleInputName7"  name="det" required	style="width:155px;"><br>
				</div>
				<div class="form-group	pull-left">
					<label for="exampleInputName2">Course/Year:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<select  name="course" class="form-control" id="exampleInputName2" required>
						<option selected ></option>
						<option value="BSIT">BSICT</option>
					<option value="ENGR">ENGR</option>
				 </select>
				</div>
				<div class="form-group	pull-left">
						<label for="exampleInputName4">SUBJECT:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<select class="form-control" name="subj" id="exampleInputName4">
							<option selected></option>
							<option value="LOGIC">LOGIC</option>
						</select>
				</div>

		</div>

</div>
<div class="col-sm-7">
	<div class="row-group">
		<div class="table-width">
			<table class="table table-fixed">
			<thead>
				<tr>
					<th class="col-xs-12">I T E M	 &nbsp 	D E S C R I P T I O N	</th>
				</tr>
			</thead>
			<tbody>
				<tr>
						<td class="col-xs-12">
							<label class="custom-control checkbox-primary">
						  <input type="checkbox" name="analog" class="custom-control-input" value="Analog-Digital Communication Trainer">
						  <span class="custom-control-indicator"></span>
						  <span class="custom-control-description">Analog-Digital Communication Trainer</span>
							</label>
						</td>
				</tr>
				<tr>
					<td class="col-xs-12">
						<label class="custom-control checkbox-primary">
						<input type="checkbox" name="power" class="custom-control-input" value="0-15 VOLTS POWER SUPPLY">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">0-15 VOLTS POWER SUPPLY</span>
						</label>
					</td>
				</tr>
				<tr>
					<td class="col-xs-12">
						<label class="custom-control checkbox-primary">
						<input type="checkbox" name="camsco" class="custom-control-input" value="CAMSCO MOTOR STARTER">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">CAMSCO MOTOR STARTER</span>
						</label>
					</td>
				</tr>
				<tr>
					<td class="col-xs-12">
						<label class="custom-control checkbox-primary">
						<input type="checkbox" name="antenna" class="custom-control-input" value="ANTENNA SYSTEM">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">ANTENNA SYSTEM</span>
						</label>
					</td>
				</tr>

			</tbody>
		</table>
		</div>
	</div>
</div>

</div>

	<div class="row">
			<div class="col-sm-4">
					<!-- ILLUSION -->
			</div>
			<div class="col-sm-4">
				<div align=center>
					<label for="check">CHECKED BY	:</label><br>
					<label class="custom-control custom-checkbox" id="check">
					<input type="checkbox" class="custom-control-input" value="ENGR. JOSE RHYZ ISMAEL" name="checked" required>
					<span class="custom-control-indicator"></span>
					<span class="custom-control-description">ENGR. JOSE RHYZ ISMAEL</span>
&nbsp&nbsp&nbsp
					<hr style="width:180px; margin:0 auto; border-bottom: 1px solid black;">
					</label>
				</div>

			</div>
			<div class="col-sm-4">
				<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

						<button type="submit" name="borrow" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-right"></span> PROCEED</button>
				</div>
	</div>




</form>
			</div>
	</div>

	<div class="btn-group btn-group-sm" role="group" aria-label="Default button group">
			<button onclick="goBack()" class="btn btn-default" ><i class="glyphicon glyphicon-circle-arrow-left"></i> BACK</button>
			<a  class="btn btn-default" href="borrower.php"	> <i class="glyphicon glyphicon-eye-open"></i> VIEW LIST</a>
			<a  class="btn btn-default	active"	href="page.php" href="page.php"	><i class="glyphicon glyphicon-plus-sign"></i> BORROW</a>
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

	#first-div{
		background-color: #ccccff;
		border: solid 1px black;
		height: 430px;
		width: 95%;

	}
	#second-div{
		background-color: #e2e3e4;
		margin-top: 40px;
		border: solid 1px black;
		height: 300px;
		width: 97%;
	}

	.table-width{
		width: 95%;

	}
	.row-group{
		margin-top: 40px;

	}
	.pull-left{
		padding-left: 10px;
	}
	.form-group{
		margin: 6px;
	}
	.noBorder {
    border: 0;
    outline: 0;
    background: transparent;
    border-bottom: 1px solid black;
    width: 150px;
}
th{
	font-family: Charlemagne Std;
	font-size: 18px;
}
.table-fixed thead {
	width: 97%;
}
.table-fixed tbody {
	height: 125px;
	overflow-y: auto;
	width: 100%;
}
.table-fixed thead, .table-fixed tbody, .table-fixed tr, .table-fixed td, .table-fixed th {
	display: block;
}
.table-fixed tbody td, .table-fixed thead > tr> th {
	float: left;
	border-bottom-width: 0;
}
/*ODD && EVEN BG-COLOR*/

 .table-fixed>tbody>tr:nth-child(odd)>td,
 .table-fixed>tbody>tr:nth-child(odd)>th {
    background-color: #999999; // Choose your own color here
  }
/*END*/

</style>

<!-- JS -->
<script>
function goBack() {
    window.history.back();
}
</script>
