<!-- update modal  -->
<div class="modal fade" id="editModal<?php echo $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <form method="POST">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModal3Label">Update Student</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <input type="text" name="update_id" value="<?php echo $row['id'] ?>" hidden>
          <div class="form-group">
             <label>ID Number:</label>
             <input type="text" class="form-control" name="id_number" value="<?php echo $row['id_number']?>" required>
           </div>
           <div class="form-group">
             <label>Name:</label>
             <input type="text" class="form-control" name="fullname" value="<?php echo $row['name'] ?>" required>
           </div>
             <div class="form-group">
             <label>Course:</label>
             <select class="custom-select form-control" name="course">
               <option selected value="<?php echo $row['course'] ?>"><?php echo $row['course'] ?></option>
               <option value="">---------------</option>
               <option value="BSED">BSED</option>
               <option value="BEED">BEED</option>
               <option value="BSIT">BSIT</option>
               <option value="BLISS">BLISS</option>
               <option value="BSBA">BSBA</option>
               <option value="ABEC">ABEC</option>
               <option value="BSSW">BSSW</option>
               <option value="BSTM">BSTM</option>
               <option value="BSCRIM">BSCRIM</option>
             </select>
           </div>
             <div class="form-group">
             <label>Year:</label>
             <select class="custom-select form-control" name="year">
               <option selected value="<?php echo $row['year'] ?>"><?php echo $row['year'] ?></option>
               <option value="">---------------</option>
               <option value="1st year">1st year</option>
               <option value="2nd year">2nd year</option>
               <option value="3rd year">3rd year</option>
               <option value="4th year">4th year</option>
             </select>
           </div>
             <div class="form-group">
             <label>Status:</label>
             <select class="custom-select form-control" name="vote_status">
               <option selected value="<?php echo $row['vote_status'] ?>"><?php echo $row['vote_status'] ?></option>
               <option value="">---------------</option>
               <option value="Active">Active</option>
               <option value="Voted">Voted</option>
             </select>
           </div>
       </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name="submit">Save Changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
    </div>
  </form>
  </div>
</div>
<!-- end of update modal -->
