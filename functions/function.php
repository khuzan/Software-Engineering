<?php 
	function connect(){
		$db = new PDO("mysql:host=localhost;dbname=borrowing_system","root","");
		return $db;
	}


	 function finduser($user, $password){
  		$db = connect();
		$query = $db->prepare("Select * from login WHERE username = ? AND password = ?");
		$query->bindParam(1,$user);
		$query->bindParam(2,$password);

		if($query->execute()){
		if($query->rowCount() > 0){
			return true;
		}
		else{
			false;
		}
	}
  	}	

  	function getinfo(){
  	$db = connect();
	$sth = $db->prepare("Select * From slip order by id");
	$sth->execute();
	$results = $sth->fetchAll(PDO::FETCH_OBJ);
	return $results;
  	}

	
	
 ?>