<!DOCTYPE html>
<?php
	session_start();
	include "functions/function.php";
	$db = connect();


	if(isset($_GET['action']) && $_GET['action']=='delete'){
  	$db = connect();
  	$sth = $db->prepare("DELETE FROM borrower WHERE id = :id");
  	$sth->bindValue('id',$_GET['id']);
  	$sth->execute();
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
                          <i class="fa fa-tasks"></i>
                          <span>Forms</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="form_component.php">Form Components</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Data Tables</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="basic_table.php">Basic Table</a></li>
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

          	<!-- COMPLEX TO DO LIST -->
              <div class="row mt">
                  <div class="col-md-12">
                      <section class="task-panel tasks-widget">
	                	<div class="panel-heading">
	                        <div class="pull-left"><h5><i class="fa fa-tasks"></i> Registration Form - Personal Information </h5></div>
	                        <br>
	                 	</div>
                          <div class="panel-body">
                              <div class="task-content">

																<!-- start -->
					<div class="box">

            <!-- box-header -->
            <!-- form start -->


							<form class="form-horizontal" method="POST"	action="functions/borrowprocess.php">
							<div class="box-body ">
								<div class="form-group ">
									<label for="exampleInputName1" class="col-sm-2 control-label " >Full Name</label>
									<div class="col-sm-10">

										<input type="text" class="form-control input-size" id="exampleInputName1"placeholder="Full Name"  maxlength="50"  name="name" required>
									</div>
								</div>
								<div class="form-group">
									<label for="exampleInputName3" class="col-sm-2 control-label">ID Number</label>
									<div class="col-sm-10">
										<input type="text" class="form-control input-size" id="exampleInputName3" maxlength="9" placeholder="2014-XXXX" name="id" required>
									</div>
								</div>
								<div class="form-group">
									<label for="exampleInputName2" class="col-sm-2 control-label">Course/Year</label>
									<div class="col-sm-10">
										<select  name="course" class="form-control input-size" id="exampleInputName2" required>
											<option selected ></option>
											<option value="BS Information Technology - I">BS Information Technology - I</option>
											<option value="BS Information Technology - II">BS Information Technology - II</option>
											<option value="BS Information Technology - III">BS Information Technology - III</option>
											<option value="BS Information Technology - IV">BS Information Technology - IV</option>
											<option value="BS Engineering - I">BS Engineering - I</option>
											<option value="BS Engineering - II">BS Engineering - II</option>
											<option value="BS Engineering - III">BS Engineering - III</option>
											<option value="BS Engineering - IV">BS Engineering - IV</option>
											<option value="BS Engineering - V">BS Engineering - V</option>
									 </select>
									</div>
								</div>
								<div class="form-group">
									<label for="exampleInputName4" class="col-sm-2 control-label">Subject</label>
									<div class="col-sm-10">
										<select class="form-control input-size" name="subj" id="exampleInputName4">
											<option selected></option>
											<option value="LOGIC">LOGIC</option>
										</select>
									</div>
								</div>

							</div>

          </div>
					<!-- BOX HEADER END -->
					      <div class="row-group">
                                    <div class="table-width">
                                      <table class="table table-fixed table-bordered form-inline">
                                      <thead>
                                        <tr>
                                          <th>ITEM DESCRIPTION</th>
																				</tr>

                                      </thead>
                                      <tbody>
                                        <tr>

																				    <td>
                                              <label class="custom-control checkbox-primary">
                                              <input type="checkbox" name="analog" class="custom-control-input" value="Analog-Digital Communication Trainer">
                                              <span class="custom-control-indicator"></span>
                                              <span class="custom-control-description">Analog-Digital Communication Trainer</span>
                                              </label>
																							<select class="form-control input-css " name="" data-toggle="dropdown">
																								<ul class="dropdown-menu scrollable-menu" role="menu">
																									<option></option>
																									<?php
																									for ($i=1; $i <=50 ; $i++) {
																										echo '<li><option value="'.$i.'">'.$i.'</option></li>';
																									}
																									?>
																								</ul>
																							</select>
                                            </td>

                                        </tr>
                                        <tr>
																				  <td>
                                            <label class="custom-control checkbox-primary">
                                            <input type="checkbox" name="power" class="custom-control-input" value="0-15 VOLTS POWER SUPPLY">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">0-15 VOLTS POWER SUPPLY</span>
                                            </label>
																						<select class="form-control input-css" name="" data-toggle="dropdown">
																							<ul class="dropdown-menu scrollable-menu" role="menu">
																								<option></option>
																								<?php
																								for ($i=1; $i <=50 ; $i++) {
																									echo '<li><option value="'.$i.'">'.$i.'</option></li>';
																								}
																								?>
																							</ul>
																						</select>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <label class="custom-control checkbox-primary">
                                            <input type="checkbox" name="camsco" class="custom-control-input" value="CAMSCO MOTOR STARTER">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">CAMSCO MOTOR STARTER</span>
                                            </label>
																						<select class="form-control input-css" name="" data-toggle="dropdown">
																							<ul class="dropdown-menu scrollable-menu" role="menu">
																								<option></option>
																								<?php
																								for ($i=1; $i <=50 ; $i++) {
																									echo '<li><option value="'.$i.'">'.$i.'</option></li>';
																								}
																								?>
																							</ul>
																						</select>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <label class="custom-control checkbox-primary">
                                            <input type="checkbox" name="antenna" class="custom-control-input" value="ANTENNA SYSTEM">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">ANTENNA SYSTEM</span>
                                            </label>

																						<select class="form-control input-css" name="" data-toggle="dropdown">
																							<ul class="dropdown-menu scrollable-menu" role="menu">
																								<option></option>
																								<?php
																								for ($i=1; $i <=50 ; $i++) {
																									echo '<li><option value="'.$i.'">'.$i.'</option></li>';
																								}
																								?>
																							</ul>
																						</select>
                                          </td>
                                        </tr>

                                      </tbody>
                                    </table>
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
                                          <hr style="width:180px; margin:0 auto; border-bottom: 1px solid black;">
                                          </label>
                                        </div>

                                      </div>

                                  </div>



                              <div class=" add-task-row">
                                  <a class="btn btn-success btn-sm pull-left" href="todo_list.php#">Borrow Item(s)</a>

                                  <button type="submit" title="submit" name="borrow" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-check"></span> SUBMIT</button>
                              </div>
                              </form>
                          </div>
                      </section>
                  </div><!-- /col-md-12-->
              </div><!-- /row -->


          	<!-- SORTABLE TO DO LIST -->

              <div class="row mt mb">
                  <div class="col-md-12">
                      <section class="task-panel tasks-widget">
	                	<div class="panel-heading">
	                        <div class="pull-left"><h5><i class="fa fa-tasks"></i> Borrower List</h5></div>
	                        <br>
	                 	</div>
                          <div class="panel-body">
                              <div class="task-content">
                                <table class="table table-scroll table-striped">
                                  <thead>
                                    <tr>
                                      <th >STUDENT ID#</th>
                                      <th >NAME</th>
                                      <th >COURSE</th>
                                      <th >SUBJECT</th>
                                      <!-- <th >DESCRIPTION</th> -->
                                      <th >DATE OF LEND</th>
                                      <th >CHECKED BY</th>
                                      <th >OPTION</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                  <?php foreach (getinfo() as $g):?>
                                    <tr>
                                      <td ><?php echo $g->student_id; ?></td>
                                      <td ><?php echo $g->name; ?></td>
                                      <td ><?php echo $g->course; ?></td>
                                      <td ><?php echo $g->subject; ?></td>
                                      <!-- <td ><?php echo $g->descr; ?></td> -->
                                      <td ><?php echo $g->dates; ?></td>
                                      <td ><?php echo $g->received; ?></td>
                                      <td>
                                        <button title="View items" data-id ="<?php echo $g->id;?>" name="view_data" class="btn btn-info btn-md view glyphicon glyphicon-eye-open" data-toggle="modal" data-target="#myModal"></button>
                                        <button title="Update" name="update" data-id="<?php echo $g->id;?>" class="btn btn-success btn-md update glyphicon glyphicon-edit" data-toggle="modal" data-target="#updateModal"></button>
                                      <a href="todo_list.php?id=<?php echo $g->id;?>
                                        &action=delete" onclick="return confirm('Are you sure?')"
                                        <button name="delete" title="Delete item" class="btn btn-danger btn-md  glyphicon glyphicon-trash"></button>
                                      </a>
                                      </td>
                                    </tr>
                                    <?php endforeach;?>
                                  </tbody>
                                </table>
                              </div>
                              <div class=" add-task-row">
                                  <a class="btn btn-success btn-sm pull-left" href="todo_list.php#">Borrow Item(s)</a>

                              </div>
                          </div>
                      </section>
                  </div><!--/col-md-12 -->
              </div><!-- /row -->

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
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


  <script>
      //custom select box
			//view modal script
      $(function(){
          $('select.styled').customSelect();
      });


      $(document).on('click', '.view', function(){
                 var id = $(this).data("id");

                 if(id != '')
                 {
                      $.ajax({
                           url:"functions/fetch_process.php",
                           method:"POST",
                           data:{M_view:id},
                           success:function(data){
                                $('#modalview').html(data);
                                $('#myModal').modal('show');
                           }
                      });
                 }
            });

						// end view script

						//modal update script
						$(document).on('click', '.update', function(){
						           var id = $(this).data("id");

						           if(id != '')
						           {
						                $.ajax({
						                     url:"functions/update_process.php",
						                     method:"POST",
						                     data:{update:id},
						                     success:function(data){
						                          $('#updatemodalview').html(data);
						                          $('#updateModal').modal('show');
						                     }
						                });
						           }
						      });
						// end update script
  </script>

  </body>
	<!-- VIEW MODAL -->
  <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" align="center">Borrower's Details</h4>
          </div>
          <div class="modal-body" id="modalview">
            <p id = "test" align="center">Some text in the modal.</p>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>

		<!-- END VIEW MODAL -->

		<!-- UPDATE MODAL -->
		<!-- UPDATE MODAL -->
		<div class="modal fade" id="updateModal" role="dialog">
		    <div class="modal-dialog modal-lg">
					<form class="" action="functions/update.php" method="post">


		      <!-- Modal content-->
		      <div class="modal-content form-group" >
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h4 class="modal-title" align="center">Update Details</h4>
		        </div>
		        <div class="modal-body" id="updatemodalview">
		          <p id = "test" align="center">Some text in the modal.</p>
							HELLO
		        </div>
		        <div class="modal-footer">
		          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary" name="update">Save Changes</button>
						</form>
		        </div>
		      </div>

		    </div>
		  </div>
</html>
<style media="screen">
	.input-size{
		width: 400px;
	}
</style>
