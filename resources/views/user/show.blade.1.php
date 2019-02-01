<!DOCTYPE html>
<html>
    
<!-- Mirrored from moltran.coderthemes.com/dark/pages-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Nov 2016 13:29:23 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Moltran - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="{{asset('images/favicon_1.ico')}}">

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
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js')}}"></script>
        <![endif]-->

        
    </head>


    <body class="fixed-left">
        
        <!-- Begin page -->
        <div id="wrapper">
        
            <!-- Top Bar Start -->
            @include('partials.topbar')
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            @include('partials.sidebar')

            <!-- Left Sidebar End --> 



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
          
            <div class="content-page">
                    <!-- Start content -->
                    <div class="content">
                        
                    
    
                    <div class="wraper container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="bg-picture text-center" style="background-image:url('{{asset('images/big/bg.jpg')}}')">
                                    <div class="bg-picture-overlay"></div>
                                    <div class="profile-info-name">
                                        <img src="{{asset('images/'.auth()->user()->image)}}" class="thumb-lg img-circle img-thumbnail" alt="profile-image">
                                        <h3 class="text-white">{{auth()->user()->name}}</h3>
                                    </div>
                                </div>
                                <!--/ meta -->
                            </div>
                        </div>
                        <div class="row user-tabs">
                            <div class="col-sm-9 col-lg-6">
                                <ul class="nav nav-tabs tabs">
                                <li class="active tab">
                                    <a href="#home-2" data-toggle="tab" aria-expanded="false" class="active"> 
                                        <span class="visible-xs"><i class="fa fa-home"></i></span> 
                                        <span class="hidden-xs">About Me</span> 
                                    </a> 
                                </li> 
                                
                                <li class="tab"> 
                                    <a href="#messages-2" data-toggle="tab" aria-expanded="true"> 
                                        <span class="visible-xs"><i class="fa fa-envelope-o"></i></span> 
                                        <span class="hidden-xs">Planning</span> 
                                    </a> 
                                </li> 
                                <li class="tab"> 
                                    <a href="#settings-2" data-toggle="tab" aria-expanded="false"> 
                                        <span class="visible-xs"><i class="fa fa-cog"></i></span> 
                                        <span class="hidden-xs">Settings</span> 
                                    </a> 
                                </li> 
                            <div class="indicator"></div></ul> 
                            </div>
                            <div class="hidden-xs col-sm-3 col-lg-6">
                                <div class="pull-right">
                                    <div class="dropdown">
                                        <a data-toggle="dropdown" class="dropdown-toggle btn-rounded btn btn-primary waves-effect waves-light" href="#"> Following <span class="caret"></span></a>
                                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                            <li><a href="#">Poke</a></li>
                                            <li><a href="#">Private message</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Unfollow</a></li>
                                        </ul>
                                    </div>
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12"> 
                            
                            <div class="tab-content profile-tab-content"> 
                                <div class="tab-pane active" id="home-2"> 
                                    <div class="row">
                                        <div class="col-md-4">
                                            <!-- Personal-Information -->
                                            <div class="panel panel-default panel-fill">
                                                <div class="panel-heading"> 
                                                    <h3 class="panel-title">Personal Information</h3> 
                                                </div> 
                                                <div class="panel-body"> 
                                                    <div class="about-info-p">
                                                        <strong>Nom</strong>
                                                        <br>
                                                        <p class="text-muted">{{auth()->user()->name}}</p>
                                                    </div>
                                                    <div class="about-info-p">
                                                        <strong>Mobile</strong>
                                                        <br>
                                                        <p class="text-muted">(123) 123 1234</p>
                                                    </div>
                                                    <div class="about-info-p">
                                                        <strong>Email</strong>
                                                        <br>
                                                        <p class="text-muted">{{auth()->user()->email}}</p>
                                                    </div>
                                                    <div class="about-info-p m-b-0">
                                                        <strong>Location</strong>
                                                        <br>
                                                        <p class="text-muted">USA</p>
                                                    </div>
                                                </div> 
                                            </div>
                                            <!-- Personal-Information -->
    
                                            <!-- Languages -->
                                            
                                            <!-- Languages -->
    
                                        </div>
    
    
                                        <div class="col-md-8">
                                               
                                            <!-- Personal-Information -->
                                            <div class="panel panel-default panel-fill">
                                                    <div class="panel-heading"> 

                                                        
                                                        <h3 class="panel-title">Organisation :</h3> 
                                                    </div> 
                                                    <div class="panel-body"> 
                                                        <div class="about-info-p">
                                                            <strong>Nom</strong>
                                                            <br>
                                                            <p class="text-muted">{{$organisations->nom}}</p>
                                                        </div>
                                                        <div class="about-info-p">
                                                                <strong>Pays</strong>
                                                                <br>
                                                                <p class="text-muted">{{$organisations->pays}}</p>
                                                            </div>

                                                            <div class="about-info-p">
                                                                    <strong>Ville</strong>
                                                                    <br>
                                                                    <p class="text-muted">{{$organisations->ville}}</p>
                                                                </div>    

                                                    
                                                                <div class="about-info-p">
                                                                        <strong>Description</strong>
                                                                        <br>
                                                                        <p class="text-muted">{{$organisations->description}}</p>
                                                                    </div>  
                                                                    <div class="about-info-p">
                                                                            <strong>Adresse</strong>
                                                                            <br>
                                                                            <p class="text-muted">{{$organisations->adresse}}</p>
                                                                        </div>      
                                                                        
                                                        <div class="about-info-p">

                                                            <strong>Mobile</strong>
                                                            <br>
                                                            <p class="text-muted">{{$organisations->telephone}}</p>
                                                        </div>
                                                        
                                                        
                                                    </div> 
                                                </div>
                                            <!-- Personal-Information -->
    
                                        </div>
    
                                    </div>
                                </div> 
    
    
    
                                <div class="tab-pane" id="messages-2">
                                    <!-- Personal-Information -->
                                    <div class="panel panel-default panel-fill">
                                        <div class="panel-heading"> 
                                            <h3 class="panel-title">Mon planning:</h3> 
                                        </div> 
                                        <div class="panel-body"> 
                                            <div class="table-responsive">
                                                <table id="datatable-buttons" class="table table-bordered  table-striped" id="datatable-editable">
               

                                                    <thead>
                                                        <tr>
                                                            <th>User</th>
                                                            <th>Date de debut</th>
                                                            <th>Date de fin</th>
                                                            <th>Jour</th>
                                                            <th>Heure de debut</th>
                                                            <th>Heure de fin</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                     
                                                        @foreach($plannings as $planning)
                       
                                   <tr class="gradeC">
                                                          @foreach($Users as $user)
                                                           @if($plannings->user_id=$user->id)
                                                            <td> {{ $user->name}}</td>
                                                           @endif
                                                          @endForeach
                                                            <td> {{ $planning->dateDeb }}</td>
                                                            <td> {{ $planning->dateFin }}</td>
                                                            @if($planning->jour)
                                                             <td> {{ $planning->jour->nom }}</td>
                                                            @endif
                                                            <td> {{ $planning->heureDeb }}</td>
                                                            <td> {{ $planning->heureFin }}</td>
                                                         
                                                            <td class="actions">   <a href="javascript:;" class="on-default seedetails btn btn-primary"><i class="fa fa-eye"></i></a>
                                                                @can('edit_plannings','delete_plannings')
                                                                {!! Form::open( ['method' => 'delete', 'url' => route('plannings.destroy', $planning->id), 'style' => 'display: inline', 'onSubmit' => 'return confirm("Are yous sure wanted to delete it?")']) !!}
                                                                <button type="submit" class="btn-delete btndelete btn btn-danger">
                                                                    <i class="fa fa-trash-o"></i>
                                                                </button>
                                                            {!! Form::close() !!}
                 
                                                                <a href="{{ route('plannings.edit',$planning) }}" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                                                <a href="{{ route('plannings.edit',$planning) }}" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                                                <a href="{{ route('plannings.edit',$planning) }}" class="btn-delete btn btn-sm btn-light"><i class="fa fa-pencil"></i></a>
                                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                                            @endcan
                                                             </td>
                                                        </tr> 
                    @endforeach
                                                       
                                                    </tbody>
                                               </table>
                                                            </div>
    
                                        </div> 
                                    </div>
                                    <!-- Personal-Information -->
                                </div> 
    
    
                                <div class="tab-pane" id="settings-2">
                                    <!-- Personal-Information -->
                                    <div class="panel panel-default panel-fill">
                                        <div class="panel-heading"> 
                                            <h3 class="panel-title">Edit Profile</h3> 
                                        </div> 
                                        <div class="panel-body"> 
                                                {!! Form::model($user, ['method' => 'PUT', 'route' => ['users.update',  $user->id],'files'=>true ]) !!}
                                                @include('user._form1')
                                                <!-- Submit Form Button -->
                                                {!! Form::submit('Save Changes', ['class' => 'btn btn-primary']) !!}
                                            {!! Form::close() !!}
                                        </div> 
                                    </div>
                                    <!-- Personal-Information -->
                                </div> 
                            </div> 
                        </div>
                        </div>
                    </div> <!-- container -->
                                   
                    </div> <!-- content -->
    
                    <footer class="footer text-right">
                        2016 © Moltran.
                    </footer>
    
                </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            @include('partials.sidebarright')

            <!-- /Right-bar -->


        </div>
        <!-- END wrapper -->

        <script>
            var resizefunc = [];
        </script>

        <!-- Main  -->
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
	
	</body>

<!-- Mirrored from moltran.coderthemes.com/dark/pages-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Nov 2016 13:29:23 GMT -->
</html>