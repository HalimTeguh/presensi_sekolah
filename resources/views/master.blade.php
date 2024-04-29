<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('template/src/assets/images/logos/favicon.png') }}" />
  <link rel="stylesheet" href="{{ asset('template/src/assets/css/styles.min.css') }}" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">

    <!-- Sidebar Start -->
    @include('partials.sidebar')
    <!--  Sidebar End -->

    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      @include('partials.header')
      <!--  Header End -->
      <div class="container-fluid">

        @yield('content')

        <div class="py-6 px-6 text-center">
          <p class="mb-0 fs-4">Developed by <b>Halim Teguh Saputro</b>, Design by <a href="https://adminmart.com/" target="_blank" class="pe-1 text-primary text-decoration-underline">AdminMart.com</a></p>
        </div>
      </div>
    </div>
  </div>
  <script src="{{ asset('template/src/assets/libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('template/src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('template/src/assets/js/sidebarmenu.js') }}"></script>
  <script src="{{ asset('template/src/assets/js/app.min.js') }}"></script>
  <script src="{{ asset('template/src/assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
  <script src="{{ asset('template/src/assets/libs/simplebar/dist/simplebar.js') }}"></script>
  <script src="{{ asset('template/src/assets/js/dashboard.js') }}"></script>
</body>

</html>