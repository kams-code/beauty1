<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8" />
  <title>QuickBeauty - Responsive Admin Dashboard Template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
  <meta content="Coderthemes" name="author" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="shortcut icon" href="{{asset('images/favicon_1.ico')}}">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
  <link href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.4.0/fullcalendar.min.css" rel="stylesheet">
  <link href="{{ asset('/css/paper.css') }}" rel="stylesheet">

  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>

  <script src="{{ asset('/js/moment.js') }}"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.4.0/fullcalendar.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
  <meta name="csrf-token" content="<?php echo csrf_token(); ?>">

  <link href="{{asset('plugins/fullcalendar/dist/fullcalendar.css')}}" rel="stylesheet">
  <link href="{{asset('plugins/select2/dist/css/select2.css')}}" rel="stylesheet" type="text/css">

  <link href="{{asset('plugins/sweetalert/dist/sweetalert.css')}}" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="{{asset('plugins/magnific-popup/dist/magnific-popup.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/jquery-datatables-editable/datatables.css')}}">



  <link href="{{asset('plugins/tagsinput/jquery.tagsinput.css')}}" rel="stylesheet">
  <link href="{{asset('plugins/toggles/toggles.css')}}" rel="stylesheet">
  <link href="{{asset('plugins/timepicker/bootstrap-timepicker.min.css')}}" rel="stylesheet">
  <link href="{{asset('plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
  <link href="{{asset('plugins/colorpicker/colorpicker.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('plugins/jquery-multi-select/multi-select.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('plugins/select2/dist/css/select2.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('plugins/select2/dist/css/select2-bootstrap.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" />




  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('css/core.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('css/icons.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('css/components.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('css/pages.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('css/menu.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('css/responsive.css')}}" rel="stylesheet" type="text/css">
  <script src="{{asset('js/modernizr.min.js')}}"></script>
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
</head>  
<body>
  <div id="url" style="display: none">{{url('')}}</div>
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

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/detect.js"></script>
  <script src="js/fastclick.js"></script>
  <script src="js/jquery.slimscroll.js"></script>
  <script src="js/jquery.blockUI.js"></script>
  <script src="js/waves.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.nicescroll.js"></script>
  <script src="js/jquery.scrollTo.min.js"></script>

  <script src="js/jquery.app.js"></script>

  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <script src="plugins/select2/dist/js/select2.min.js" type="text/javascript"></script>

  <!-- BEGIN PAGE SCRIPTS -->
  <script src="plugins/moment/moment.js"></script>
  <script src="plugins/fullcalendar/dist/fullcalendar.min.js"></script>
</body>
</html>