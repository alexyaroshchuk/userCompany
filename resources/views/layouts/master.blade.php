<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Favicon icon -->
        <link rel="icon" href="https://www.freeiconspng.com/uploads/courses-icon-10.png">
        <title>Ela - Bootstrap Admin Dashboard Template</title>
        <!-- Bootstrap Core CSS -->
        <link href="/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <!-- Custom CSS -->
        <link href="/css/treeview.css" rel="stylesheet">
        <link href="/css/lib/sweetalert/sweetalert.css" rel="stylesheet">
        <link href="/css/lib/calendar2/semantic.ui.min.css" rel="stylesheet">
        <link href="/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
        <link href="/css/lib/owl.carousel.min.css" rel="stylesheet" />
        <link href="/css/lib/owl.theme.default.min.css" rel="stylesheet" />
        <link href="/css/helper.css" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
        <!--[if lt IE 9]>

        <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
    <![endif]-->
    </head>

    <body class="fix-header fix-sidebar">
        <!-- Preloader - style you can find in spinners.css -->
        <div class="preloader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
        </div>
        <!-- Main wrapper  -->
        <div id="main-wrapper">

            @include('layouts.header')
            @guest
                @yield('auth')
            @endguest

            @auth
            @include('layouts.menu')
            {{--todo change leftsidebar--}}
            <!-- Page wrapper  -->
            <div class="page-wrapper">
                @include('layouts.breadcrumb')

                @if (session()->has('flash_notification.success'))
                    <script>
                        window.onload = function() {
                            swal("Hey!", "{!! session('flash_notification.success') !!}", "success")
                        };
                    </script>
                @endif
                <!-- Container fluid  -->
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- End Container fluid  -->
                @include('layouts.footer')
            </div>
                <!-- End Page wrapper  -->
            @endauth

        </div>
        <!-- End Wrapper -->
        <!-- All Jquery -->
        <script
                src="https://code.jquery.com/jquery-3.3.1.min.js"
                integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
                crossorigin="anonymous"></script>
        <script
                src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
                integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
                crossorigin="anonymous"></script>
        <script src="/js/lib/jquery/jquery.min.js"></script>
        <!-- Bootstrap tether Core JavaScript -->

        <script src="/js/lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="/js/lib/bootstrap/js/popper.min.js"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="/js/jquery.slimscroll.js"></script>
        <!--Menu sidebar -->
        <script src="/js/sidebarmenu.js"></script>
        <!--stickey kit -->
        <script src="/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
        <!--Custom JavaScript -->
        <script src="/js/custom.min.js"></script>


        <!-- Amchart -->
        <script src="/js/lib/morris-chart/raphael-min.js"></script>
        <script src="/js/lib/morris-chart/morris.js"></script>
        <script src="/js/lib/morris-chart/dashboard1-init.js"></script>


        <script src="/js/lib/calendar-2/moment.latest.min.js"></script>
        <!-- scripit init-->
        <script src="/js/lib/calendar-2/semantic.ui.min.js"></script>
        <!-- scripit init-->
        <script src="/js/lib/calendar-2/prism.min.js"></script>
        <!-- scripit init-->
        <script src="/js/lib/calendar-2/pignose.calendar.min.js"></script>
        <!-- scripit init-->
        <script src="/js/lib/calendar-2/pignose.init.js"></script>

        <script src="/js/lib/owl-carousel/owl.carousel.min.js"></script>
        <script src="/js/lib/owl-carousel/owl.carousel-init.js"></script>
        <script src="/js/scripts.js"></script>
        <!-- scripit init-->
        <script src="/js/lib/sweetalert/sweetalert.min.js"></script>
        <!-- scripit init-->
        <script src="/js/lib/sweetalert/sweetalert.init.js"></script>
        <script src="/js/custom.min.js"></script>

        <script src="/js/lib/datatables/datatables.min.js"></script>
        <script src="/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
        <script src="/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
        <script src="/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
        <script src="/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
        <script src="/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
        <script src="/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
        <script src="/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
        <script src="/js/lib/datatables/datatables-init.js"></script>
        <script src="/js/treeview.js"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-23581568-13');
        </script>
        @yield('script')
    </body>

</html>