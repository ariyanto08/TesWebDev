<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Starter</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{url('public')}}/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('public')}}/assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="{{url('public')}}/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{url('public')}}/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{url('public')}}/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <x-layout.header/>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <x-layout.sidebar/>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        {{ $slot }}
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <x-layout.footer/>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{url('public')}}/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{url('public')}}/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{url('public')}}/assets/dist/js/adminlte.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="{{url('public')}}/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{url('public')}}/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{url('public')}}/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{url('public')}}/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{url('public')}}/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{url('public')}}/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{url('public')}}/assets/plugins/jszip/jszip.min.js"></script>
<script src="{{url('public')}}/assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{url('public')}}/assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{url('public')}}/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{url('public')}}/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{url('public')}}/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
    $(function () {
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
</script>
@stack('script')
</body>
</html>
