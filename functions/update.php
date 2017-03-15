<?php
session_start();
include "function.php";
$db = connect();
if (isset($_POST['update'])) {


	$id = $_POST['id'];
	$name = $_POST['name'];
	$course = $_POST['course'];
	$subject = $_POST['subj'];
	$date = $_POST['detoflend'];
	$status = $_POST['status'];
	$datereturn = date('y/m/d');
	$comments = $_POST['comment'];

	$items = $_POST['items'];
 $quantity = $_POST['analogqty'];

	if ($status=='returned') {
		$transanction = getitemsbyname($items);
		$dbqty = $transanction->qty;

		$result = $dbqty + $quantity;
		$query = $db->prepare("UPDATE items SET
							 qty = :qty
							 WHERE description = '$items'");

		$query->bindValue('qty',$result);

		if ($query->execute()) {

		$query = $db->prepare("UPDATE borrower SET
							 name = :name,
							 course = :course,
							 subject = :subj,
							 dates = :detoflend,
							 status = :status,
							 datereturn = :datereturn,
							 comments = :comments
	             WHERE id = :id ");

	  $query->bindValue('id',$id);
	  $query->bindValue('name',$name);
	  $query->bindValue('course',$course);
	  $query->bindValue('subj',$subject);
	  $query->bindValue('detoflend',$date);
		$query->bindValue('status',$status);
		$query->bindValue('datereturn',$datereturn);
		$query->bindValue('comments',$comments);



		if ($query->execute()) {

			echo ("<SCRIPT LANGUAGE='JavaScript'>
	        window.alert('Succesfully Updated')
	        window.location.href='../todo_list.php'
	        </SCRIPT>");


		}
		else{
			echo "SHITNESS";
		}

	}
	}
	else {
		$query = $db->prepare("UPDATE borrower SET
							 name = :name,
							 course = :course,
							 subject = :subj,
							 dates = :detoflend,
							 status = :status,
							 comments = :comments
	             WHERE id = :id ");

	  $query->bindValue('id',$id);
	  $query->bindValue('name',$name);
	  $query->bindValue('course',$course);
	  $query->bindValue('subj',$subject);
	  $query->bindValue('detoflend',$date);
		$query->bindValue('status',$status);
		$query->bindValue('comments',$comments);



		if ($query->execute()) {

			echo ("<SCRIPT LANGUAGE='JavaScript'>
	        window.alert('Succesfully Updated')
	        window.location.href='../todo_list.php'
	        </SCRIPT>");


		}
		else{
			echo "SHINESS";
		}
	}
	}



?>
