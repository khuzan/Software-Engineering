<?php
session_start();
include "function.php";
$db = connect();
if (isset($_POST['borrow'])) {


	$id = $_POST['id'];
	$name = $_POST['name'];
	$course = $_POST['course'];
	$subject = $_POST['subj'];
	$items = $_POST['items'];
	// $desc = "";
	$date = date('y/m/d');
	$quantity = $_POST['analogqty'];
	$rec = $_POST['checked'];

	$transanction = getitemsbyname($items);
	$dbqty = $transanction->qty;

	$result = $dbqty - $quantity;
	$query = $db->prepare("UPDATE items SET
						 qty = :qty
             WHERE description = '$items'");

  $query->bindValue('qty',$result);

	if ($dbqty == 0 || $dbqty < $quantity) {
		echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Sorry Out of Stock!')
        window.location.href='../todo_list.php'
        </SCRIPT>");
	}
	else {



	if ($query->execute()) {



	// if(isset($_POST['analog'])){
	// 	$desc .= $_POST['analog']."<br>";
	// }
	// if(isset($_POST['power'])){
	// 	$desc .= $_POST['power']."<br>";
	// }
	// if (isset($_POST['camsco'])) {
	// 	$desc .= $_POST['camsco']."<br>";
	// }
	// if (isset($_POST['antenna'])) {
	// 	$desc .= $_POST['antenna'];
	// }
	if(preg_match("/\d/",$name) || preg_match("/W/", $name))
		   {
 			header("Location:../todo_list.php?error");
		}
	elseif(preg_match("/[a-zA-Z]/", $id))
			   {
	 			header("Location:../todo_list.php?error2");
			}
	else{

	$query = $db->prepare("INSERT INTO borrower SET
						 student_id = :id,
						 name = :name,
						 course = :course,
						 subject = :subj,
						 descr = :descr,
						 dates = :det,
						 received = :checked,
						 qty = :qty ");
	$execute_query = [':id' => $id,
						':name' => $name,
						':course' => $course,
						':subj' => $subject,
						':descr' => $items,
						':det' => $date,
						':checked' => $rec,
						':qty' => $quantity];

	if ($query->execute($execute_query)) {
		echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Succesfully Added!')
        window.location.href='../todo_list.php'
        </SCRIPT>");
	}
	else{
		echo "SHINESS";
	}
}
}
	}
}
?>
