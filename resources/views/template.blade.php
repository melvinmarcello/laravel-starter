<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')</title>
  <!-- plugins:css -->
  <!-- Textarea -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.1.2/tinymce.min.js" integrity="sha512-cJ2vUNryvHzgNJfmFTtZ2VX5EMT5JOU1i8nm+L1kwoHQ9bSqSYdswxyk++9Gi27p3BG2rXZXLMsTsluY4RZSSw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- Datatable -->
  <link type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">


  <link rel="stylesheet" href="{{URL('/')}}/utils/vendors/feather/feather.css">
  <link rel="stylesheet" href="{{URL('/')}}/utils/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="{{URL('/')}}/utils/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="{{URL('/')}}/utils/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="{{URL('/')}}/utils/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="{{URL('/')}}/utils/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->  
  <link rel="stylesheet" href="{{URL('/')}}/utils/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{URL('/')}}/utils/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{URL('/')}}/utils/images/logo.png" />
  {{-- Global CSS --}}
  <link rel="stylesheet" href="{{ URL('/') }}/utils/css/global.css">
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="{{URL('/')}}/home">
            {{-- <img src="{{URL('/')}}/logo.svg" alt="logo" /> --}}
          </a>
          <a class="navbar-brand brand-logo-mini" href="{{URL('/')}}/home">
            {{-- <img src="{{URL('/')}}/logo.svg" alt="logo" /> --}}
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text">Hello, <span class="text-black fw-bold">John</span></h1>            
          </li>
        </ul>    
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">            
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        @yield('menu')
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">

                </div>
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">                               
                    <div class="row wrapper-table">
                      <div class="col-lg-12 d-flex flex-column">
                        <div class="row flex-grow bg-table">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                    <h4 class="card-title card-title-dash">@yield('judul')</h4>
                                   <p class="card-subtitle card-subtitle-dash"></p>
                                  </div>
                                  <div>
                                    
                                  </div>
                                </div>
                                <div class="d-sm-flex align-items-center mt-1 justify-content-between">
                                  
                                </div>
                                <div class="chartjs-bar-wrapper mt-3">
                                  @yield('isi')
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                        
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright ©  @php echo date('Y'); @endphp. All rights reserved.</span>
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
  <script src="{{URL('/')}}/utils/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{URL('/')}}/utils/vendors/chart.js/Chart.min.js"></script>
  <script src="{{URL('/')}}/utils/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="{{URL('/')}}/utils/vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{URL('/')}}/utils/js/off-canvas.js"></script>
  <script src="{{URL('/')}}/utils/js/hoverable-collapse.js"></script>
  <script src="{{URL('/')}}/utils/js/template.js"></script>
  <script src="{{URL('/')}}/utils/js/settings.js"></script>
  <script src="{{URL('/')}}/utils/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{URL('/')}}/utils/js/jquery.cookie.js" type="text/javascript"></script>
  <script src="{{URL('/')}}/utils/js/dashboard.js"></script>
  <script src="{{URL('/')}}/utils/js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->

  <!--datatable-->
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script>
  $(document).ready( function () {
    $('#table').DataTable( {
      "order": [[ 0, 'desc' ]],
      "lengthChange": false
    }   );
  } );
  </script>
  <script>
    tinymce.init({
      selector: '#mytextarea'
    });
    </script>
</body>

</html>
