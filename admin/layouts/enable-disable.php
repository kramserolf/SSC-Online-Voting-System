   <!-- Modal -->
    <div class="modal fade" id="enable" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModal3Label">Enable/Disable Election</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row justify-content-center">
              <form method="POST">
                <div>
                   <a href="../function/enable.php" class="btn btn-info btn-block mb-3" onclick="return confirm('Are you sure?')"><i class="fa fa-check mr-1"></i>Enable Election</a>
                </div>
                <div>
                   <a href="../function/disable.php" class="btn btn-danger m btn-block" onclick="return confirm('Are you sure?')"><i class="fa fa-power-off mr-1"></i>Disable Election</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end of about modal -->