<?php
	session_start();
	include "function.php";
	$db = connect();



	if(isset($_POST['submit'])){

      $user = $_POST['username'];
      $password = $_POST['password'];

      if(finduser($user,$password)){
         $stmt = $db->prepare("select * from login where username =:user");
				$stmt->bindValue(':username',$user);
				$stmt->execute();
				$account = $stmt->fetch(PDO::FETCH_OBJ);

				$_SESSION['login']=$account->id;

				header("Location:../homepage.php");

   }
   else{
      header("Location:../index.php?error=1");
   }}

?>
