
@extends('layouts.mainlayout')
@include('partials.topbar')
@include('partials.sidebar')

                                 @section('content')
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    
                

                <div class="wraper container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="bg-picture text-center" >
                                <div class="bg-picture-overlay"></div>
                                <div class="profile-info-name">
                                    <img src="{{asset('images/'.$client->image)}}" class="thumb-lg img-circle img-thumbnail" alt="profile-image">
                                    <h3 class="text-white">{{$client->name}}</h3>
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
                                <a href="#profile-2" data-toggle="tab" aria-expanded="false"> 
                                    <span class="visible-xs"><i class="fa fa-user"></i></span> 
                                    <span class="hidden-xs">Activities</span> 
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
                                                    <p class="text-muted">{{$client->nom}}</p>
                                                </div>
                                                <div class="about-info-p">
                                                    <strong>Prénom</strong>
                                                    <br>
                                                    <p class="text-muted">{{$client->prenom}}</p>
                                                </div>
                                                <div class="about-info-p">
                                                    <strong>Mobile</strong>
                                                    <br>
                                                    <p class="text-muted">(123) 123 1234</p>
                                                </div>
                                                <div class="about-info-p">
                                                    <strong>Email</strong>
                                                    <br>
                                                    <p class="text-muted">{{$client->email}}</p>
                                                </div> <div class="about-info-p">
                                                    <strong>Pays</strong>
                                                    <br>
                                                    <p class="text-muted">{{$client->pays}}</p>
                                                </div>
                                                <div class="about-info-p">
                                                    <strong>Ville</strong>
                                                    <br>
                                                    <p class="text-muted">{{$client->ville}}</p>
                                                </div>
                                                <div class="about-info-p">
                                                    <strong>Adresse</strong>
                                                    <br>
                                                    <p class="text-muted">{{$client->adresse}}</p>
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
                                                <h3 class="panel-title">Biography</h3> 
                                            </div> 
                                            <div class="panel-body"> 
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>

                                                <p><strong>But also the leap into electronic typesetting, remaining essentially unchanged.</strong></p>

                                                <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                            </div> 
                                        </div>
                                        <!-- Personal-Information -->

                                        <div class="panel panel-default panel-fill">
                                            <div class="panel-heading"> 
                                                <h3 class="panel-title">Skills</h3> 
                                            </div> 
                                            <div class="panel-body"> 
                                                <div class="m-b-15">
                                                    <h5>Angular Js <span class="pull-right">60%</span></h5>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-primary wow animated progress-animated" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                            <span class="sr-only">60% Complete</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="m-b-15">
                                                    <h5>Javascript <span class="pull-right">90%</span></h5>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-pink wow animated progress-animated" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                                            <span class="sr-only">90% Complete</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="m-b-15">
                                                    <h5>Wordpress <span class="pull-right">80%</span></h5>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-purple wow animated progress-animated" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                            <span class="sr-only">80% Complete</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="m-b-0">
                                                    <h5>HTML5 &amp; CSS3 <span class="pull-right">95%</span></h5>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-info wow animated progress-animated" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                                            <span class="sr-only">95% Complete</span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div> 
                                        </div>

                                    </div>

                                </div>
                            </div> 




                            <div class="tab-pane" id="profile-2">
                                    <div class="row">
                                            <div class="col-md-12">
                                                <section id="cd-timeline" class="cd-container">
                                                  @foreach ($services as $service )
                                                  <div class="cd-timeline-block">
                                                        <div class="cd-timeline-img cd-success">
                                                            <i class="fa fa-tag"></i>
                                                        </div> <!-- cd-timeline-img -->
                
                                                        <div class="cd-timeline-content">
                                                            <h3>Timeline Event One</h3>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
                                                            <span class="cd-date">{{$service->created_at}}</span>
                                                        </div> <!-- cd-timeline-content -->
                                                    </div> <!-- cd-timeline-block -->
                                                    
                                                    @endforeach
                                                     <!-- cd-timeline-block -->
                                                </section> <!-- cd-timeline -->
                                            </div>
                                        </div><!-- Row -->
                
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
            
@endsection @include('partials.sidebarright')

            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

