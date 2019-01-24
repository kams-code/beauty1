@extends('layouts.mainlayout')
@include('partials.topbar')
@include('partials.sidebar')

                                 @section('content')
<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">General elements</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">QuickBeauty</a></li>
                                    <li><a href="#">Forms</a></li>
                                    <li class="active">General elements</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row port">
                                <div class="portfolioContainer">
                                    <div class="col-sm-6 col-lg-3 col-md-4 webdesign illustrator">
                                        <div class="gal-detail thumb">
                                            <a href="{{asset('images/'.$produit->image)}}" class="image-popup" title="Screenshot-1">
                                                <img src="{{asset('images/'.$produit->image)}}" class="thumb-img" alt="work-thumbnail">
                                            </a>
                                            <h4>Image</h4>
                                        </div>
                                    </div>
    
                                   
                                    
    
                                </div>
                            </div> <!-- End row -->
    

                        <div class="row">
                        

                            <div class="col-md-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Horizontal form</h3></div>
                                   <div class="panel-body">
                    {!! Form::open(['method' => 'PUT', 'url' => route('produits.update', $produit ),'files'=>true]) !!}
                          <div class="form-group">
                             {!! Form::label('nom','nom') !!}
                             {!! Form::text('nom',$produit->nom, ['class' => 'form-control']) !!}
                          </div>
                          <div class="form-group">
                             {!! Form::label('description','description') !!}
                             {!! Form::text('description',$produit->description, ['class' => 'form-control']) !!}
                          </div>
                          
                          <div class="form-group">
                  {!! Form::label('imageup','Image') !!}
                                  {!! Form::file('imageup') !!}

                            </div>
                          <button class="btn btn-primary">envoyer</button>
                    {!! Form::close() !!}
                </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->

                        </div> <!-- End row -->


                    </div> <!-- container -->
                               
                </div> <!-- content -->
 @can('edit_produits', 'delete_produits')
                    <footer class="footer text-right">
                    2019 © QuickBeauty.
                </footer>
                @endcan
                

            </div>

@endsection
@include('partials.sidebarright')
