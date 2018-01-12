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
	$status = $_POST['status'];
	$datereturn = date('y/m/d');
	$comments = $_POST['comment'];

	$items = $_POST['items'];
 $quantity = $_POST['analogqty'];

if ($status == 'returned') {
	foreach (getborroweditemsbyid($id) as $d) {
		$r = getitemsbyid($d->items_id);
		$iqty = $r->qty;
		$iqty = $iqty + $d->b_qty;
		$query2 = $db->prepare("UPDATE items SET qty = '$iqty' WHERE items_id = '$d->items_id'");
		$query3 = $db->prepare("UPDATE borrowed_items SET status = '$status' WHERE borrower_id = '$id'");
		$query4 = $db->prepare("UPDATE borrowed_items SET dateofreturn = '$datereturn' WHERE borrower_id = '$id'");
		$query5 = $db->prepare("DELETE FROM borrower WHERE id = '$id'");


		$query2->execute();
		$query3->execute();
		$query4->execute();
		$query5->execute();



	}

}
		$query = $db->prepare("UPDATE borrower SET
							 name = :name,
							 course = :course,
							 subject = :subj
	             WHERE id = :id ");

			$query1 = $db->prepare("UPDATE borrowed_items SET
							dateofreturn = :returned,
							comments = :comments
							WHERE b_id = :b_id");

	  $query->bindValue('id',$id);
	  $query->bindValue('name',$name);
	  $query->bindValue('course',$course);
	  $query->bindValue('subj',$subject);

		$query1->bindValue('returned',$datereturn);
		$query1->bindValue('comments',$comments);
		$query1->bindValue('b_id',$b_id);

		$query->execute();
		$query1->execute();

		// copy data and delete from one table to another table/ --
		$query3 = $db->prepare("INSERT INTO returned_data SELECT * FROM borrowed_items WHERE status = 'returned'");
		$query4 = $db->prepare("DELETE FROM borrowed_items WHERE status = 'returned'");


		$query3->execute();
		$query4->execute();



			echo ("<SCRIPT LANGUAGE='JavaScript'>
	        window.alert('Succesfully Updated')
	        window.location.href='../todo_list.php'
	        </SCRIPT>");

	}


// UPDATE ITEMS
	if (isset($_POST['update_items'])) {
		$id  = $_POST['items_id'];
		$descz = $_POST['desc'];
		$qty 	= $_POST['qty'];
		$remarks = $_POST['remarks'];

		$sql = $db->prepare("UPDATE items SET
						description = :descz,
						qty 				= :qty,
						remarks			= :rem
						WHERE items_id = :items_id");

		$sql->bindValue('items_id',$id);
		$sql->bindValue('descz',$descz);
		$sql->bindValue('qty',$qty);
		$sql->bindValue('rem',$remarks);


		$sql->execute();

		echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Succesfully Updated')
				window.location.href='../responsive_table.php'
				</SCRIPT>");
		# code...
	}

?>
