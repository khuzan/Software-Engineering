<!DOCTYPE html>
<?php
	session_start();
	include "functions/function.php";
	$db = connect();

	$wherein = implode(',', $_SESSION['cart']);

	$sql = $db->prepare("SELECT * FROM items WHERE items_id IN($wherein)");
	$sql->execute();
	$results = $sql->fetchAll(PDO::FETCH_OBJ);

	$i = 0;

	if (isset($_GET['delete'])) {
		while (true) {
			if (($key = array_search($_GET['delete'], $_SESSION['cart'])) !== false) {
			unset($_SESSION['cart'][$key]);
		}
		else{
			break;
		}
		}

		header('location:checkout.php');
	}

	$id = $_SESSION['id'];

	$i = 0;

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
                      <a href="homepage.php" >
                          <i class="fa fa-home"></i>
                          <span>Homepage</span>
                      </a>
                  </li>



                  <li class="sub-menu">
                      <a class="active" href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Inventory</span>
                      </a>
                      <ul class="sub">

                          <li class="active"><a  href="todo_list.php">Todo List</a></li>
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
          	<!-- SORTABLE TO DO LIST -->

              <div class="row mt mb">
                  <div class="col-md-12">
                      <section class="task-panel tasks-widget task-css">
												<table class="table table-striped">
		<form method="POST" action="functions/checkoutprocess.php">
		<tr>
			<th>id</th>
			<th>description</th>
			<th>Property #</th>
			<th>Qty</th>
			<th>Option</th>
		</tr>

		<?php foreach ($results as $g): ?>
		<tr>

			<td><input type="hidden" name="<?php echo 'product['.$i.'][id]'?>" value="<?php echo $g->items_id; ?>"><?php echo $g->items_id; ?>
			<td> <?php echo $g->description; ?></td>
			<td><?php echo $g->prpty_number; ?></td>
			<td><input type="number" name="<?php echo 'product['.$i.'][qty]' ?>" value="1" min="1" required></td>
			<td><a id="delete" href="checkout.php?delete=<?php echo $g->items_id;?>">REMOVE</a></td>



			<?php
			$i = $i + 1;
			?>

		</tr>
		<?php endforeach; ?>
		<button type="button"  name="button" class="btn btn-basic btn-sm"><a href="cart.php">Add more item</a></button>
		<input type="hidden" name="student_id" value="<?php echo $id;?>">
		<button name="submit" class="btn btn-primary btn-sm pull-right">SUBMIT</button>
		</form>

	</table>
                      </section>
                  </div><!--/col-md-12 -->
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
	.btn{
		margin: 10px;
	}
	.task-css{
		height: 550px;
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
