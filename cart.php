<!DOCTYPE html>
<?php
	session_start();
	include "functions/function.php";
	$db = connect();
	if (isset($_POST['submit'])) {
		$_SESSION['id'] = $_POST['id'];
		$_SESSION['name'] = $_POST['name'];
		$_SESSION['course'] = $_POST['course'];
		$_SESSION['subject'] = $_POST['subject'];
		$_SESSION['checked'] = $_POST['checked'];

		$name = $_SESSION['name'] ;
		$limit_id = $_SESSION['id'];
				if(preg_match("/\d/",$name) || preg_match("/W/", $name))
			   {

	 			header("Location:todo_list.php?error");
			}
			elseif ((strlen($limit_id) <8 ) || (strlen($limit_id) > 8)) {
				header("Location:todo_list.php?error2");
			}
			else {
				# code...


try {
	$r = studentexists($_SESSION['name'],$_SESSION['id']);
	if($r){
		$s = getborroweritemsbyid($r->id);
		$borrowernotreturned = $s->status;
		if ($borrowernotreturned == 'not returned') {
					echo ("<SCRIPT LANGUAGE='JavaScript'>
							window.alert('You must return items first!')
							window.location.href='todo_list.php'
							</SCRIPT>");
				}
	}


} catch (Exception $e) {
	echo $e;
}
}
	}



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
    <link rel="stylesheet" href="assets/css/to-do.css">

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
            <a href="About.php" class="logo"><b>Inventory System</b></a>
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
                      <a href="About.php">
                          <i class="fa fa-home"></i>
                          <span>About</span>
                      </a>
                  </li>



                  <li class="sub-menu">
                      <a class="active" href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Inventory</span>
                      </a>
                      <ul class="sub">

                          <li class="active"><a href="#">Todo List</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Data Tables</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="basic_table.php">Returned Items Table</a></li>
                          <li><a  href="responsive_table.php">Items Table</a></li>
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

          	<!-- COMPLEX TO DO LIST -->
              <div class="row mt">
                  <div class="col-md-12">
                      <section class="task-panel tasks-widget">
	                	<div class="panel-heading">
	                        <div class="pull-left"></div>
	                        <br>
	                 	</div>
                          <div class="panel-body">
                              <div class="task-content">

																<!-- start -->
																<?php
																$sth = $db->prepare("SELECT * From items order by items_id");
																$sth->execute();
																$results = $sth->fetchAll(PDO::FETCH_OBJ);
															?>
																<?php foreach ($results as $g ):?>

																	<?php if($g->qty <= 0){
																		echo '';
																	}else{
																		echo '<div class="product">
																			<h3>'.$g->description.'</h3>
																			<a href="functions/add-to-cart.php?id='.$g->items_id.'">Add to list</a>

																		</div>';
																	} ?>

																<?php endforeach ?>
																<!--  -->



                                </div>
                              </form>
                          </div>
                      </section>
                  </div><!-- /col-md-12-->
              </div><!-- /row -->


		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2016-2017 khuzan.js
              <a href="todo_list.php#" class="go-top">
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
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script src="assets/js/tasks.js" type="text/javascript"></script>

    <script>
      jQuery(document).ready(function() {
          TaskList.initTaskWidget();
      });

      $(function() {
          $( "#sortable" ).sortable();
          $( "#sortable" ).disableSelection();
      });

    </script>




  </body>

</html>
<style media="screen">

	.task-css{
		height: 500px;
	}
	/*table-scroll*/
	.table{
		position: relative;

	}
	.table-scroll tbody {
	    position: absolute;
	    overflow-y: scroll;
	    height: 350px;
	}

	.table-scroll tr {
	    width: 100%;
	    table-layout: fixed;
	    display: inline-table;
	}

	.table-scroll thead > tr > th {
	    border: none;
	}*/
	/*END table-scroll

</style>
