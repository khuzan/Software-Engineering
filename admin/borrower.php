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
    <h3 align="center"> <b> BORROWING SYSTEM </b></h3>
    <h4 align="center">  (Digital Laboratory)</h4>
    <br><br>

<div class="row">
  <div class="col-lg-6">
    <div class="input-group">
      <input type="text" class="form-control" name="search" placeholder="Search for...">
        <span class="input-group-btn">
           <button class="btn btn-default" name="search" type="button">Go!</button>
        </span>
    </div><!-- /input-group -->
  </div>
  
<br><br>


<table class="table table-hover" id="tibol">
  <thead>
    <tr>
      <th>ID No.</th>
      <th>NAME</th>
      <th>SUBJECT</th>
      <th>QTY</th>
      <th>DESCRIPTION</th>
      <th>DATE RETURNED</th>
      <th>RECEIVED & CHECKED BY</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
   	  <td>asd</td>
   	  <td>asdasd</td>
      <td>asd</td>
      <td>asdasd</td>
    </tr>
  </tbody>
</table>

	

	</div>
</body>
</html>
