@extends('layouts.mainlayout')
@include('partials.topbar')
@include('partials.sidebar')

<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Gallery</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="home">Acceuil</a></li>
                                    <li class="active">Service</li>
                                </ol>
                            </div>
                        </div>

                        <!-- SECTION FILTER
                        ================================================== -->  
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="portfolioFilter">
                                    <a href="#" data-filter="*" class="current">toutes les services</a>
                                    <a href="#" data-filter=".webdesign">Web Design</a>
                                    <a href="#" data-filter=".graphicdesign">Graphic Design</a>
                                    <a href="#" data-filter=".illustrator">Illustrator</a>
                                    <a href="#" data-filter=".photography">Photography</a>
                                </div>
                            </div>
                        </div>

                        <div class="port">
                            <div class="portfolioContainer row">
                            <div class="m-b-30 pull-right">

                                @can('add_services')
                                <button type="button" class="btn btn-primary waves-effect waves-light btnadd"  data-toggle="modal" data-target="#con-close-modal" data-lien="services/create"><i class="fa fa-plus"></i>&nbsp;Ajouter </button> @endcan

                            </div> 
                                @foreach($services as $service)
                                <div class="col-sm-6 col-lg-3 col-md-4 webdesign illustrator">
                                    <div class="gal-detail thumb">
                                    
                                        <a href="assets/images/gallery/1.jpg" class="image-popup" title="Screenshot-1">
                                            <img  src="{{asset('images/'.$service->image)}}" class="thumb-img" alt="work-thumbnail">
                                        </a>
                                        <div  >
                                            <div class="col-sm-12 control-label" style="padding: 0px">
                                               <h4>{{ $service->nom }} </h4>
                                               <p>{{ $service->description}} </p>
                                            
                                            </div> 
                                            <a class="on-default seedetails btn btn-primary" data-toggle="modal" data-lien="services/{{$service->id}}" data-id="{{$service->id}}" data-target="#con-close-modal"><i class="fa fa-eye"></i></a> {{--@can('edit_service','delete_service')--}} 
                                            
                                                <a data-toggle="modal" data-target="#con-close-modal" data-lien="organisations/{{$service->id}}/edit" data-id="{{$service->id}}" class="btn-delete btnedit btn btn-primary"><i class="fa fa-pencil"></i></a>
                                                <a data-toggle="modal" data-target="#deletemodal" data-id="{{$service->id}}" data-lien="organisations/{{$service->id}}" class="btn-delete btndelete btn btn-danger"><i class="fa fa-trash-o"></i></a> 
                                          {{--@endcan--}}  
                               
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                                


                                
                                

                            </div>
                        </div> <!-- End row -->

                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    2016 © Moltran.
                </footer>

            </div>