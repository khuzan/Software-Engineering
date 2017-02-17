<?php
session_start();
include "function.php";
$db = connect();

if(isset($_POST['add_items'])){

  $quantity = $_POST['qty'];
  $item = $_POST['item'];
  $property = $_POST['pprty'];
  $classification = $_POST['acc'];
  $department = $_POST['dept'];
  $location = $_POST['loca'];
  $assignee = $_POST['ass'];
  $remarks = $_POST['remarks'];

  $query = $db->prepare("INSERT INTO items SET
                      qty = :qty,
                      description = :description,
                      prpty_number = :prpty,
                      classification = :classification,
                      department = :department,
                      location = :location,
                      assignee = :assignee,
                      remarks = :remarks");
  $execute_query = [':qty' => $quantity,
                    ':description' => $item,
                    ':prpty' => $property,
                    ':classification' => $classification,
                    ':department' => $department,
                    ':location' => $location,
                    ':assignee' => $assignee,
                    ':remarks' => $remarks];
    if ($query->execute($execute_query)) {
      header('location:../admin/items.php');  
    }
    else {
      echo "fail";
    }
}
 ?>
