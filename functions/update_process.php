<?php
session_start();
include "function.php";
$db = connect();

if(isset($_POST["update"])){

    $output = '';
    $res = getinfobyid($_POST['update']);


    $output .= '
    <div class="table-responsive">
         <table class="table table-striped">';


         $output .= '
         <tr>
              <td width="30%"><label>STUDENT ID#</label></td>
              <td width="70%">'.$res->student_id.'<input type="hidden" name="id" value="'.$res->id.'"></td>
         </tr>
         <tr>
              <td width="30%"><label>NAME</label></td>
              <td width="70%"><input type="text" class="form-control" name="name" value="'.$res->name.'" /></td>
         </tr>
         <tr>
              <td width="30%"><label>COURSE</label></td>
              <td width="70%">
              <select class="form-control" name="course">
                <option>'.$res->course.'</option>
                <option value="engr">ENGR</option>
                <option value="bsit">BSIT</option>
              </select></td>
         </tr>
          <tr>
              <td width="30%"><label>SUBJECT</label></td>
              <td width="70%">
              <select class="form-control" name="subj">
                <option>'.$res->subject.'</option>
                <option value="logic">LOGIC</option>
                <option></option>
              </select></td>
         </tr>
         <tr>
             <td width="30%"><label>DATE OF LEND</label></td>
             <td width="70%"><input type="date" class="form-control" name="detoflend" value="'.$res->dates.'" /></td>
        </tr>
        <tr>
            <td width="30%"><label>STATUS</label></td>
            <td width="70%">
            <select name="status" class="form-control">
              <option>'.$res->status.'</option>
              <option value="returned">RETURNED</option>
              <option value="not returned">NOT RETURNED</option>
            </select></td>
       </tr>
       <tr>
           <td width="30%"><label>DATE RETURNED</label></td>
           <td width="70%"><input type="date" class="form-control" name="datereturn" value="'.$res->datereturn.'" /></td>
      </tr>
      <tr>
          <td width="30%"><label>COMMENTS</label></td>
          <td width="70%"><textarea class="form-control" name="comment" value="'.$res->comments.'" /></td>
     </tr>';

         $output .= '</table></div>';
      echo $output;
}

 ?>
