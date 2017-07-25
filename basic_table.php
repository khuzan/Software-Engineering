<!DOCTYPE html>
<?php
session_start();
include "functions/function.php";
$db = connect();

if(isset($_GET['action']) && $_GET['action']=='delete'){
  $db = connect();
  $sth = $db->prepare("DELETE FROM reserved_borrowers WHERE id = :id");
  $sth2 = $db->prepare("DELETE FROM returned_data WHERE b_id =:b_id");

  $sth->bindValue('id',$_GET['id']);
  $sth2->bindValue('b_id',$_GET['id']);

  $sth->execute();
  $sth2->execute();
  echo ("<SCRIPT LANGUAGE='JavaScript'>
      window.alert('Succesfully Updated')
      window.location.href='basic_table.php'
      </SCRIPT>");
}
?>

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
    <link href="css/mycss.css" rel="stylesheet">
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
                          <li class="active"><a  href="basic_table.php">Returned Items Table</a></li>
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
          	<h3><i class="fa fa-angle-right"></i> Basic Tables</h3>
				<div class="row mt">

	                  <div class="col-md-12 mt">
	                  	<div class="content-panel task-css">
	                          <table class="table table-hover" id="myTable">
	                  	  	  <h4><i class="fa fa-angle-right"></i> Returned Items</h4>
                            <div class="input-group" id="search">
                                <input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
                                <span class="input-group-addon">
                                    <i class="fa fa-search"></i>
                                </span>
                            </div>
	                  	  	  <hr>
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
                                <?php foreach (getreturned() as $g):?>
                                  <tr>
                                    <td ><?php echo $g->id; ?></td>
                                    <td ><?php echo $g->name; ?></td>
                                    <td ><?php echo $g->course; ?></td>
                                    <td ><?php echo $g->subject; ?></td>
                                    <!-- <td ><?php echo $g->descr; ?></td> -->
                                    <td ><?php echo $g->dateoflend; ?></td>
                                    <td ><?php echo $g->received; ?></td>
                                    <td>
                                      <button title="View items" data-id ="<?php echo $g->id;?>" name="view_data" class="btn btn-info btn-md view glyphicon glyphicon-eye-open" data-toggle="modal" data-target="#myModal"></button>
                                    <a href="basic_table.php?id=<?php echo $g->id;?>
                                      &action=delete" onclick="return confirm('Are you sure?')"
                                      <button name="delete" title="Delete item" class="btn btn-danger btn-md  glyphicon glyphicon-trash"></button>
                                    </a>
                                    </td>
                                  </tr>
                                  <?php endforeach;?>
                                </tbody>
	                          </table>
	                  	  </div><! --/content-panel -->
	                  </div><!-- /col-md-12 -->
				</div><!-- row -->



		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2016-2017 khuzan.js
              <a href="basic_table.php#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->

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
                <input name="b_print" type="button" class="btn btn-primary"   onClick="printdiv('div_print');" value=" Print ">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>

    		<!-- END VIEW MODAL -->
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


      //view modal script
      $(function(){
          $('select.styled').customSelect();
      });


      $(document).on('click', '.view', function(){
                 var id = $(this).data("id");

                 if(id != '')
                 {
                      $.ajax({
                           url:"functions/returned_data.php",
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
