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
	<div class="row" id="first-div"><br><br>
		<div	class="row"	id ="border" >
				<table class="table table-fixed">
          <thead>
            <tr>
							<th class="col-xs-1">QTY</th>
							<th class="col-xs-2">ITEM	DESCRIPTION	</th>
							<th class="col-xs-2">PROPERTY NUMBER</th>
							<th class="col-xs-2">ACCOUNT CLASSIFICATION</th>
							<th class="col-xs-1">DEPT</th>
							<th class="col-xs-1">LOCATION</th>
							<th class="col-xs-2">ASSIGNEE</th>
							<th class="col-xs-1">REMARKS</th>
            </tr>
          </thead>
          <tbody>
            <tr>
							<td	class="col-xs-1">1</td>
							<td class="col-xs-2">Analog-Digital Communication Trainer</td>
							<td class="col-xs-2">04-ED-001,04-ED-0140-0151</td>
							<td class="col-xs-2">ENG'G-DIGITAL LAB EQPT</td>
							<td class="col-xs-1">ENG'G</td>
							<td class="col-xs-1">Digital Lab</td>
							<td class="col-xs-2">ENGR. JOSE RHYZ ISMAEL</td>
							<td class="col-xs-1">Good Condition</td>
            </tr>
            <tr>
							<td	class="col-xs-1">1</td>
							<td class="col-xs-2">Analog-Digital Communication Trainer</td>
							<td class="col-xs-2">04-ED-001,04-ED-0140-0151</td>
							<td class="col-xs-2">ENG'G-DIGITAL LAB EQPT</td>
							<td class="col-xs-1">ENG'G</td>
							<td class="col-xs-1">Digital Lab</td>
							<td class="col-xs-2">ENGR. JOSE RHYZ ISMAEL</td>
							<td class="col-xs-1">Good Condition</td>
            </tr>
            <tr>
							<td	class="col-xs-1">1</td>
							<td class="col-xs-2">Analog-Digital Communication Trainer</td>
							<td class="col-xs-2">04-ED-001,04-ED-0140-0151</td>
							<td class="col-xs-2">ENG'G-DIGITAL LAB EQPT</td>
							<td class="col-xs-1">ENG'G</td>
							<td class="col-xs-1">Digital Lab</td>
							<td class="col-xs-2">ENGR. JOSE RHYZ ISMAEL</td>
							<td class="col-xs-1">Good Condition</td>
            </tr>
            <tr>
							<td	class="col-xs-1">1</td>
							<td class="col-xs-2">Analog-Digital Communication Trainer</td>
							<td class="col-xs-2">04-ED-001,04-ED-0140-0151</td>
							<td class="col-xs-2">ENG'G-DIGITAL LAB EQPT</td>
							<td class="col-xs-1">ENG'G</td>
							<td class="col-xs-1">Digital Lab</td>
							<td class="col-xs-2">ENGR. JOSE RHYZ ISMAEL</td>
							<td class="col-xs-1">Good Condition</td>
            </tr>
            <tr>
							<td	class="col-xs-1">1</td>
							<td class="col-xs-2">Analog-Digital Communication Trainer</td>
							<td class="col-xs-2">04-ED-001,04-ED-0140-0151</td>
							<td class="col-xs-2">ENG'G-DIGITAL LAB EQPT</td>
							<td class="col-xs-1">ENG'G</td>
							<td class="col-xs-1">Digital Lab</td>
							<td class="col-xs-2">ENGR. JOSE RHYZ ISMAEL</td>
							<td class="col-xs-1">Good Condition</td>
            </tr>
            <tr>
							<td	class="col-xs-1">1</td>
							<td class="col-xs-2">Analog-Digital Communication Trainer</td>
							<td class="col-xs-2">04-ED-001,04-ED-0140-0151</td>
							<td class="col-xs-2">ENG'G-DIGITAL LAB EQPT</td>
							<td class="col-xs-1">ENG'G</td>
							<td class="col-xs-1">Digital Lab</td>
							<td class="col-xs-2">ENGR. JOSE RHYZ ISMAEL</td>
							<td class="col-xs-1">Good Condition</td>
						</tr>
            <tr>
							<td	class="col-xs-1">1</td>
							<td class="col-xs-2">Analog-Digital Communication Trainer</td>
							<td class="col-xs-2">04-ED-001,04-ED-0140-0151</td>
							<td class="col-xs-2">ENG'G-DIGITAL LAB EQPT</td>
							<td class="col-xs-1">ENG'G</td>
							<td class="col-xs-1">Digital Lab</td>
							<td class="col-xs-2">ENGR. JOSE RHYZ ISMAEL</td>
							<td class="col-xs-1">Good Condition</td>
            </tr>
            <tr>
							<td	class="col-xs-1">1</td>
							<td class="col-xs-2">Analog-Digital Communication Trainer</td>
							<td class="col-xs-2">04-ED-001,04-ED-0140-0151</td>
							<td class="col-xs-2">ENG'G-DIGITAL LAB EQPT</td>
							<td class="col-xs-1">ENG'G</td>
							<td class="col-xs-1">Digital Lab</td>
							<td class="col-xs-2">ENGR. JOSE RHYZ ISMAEL</td>
							<td class="col-xs-1">Good Condition</td>
            </tr>
            <tr>
							<td	class="col-xs-1">1</td>
							<td class="col-xs-2">Analog-Digital Communication Trainer</td>
							<td class="col-xs-2">04-ED-001,04-ED-0140-0151</td>
							<td class="col-xs-2">ENG'G-DIGITAL LAB EQPT</td>
							<td class="col-xs-1">ENG'G</td>
							<td class="col-xs-1">Digital Lab</td>
							<td class="col-xs-2">ENGR. JOSE RHYZ ISMAEL</td>
							<td class="col-xs-1">Good Condition</td>
            </tr>
            <tr>
							<td	class="col-xs-1">1</td>
							<td class="col-xs-2">Analog-Digital Communication Trainer</td>
							<td class="col-xs-2">04-ED-001,04-ED-0140-0151</td>
							<td class="col-xs-2">ENG'G-DIGITAL LAB EQPT</td>
							<td class="col-xs-1">ENG'G</td>
							<td class="col-xs-1">Digital Lab</td>
							<td class="col-xs-2">ENGR. JOSE RHYZ ISMAEL</td>
							<td class="col-xs-1">Good Condition</td>
            </tr>
            <tr>
							<td	class="col-xs-1">1</td>
							<td class="col-xs-2">Analog-Digital Communication Trainer</td>
							<td class="col-xs-2">04-ED-001,04-ED-0140-0151</td>
							<td class="col-xs-2">ENG'G-DIGITAL LAB EQPT</td>
							<td class="col-xs-1">ENG'G</td>
							<td class="col-xs-1">Digital Lab</td>
							<td class="col-xs-2">ENGR. JOSE RHYZ ISMAEL</td>
							<td class="col-xs-1">Good Condition</td>
            </tr>
            <tr>
							<td	class="col-xs-1">1</td>
							<td class="col-xs-2">Analog-Digital Communication Trainer</td>
							<td class="col-xs-2">04-ED-001,04-ED-0140-0151</td>
							<td class="col-xs-2">ENG'G-DIGITAL LAB EQPT</td>
							<td class="col-xs-1">ENG'G</td>
							<td class="col-xs-1">Digital Lab</td>
							<td class="col-xs-2">ENGR. JOSE RHYZ ISMAEL</td>
							<td class="col-xs-1">Good Condition</td>
            </tr>
          </tbody>
        </table>

		</div>
	</div>

	<div class="btn-group btn-group-sm" role="group" aria-label="Default button group">
			<button onclick="goBack()" class="btn btn-default" ><i class="glyphicon glyphicon-circle-arrow-left"></i> BACK</button>
			<a  class="btn btn-default" href="borrower.php"	> <i class="glyphicon glyphicon-eye-open"></i> VIEW LIST</a>
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

	#border{
		background-color: #e2e3e4;
		border: solid 1px black;
		height: 300px;
		margin-top: 20px;
		width: 97%;

	}
	#first-div{
		background-color: #ccccff;
		border: solid 1px black;
		height: 430px;
		width: 95%;
	}
	th{
		text-align: center;
	}
	td{
		text-align: center;
	}
/*FIXED-TABLE_HEADER-CSS*/
.table-fixed thead {
  width: 97%;
}
.table-fixed tbody {
  height: 230px;
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
/*END FIXED-TABLE_HEADER-CSS*/
/*ODD && EVEN BG-COLOR*/

 .table-fixed>tbody>tr:nth-child(odd)>td,
 .table-fixed>tbody>tr:nth-child(odd)>th {
    background-color: #cccccc; // Choose your own color here
  }
/*END*/
</style>

<!-- JS -->
<script>
function goBack() {
    window.history.back();
}
</script>
