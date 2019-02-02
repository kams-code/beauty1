@extends('layouts.mainlayout')
@include('partials.topbar')
@include('partials.sidebar')

                                 @section('content')
                  <style type="text/css">
                      .form-horizontal .control-label{
                        text-align: left;
                      }
                  </style>
                  
                  <div class="content-page">
                        <!-- Start content -->
                        <div class="content">
                            <div class="container">
        
                                <!-- Page-Title -->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="pull-left page-title">Catégories de produit</h4>
                                       
                                    </div>
                                </div>
                                @can('add_organisations')
                                <button type="button" class="btn btn-primary waves-effect waves-light btnadd pull-right"  data-toggle="modal" data-target="#con-close-modal" data-lien="categorieproduits/create"><i class="fa fa-plus"></i>&nbsp;Ajouter </button> @endcan
                                <!-- SECTION FILTER
                                ================================================== -->  
                            
        
                                <div class="port">
                                    <div class="portfolioContainer row">
                                        
                                            @foreach($categories as $categorieproduit)
                                         
                                        <div class="col-sm-6 col-lg-3 col-md-4  {{$categorieproduit->categorie_id}}  illustrator">
                                            <div class="gal-detail thumb">
                                                <a href="{{asset('images/'.$categorieproduit->image)}}" class="image-popup" title="Screenshot-1">
                                                    <img src="{{asset('images/'.$categorieproduit->image)}}" class="thumb-img" alt="work-thumbnail">
                                                </a>
                                                <h4> {{$categorieproduit->nom}}</h4>
                                                <a class="on-default seedetails btn btn-primary" data-toggle="modal" data-lien="categorieproduits/{{$categorieproduit->id}}" data-id="{{$categorieproduit->id}}" data-target="#con-close-modal"><i class="fa fa-eye"></i></a> @can('edit_produits','delete_produits')

                 
                                                <a data-toggle="modal" data-target="#con-close-modal" data-lien="categorieproduits/{{$categorieproduit->id}}/edit" data-id="{{$categorieproduit->id}}" class="btn-delete btnedit btn btn-primary"><i class="fa fa-pencil"></i></a>
                                                <a data-toggle="modal" data-target="#deletemodal" data-id="{{$categorieproduit->id}}" data-lien="categorieproduits/{{$categorieproduit->id}}" class="btn-delete btndelete btn btn-danger"><i class="fa fa-trash-o"></i></a>  @endcan
                                                <button href="{{route("produits.index")}}" type="button" class="btn btn-primary waves-effect waves-light btnadd pull-right"  ><i class="fa  fa-location-arrow"></i>&nbsp; </button>

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

@endsection @include('partials.sidebarright')
