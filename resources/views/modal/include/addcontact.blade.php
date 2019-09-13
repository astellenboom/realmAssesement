<div class="modal fade" id="main" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="mainModalLabel" aria-hidden="true">
  <div class="modal-dialog center-block" >
    <div class="modal-content" style="background-color: #fff; color: #000;">
      <div class="modal-header">
        <h5 class="modal-title pull-left" >New Contact </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="/createcontact">
        {{ csrf_field() }}
        <div class="modal-body">
              <div class="form-group">
                <label>Name</label>
                <input class="form-control" type="text" name="first_name" value="">
              </div>
              <div class="form-group">
                <label>Surname</label>
                <input class="form-control" type="text" name="last_name" value="">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input class="form-control" type="text" name="email" value="">
              </div>
              <div class="form-group">
                <label>Mobile</label>
                <input class="form-control" type="text" name="mobile" value="">
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
