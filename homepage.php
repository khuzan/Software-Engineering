<!DOCTYPE html>
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
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- <?php
      session_start();
      include "functions/function.php";
      $db = connect();
if (! empty($_SESSION['login']))
{
    header('location:homepage.php');
}
else
{
    echo 'You are not logged in. <a href="login.php">Click here</a> to log in.';

}
?> -->
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

              	  <p class="centered"><a href="profile.php"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">JOSE RHYZ ISMAEL</h5>

                  <li class="mt">
                      <a class="active" href="homepage.php">
                          <i class="fa fa-home"></i>
                          <span>Homepage</span>
                      </a>
                  </li>


                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Inventory</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="todo_list.php">Todo List</a></li>
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



              <div class="row">
                <div align="center" style="background-color:#EAEAEA;">
                  <h2 class="brand-before">
                              <small>Welcome </small>
                          </h2>
                          <h1 class="brand-name front">Administrator</h1>
                          <hr style="width:100px;">
                          <small>By
                        <strong>SJPIICD</strong>
                          </small>
                </div>

                  <div class="col-lg-9 main-chart">
                    <br><br>
                        <h2 class="intro-text">About
                            <strong>Digital Laboratory</strong>
                        </h2>
                        <hr class="baglis pull-left">




                  	<div class="row mtbox">
                      <div class="content-section-a">


                          <div class="col-lg-6 col-sm-6">
                              <hr class="section-heading-spacer">
                              <h2 class="section-heading">The Digital Laboratory</h2>
                              <p class="lead" style="font-size:18px;" align="justify">Located at the St. John Paul II College of Davao's 6th floor, the Digital Laboratory is used to enhance the skills and capabilities of the Engineering and Information Technology students in their electrical-related subjects such as EE51, ECE552, CpE403, and more.
                              </p>
                          </div>
                          <div class="col-lg-6  col-sm-6">
                              <img class="img-responsive" src="assets/img/1.jpg" alt="">
                          </div>

                  <!-- /.container -->
              </div>
                  	</div><!-- /row mt -->


                      <div class="row mt">
                        <div class="content-section-b">




                <div class="col-lg-6  col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <h2 class="section-heading">Headed and supervised by<br> Engr. Jose Rhyz Ismael</h2>
                    <p class="lead" align="justify">The Digital Laboratory has several lists of equipment which could be borrowed by the students for free. This would be Engr. Ismael's helping hand in monitoring those equipment lend to the students. <br></br><br></br>
                    </p>
                </div>
                <div class="col-lg-6 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="assets/img/2.jpg" alt="">
                </div>



        <!-- /.container -->

    </div>
        </div><!-- /row -->





                  </div><!-- /col-lg-9 END SECTION MIDDLE -->


      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->

                  <div class="col-lg-3 ds">

                       <!-- USERS ONLINE SECTION -->
						<h3>TEAM MEMBERS</h3>
                      <!-- First Member -->
                      <div class="desc">
                      	<div class="thumb">
                      		<img class="img-circle" src="assets/img/PROFILE PIC.jpg" width="35px" height="35px" align="">
                      	</div>
                      	<div class="details">
                      		<p><a href="#">Khuzan Omandac</a><br/>
                      		   <muted>09124551675</muted>
                      		</p>
                      	</div>
                      </div>
                      <!-- Second Member -->
                      <div class="desc">
                      	<div class="thumb">
                      		<img class="img-circle" src="assets/img/eman.jpg" width="35px" height="35px" align="">
                      	</div>
                      	<div class="details">
                      		<p><a href="#">Eman Imbod</a><br/>
                      		   <muted>09302486876</muted>
                      		</p>
                      	</div>
                      </div>
                      <!-- Third Member -->
                      <div class="desc">
                      	<div class="thumb">
                      		<img class="img-circle" src="assets/img/jam.jpg" width="35px" height="35px" align="">
                      	</div>
                      	<div class="details">
                      		<p><a href="#">jerlyn Jamora</a><br/>
                      		   <muted>09350812957</muted>
                      		</p>
                      	</div>
                      </div>



                        <!-- CALENDAR-->
                        <div id="calendar" class="mb">
                            <div class="panel green-panel no-margin">
                                <div class="panel-body">
                                    <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                                        <div class="arrow"></div>
                                        <h3 class="popover-title" style="disadding: none;"></h3>
                                        <div id="date-popover-content" class="popover-content"></div>
                                    </div>
                                    <div id="my-calendar"></div>
                                </div>
                            </div>
                        </div><!-- / calendar -->

                  </div><!-- /col-lg-3 -->
              </div><! --/row -->

              <!-- PROFILE STARTS -->
              <div class="row">
                <div class="box">
                <div class="col-lg-12">
                    <hr class="baglisdos">
                    <h2 class="intro-text text-center">Software
                        <strong>Engineers</strong>
                    </h2>
                    <hr class="baglisdos">
                </div>
                <div class="col-md-4 mb">
    							<!-- WHITE PANEL - TOP USER -->
    							<div class="white-panel pn">
    								<div class="white-header">
    									<h5><b>Technical Writer</b></h5>
    								</div>
    								<p><img src="assets/img/jam.jpg" class="img-circle" width="80"></p>
    								<p><b>Jerlyn Jamora</b></p>
    								<div class="row">
    									<div class="col-md-12">
    										<p class="small mt">FOLLOW ME ON SOCIAL MEDIA</p>
                        <a href="https://www.facebook.com/jerlyn.jamora" >
                          <i class="fa fa-facebook space"></i>
                        </a>
                        <a href="https://plus.google.com/u/0/114493656482019045804">
                          <i class="fa fa-google space"></i>
                        </a>
                        <a href="https://twitter.com/jerlynjamora">
                          <i class="fa fa-twitter space"></i>
                        </a>
                        <a href="https://www.instagram.com/jajamjaaam/">
                          <i class="fa fa-instagram space"></i>
                        </a>
    									</div>
    								</div>
    							</div>
    						</div><!-- /col-md-4 -->
                <div class="col-md-4 mb">
    							<!-- WHITE PANEL - TOP USER -->
    							<div class="white-panel pn">
    								<div class="white-header">
    									<h5><b>Project Leader/Programmer</b></h5>
    								</div>
    								<p><img src="assets/img/PROFILE PIC.jpg" class="img-circle" width="80"></p>
    								<p><b>Khuzan Omandac</b></p>
    								<div class="row">
    									<div class="col-md-12">
    										<p class="small mt">FOLLOW ME ON SOCIAL MEDIA</p>
                        <a href="https://www.facebook.com/khuzan91">
                          <i class="fa fa-facebook space" ></i>
                        </a>
                        <a href="https://mail.google.com/mail/u/0/#inbox">
                          <i class="fa fa-google space" ></i>
                        </a>
                        <a href="https://github.com/khuzan">
                          <i class="fa fa-github space"></i>
                        </a>
                        <a href="https://www.instagram.com/khuzandot1/">
                          <i class="fa fa-instagram space"></i>
                        </a>
                        <a href="https://twitter.com/khuzan557">
                          <i class="fa fa-twitter space"></i>
                        </a>

    									</div>
    								</div>
    							</div>
    						</div><!-- /col-md-4 -->
                <div class="col-md-4 mb">
    							<!-- WHITE PANEL - TOP USER -->
    							<div class="white-panel pn">
    								<div class="white-header">
    									<h5><b>Analyst</b></h5>
    								</div>
    								<p><img src="assets/img/eman.jpg" class="img-circle" width="80"></p>
    								<p><b>Eman Imbod</b></p>
    								<div class="row">
    									<div class="col-md-12">
    										<p class="small mt">FOLLOW ME ON SOCIAL MEDIA</p>
                        <a href="https://www.facebook.com/eman.imbod">
                          <i class="fa fa-facebook space"></i>
                        </a>
                        <a href="https://mail.google.com/mail/u/0/#inbox/15aabc1b6972c160">
                        <i class="fa fa-google"></i>
                      </a>
                        <i class="fa fa-twitter space"></i>
                        <i class="fa fa-instagram space"></i>

    									</div>
    							</div>
    						</div><!-- /col-md-4 -->


            </div>
              </div>
            <!-- PROFILE ENDS -->

          </section>
      </section>


      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2016-2017 khuzan.js
              <a href="homepage.php#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>
	<script src="assets/js/zabuto_calendar.js"></script>

	<!-- <script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to Dashgum!',
            // (string | mandatory) the text inside the notification
            text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. Free version for <a href="http://blacktie.co" target="_blank" style="color:#ffd777">BlackTie.co</a>.',
            // (string | optional) the image to display on the left
            image: 'assets/img/ui-sam.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
	</script> -->

	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });

            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });


        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>


  </body>
</html>
<style media="screen">
  .baglis{
    width: 300px;
    margin-top: 20px;
    margin-bottom: 20px;
    border: 0;
    border-top: 1px solid #98ABAB;
    max-width: 400px;
    border-color: #98ABAB;
  }
  .baglisdos{
    width: 400px;
    margin-top: 20px;
    margin-bottom: 20px;
    border: 0;
    border-top: 1px solid #98ABAB;
    max-width: 400px;
    border-color: #98ABAB;
  }
  .space{
    margin: 5px;
  }
</style>
