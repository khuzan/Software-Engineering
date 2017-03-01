<?php
session_start();
include "../functions/function.php";
$db = connect();
if (isset($_POST['borrow'])) {


	$id = $_POST['id'];
	$name = $_POST['name'];
	$course = $_POST['course'];
	$subject = $_POST['subj'];
	$desc = "";
	$date = date('y/m/d');

	$rec = $_POST['checked'];

	if(isset($_POST['analog'])){
		$desc .= $_POST['analog']."<br>";
	}
	if(isset($_POST['power'])){
		$desc .= $_POST['power']."<br>";
	}
	if (isset($_POST['camsco'])) {
		$desc .= $_POST['camsco']."<br>";
	}
	if (isset($_POST['antenna'])) {
		$desc .= $_POST['antenna'];
	}

	$query = $db->prepare("INSERT INTO borrower SET
						 student_id = :id,
						 name = :name,
						 course = :course,
						 subject = :subj,
						 descr = :descr,
						 dates = :det,
						 received = :checked ");
	$execute_query = [':id' => $id,
						':name' => $name,
						':course' => $course,
						':subj' => $subject,
						':descr' => $desc,
						':det' => $date,
						':checked' => $rec];

	if ($query->execute($execute_query)) {
		header('Location:../todo_list.php');
	}
	else{
		echo "SHINESS";
	}

}


?>
