          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © Dealership Management System</span>
              <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"><a href="#" target="_blank">DMS admin panel</a> from Syansoft.in</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('backend/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('backend/assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/jquery.cookie.js')}}" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('backend/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('backend/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('backend/assets/js/misc.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('backend/assets/js/dashboard.js')}}"></script>
    <script src="{{asset('backend/assets/js/todolist.js')}}"></script>
    <!-- End custom js for this page -->

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
  @if(Session::has('message'))
  toastr.options.positionClass = 'toast-bottom-right';
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.success("{{ session('message') }}");
  @endif

  @if(Session::has('error'))
  toastr.options.positionClass = 'toast-bottom-right';
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.error("{{ session('error') }}");
  @endif

  @if(Session::has('info'))
  toastr.options.positionClass = 'toast-bottom-right';
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.info("{{ session('info') }}");
  @endif

  @if(Session::has('warning'))
  toastr.options.positionClass = 'toast-bottom-right';
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.warning("{{ session('warning') }}");
  @endif
</script>
<script>
    function back(){
        window.history.back();
    }
    // $('.page-item .page-link').css('background-color','green');
</script>
  </body>
</html>