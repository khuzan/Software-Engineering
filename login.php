<!DOCTYPE html>
<html>
<head>
  <title>Software Engneering</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
  <script src="bootstrap-3.3.7-dist/js/jquery-3.1.1.min.js"></script>
  <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>



  <link rel="stylesheet" href="../css/animate.css">
  <script src="../js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
</head>

<body>
<br>
&nbsp&nbsp

  <div class="container">

<form class="login" method="POST" action="functions/loginfunction.php">
    <div class="form-group">

      <div class="inner-addon left-addon">
    <i class="glyphicon glyphicon-user"></i>
    <input type="text" class="form-control" placeholder="Username" name="username"  required/>
      </div>
    </div>

    <div class="form-group">

    <div class="inner-addon left-addon">
    <i class="glyphicon glyphicon-lock"></i>
    <input type="password" class="form-control" placeholder="Password" name="password" required/>
    </div>
    <br>
    <button type="submit" name="submit" class="btn btn-default" style="margin-right:34%;"><strong>Submit</strong></button>

    <button onclick="goBack()" class="btn btn-default"><i class="glyphicon glyphicon-circle-arrow-left"></i><strong> Back</strong></button>
    <div class="error">
      <?php
      if(isset($_GET['error'])==1){
      echo '<p class="error-style">Invalid Username or Password!<p/>';
      }
      ?>
      </div>
      </div>
  </form>



</body>

</html>
<style type="text/css">

body{
  margin: 0 auto;
  background-color: #3F8588;
}
/*ERROR*/
.error{
  position: absolute;
  bottom: -5px;
  margin-left: 10px;
  font-weight: bold;
}
.error-style{

  color: red;
}

.logo{
  margin: 0 auto;
  width: 50px;
  position: absolute;
  top: 23px;
  left: 1100px;
}

.container{
  margin: 0 auto;
  width: 20%;
  border: solid 2px white;
  height: 215px;
  position: relative;
  top: 150px;
  animation-name: push;
  animation-duration: 1s;

}
@keyframes push{
  0% {width: 20%; height: 180px;}
  100%{width: 20%; height: 215px;}
}



/*Login*/
label{
  font-family: Bookman Old Style;
  font-size: 20px;
}
.login{
  margin-top: 35px;

}
/*CSS GLYPHICON*/
/* enable absolute positioning */
.inner-addon {
    position: relative;
}

/* style icon */
.inner-addon .glyphicon {
  position: absolute;
  padding: 10px;
  pointer-events: none;
}

/* align icon */
.left-addon .glyphicon  { left:  0px;}
.right-addon .glyphicon { right: 0px;}

/* add padding  */
.left-addon input  { padding-left:  30px; }
.right-addon input { padding-right: 30px; }


</style>
<!-- SCRIPT SHITS -->
<script>
function goBack() {
    window.history.back();
}
</script>
