@extends('layouts.mainlayout')
@include('partials.topbar')
@include('partials.sidebar')

                                 @section('content')
                                 {!! Charts::assets() !!}
                                 <div class="content-page">
                                        <!-- Start content -->
                                        <div class="content">
                                            <div class="container">
                       
                                                <!-- Page-Title -->
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <h4 class="pull-left page-title">Bienvenue !</h4>
                                                        <ol class="breadcrumb pull-right">
                                                            <li><a href="#">QuickBeauty</a></li>
                                                            <li class="active">Tableau de bords</li>
                                                        </ol>
                                                    </div>
                                                </div>
                        <!--  -->
                                                <!-- Start Widget -->
                                                <div class="row">
                                                    <div class="col-sm-6 col-lg-4">
                                                        <div class="mini-stat clearfix bx-shadow bg-info">
                                                            <span class="mini-stat-icon"><i class="ion-social-usd"></i></span>
                                                            <div class="mini-stat-info text-right">
                                                                  
                                                                <span class="counter">
                                                                    {{$value}}
                                                               
                                                                </span>
                                                                Total 
                                                            </div>
                                                            <div class="tiles-progress">
                                                                <div class="m-t-20">
                                                                    <h5 class="text-uppercase text-white m-0">Factures <span class="pull-right">{{$nbrefactures}}</span></h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-lg-4">
                                                        <div class="mini-stat clearfix bg-purple bx-shadow">
                                                            <span class="mini-stat-icon"><i class="ion-ios7-cart"></i></span>
                                                            <div class="mini-stat-info text-right">
                                                                <span class="counter">{{$nbrefactures}}</span>
                                                               


                                                              
                                                            </div>
                                                            <div class="tiles-progress">
                                                                <div class="m-t-20">
                                                                    <h5 class="text-uppercase text-white m-0">Réservations </h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                   
                                                    <div class="col-sm-6 col-lg-4">
                                                        <div class="mini-stat clearfix bg-primary bx-shadow">
                                                            <span class="mini-stat-icon"><i class="ion-android-contacts"></i></span>
                                                            <div class="mini-stat-info text-right">
                                                                <span class="counter">{{$nombreclient}}</span>
                                                                Nombre de client
                                                            </div>
                                                          
                                                        </div>
                                                    </div>
                                                </div> <!-- end row -->
                        
                        
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="portlet" style="width: 100%"><!-- /portlet heading -->
                                                            {!! $chart->render() !!}
                                                        </div> <!-- /Portlet -->
                                                    </div> <!-- end col -->
                        
                                                   
                                                </div> <!-- End row -->
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="portlet"><!-- /portlet heading -->
                                                            {!! $chart1->render() !!}
                                                        </div> <!-- /Portlet -->
                                                    </div> <!-- end col -->
                        
                                                   
                                                </div> 


                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="portlet"><!-- /portlet heading -->
                                                            <div class="port">
                                                                <div class="portfolioContainer row">
                                                 
                                                                    @foreach($services as $service)
                                                                    <div class="col-sm-6 col-lg-3 col-md-4 {{$service->categorie_id}}">
                                                                        <div class="gal-detail thumb">
                                                                            <a href="assets/images/gallery/1.jpg" class="image-popup" title="Screenshot-1"></a>
                                                                            <a style="position: absolute;right: 20px" data-toggle="modal" data-target="#con-close-modal" data-lien="organisations/{{$service->id}}/edit" data-id="{{$service->id}}" class="btn-delete btnedit btn btn-primary pull-right">{{$service->montant}}</i></a>
                                                                                <img  src="{{asset('images/'.$service->image)}}" class="thumb-img" alt="work-thumbnail" style="height: 150px">
                                                                            </a>
                                                                            <div  >
                                                                                <div class="col-sm-12 control-label" style="padding: 0px">
                                                                                   <h4>{{ $service->nom }} </h4>
                                                                                   <p>{{ $service->description}} </p>
                                                                                
                                                                                </div> 
                                                                                <a class="on-default seedetails btn btn-primary" data-toggle="modal" data-lien="services/{{$service->id}}" data-id="{{$service->id}}" data-target="#con-close-modal"><i class="fa fa-eye"></i></a> 
                                                                                @can('edit_services','delete_services')
                                                                                    <a data-toggle="modal" data-target="#con-close-modal" data-lien="services/{{$service->id}}/edit" data-id="{{$service->id}}" class="btn-success btnedit btn btn-primary"><i class="fa fa-pencil"></i></a>
                                                                                    <a data-toggle="modal" data-target="#deletemodal" data-id="{{$service->id}}" data-lien="services/{{$service->id}}" class="btn-delete btndelete btn btn-danger"><i class="fa fa-trash-o"></i></a> 
                                                                                @endcan  
                                                                   
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    @endforeach
                                    
                                                                    
                                    
                                    
                                                                    
                                                                    
                                    
                                                                </div>
                                                        </div> <!-- /Portlet -->
                                                    </div> <!-- end col -->
                        
                                                   
                                                </div> 


                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <div class="portlet"><!-- /portlet heading -->
                                                            @can('view_commandes')
                   @endcan</div> <!-- /Portlet -->
                                                    </div> <!-- end col -->
                        
                        
                                            </div> <!-- container -->
                                                       
                                        </div> <!-- content -->
                        
                                        <footer class="footer text-right">
                                            2019 © QuickBeauty.
                                        </footer>
                        
                                    </div>
                           
@endsection
@include('partials.sidebarright')
