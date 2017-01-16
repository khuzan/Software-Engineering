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
<div class="col-sm-4">
		<div class="form-group">
	<label for="exampleInputName1">Name:</label>
	<input type="text" class="form-control" id="exampleInputName1" placeholder="Jane Doe" name="name" required>
		</div>
	<div class="form-group" >
			<label for="exampleInputName3">ID#:</label>
			<input type="number" class="form-control" id="exampleInputName3" placeholder="2014-1374" name="id" required><br>
	</div>
<br>
<div class="form-group">
	<label for="exampleInputName2">Course/Year:</label>
	<select class="form-control" name="course" id="exampleInputName2" required>
		<option selected ></option>
		<option value="BSIT">BSICT</option>
	<option value="ENGR">ENGR</option>
 </select>
</div>

</div>


<div class="col-sm-4">

<div class="form-group">
		<label for="exampleInputName4">SUBJECT:</label>

		<input type="text" class="form-control" id="exampleInputName4" placeholder="Jane Doe" name="subj" required>
</div>
</div>

<div class="col-sm-4">
<div class="form-group" >
		<label for="exampleInputName7">DATE:</label>
		<input type="date" class="form-control" id="exampleInputName7" placeholder="Jane Doe" name="det" required><br>
</div>
</div>
</div>

<div class="form-group" >
		<label for="exampleInputName5">DESCRIPTION:</label>
		<input type="text" class="form-control" id="exampleInputName5" placeholder="Jane Doe" name="descr" required><br>
</div>

<br><br>

<button type="submit" name="borrow" class="btn btn-primary">BORROW</button>
<br><br>

<label for="check">CHECKED BY:</label><br>
<label class="custom-control custom-checkbox" id="check">
<input type="checkbox" class="custom-control-input" value="Mr.bodskie" name="checked" required>
<span class="custom-control-indicator"></span>
<span class="custom-control-description">Mr. Bodskie</span>
</label>

</form>
			</div>
	</div>

	<div class="btn-group btn-group-sm" role="group" aria-label="Default button group">
			<button onclick="goBack()" class="btn btn-default" ><i class="glyphicon glyphicon-circle-arrow-left"></i> BACK</button>
			<a  class="btn btn-default" href="borrower.php"	> HOME</a>
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
		border: solid 1px black;
		height: 430px;
		width: 95%;
	}
	#second-div{
		margin-top: 40px;
		border: solid 1px black;
		height: 300px;
		width: 97%;
	}





</style>

<!-- JS -->
<script>
function goBack() {
    window.history.back();
}
</script>
