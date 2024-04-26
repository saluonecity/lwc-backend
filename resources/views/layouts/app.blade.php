<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title') &mdash; LWC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Responsive bootstrap 4 admin template" name="description" />
    <meta content="Saluone" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets') }}/images/favicon.ico">

    <!-- Table datatable css -->
    <link href="{{ asset('assets') }}/libs/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        
    <link href="{{ asset('assets') }}/libs/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets') }}/libs/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets') }}/libs/datatables/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{ asset('assets') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
    <link href="{{ asset('assets') }}/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets') }}/css/app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet" />

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        @include('components.header')

        @include('components.sidebar')

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    @yield('main')

                </div> <!-- end container-fluid -->

            </div> <!-- end content -->

            @include('components.footer')

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    {{-- @include('components.customize') --}}

    <!-- Vendor js -->
    <script src="{{ asset('assets') }}/js/vendor.min.js"></script>

    <!--Morris Chart-->
    <script src="{{ asset('assets') }}/libs/morris-js/morris.min.js"></script>
    <script src="{{ asset('assets') }}/libs/raphael/raphael.min.js"></script>

    <!-- Datatable plugin js -->
    <script src="{{ asset('assets') }}/libs/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets') }}/libs/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('assets') }}/libs/datatables/dataTables.responsive.min.js"></script>
    <script src="{{ asset('assets') }}/libs/datatables/responsive.bootstrap4.min.js"></script>
    <script src="{{ asset('assets') }}/libs/datatables/dataTables.buttons.min.js"></script>
    <script src="{{ asset('assets') }}/libs/datatables/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('assets') }}/libs/jszip/jszip.min.js"></script>
    <script src="{{ asset('assets') }}/libs/pdfmake/pdfmake.min.js"></script>
    <script src="{{ asset('assets') }}/libs/pdfmake/vfs_fonts.js"></script>
    <script src="{{ asset('assets') }}/libs/datatables/buttons.html5.min.js"></script>
    <script src="{{ asset('assets') }}/libs/datatables/buttons.print.min.js"></script>
    <script src="{{ asset('assets') }}/libs/datatables/dataTables.keyTable.min.js"></script>
    <script src="{{ asset('assets') }}/libs/datatables/dataTables.select.min.js"></script>

    <!-- Plugin js-->
    <script src="{{ asset('assets') }}/libs/parsleyjs/parsley.min.js"></script>

    <!-- Validation init js-->
    <script src="{{ asset('assets') }}/js/pages/form-validation.init.js"></script>

    <!-- Datatables init -->
    <script src="assets/js/pages/datatables.init.js"></script>

    <!-- Dashboard init js-->
    <script src="{{ asset('assets') }}/js/pages/dashboard.init.js"></script>

    <!-- App js -->
    <script src="{{ asset('assets') }}/js/app.min.js"></script>

</body>

</html>