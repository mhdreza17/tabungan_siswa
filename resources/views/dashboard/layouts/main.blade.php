<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PWL | DASHBOARD</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href={{ asset("/assets/vendors/mdi/css/materialdesignicons.min.css") }}>
    <link rel="stylesheet" href={{ asset("/assets/vendors/css/vendor.bundle.base.css") }}>
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href={{ asset("/assets/vendors/jvectormap/jquery-jvectormap.css") }}>
    <link rel="stylesheet" href={{ asset("/assets/vendors/flag-icon-css/css/flag-icon.min.css") }}>
    <link rel="stylesheet" href={{ asset("/assets/vendors/owl-carousel-2/owl.carousel.min.css") }}>
    <link rel="stylesheet" href={{ asset("/assets/vendors/owl-carousel-2/owl.theme.default.min.css") }}>
    <link rel="stylesheet" type="text/css" href={{ asset("/css/trix.css") }}>
    <link rel="shortcut icon" href={{ asset("/assets/images/favicon.png") }} />
    <script type="text/javascript" src={{ asset("/js/trix.js") }}></script>
    <style>
      trix-toolbar [data-trix-button-group="file-tools"]{
        display: none;
      }
    </style>
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href={{ asset("assets/css/style.css") }}>
    <!-- End layout styles -->
    <link rel="shortcut icon" href={{ asset("assets/images/favicon.png") }} />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('dashboard.partials.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('dashboard.partials.navbar')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            @yield('container')
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          @include('dashboard.partials.footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src={{ asset("assets/vendors/js/vendor.bundle.base.js") }}></script>
    <!-- endinject -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src={{ asset("/js/dashboard.js") }}></script>
    <!-- inject:js -->
    <script src={{ asset("/assets/js/off-canvas.js") }}></script>
    <script src={{ asset("/assets/js/hoverable-collapse.js") }}></script>
    <script src={{ asset("/assets/js/misc.js") }}></script>
    <script src={{ asset("/assets/js/settings.js") }}></script>
    <script src={{ asset("/assets/js/todolist.js") }}></script>
    <!-- endinject -->
    {{-- font awesome --}}
    <script src="https://kit.fontawesome.com/e800405822.js" crossorigin="anonymous"></script>

    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>