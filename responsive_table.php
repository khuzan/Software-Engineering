<!DOCTYPE html>
<?php
session_start();
include "functions/function.php";
$db = connect();
 ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Software Engineering - Inventory System</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
      <link href="css/mycss.css" rel="stylesheet">
    <link href="assets/css/table-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="homepage.php" class="logo"><b>Inventory System</b></a>
            <!--logo end-->

            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="functions/logout.php">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->

      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">

              	  <p class="centered"><a href="profile.php"><img src="assets/img/budskie.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">JOSE RHYZ ISMAEL</h5>

                  <li class="mt">
                      <a href="homepage.php">
                          <i class="fa fa-home"></i>
                          <span>Homepage</span>
                      </a>
                  </li>


                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span> Inventory</span>
                      </a>
                      <ul class="sub">

                          <li><a  href="todo_list.php">Todo List</a></li>
                      </ul>
                  </li>


                  <li class="sub-menu">
                      <a class="active" href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Data Tables</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="basic_table.php">Returned Items Table</a></li>
                          <li class="active"><a  href="responsive_table.php">Items Table</a></li>
                      </ul>
                  </li>


              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> INVENTORY</h3>
		  		<div class="row mt">
			  		<div class="col-lg-12">

                      <div class="content-panel"  id="div_print">
                          <section id="unseen " >
                            <table class="table table-bordered table-striped table-condensed" id="myTable">
                            <h4><i class="fa fa-angle-right"></i> Digital Laboratory Items Table
                                <input name="b_print" type="button" class="btn btn-primary btn-sm pull-right bira"   onClick="printdiv('div_print');" value=" Print ">
                               <button type="button" name="button" class="btn btn-success btn-sm pull-right bira" data-toggle="modal" data-target="#dataModal">Add Items</button>
                             </h4>
                             <div class="input-group" id="search">
                                 <input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Search for Item description..">
                                 <span class="input-group-addon">
                                     <i class="fa fa-search"></i>
                                 </span>
                             </div>
                            <hr>
  	                              <thead>
                                  <tr>
                                    <th>QTY</th>
                      							<th>ITEM	DESCRIPTION	</th>
                      							<th>PROPERTY NUMBER</th>
                      							<th>ACCOUNT CLASSIFICATION</th>
                      							<th>DEPT</th>
                      							<th>LOCATION</th>
                      							<th>ASSIGNEE</th>
                      							<th>REMARKS</th>
  	                              </tr>
  	                              </thead>
  	                              <tbody>
                                <?php foreach (getitems() as $d):?>
  	                              <tr>
                                    <td><?php echo $d->qty; ?></td>
                                    <td><?php echo $d->description; ?></td>
                                    <td><?php echo $d->prpty_number; ?></td>
                                    <td><?php echo $d->classification; ?></td>
                                    <td><?php echo $d->department; ?></td>
                                    <td><?php echo $d->location; ?></td>
                                    <td><?php echo $d->assignee; ?></td>
                                    <td><?php echo $d->remarks; ?></td>
  	                              </tr>
                                <?php endforeach; ?>
  	                            </tbody>

  	                          </table>
                          </section>


                  </div><!-- /content-panel -->

               </div><!-- /col-lg-4 -->
		  	</div><!-- /row -->



		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
      <!-- ADD MODAL -->
      <div class="modal fade" id="dataModal" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title" align="center">ADD ITEMS</h4>
				</div>
				<div class="modal-body" id="modalview">


					<form method="POST" action="functions/add_items_process.php" class="form-horizontal tasi-form">
<div class="table-responsive">
		<table class="table table-striped">
      <tr>
            <td>
              <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Quantity</label>
            </td>
            <td>
            <input type="text" class="form-control input-size" id="inputSuccess" name="qty" maxlength="5" required>
            <?php
            if(isset($_GET['error'])){
              echo "&nbsp;&nbsp;&nbsp;&nbsp;  <p style=\"color:red;\">Only Numbers Are Allowed!</p>";
              echo "<br>";
            }
            ?>
            </td>
      </tr>

      <tr>
        <td>
          <label class="col-sm-2 control-label  col-lg-2" for="inputWarning">Description</label>
        </td>
        <td>
          <input type="text" class="form-control input-size" id="inputWarning" name="item" required>
        </td>
      </tr>

      <tr>
          <td>
            <label class="col-sm-2 control-label col-lg-2 " for="inputError">Property Number</label>
          </td>
          <td>
            <input type="text" class="form-control input-size" id="inputError" name="pprty" required>
          </td>
      </tr>

      <tr>
          <td>
            <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Classification</label>
          </td>
            <td>
              <select class="form-control input-size" name="acc" required>
              <option></option>
              <option value="ENGINEERING-DIGITAL LAB EQPT">ENGINEERING-DIGITAL LAB EQPT</option>
              </select>
            </td>
      </tr>

      <tr>
          <td>
            <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Department</label>
          </td>
          <td>
            <select class="form-control input-size" name="dept" required>
            <option></option>
            <option value="ENGINEERING">ENGINEERING</option>
            </select>
          </td>
        </tr>
        <tr>
           <td>
             <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Location</label>
           </td>
           <td>
           <select class="form-control input-size" name="loca" required>
           <option></option>
           <option value="Digital Laboratory">Digital Laboratory</option>
           </select>
           </td>
       </tr>
       <tr>
        <td>
        <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Assignee</label>
        </td>
        <td>
        <select class="form-control input-size" name="ass" required>
        <option></option>
        <option value="ENGR. JOSE RHYZ ISMAEL">ENGR. JOSE RHYZ ISMAEL</option>
        </select>
        </td>
      </tr>

      <tr>
        <td>
        <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Remarks</label>
        </td>
          <td>
          <select class="form-control input-size" name="remarks" required>
          <option></option>
            <option value="Good Condition">Good Condition</option>
            <option value="Bad Condition">Bad Condition</option>
            <option value="Operational">Operational</option>
            <option value="Not Operational">Not Operational</option>
          </select>
          </td>
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
      <!-- END ADD MODAL -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2016-2017 khuzan.js
              <a href="responsive_table.php#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script type="text/javascript">
    //  start print
    function printdiv(printpage)
{
var headstr = "<html><head><title></title></head><body>";
var footstr = "</body>";
var newstr = document.all.item(printpage).innerHTML;
var oldstr = document.body.innerHTML;
document.body.innerHTML = headstr+newstr+footstr;
window.print();
document.body.innerHTML = oldstr;
return false;
}
// end print

// search
function myFunction() {
var input, filter, table, tr, td, i;
input = document.getElementById("myInput");
filter = input.value.toUpperCase();
table = document.getElementById("myTable");
tr = table.getElementsByTagName("tr");
for (i = 0; i < tr.length; i++) {
td = tr[i].getElementsByTagName("td")[1];
if (td) {
  if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
    tr[i].style.display = "";
  } else {
    tr[i].style.display = "none";
  }
}
}
}
    </script>

  </body>
</html>
<style media="screen">
  .bira{
    margin-right: 10px;
  }
</style>
