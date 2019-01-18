<!DOCTYPE html>
<html>
    
<!-- Mirrored from moltran.coderthemes.com/dark/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Nov 2016 13:26:04 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Moltran - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="{{asset('images/favicon_1.ico')}}">


        <!--calendar css-->
        <link href="{{asset('plugins/fullcalendar/dist/fullcalendar.css')}}" rel="stylesheet">
        <link href="{{asset('plugins/select2/dist/css/select2.css')}}" rel="stylesheet" type="text/css">

        <link href="{{asset('plugins/sweetalert/dist/sweetalert.css')}}" rel="stylesheet" type="text/css">

 <link rel="stylesheet" href="{{asset('plugins/magnific-popup/dist/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('plugins/jquery-datatables-editable/datatables.css')}}">



        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/core.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/components.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/pages.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/menu.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/responsive.css')}}" rel="stylesheet" type="text/css">

        <script src="{{asset('js/modernizr.min.js')}}"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="{{asset('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>
        <script src="{{asset('https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js')}}"></script>
        <![endif]-->

        
    </head>


    <body class="fixed-left">
        
        <!-- Begin page -->
        <div id="wrapper">
        


          
            <!-- Top Bar Start -->
            @yield('topbar')
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            
            <!-- Left Sidebar End --> 
           
@yield('sidebar')

            <!-- ============================================================== -->
            <!-- Start right Content here -->
      

            <!-- ============================================================== -->                      
            @yield('content')
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            
   @yield('sidebarright')
          
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->


    
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/detect.js')}}"></script>
        <script src="{{asset('js/fastclick.js')}}"></script>
        <script src="{{asset('js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('js/jquery.blockUI.js')}}"></script>
        <script src="{{asset('js/waves.js')}}"></script>
        <script src="{{asset('js/wow.min.js')}}"></script>
        <script src="{{asset('js/jquery.nicescroll.js')}}"></script>
        <script src="{{asset('js/jquery.scrollTo.min.js')}}"></script>

        <script src="{{asset('js/jquery.app.js')}}"></script>
        
        <!-- jQuery  -->
        <script src="{{asset('plugins/moment/moment.js')}}"></script>
        
        <!-- jQuery  -->
        <script src="{{asset('plugins/waypoints/lib/jquery.waypoints.js')}}"></script>
        <script src="{{asset('plugins/counterup/jquery.counterup.min.js')}}"></script>
        
        <!-- jQuery  -->
        <script src="{{asset('plugins/sweetalert/dist/sweetalert.min.js')}}"></script>
        
        
        <!-- flot Chart -->
        <script src="{{asset('plugins/flot-chart/jquery.flot.js')}}"></script>
        <script src="{{asset('plugins/flot-chart/jquery.flot.time.js')}}"></script>
        <script src="{{asset('plugins/flot-chart/jquery.flot.tooltip.min.js')}}"></script>
        <script src="{{asset('plugins/flot-chart/jquery.flot.resize.js')}}"></script>
        <script src="{{asset('plugins/flot-chart/jquery.flot.pie.js')}}"></script>
        <script src="{{asset('plugins/flot-chart/jquery.flot.selection.js')}}"></script>
        <script src="{{asset('plugins/flot-chart/jquery.flot.stack.js')}}"></script>
        <script src="{{asset('plugins/flot-chart/jquery.flot.crosshair.js')}}"></script>

        <!-- jQuery  -->
        <script src="{{asset('pages/jquery.todo.js')}}"></script>
        
        <!-- jQuery  -->
        <script src="{{asset('pages/jquery.chat.js')}}"></script>
        
        <!-- jQuery  -->
        <script src="{{asset('pages/jquery.dashboard.js')}}"></script>


        <script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
        <script src="{{asset('plugins/select2/dist/js/select2.min.js')" type="text/javascript"></script>

           <!-- BEGIN PAGE SCRIPTS -->
           <script src="{{asset('plugins/moment/moment.js')}}"></script>
        <script src="{{asset('plugins/fullcalendar/dist/fullcalendar.min.js')}}"></script>
        <script src="{{asset('pages/jquery.fullcalendar.js')}}"></script>

        
        <script type="text/javascript">
            /* ==============================================
            Counter Up
            =============================================== */
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>

    
    </body>

<!-- Mirrored from moltran.coderthemes.com/dark/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Nov 2016 13:26:43 GMT -->
</html>