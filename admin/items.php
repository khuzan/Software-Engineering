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
				<table class="table table-scroll table-striped">
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
          </tbody>
        </table>

		</div>
		<br>
		<button  class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-plus-sign"></i> ADD ITEMS</button>
	</div>

	<div class="btn-group btn-group-sm" role="group" aria-label="Default button group">
			<button onclick="goBack()" class="btn btn-default" ><i class="glyphicon glyphicon-circle-arrow-left"></i> BACK</button>
			<a  class="btn btn-default" href="borrower.php"	> <i class="glyphicon glyphicon-eye-open"></i> VIEW LIST</a>
			<a  class="btn btn-default active"	href="items.php"	><i class="glyphicon glyphicon-list"></i> ITEMS</a>
			<a  class="btn btn-default" href="page.php"	><i class="glyphicon glyphicon-plus-sign"></i> BORROW</a>
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
					<h4 class="modal-title" align="center">ADD ITEMS</h4>
				</div>
				<div class="modal-body" id="modalview">


					<form method="POST" action="../functions/add_items_process.php" class="form-horizontal">
<div class="box-body">
		<table class="table table-striped">
			<tr>
				<div class="form-group">
						<label for="Quantity" class="col-sm-3 control-label">Quantity:</label>
						<div class="col-sm-9">
								<input type="text" class="form-control" id="Quantity" name="qty" placeholder="Quantity">
						</div>

					</div>
			</tr>
			<tr>
				<div class="form-group">
					<label for="Item Description" class="col-sm-3 control-label">Description:</label>
					<div class="col-sm-9">
							<input type="text" class="form-control" id="Item Description" name="item" placeholder="Item Description">
					</div>
				</div>
			</tr>
			<tr>
				<div class="form-group">
					<label for="Property Number" class="col-sm-3 control-label">Property:</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="Property Number" name="pprty" placeholder="Property Number">
					</div>
				</div>
			</tr>
			<tr>
				<div class="form-group">
					<label for="Account Classification" class="col-sm-3 control-label">Classification:</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="Account Classification " name="acc" placeholder="Account Classification">
					</div>

				</div>
			</tr>
			<tr>
				<div class="form-group">
					<label for="DEPARTMENT " class="col-sm-3 control-label">Department:</label>
					<div class="col-sm-9">
							<input type="text" class="form-control" id="DEPARTMENT " name="dept" placeholder="Department">
					</div>
				</div>
			</tr>
			<tr>
				<div class="form-group">
					<label for=" Location" class="col-sm-3 control-label">Location:</label>
					<div class="col-sm-9">
							<input type="text" class="form-control" id=" Location" name="loca" placeholder="Location">
					</div>
				</div>
			</tr>
			<tr>
				<div class="form-group">
					<label for="Assignee " class="col-sm-3 control-label">Assignee:</label>
					<div class="col-sm-9">
					<input type="text" class="form-control" id="Assignee " name="ass" placeholder="Assignee">
					</div>
				</div>
			</tr>
			<tr>
				<div class="form-group">
					<label for="Remarks " class="col-sm-3 control-label">Remarks:</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="Remarks " name="remarks" placeholder="Remarks">
					</div>
				</div>
			</tr>
		</table>

</div>
										</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button class="btn btn-primary" name="add_items">Submit</button>
					</form>
				</div>
			</div>

		</div>
	</div>

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
/*ODD && EVEN BG-COLOR*/
/*
 .table-fixed>tbody>tr:nth-child(odd)>td,
 .table-fixed>tbody>tr:nth-child(odd)>th {
    background-color: green; // Choose your own color here
  }*/
/*END*/

</style>

<!-- JS -->
<script>
function goBack() {
    window.history.back();
}
</script>
