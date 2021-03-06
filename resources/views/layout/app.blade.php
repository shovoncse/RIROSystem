<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>{{ config('app.name', "RIROSystem") }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

        @yield('table-css');
        <link href="{{ asset('assets/plugins/sweet-alert/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
        <!-- App css -->
        <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/metismenu.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/style_dark.css') }}" rel="stylesheet" type="text/css" />

        <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>

    </head>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            @include('inc.leftbar')
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                <!-- Top Bar Start -->
                
                @include('inc.topbar')
                <!-- Top Bar End -->


                
                <!-- Start Page content -->
                <div class="content">
                    <div class="container-fluid">
                        @include('inc.messages')
                        @yield('main-content')
                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer">
                    2019 © Asset Mangement. - RIROSystem
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <!-- jQuery  -->
        <script src=" {{ asset('assets/js/jquery.min.js') }}"></script>
        <script src=" {{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src=" {{ asset('assets/js/metisMenu.min.js') }}"></script>
        <script src=" {{ asset('assets/js/waves.js') }}"></script>
        <script src=" {{ asset('assets/js/jquery.slimscroll.js') }}"></script>

        <script src=" {{ asset('assets/plugins/sweet-alert/sweetalert2.min.js') }}"></script>
        <script src=" {{ asset('assets/pages/jquery.sweet-alert.init.js') }}"></script>

        @yield('chart-plugins');
        @yield('table-plugins');
        
        <!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="../plugins/jquery-knob/excanvas.js"></script>
        <![endif]-->
        <script src="{{ asset('assets/plugins/jquery-knob/jquery.knob.js') }}"></script>

        
        <!-- Dashboard Init -->
        <script src="{{ asset('assets/pages/jquery.dashboard.init.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('assets/js/jquery.core.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.app.js') }}"></script>

        @yield('custom-js');

    </body>
</html>