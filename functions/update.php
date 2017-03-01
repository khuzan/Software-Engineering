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
	$datereturn = $_POST['datereturn'];
	$comments = $_POST['comment'];



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
  	header('Location:../todo_list.php');

	}
	else{
		echo "SHINESS";
	}

}


?>
