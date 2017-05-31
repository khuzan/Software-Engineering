<?php
	function connect(){
		$db = new PDO("mysql:host=localhost;dbname=inventory_system","root","");
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
	$sth = $db->prepare("SELECT * From borrower order by id");
	$sth->execute();
	$results = $sth->fetchAll(PDO::FETCH_OBJ);
	return $results;
  	}
		function getitems(){
  	$db = connect();
	$sth = $db->prepare("SELECT * From items order by items_id");
	$sth->execute();
	$results = $sth->fetchAll(PDO::FETCH_OBJ);
	return $results;
  	}


		function getinfobyid($id){
		$db = connect();
	$sth = $db->prepare("SELECT * FROM borrowed_items
					INNER JOIN borrower ON borrowed_items.borrower_id = borrower.id
					WHERE borrower.id = :id");
	$sth->bindValue('id',$id);
	$sth->execute();
	$results = $sth->fetch(PDO::FETCH_OBJ);
	return $results;
		}

		function getreturned(){
			$db = connect();
		$sth = $db->prepare("SELECT * FROM borrowed_items
            INNER JOIN borrower ON borrowed_items.borrower_id = borrower.id WHERE status = 'returned'");
		$sth->execute();
		$results = $sth->fetchAll(PDO::FETCH_OBJ);
		return $results;
		}

		function getitemsbyname($name){
			$db = connect();
			$sth = $db->prepare("SELECT * From items WHERE description = '$name'");
			$sth->execute();
			$results = $sth->fetch(PDO::FETCH_OBJ);
			return $results;
		}
		function getitemsbyid($id){
			$db = connect();
			$sth = $db->prepare("SELECT * From items WHERE items_id = '$id'");
			$sth->execute();
			$results = $sth->fetch(PDO::FETCH_OBJ);
			return $results;
		}
		function getborroweditemsbyid($b_id){
			$db = connect();
			$sth = $db->prepare("SELECT * From borrowed_items WHERE borrower_id = '$b_id'");
			$sth->execute();
			$results = $sth->fetchAll(PDO::FETCH_OBJ);
			return $results;
		}

		function studentexists($name){
 		$db = connect();
 	$query = $db->prepare("SELECT * from borrower WHERE  name = ?");
 	$query->bindParam(1,$name);
 	$query->execute();
	$results = $query->fetch(PDO::FETCH_OBJ);
	return $results;
}
		
		function getborroweritemsbyid($borrower_id){
 		$db = connect();
 	$query = $db->prepare("SELECT * from borrowed_items WHERE  borrower_id = ?");
 	$query->bindParam(1,$borrower_id);
 	$query->execute();
	$results = $query->fetch(PDO::FETCH_OBJ);
	return $results;
}
 ?>
