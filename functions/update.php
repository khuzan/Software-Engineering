<?php
session_start();
include "function.php";
$db = connect();
if (isset($_POST['update'])) {

	 $b_id = $_POST['b_id'];
	$id = $_POST['id'];
	$name = $_POST['name'];
	$course = $_POST['course'];
	$subject = $_POST['subj'];
	$date = $_POST['dateoflend'];
	$status = $_POST['status'];
	$datereturn = date('y/m/d');
	$comments = $_POST['comment'];

	$items = $_POST['items'];
 $quantity = $_POST['analogqty'];

if ($status == 'returned') {
	foreach (getborroweditemsbyid($id) as $d) {
		$r = getitemsbyid($d->items_id);
		echo $iqty = $r->qty;
		echo $iqty = $iqty + $d->b_qty;
		$query2 = $db->prepare("UPDATE items SET qty = '$iqty' WHERE items_id = '$d->items_id'");
		$query2->execute();
	}

}
		$query = $db->prepare("UPDATE borrower SET
							 name = :name,
							 course = :course,
							 subject = :subj
	             WHERE id = :id ");

			$query1 = $db->prepare("UPDATE borrowed_items SET
							dateofreturn = :returned,
							status = :status,
							comments = :comments
							WHERE b_id = :b_id");

	  $query->bindValue('id',$id);
	  $query->bindValue('name',$name);
	  $query->bindValue('course',$course);
	  $query->bindValue('subj',$subject);

		$query1->bindValue('status',$status);
		$query1->bindValue('returned',$datereturn);
		$query1->bindValue('comments',$comments);
		$query1->bindValue('b_id',$b_id);

		$query->execute();
		$query1->execute();

			echo ("<SCRIPT LANGUAGE='JavaScript'>
	        window.alert('Succesfully Updated')
	        window.location.href='../todo_list.php'
	        </SCRIPT>");

	}

?>
