@include('admin.layout.header')
@include('admin.layout.nav&sidebar')
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> User Master
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-10 grid-margin stretch-card" style="margin:auto;">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">User Master</h4>
                    <!-- <p class="card-description"> Add class <code>.table</code>
                    </p> -->
                    <a href="{{route('user.add')}}" class="btn btn-lg btn-primary">Create User</a>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Serial Number</th>
                          <th>Username</th>
                          <th>Email</th>
                          <th>Designation</th>
                          <th>Role Id</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php($i=1)
                        @foreach($users as $user)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$user->name}}</td>
                          <td>{{$user->email}}</td>
                          <td>{{$user->designation}}</td>
                          <td>{{$user->role}}</td>
                          <td><label class="">
                            <a href="{{ url('user/edit/'.$user->id)}}" class="badge badge-success"  style="text-decoration:none;color:white;font-size:15px;"><i class="mdi mdi-table-edit">Update Role</i></a>
                            <a href="{{ url('users/edit/'.$user->id)}}" class="badge badge-info"  style="text-decoration:none;color:white;font-size:15px;"><i class="mdi mdi-table-edit">Edit</i></a>
                            <a href="{{ url('user/delete/'.$user->id)}}" class="badge badge-danger" style="text-decoration:none;color:white;font-size:15px;"><i class="mdi mdi-delete">Delete</i></a>
                          </label></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

            </div>
             
          </div>
          <!-- content-wrapper ends -->
@include('admin.layout.footer')