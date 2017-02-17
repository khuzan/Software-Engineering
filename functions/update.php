<?php
session_start();
include "function.php";
$db = connect();
if (isset($_POST['save'])) {


	$id = $_POST['id'];
	$name = $_POST['name'];
	$course = $_POST['course'];
	$subject = $_POST['subj'];
	$desc = "";
	$date = $_POST['det'];
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

	$query = $db->prepare("UPDATE borrower SET
						 student_id = :id,
						 name = :name,
						 course = :course,
						 subject = :subj,
						 descr = :descr,
						 dates = :det,
						 received = :checked
             WHERE id = :id ");

  $query->bindValue('student_id',$id);
  $query->bindValue('name',$name);
  $query->bindValue('course',$course);
  $query->bindValue('subject',$subject);
  $query->bindValue('descr',$desc);
  $query->bindValue('dates',$date);
  $query->bindValue('received',$rec);



	if ($query->execute()) {
    echo "success!";

	}
	else{
		echo "SHINESS";
	}

}


?>
