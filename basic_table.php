<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Software Engineering -  Inventory System</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

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
            <a href="index.php" class="logo"><b>Inventory System</b></a>
            <!--logo end-->

            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="login.php">Logout</a></li>
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

              	  <p class="centered"><a href="profile.php"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">Marcel Newman</h5>

                  <li class="mt">
                      <a href="index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
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
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Forms</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="form_component.php">Form Components</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a class="active" href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Data Tables</span>
                      </a>
                      <ul class="sub">
                          <li class="active"><a  href="basic_table.php">Basic Table</a></li>
                          <li><a  href="responsive_table.php">Responsive Table</a></li>
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
          	<h3><i class="fa fa-angle-right"></i> Basic Table Examples</h3>
				<div class="row">

	                  <div class="col-md-12 mt">
	                  	<div class="content-panel">
	                          <table class="table table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> Items Table</h4>
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
	                              <tr>
                                  <td>1</td>
                                  <td>Analog-Digital Communication Trainer</td>
                                  <td>04-ED-001,04-ED-0140-0151</td>
                                  <td>ENG'G-DIGITAL LAB EQPT</td>
                                  <td>ENG'G</td>
                                  <td>Digital Lab</td>
                                  <td>ENGR. JOSE RHYZ ISMAEL</td>
                                  <td>Good Condition</td>
	                              </tr>
	                              <tr>
                                  <td>1</td>
                                  <td>Analog-Digital Communication Trainer</td>
                                  <td>04-ED-001,04-ED-0140-0151</td>
                                  <td>ENG'G-DIGITAL LAB EQPT</td>
                                  <td>ENG'G</td>
                                  <td>Digital Lab</td>
                                  <td>ENGR. JOSE RHYZ ISMAEL</td>
                                  <td>Good Condition</td>
	                              </tr>
	                              <tr>
                                  <td>1</td>
                                  <td>Analog-Digital Communication Trainer</td>
                                  <td>04-ED-001,04-ED-0140-0151</td>
                                  <td>ENG'G-DIGITAL LAB EQPT</td>
                                  <td>ENG'G</td>
                                  <td>Digital Lab</td>
                                  <td>ENGR. JOSE RHYZ ISMAEL</td>
                                  <td>Good Condition</td>
	                              </tr>
                                <tr>
                                  <td>1</td>
                                  <td>Analog-Digital Communication Trainer</td>
                                  <td>04-ED-001,04-ED-0140-0151</td>
                                  <td>ENG'G-DIGITAL LAB EQPT</td>
                                  <td>ENG'G</td>
                                  <td>Digital Lab</td>
                                  <td>ENGR. JOSE RHYZ ISMAEL</td>
                                  <td>Good Condition</td>
	                              </tr>
                                <tr>
                                  <td>1</td>
                                  <td>Analog-Digital Communication Trainer</td>
                                  <td>04-ED-001,04-ED-0140-0151</td>
                                  <td>ENG'G-DIGITAL LAB EQPT</td>
                                  <td>ENG'G</td>
                                  <td>Digital Lab</td>
                                  <td>ENGR. JOSE RHYZ ISMAEL</td>
                                  <td>Good Condition</td>
	                              </tr>
                                <tr>
                                  <td>1</td>
                                  <td>Analog-Digital Communication Trainer</td>
                                  <td>04-ED-001,04-ED-0140-0151</td>
                                  <td>ENG'G-DIGITAL LAB EQPT</td>
                                  <td>ENG'G</td>
                                  <td>Digital Lab</td>
                                  <td>ENGR. JOSE RHYZ ISMAEL</td>
                                  <td>Good Condition</td>
	                              </tr>
	                              </tbody>
	                          </table>
	                  	  </div><! --/content-panel -->
	                  </div><!-- /col-md-12 -->
				</div><!-- row -->

              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> Advanced Table</h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Company</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Descrition</th>
                                  <th><i class="fa fa-bookmark"></i> Profit</th>
                                  <th><i class=" fa fa-edit"></i> Status</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td><a href="basic_table.php#">Company Ltd</a></td>
                                  <td class="hidden-phone">Lorem Ipsum dolor</td>
                                  <td>12000.00$ </td>
                                  <td><span class="label label-info label-mini">Due</span></td>
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <a href="basic_table.php#">
                                          Dashgum co
                                      </a>
                                  </td>
                                  <td class="hidden-phone">Lorem Ipsum dolor</td>
                                  <td>17900.00$ </td>
                                  <td><span class="label label-warning label-mini">Due</span></td>
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <a href="basic_table.php#">
                                          Another Co
                                      </a>
                                  </td>
                                  <td class="hidden-phone">Lorem Ipsum dolor</td>
                                  <td>14400.00$ </td>
                                  <td><span class="label label-success label-mini">Paid</span></td>
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <a href="basic_table.php#">
                                          Dashgum ext
                                      </a>
                                  </td>
                                  <td class="hidden-phone">Lorem Ipsum dolor</td>
                                  <td>22000.50$ </td>
                                  <td><span class="label label-success label-mini">Paid</span></td>
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td><a href="basic_table.php#">Total Ltd</a></td>
                                  <td class="hidden-phone">Lorem Ipsum dolor</td>
                                  <td>12120.00$ </td>
                                  <td><span class="label label-warning label-mini">Due</span></td>
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="basic_table.php#" class="go-top">
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

  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
