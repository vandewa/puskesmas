<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    {{-- <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/daterangepicker/daterangepicker.css') }}"> --}}
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/summernote/summernote-bs4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/toastr/toastr.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/hover-master/css/hover.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">

    @stack('css')
    @livewireStyles

    @vite([])

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        @include('layouts.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    {{ $header ?? '' }}

                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            @yield('content')
            {{ $slot ?? '' }}

            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('AdminLTE/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/select2/js/select2.full.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('AdminLTE/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('AdminLTE/plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('AdminLTE/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('AdminLTE/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('AdminLTE/plugins/moment/moment.min.js') }}"></script>
    {{-- <script src="{{ asset('AdminLTE/plugins/daterangepicker/daterangepicker.js') }}"></script> --}}
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('AdminLTE/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/toastr/toastr.min.js') }}"></script>
    {{-- <script src="{{ asset('AdminLTE/plugins/sweetalert2/sweetalert2.min.js') }}"></script> --}}
    <!-- overlayScrollbars -->
    <script src="{{ asset('AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('AdminLTE/dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    {{-- <script src="{{ asset('AdminLTE/dist/js/demo.js') }}"></script> --}}
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('AdminLTE/dist/js/pages/dashboard.js') }}"></script>
    @stack('js')
    @livewireScripts

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        window.addEventListener('toast', event => {
            $(document).Toasts('create', {
                class: event.detail.type ?? 'bg-success',
                autohide: true,
                delay: 2000,
                position: 'topRight',
                title: event.detail.title,
                body: event.detail.body
            })

        });
        window.addEventListener('autofocus', event => {

            setTimeout(() => {
                document.getElementById(event.detail.id).focus();
            }, 300);

        });
    </script>

    {{-- <script>
        $(function() {

            $('#reservationdatetime').datetimepicker({
                icons: {
                    time: 'far fa-clock'
                }
            });

        });
    </script> --}}
</body>

</html>
