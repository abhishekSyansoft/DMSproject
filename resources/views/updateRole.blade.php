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

            <div class="col-9 grid-margin stretch-card" style="margin:auto;">
            <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Update user Role</h4>
                    <hr>
                    <!-- <p class="card-description"> Basic form elements </p> -->
                    <form class="forms-sample" method="POST" action="{{url('user/update/'.$users->id)}}">
                    @csrf
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="Name" placeholder="Enter your name" value="{{$users->name}}">
                      </div>
                      <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" value="{{$users->email}}">
                      </div>

                      <div class="form-group">
                        <label for="exampleSelectGender">Role</label>
                        <select class="form-control" name="role" id="exampleSelectGender">
                            <!-- <option value="0">Select</option> -->
                            @foreach($module as $mod)
                                <option value="{{$mod->id}}">{{$mod->name}}</option>
                            @endforeach
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="designation">Desination</label>
                        <input type="designation" name="designation" class="form-control" id="designation" placeholder="Designation" value="{{$users->designation}}">
                      </div>
                      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                      <a class="btn btn-gradient-warning me-2" onClick="back();">Back</a>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
        </div>
    </div>          
</div>
          <!-- content-wrapper ends -->


@include('admin.layout.footer')