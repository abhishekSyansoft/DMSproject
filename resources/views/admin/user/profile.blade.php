@include('admin.layout.header')
@include('admin.layout.nav&sidebar')

        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
                            
               
            <div class="row" style="margin:auto;">
                <div class="card col-md-5 mb-2" style="margin:auto;">
                    <div class="card-body">
                        <div class="card-header">Profile</div>
                            <!-- <center>                         -->
                                <img class="mt-2 mb-2" style="border-radius:50%;" src="{{ asset('backend/assets/images/faces/face1.jpg') }}">
                            <!-- </center>                    -->
                            <div class="card-details">
                            <p><b>Name : </b> Abhishek Kumar</p>
                            <p><b>Email : </b> kumarpuplish@gmail.com</p>
                            <p><b>Gender : </b> Male</p>
                            <p><b>Country : </b> India</p>
                            <p><b>DOB : </b> 12 November 1998</p>
                        </div>
                        <div class="card-footer">
                            <p class="text-center"><b>Joined On : </b> 11 August 1998</p>
                        </div>
                        <button class="btn btn-md btn-primary mt-2">Edit</button>
                    </div>
                </div>

                <div class="card col-md-5 mb-2" style="margin:auto;">
                    <div class="card-body">
                        <div class="card-header">Profile</div>
                            <!-- <center>                         -->
                                <img class="mt-2 mb-2" style="border-radius:50%;" src="{{ asset('backend/assets/images/faces/face1.jpg') }}">
                            <!-- </center>                    -->
                            <div class="card-details">
                            <p><b>Name : </b> Abhishek Kumar</p>
                            <p><b>Email : </b> kumarpuplish@gmail.com</p>
                            <p><b>Gender : </b> Male</p>
                            <p><b>Country : </b> India</p>
                            <p><b>DOB : </b> 12 November 1998</p>
                        </div>
                        <div class="card-footer">
                            <p class="text-center"><b>Joined On : </b> 11 August 1998</p>
                        </div>
                        <button class="btn btn-md btn-primary mt-2">Edit</button>
                    </div>
                </div>


                <div class="card col-md-5 mb-2" style="margin:auto;">
                    <div class="card-body">
                        <div class="card-header">Profile</div>
                            <!-- <center>                         -->
                                <img class="mt-2 mb-2" style="border-radius:50%;" src="{{ asset('backend/assets/images/faces/face1.jpg') }}">
                            <!-- </center>                    -->
                            <div class="card-details">
                            <p><b>Name : </b> Abhishek Kumar</p>
                            <p><b>Email : </b> kumarpuplish@gmail.com</p>
                            <p><b>Gender : </b> Male</p>
                            <p><b>Country : </b> India</p>
                            <p><b>DOB : </b> 12 November 1998</p>
                        </div>
                        <div class="card-footer">
                            <p class="text-center"><b>Joined On : </b> 11 August 1998</p>
                        </div>
                        <button class="btn btn-md btn-primary mt-2">Edit</button>
                    </div>
                </div>


                <div class="card col-md-5 mb-2" style="margin:auto;">
                    <div class="card-body">
                        <div class="card-header">Profile</div>
                            <!-- <center>                         -->
                                <img class="mt-2 mb-2" style="border-radius:50%;" src="{{ asset('backend/assets/images/faces/face1.jpg') }}">
                            <!-- </center>                    -->
                            <div class="card-details">
                            <p><b>Name : </b> Abhishek Kumar</p>
                            <p><b>Email : </b> kumarpuplish@gmail.com</p>
                            <p><b>Gender : </b> Male</p>
                            <p><b>Country : </b> India</p>
                            <p><b>DOB : </b> 12 November 1998</p>
                        </div>
                        <div class="card-footer">
                            <p class="text-center"><b>Joined On : </b> 11 August 1998</p>
                        </div>
                        <button class="btn btn-md btn-primary mt-2">Edit</button>
                    </div>
                </div>

            </div>
             
          </div>
          <!-- content-wrapper ends -->
          

          @include('admin.layout.footer')