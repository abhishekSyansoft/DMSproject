@include('admin.layout.header')
@include('admin.layout.nav&sidebar')
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Roles Master
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
              <div class="col-lg-8 grid-margin stretch-card" style="margin:auto;">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Roles Master</h4>
                    <!-- <p class="card-description"> Add class <code>.table</code>
                    </p> -->
                    <a href="{{route('role.add')}}" class="btn btn-lg btn-primary">Add Role</a>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Serial Number</th>
                          <th>Role Id</th>
                          <th>Role Name</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>                       
                          @php($i=1)
                          @foreach($role as $role)
                          <tr>
                          <td>{{$i++}}</td>
                          <td>{{$role->id}}</td>
                          <td>{{$role->name}}</td>
                          <td><label class="">
                            <a href="{{url('role/edit/'.$role->id)}}" class="badge badge-info"  style="text-decoration:none;color:white;font-size:15px;"><i class="mdi mdi-table-edit">Edit</i></a>
                            <a href="{{url('role/delete/'.$role->id)}}" class="badge badge-danger" style="text-decoration:none;color:white;font-size:15px;"><i class="mdi mdi-delete">Delete</i></a>
                          </label>
                        </td>
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