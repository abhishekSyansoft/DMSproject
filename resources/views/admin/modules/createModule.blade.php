@include('admin.layout.header')
@include('admin.layout.nav&sidebar')

<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Add Module
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
                    <h4 class="card-title">Create a new module</h4>
                    <!-- <p class="card-description"> Add class <code>.table</code>
                    </p> -->
                    <form method="POST" action="{{ route('store.module') }}">
                    @csrf
                      <div class="row">
                        <div class="col-md-12 row">
                            <div class="form-group col-lg-6">
                                <!-- <label for="module" class="form-check-label"> Module Name </label> -->
                                <input type="text" name="name" id="name" placeholder="Add new module enter module name" class="form-control">
                            </div>
                            <div class="col-lg-6">
                            <button class="btn btn-primary btn-md">Submit</button>
                            <button class="btn btn-success btn-md" onClick="back();">Back</button>
                            </div>
                        <div>  
                    </form>
                  </div>
                </div>
              </div>

            </div>
             
          </div>
</div>
</div>
</div>
          <!-- content-wrapper ends -->



@include('admin.layout.footer')