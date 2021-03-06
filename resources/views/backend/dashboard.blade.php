<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('project/img/logohome.png')}}">
    <title>Health Land | Dashboard</title>
    <!-- Custom CSS -->
    <link href="{{ asset('project/backend/assets/libs/flot/css/float-chart.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('project/backend/dist/css/style.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('project/backend/assets/libs/select2/dist/css/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('project/backend/assets/libs/jquery-minicolors/jquery.minicolors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('project/backend/assets/libs/bootstrap-datepicker/dist/css/bootstrap-datetimepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('project/backend/assets/libs/quill/dist/quill.snow.css')}}">
    <link href="{{ asset('project/backend/assets/libs/jquery-steps/jquery.steps.css')}}" rel="stylesheet">
    <link href="{{ asset('project/backend/assets/libs/jquery-steps/steps.css')}}" rel="stylesheet">
    <link href="{{ asset('project/backend/assets/libs/fullcalendar/dist/fullcalendar.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('project/backend/assets/extra-libs/calendar/calendar.css')}}" rel="stylesheet" />
    <link href="{{ asset('project/backend/assets/libs/toastr/build/toastr.min.css')}}" rel="stylesheet">
    <link href="{{ asset('project/backend/assets/libs/magnific-popup/dist/magnific-popup.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('project/backend/assets/extra-libs/multicheck/multicheck.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <link href="{{ asset('project/backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">

        @include('backend.head_dashboard')

        @include('backend.sidebar_dashboard')
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        @yield('content')

        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->

    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('project/backend/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('project/backend/dist/js/main.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('project/backend/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{ asset('project/backend/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('project/backend/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{ asset('project/backend/assets/extra-libs/sparkline/sparkline.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('project/backend/dist/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('project/backend/dist/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('project/backend/dist/js/custom.min.js')}}"></script>
    <!--This page JavaScript -->
    <!-- <script src="../../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script src="{{ asset('project/backend/assets/libs/flot/excanvas.js')}}"></script>
    <script src="{{ asset('project/backend/assets/libs/flot/jquery.flot.js')}}"></script>
    <script src="{{ asset('project/backend/assets/libs/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{ asset('project/backend/assets/libs/flot/jquery.flot.time.js')}}"></script>
    <script src="{{ asset('project/backend//assets/libs/flot/jquery.flot.stack.js')}}"></script>
    <script src="{{ asset('project/backend/assets/libs/flot/jquery.flot.crosshair.js')}}"></script>
    <script src="{{ asset('project/backend/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{ asset('project/backend/dist/js/pages/chart/chart-page-init.js')}}"></script>
    <script src="{{ asset('project/backend/assets/libs/chart/matrix.interface.js')}}"></script>
    <script src="{{ asset('project/backend/assets/libs/chart/jquery.peity.min.js')}}"></script>
    <script src="{{ asset('project/backend/assets/libs/chart/matrix.charts.js')}}"></script>
    <script src="{{ asset('project/backend/assets/libs/chart/jquery.flot.pie.min.js')}}"></script>
    <script src="{{ asset('project/backend/assets/libs/chart/turning-series.js')}}"></script>
    <script src="{{ asset('project/backend/assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js')}}"></script>
    <script src="{{ asset('project/backend/dist/js/pages/mask/mask.init.js')}}"></script>
    <script src="{{ asset('project/backend/assets/libs/select2/dist/js/select2.full.min.js')}}"></script>
    <script src="{{ asset('project/backend/assets/libs/select2/dist/js/select2.min.js')}}"></script>
    <script src="{{ asset('project/backend/assets/libs/jquery-asColor/dist/jquery-asColor.min.js')}}"></script>
    <script src="{{ asset('project/backend/assets/libs/jquery-asGradient/dist/jquery-asGradient.js')}}"></script>
    <script src="{{ asset('project/backend/assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js')}}"></script>
    <script src="{{ asset('project/backend/assets/libs/jquery-minicolors/jquery.minicolors.min.js')}}"></script>
    <script src="{{ asset('project/backend/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datetimepicker.js')}}"></script>
    <script src="{{ asset('project/backend/assets/libs/quill/dist/quill.min.js')}}"></script>
    <script src="{{ asset('project/backend/assets/libs/jquery-steps/build/jquery.steps.min.js')}}"></script>
    <script src="{{ asset('project/backend/assets/libs/jquery-validation/dist/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('project/backend/assets/libs/moment/min/moment.min.js')}}"></script>
    <script src="{{ asset('project/backend/assets/libs/fullcalendar/dist/fullcalendar.min.js')}}"></script>
    <script src="{{ asset('project/backend/dist/js/pages/calendar/cal-init.js')}}"></script>
    <script src="{{ asset('project/backend/assets/libs/toastr/build/toastr.min.js')}}"></script>
    <script src="{{ asset('project/backend/assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('project/backend/assets/libs/magnific-popup/meg.init.js')}}"></script>
    <script src="{{ asset('project/backend/assets/extra-libs/multicheck/datatable-checkbox-init.js')}}"></script>
    <script src="{{ asset('project/backend/assets/extra-libs/multicheck/jquery.multicheck.js')}}"></script>
    <script src="{{ asset('project/backend/assets/extra-libs/DataTables/datatables.min.js')}}"></script>
    <script src=" https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
    <script>
            /****************************************
             *       Basic Table                   *
             ****************************************/
            $('#zero_config').DataTable();
            var quill = new Quill('.editor', {
            theme: 'snow'
        });
        </script>



</body>

</html>
