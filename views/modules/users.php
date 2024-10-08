  <div class="content-wrapper">
    <section class="content-header">

      <h1>
        Users
      </h1>

      <ol class="breadcrumb">
        <li><a href="home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Admin Users</li>
      </ol>

    </section>

    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <button class="btn btn-primary" data-toggle="modal" data-target="#modalAddUser">
            Add User
          </button>
        </div>
        <div class="box-body">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>User</th>
                <th>Picture</th>
                <th>Role</th>
                <th>Status</th>
                <th>Last Login</th>
                <th>Actions</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>1</td>
                <td>Admin User</td>
                <td>admin</td>
                <td><img src="views/img/users/default/anonymous.png" class="img-thumbnail" width="40px"></td>
                <td>Admin</td>
                <td><button class="btn btn-success btn-xs">Active</button></td>
                <td>2020-01-01 12:00:00</td>

                <td>
                  <div class="btn-group">
                    <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                    <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                  </div>
                </td>
              </tr>

              <tr>
                <td>1</td>
                <td>Admin User</td>
                <td>admin</td>
                <td><img src="views/img/users/default/anonymous.png" class="img-thumbnail" width="40px"></td>
                <td>Admin</td>
                <td><button class="btn btn-success btn-xs">Active</button></td>
                <td>2020-01-01 12:00:00</td>

                <td>
                  <div class="btn-group">
                    <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                    <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                  </div>
                </td>
              </tr>

              <tr>
                <td>1</td>
                <td>Admin User</td>
                <td>admin</td>
                <td><img src="views/img/users/default/anonymous.png" class="img-thumbnail" width="40px"></td>
                <td>Admin</td>
                <td><button class="btn btn-danger btn-xs">Inactive</button></td>
                <td>2020-01-01 12:00:00</td>

                <td>
                  <div class="btn-group">
                    <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                    <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                  </div>
                </td>
              </tr>

            </tbody>

          </table>
        </div>

      </div>

    </section>
  </div>

<!-- Modal Add User -->
<!-- Modal -->
<div id="modalAddUser" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
