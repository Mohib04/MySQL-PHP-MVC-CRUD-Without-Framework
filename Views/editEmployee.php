<?php include_once __DIR__.('./Layouts/header.php') ?>

<div class="container">
    <div class="table-wrapper">
      <div style="text-align: right;" class="home">
        <a href="/" type="button" class="btn btn-success">Return Home</a>
      </div>
      <form>
          <div class="modal-header">
            <h4 class="modal-title">Edit Employee</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>Name</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Address</label>
              <textarea class="form-control" required></textarea>
            </div>
            <div class="form-group">
              <label>Phone</label>
              <input type="text" class="form-control" required>
            </div>
          </div>
          <div class="modal-footer">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
            <input type="submit" class="btn btn-success" value="Submit">
          </div>
        </form>
    </div>
</div>

<?php include_once __DIR__.('./Layouts/footer.php') ?>