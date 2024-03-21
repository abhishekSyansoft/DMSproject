@include('admin.layout.header')
@include('admin.layout.nav&sidebar')
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Modules Master
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
              <div class="col-lg-9 grid-margin stretch-card" style="margin:auto;">
                <div class="card excess">
                  <div class="card-body">
                  {{$module->links('pagination::bootstrap-5')}}
                  <hr>
                    <h4 class="card-title">Modules Master</h4>
                    <a href="{{ route('module.add') }}" class="btn btn-primary">Add Module</a>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Serial Number</th>
                          <th>Module Id</th>
                          <th>Module Name</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php($i=1)
                        @foreach($module as $mod)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$mod->id}}</td>
                          <td>{{$mod->name}}</td>
                          <td><label class="">
                            <a href="{{url('modules/edit/'.$mod->id)}}" class="badge badge-info"  style="text-decoration:none;color:white;font-size:15px;"><i class="mdi mdi-table-edit">Edit</i></a>
                            <a href="{{url('modules/delete/'.$mod->id)}}" class="badge badge-danger" style="text-decoration:none;color:white;font-size:15px;"><i class="mdi mdi-delete">Delete</i></a>
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