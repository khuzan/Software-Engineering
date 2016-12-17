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

  <div class="container">
<form class="login" method="POST" action="functions/loginfunction.php">
    <div class="form-group">
      <label for="text">Username:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter username" name="username" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
    </div>
   
    <button type="submit" name="submit" class="btn btn-default" style="width:30%;" ><strong>Submit</strong></button>

    <button onclick="goBack()" style="width:30%; margin-left: 39%; height: 35px;
    padding:3px; border-radius:7px; background-color:#FFFFFF;"><strong><< Back</strong></button>
    <div class="error">
      <?php
      if(isset($_GET['error'])==1){
      echo '<p>Invalid Username or Password!<p/>';
      }
      ?>
      </div>
  </form>


   
  </div>

  
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
  bottom: 10px;
  font-weight: bold;
}
.logo{
  margin: 0 auto;
  width: 50px;
  position: absolute;
  top: 23px;
  left: 1100px;
}
.head{
  padding-top: 6px;
}
.head header{
  width: 1365px;
  height: 50px;
  margin: 0 auto;
  background-color: white;
}
.container{
  margin: 0 auto;
  width: 35%;
  height: 350px;
  border: 2px solid white;
  position: relative;
  top: 80px;
  animation-name: tubig; 
  animation-duration: 1s; 
  
}

@keyframes tubig{
  0% {width: 550px; height: 250px;}
  100%{width: 35%; height: 350px;}
}



/*Login*/
label{
  font-family: Bookman Old Style;
  font-size: 20px;
}
.login{
  margin-top: 80px;

}



</style>
<!-- SCRIPT SHITS -->
<script>
function goBack() {
    window.history.back();
}
</script>
