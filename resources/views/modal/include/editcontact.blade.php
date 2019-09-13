<div class="modal fade" id="editModal" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="mainModalLabel" aria-hidden="true">
  <div class="modal-dialog center-block" >
    <div class="modal-content" style="background-color: #fff; color: #000;">
      <div class="modal-header">
        <h5 class="modal-title pull-left" >Edit Contact </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="editForm" method="post" >
        {{ csrf_field() }}
        <div class="modal-body">
          <input type="hidden"  id="edit_id" name="edit_id" value="">

              <div class="form-group">
                <label>Name</label>
                <input class="form-control" type="text" id="edit_first_name" name="edit_first_name" value="">
              </div>
              <div class="form-group">
                <label>Surname</label>
                <input class="form-control" type="text" id="edit_last_name" name="edit_last_name" value="">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input class="form-control" type="text" id="edit_email" name="edit_email" value="">
              </div>
              <div class="form-group">
                <label>Mobile</label>
                <input class="form-control" type="text" id="edit_mobile" name="edit_mobile" value="">
              </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>

    </div>
  </div>
</div>
