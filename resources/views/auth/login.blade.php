<!DOCTYPE html>
<html>
    
<!-- Mirrored from QuickBeauty.coderthemes.com/dark/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Nov 2019 13:29:24 GMT -->
<head>
        <meta charset="utf-8" />
        <title>QuickBeauty - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="{{asset('images/logo_dark.PNG')}}">

        <!--
      calendar css-->
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
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{asset('js/modernizr.min.js')}}"></script>
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="{{asset('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>
        <script src="{{asset('https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js')}}"></script>
        <![endif]-->

        
    </head>
    <style type="text/css">
        html{
            background-image: url('../images/background.jpg');
            background-size: cover;
        }
        body{
            background: transparent;
        }
        .btn.btn-primary{
            padding: 10px 16px;
            min-width: 140px;
        }   
    </style>
    <body >
        <div class="wrapper-page">
            <div class="panel panel-color panel-primary panel-pages">
                <div class="panel-heading bg-img" style="padding: 0px"> 
                    <div class="bg-overlay" style="background: #fd3264;"></div>
                    <h3 class="text-center m-t-10 text-white" style="margin: 0px">
<<<<<<< HEAD
                        <img src="/images/logo_dark.png" style="width: 150px;">
=======
                        <img src="/images/logo_dark.png" style="width: 200px;">
>>>>>>> cb51a88d04e18f675a4f53417688c4b9a978eac5
                    </h3>
                </div> 

                <div class="panel-body">

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label style="height: 45px;display: flex;justify-content: end;align-items: center;" for="email" class="col-md-12 col-form-label text-md-right">{{ __('Identifiant') }}</label>

                            <div class="col-md-12">
                                <input type="text" style="height: 46px" class="form-control" name="email"  value="{{ old('email') }}" required autofocus>
                             
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-12 col-form-label text-md-right">{{ __('Mot de passe') }}</label>

                            <div class="col-md-12">
                                <input id="password" style="height: 46px" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                 <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                
                                <label class="form-check-label" for="remember">
                                    {{ __('Se rappeler de moi') }}
                                </label>
                            </div>
                            <div class="col-md-6" style="text-align: right;text-align: right;">
                                 @if (Route::has('password.request'))
                                    <a class="btn btn-link" style="padding: 0px;box-shadow: 0px 0px" href="{{ route('password.request') }}">
<<<<<<< HEAD
                                        {{ __('Mot de passe oublier?') }}
=======
                                        {{ __('Mot de passe oublié?') }}
>>>>>>> cb51a88d04e18f675a4f53417688c4b9a978eac5
                                    </a>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                                <div align="center">
                                    <div >
                                            <button type="submit" class="btn btn-primary">
                                                    {{ __('Connexion') }}
                                                </button>
                                                        </div>
                               
                            </div>
                            
                        </div>
                    </form>
                </div>                                 
            </div> 
            </div>
            
        </div>

        <div style="position: absolute;bottom: 0px;width: 100%;height: 40px;text-align: center;">
                <h5 style="color: white">Copyright &copy;2019 worldevs. All Rights Reserved</h5>
            </div>
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
            <script src="{{asset('plugins/select2/dist/js/select2.min.js')}}" type="text/javascript"></script>
    
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
<!-- Mirrored from QuickBeauty.coderthemes.com/dark/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Nov 2019 13:29:24 GMT -->
</html>