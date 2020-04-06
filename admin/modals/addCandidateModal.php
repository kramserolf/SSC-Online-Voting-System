<!-- edit modal -->
<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="edit3Label" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="edit3Label">Add Candidate</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form method="post" action="../function/add_candidate.php" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="form-group">
              <label>Position</label>
              <select class="custom-select" name="position">
                <option selected>Select Position</option>
                <option value="">---------------</option>
                <option value="President">President</option>
                <option value="Vice President">Vice President</option>
                <option value="Secretary">Secretary</option>
                <option value="Treasurer">Treasurer</option>
                <option value="Auditor">Auditor</option>
                <option value="Business Manager">Business Manager</option>
                <option value="P.R.O">P.R.O</option>
                <option value="Sgt. at Arms(Male)">Sgt. at Arms(Male)</option>
                <option value="Sgt. at Arms(Female)">Sgt. at Arms(Female)</option>
                <option value="Religious Coordinator">Religious Coordinator</option>
                <option value="Socio-Cultural">Socio-Cultural</option>
                <option value="Sports Coordinator">Sports Coordinator</option>
              </select>
            </div>
            <div class="form-group">
              <label>Name:</label>
              <input type="text" name="name" class="form-control" placeholder="e.g Flores, Mark G.">
            </div>
            <div class="form-group">
              <label>Course</label>
              <select class="custom-select" name="course">
                <option selected>Select Course</option>
                <option value="">---------------</option>
                <option value="BSED">BSED</option>
                <option value="BEED">BEED</option>
                <option value="BSIT">BSIT</option>
                <option value="BLISS">BLISS</option>
                <option value="BSBA">BSBA</option>
                <option value="ABEC">ABEC</option>
                <option value="BSTM">BSTM</option>
                <option value="BSSW">BSSW</option>
                <option value="BSCRIM">BSCRIM</option>
              </select>
            </div>
            <div class="form-group">
              <label>Year:</label>
              <select class="custom-select" name="year">
                <option selected>Select year</option>
                  <option value="">---------------</option>
                  <option value="1st year">1st year</option>
                  <option value="2nd year">2nd year</option>
                  <option value="3rd year">3rd year</option>
                  <option value="4th year">4th year</option>
              </select>
            </div>
            <div class="form-group">
              <label>Partylist:</label>
              <input type="text" name="party" class="form-control" placeholder="e.g Independent">
            </div>
             <div class="form-group">
              <label>Photo:</label>
              <input type="file" name="uploadImg" class="form-control-file">
            </div>
          </div>
          <div class="modal-footer">
            <input type="submit" name="submit" class="btn btn-primary" value="Save">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          </div>
        </div>
      </form>
  </div>
</div>
<!-- end of edit modal -->