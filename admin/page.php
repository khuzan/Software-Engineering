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


	


	<title>ST. JOHN PAUL II COLLEGE OF DAVAO</title>
</head>
<body>
	<div class="container">
		<h3 align="center">ST. JOHN PAUL II COLLEGE OF DAVAO</h3>
		<h4 align="center">  Ecoland Drive, Matina, Davao City</h4>
		<h3 align="center">BORROWING SYSTEM</h3>
		<h4 align="center">  (Digital Laboratory)</h4>
    <br><br>
<form class="form-inline" method="POST"	action="../functions/pageprocess.php">

<div class="row">
  <div class="col-sm-6">
    <div class="form-group">
    <label for="exampleInputName1">Name:</label>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <input type="text" class="form-control" id="exampleInputName1" placeholder="Jane Doe" name="name" required>
    </div><br>
    <div class="form-group">
    <label for="exampleInputName2">Course/Year:</label>
    <select class="form-control" name="course" id="exampleInputName2" required>
  		<option selected ></option>
  		<option value="1">BSICT</option>
 		<option value="2">ENGR</option>
	 </select>
</div><br>
  <div class="form-group" >
      <label for="exampleInputName3">ID#:</label>
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      <input type="number" class="form-control" id="exampleInputName3" placeholder="Jane Doe" name="id" required><br>
  </div>
  <div class="form-group">
      <label for="exampleInputName4">SUBJECT:</label>
      &nbsp&nbsp&nbsp&nbsp
      <input type="text" class="form-control" id="exampleInputName4" placeholder="Jane Doe" name="subj" required>
  </div>
</div>

<div class="col-sm-6">
  <div class="form-group">
      <label for="exampleInputName6">QTY:</label>
      <input type="number" class="form-control" id="exampleInputName6" placeholder="Jane Doe" name="qty" required>&nbsp 
  </div>
  <div class="form-group" >
      <label for="exampleInputName7">DATE:</label>
      <input type="date" class="form-control" id="exampleInputName7" placeholder="Jane Doe" name="det" required><br>
  </div>
  <div class="form-group" >
      <label for="exampleInputName5">DESCRIPTION:</label>
      <input type="text" class="form-control" id="exampleInputName5" placeholder="Jane Doe" name="desc" required><br>
  </div>
  <div class="form-group">
      <label for="exampleInputName8">RECEIVED&CHECKED BY:</label>
      <select class="form-control" name="rec" id="exampleInputName8" required>
      <option selected ></option>
      <option value="1">Mr.Bodskie</option>
  </select>
  </div>
</div>

</div>

  
<br><br>

<button type="submit" name="save" class="btn btn-primary">BORROW</button>
<br><br>

<label for="check">CHECKED BY:</label><br>
<label class="custom-control custom-checkbox" id="check">
  <input type="checkbox" class="custom-control-input" value="Mr.bodskie" name="check" required>
  <span class="custom-control-indicator"></span>
  <span class="custom-control-description">Mr. Bodskie</span>
</label>	


	


	</form>
	</div>
</body>
</html>
<style type="text/css">
  .form-group{
    margin: 5px;
    padding: 5px;
   
  }
  #exampleInputName5{
    width: 100%;
    height: 50px;

  }
</style>
