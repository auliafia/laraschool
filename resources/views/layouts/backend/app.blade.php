<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laraschool - {{ $title ?? '' }}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('templates/backend/AdminLTE-3.0.1') }}/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  @stack('css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  @include('layouts.backend.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('layouts.backend.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">{{ $contentTitle ?? '' }}</h1>
          </div>
          <div class="col-sm-6">
          </div>
        </div>
      </div>
    </div>
    <!-- /.content-header -->

    <!-- Modal -->
    @include('layouts.backend.modal')

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        @yield('content')
      </div>
    </section>
  </div>
  <footer class="main-footer">
    <strong>Copyright &copy; {{ date('Y') }} Rahmat Hidatyatullah.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      Template By <a href="http://adminlte.io">AdminLTE.io</a>
    </div>
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/jquery/jquery.min.js"></script>
<script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/dist/js/adminlte.js"></script>
@stack('js')
</body>
</html>