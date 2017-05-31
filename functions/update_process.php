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
              <td width="70%">'.$res->id.'<input type="hidden" name="id" value="'.$res->id.'"></td>
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
                <option value="BS Information Technology - I">BS Information Technology - I</option>
                <option value="BS Information Technology - II">BS Information Technology - II</option>
                <option value="BS Information Technology - III">BS Information Technology - III</option>
                <option value="BS Information Technology - IV">BS Information Technology - IV</option>
                <option value="BS Engineering - I">BS Engineering - I</option>
                <option value="BS Engineering - II">BS Engineering - II</option>
                <option value="BS Engineering - III">BS Engineering - III</option>
                <option value="BS Engineering - IV">BS Engineering - IV</option>
                <option value="BS Engineering - V">BS Engineering - V</option>
              </select></td>
         </tr>

          <td width="30%"><input type="hidden" class="form-control" name="items" value="" /></td></td>


          <td width="30%"><input type="hidden" class="form-control" name="analogqty" value="'.$res->b_qty.'" /></td></td>

          <tr>
              <td width="30%"><label>SUBJECT</label></td>
              <td width="70%">
              <select class="form-control" name="subj">
                <option>'.$res->subject.'</option>  
                <option value="EE51">EE51</option>
                <option value="ECE552">ECE552</option>
                <option value="CpE403">CpE403</option>
                <option value="CpE402">CpE402</option>
                <option value="CA211">CA211</option>
                <option value="ECE510">ECE510</option>
                <option value="EE70">EE70</option>
                <option value="ECE554">ECE554</option>
                <option value="ECE520">ECE520</option>
                <option value="ECE320">ECE320</option>
                <option value="GE414">GE414</option>
                <option value="EE11">EE11</option>
                <option></option>
              </select></td>
         </tr>
         <tr>
            <input type="hidden" name="b_id" value="'.$res->b_id.'">
             <td width="30%"><label>DATE OF LEND</label></td>
             <td width="70%"><input type="date" class="form-control" name="dateoflend" value="'.$res->dateoflend.'" ></td>
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
          <td width="30%"><label>COMMENTS</label></td>
          <td width="70%"><textarea class="form-control" maxlength="500" name="comment" value="'.$res->comments.'" >'.$res->comments.'</textarea></td>
     </tr>';

         $output .= '</table></div>';
      echo $output;
}

 ?>
