<?php
	include 'function.php';
	session_start();
	$db = connect();

	$b_id = $_SESSION['id'];
	$b_name = $_SESSION['name'];
	$b_course = $_SESSION['course'];
	$b_subject = $_SESSION['subject'];
	$b_checked = $_SESSION['checked'];
	$status = 'not returned';

	$b_name = strtoupper($b_name);
	$b_course = strtoupper($b_course);
	$b_subject = strtoupper($b_subject);
	$b_checked = strtoupper($b_checked);



	if (isset($_POST['submit'])) {

		foreach($_POST['product'] as $r){
			$s_id = $_POST['student_id'];
			$id = $r['id'];
		 $qty = $r['qty'];
		 $d = getitemsbyid($id);
		 if($qty > $d->qty){
			 echo ("<SCRIPT LANGUAGE='JavaScript'>
 	        window.alert('Too much quantity!')
 	        window.location.href='../checkout.php.'
 	        </SCRIPT>");
			//  header('Location: ../checkout.php?qtyerror');
			 exit();
			 break;
		 }

		}

		foreach ($_POST['product'] as $r ) {
			 $s_id = $_POST['student_id'];
			 $id = $r['id'];
			$qty = $r['qty'];

			 $dateoflend = date('y-d-m');
			$query = $db->prepare("INSERT INTO borrowed_items set borrower_id ='$s_id', items_id = '$id', dateoflend = '$dateoflend',
				 										status = '$status', received = '$b_checked', b_qty = '$qty'");

			$query->execute();

			$r = getitemsbyid($id);
			$iqty = $r->qty;
			$iqty = $iqty - $qty;
			$query2 = $db->prepare("UPDATE items SET qty = '$iqty' WHERE items_id = '$id'");
			$query2->execute();
		}

		$query1 = $db->prepare("INSERT INTO borrower set id = '$b_id', name = '$b_name', course = '$b_course',
				subject = '$b_subject'");
		$query1->execute();


		if ($iqty == 0 && $iqty < $qty) {
			 ("<SCRIPT LANGUAGE='JavaScript'>
		     window.alert('Sorry Out of stock!')
			    window.location.href='../todo_list.php'
			     </SCRIPT>");
		}
		session_destroy();

		echo ("<SCRIPT LANGUAGE='JavaScript'>
		    window.alert('Succesfully Added')
		    window.location.href='../todo_list.php'
		    </SCRIPT>");


	}
	else{
		echo "fail";
	}
?>
