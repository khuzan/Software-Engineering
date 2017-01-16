<?php
session_start();
include "../functions/function.php";
$db = connect();
if (isset($_POST['borrow'])) {


	$id = $_POST['id'];
	$name = $_POST['name'];
	$course = $_POST['course'];
	$subject = $_POST['subj'];
	$desc = $_POST['descr'];
	$date = $_POST['det'];
	$rec = $_POST['checked'];
	

	$query = $db->prepare("INSERT INTO slip SET
						 student_id = :id, 
						 name = :name,
						 course = :course,
						 subject = :subj,
						 descr = :descr,
						 det = :det,
						 received = :checked ");
	$execute_query = [':id' => $id,
						':name' => $name,
						':course' => $course,
						':subj' => $subject,
						':descr' => $desc,
						':det' => $date,
						':checked' => $rec];

	if ($query->execute($execute_query)) {
		header('Location:../admin/borrower.php');
	}
	else{
		echo "SHINESS";
	}

}


?>