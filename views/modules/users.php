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
            </tbody>

          </table>
        </div>

        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->
