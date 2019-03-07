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
                                        <h4 class="pull-left page-title">Produits</h4>
                                        <ol class="breadcrumb pull-right">
                                            
                                            <li><a href="#">Accueil</a></li>
                                            <li class="active">Produits</li>
                                        </ol>
                                    </div>
                                </div>

                                @can('add_organisations')
                                <button type="button" class="btn btn-primary waves-effect waves-light btnadd pull-right"  data-toggle="modal" data-target="#con-close-modal" data-lien="produits/create"><i class="fa fa-plus"></i>&nbsp;Ajouter un produit </button> @endcan
                              
        
                                <!-- SECTION FILTER
                                ================================================== -->  
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="portfolioFilter">
                                            <a href="#" data-filter="*" class="current">Tout</a>
                                            @foreach($categories as $categorie)
                                            <a href="#" data-filter=".{{$categorie->id}}">{{$categorie->nom}}</a>
                                            @endforeach
                                          
                                        </div>
                                    </div>
                                </div>
        
                                <div class="port">
                                    <div class="portfolioContainer row">
                                        
                                            @foreach($produits as $produit)
                                         
                                        <div class="col-sm-6 col-lg-3 col-md-4  {{$produit->categori_id}}  illustrator">
                                            <div class="gal-detail thumb">
                                                <?php
                                                    if(strlen($produit->image) == 0){
                                                        ?>
                                                            <a href="{{asset('images/default.png')}}" class="image-popup" title="Screenshot-1">
                                                                <img style="height: 200px" src="{{asset('images/default.png')}}" class="thumb-img" alt="work-thumbnail">
                                                            </a>
                                                        <?php
                                                    }
                                                    else{
                                                        ?>
                                                            <a href="{{asset('images/'.$produit->image)}}" class="image-popup" title="Screenshot-1">
                                                                <img style="height: 200px" src="{{asset('images/'.$produit->image)}}" class="thumb-img" alt="work-thumbnail">
                                                            </a>
                                                        <?php
                                                    }
                                                ?>
                                                
                                                <h5 style="text-align: -webkit-center;" > {{$produit->nom}}</h5>
                                                <h5 style="text-align: -webkit-center;height: 15px" >
                                                <?php
                                                    if($produit->vendable == 1){
                                                        ?>
                                                             {{$produit->prix}} FCFA
                                                        <?php
                                                    }
                                                ?>
                                                </h5>
                                                    <div style="align: center;">
                                                <a class="on-default seedetails btn btn-primary" data-toggle="modal" data-lien="produits/{{$produit->id}}" data-id="{{$produit->id}}" data-target="#con-close-modal"><i class="fa fa-eye"></i></a> @can('edit_produits','delete_produits')

                 
                                                <a data-toggle="modal" data-target="#con-close-modal" data-lien="produits/{{$produit->id}}/edit" data-id="{{$produit->id}}" class="btn-success btnedit btn btn-primary"><i class="fa fa-pencil"></i></a>
                                                <a data-toggle="modal" data-target="#deletemodal" data-id="{{$produit->id}}" data-lien="produits/{{$produit->id}}" class="btn-delete btndelete btn btn-danger"><i class="fa fa-trash-o"></i></a>  @endcan
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

@endsection @include('partials.sidebarright')
