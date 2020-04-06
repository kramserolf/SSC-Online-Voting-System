 <?php  
    echo '
        <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="delModallabel" aria-hidden="true" id="delCandModal'.$row['id'].'">
        <div class="modal-dialog">
            <div class="modal-content">
               <form method="POST">
                   <div class="modal-header">
                       <p class="modal-title">Delete Confirmation</p>
                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                   </div>
                   <div class="modal-body">
                    <input type = "text" name = "delete_id" value = "'.$row['id'].'" hidden>
                       <p>Are you sure you want to delete the selected item?</p>
                   </div>
                   <div class="modal-footer">
                       <button type="submit" class="btn btn-primary" name="btn_delete">Yes</button>
                       <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                   </div>
               </form>
            </div>
        </div>
    </div>
    ';  
 ?>