<?php
session_start();
include "function.php";
$db = connect();

if(isset($_POST["M_view"])){

    $output = '';
    $sql = "SELECT * FROM borrower WHERE id = '".$_POST['M_view']."'";
    $sth = $db->prepare($sql);
      $sth->execute();
      $res = $sth->fetch(PDO::FETCH_OBJ);


    $output .= '
    <div class="table-responsive">
         <table class="table table-bordered">';


         $output .= '
              <tr>
                   <td width="30%"><label>STUDENT ID#</label></td>
                   <td width="70%">'.$res->student_id.'</td>
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
                   <td width="30%"><label>DATE OF LEND</label></td>
                   <td width="70%">'.$res->dates.'</td>
              </tr>
              <tr>
                  <td width="30%"><label>STATUS</label></td>
                  <td width="70%">'.$res->status.'</td>
             </tr>
             <tr>
                 <td width="30%"><label>DATE RETURNED</label></td>
                 <td width="70%">'.$res->datereturn.'</td>
            </tr>
            <tr>
                <td width="30%"><label>COMMENTS</label></td>
                <td width="70%">'.$res->comments.'</td>
           </tr>
              <tr>
                   <td width="30%"><label>CHECKED BY</label></td>
                   <td width="70%">'.$res->received.'</td>
              </tr>
               <tr>
                   <td width="30%"><label>ITEM DESCRIPTION</label></td>
                   <td width="70%">'.$res->descr.'</td>
              </tr>';

         $output .= '</table></div>';
      echo $output;
}
 ?>
