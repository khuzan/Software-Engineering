<?php
session_start();
include "function.php";
$db = connect();

if(isset($_POST["update"])){

    $output = '';
    $res = getitemsbyid($_POST['update']);


    $output .= '
    <div class="table-responsive">
         <table class="table table-striped">';


         $output .= '
         <input type="hidden" name="items_id" value="'.$res->items_id.'">
         <tr>
              <td width="30%"><label>PROPERTY NUMBER</label></td>
              <td width="70%">'.$res->prpty_number.'<input type="hidden" name="id" value="'.$res->prpty_number.'"></td>
         </tr>
         <tr>
              <td width="30%"><label>DESCRIPTION</label></td>
              <td width="70%"><input type="text" class="form-control" name="desc" value="'.$res->description.'" /></td>
         </tr>
         <tr>
              <td width="30%"><label>QUANTITY</label></td>
              <td width="70%"><input type="text" class="form-control" name="qty" value="'.$res->qty.'" /></td>
         </tr>
         <tr>
              <td width="30%"><label>REMARKS</label></td>
              <td width="70%">
              <select class="form-control input-size" name="remarks" required>
              <option>'.$res->remarks.'</option>
                <option value="Good Condition">Good Condition</option>
                <option value="Bad Condition">Bad Condition</option>
                <option value="Operational">Operational</option>
                <option value="Not Operational">Not Operational</option>
              </select>
              </td>
         </tr>';

         $output .= '</table></div>';
      echo $output;
}

 ?>
