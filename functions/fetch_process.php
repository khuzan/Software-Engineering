<?php
session_start();
include "function.php";
$db = connect();

if(isset($_POST["M_view"])){

    $output = '';
    $sql = "SELECT * FROM borrowed_items
            INNER JOIN borrower ON borrowed_items.borrower_id = borrower.id
            WHERE borrower.id = '".$_POST['M_view']."'";
    $sth = $db->prepare($sql);
      $sth->execute();
      $res = $sth->fetch(PDO::FETCH_OBJ);
$id = $_POST['M_view'];
    $sql2 = "SELECT * FROM borrowed_items INNER JOIN items
            ON items.items_id = borrowed_items.items_id WHERE
           borrowed_items.borrower_id = '$id'";
    $sth2 = $db->prepare($sql2);
      $sth2->execute();
      $res2 = $sth2->fetchAll(PDO::FETCH_OBJ);



    $output .= '
    <div class="table-responsive" id="div_print">
         <table class="table table-bordered">';


         $output .= '
              <tr>
                   <td width="30%"><label>STUDENT ID#</label></td>
                   <td width="70%">'.$res->id.'</td>
              </tr>
              <tr>
                   <td width="30%"><label>NAME</label></td>
                   <td width="70%">'.$res->name.'</td>
              </tr>
              <tr>
                   <td width="30%"><label>COURSE</label></td>
                   <td width="70%">'.$res->course.'</td>
              </tr>
               <tr>
                   <td width="30%"><label>SUBJECT</label></td>
                   <td width="70%">'.$res->subject.'</td>
              </tr>
              <tr>
                   <td width="30%"><label>CHECKED BY</label></td>
                   <td width="70%">'.$res->received.'</td>
              </tr>
              </table>
              <table class="table table-bordered">
               <tr>
                   <td width="30%"><label>ITEM DESCRIPTION</label></td>
                   <td width="20%"><label>DATE OF LEND</label></td>
                   <td width="10%"><label>QUANTITY</label></td>

              </tr>';

            foreach($res2 as $a){
              $output .= '<tr>

                    <td>'.$a->description.'</td>
                    <td>'.$a->dateoflend.'</td>
                    <td width="70%">'.$a->b_qty.'</td>
              </tr>';
            }
            $output .=  '</table>
              <table class="table table-bordered">
              <tr>
                   <td width="30%"><label>STATUS</label></td>
                   <td width="70%">'.$res->status.'</td>
              </tr>
              <tr>
                   <td width="30%"><label>DATE OF RETURN</label></td>
                   <td width="70%">'.$res->dateofreturn.'</td>
              </tr>';


            $output .=  '</table>
              <table class="table table-bordered">
              <tr>
                  <th width="100%"><label>COMMENTS</label></th>
             </tr>
             <tr>
             <td width="100%"><textarea class="form-control" placeholder="Message" rows="4" rowspan="" disabled maxlength="500">'.$res->comments.'</textarea></td>
             </tr>';

         $output .= '</table></div>';
      echo $output;
}
 ?>
