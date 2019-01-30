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
                                            <a href="{{asset('images/'.$organisation->image)}}" class="image-popup" title="Screenshot-1">
                                                <img src="{{asset('images/'.$organisation->image)}}" class="thumb-img" alt="work-thumbnail">
                                            </a>
                                            <h4>Logo</h4>
                                        </div>
                                    </div>
    
                                   
                                    
    
                                </div>
                            </div> <!-- End row -->
    

                      <div class="row">
                           
                            <div class="col-md-12">
                                    
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Formulaire</h3></div>
                                   
                                    <div class="panel-body">
                                     
                                   {!! Form::open(['method' => 'PUT', 'url' => route('organisations.update', $organisation ),'files'=>true]) !!}
                                   <div class="form-group">
                                      {!! Form::label('imageup','Logo') !!}
                                      
                                          {!! Form::file('imageup') !!}

                                    </div>
                                   <div class="form-group">
                             {!! Form::label('nom','nom') !!}
                             {!! Form::text('nom',$organisation->nom, ['class' => 'form-control','required']) !!}
                          </div>
                          <div class="form-group">
                             {!! Form::label('pays','pays') !!}
                             {!! Form::text('pays',$organisation->pays, ['class' => 'form-control','required']) !!}
                          </div>
                          <div class="form-group">
                             {!! Form::label('ville','ville') !!}
                             {!! Form::text('ville',$organisation->ville, ['class' => 'form-control','required']) !!}
                          </div>
                          <div class="form-group">
                             {!! Form::label('adresse','adresse') !!}
                             {!! Form::text('adresse',$organisation->adresse, ['class' => 'form-control','required']) !!}
                          </div>
                          <div class="form-group">
                             {!! Form::label('telephone','telephone') !!}
                             {!! Form::text('telephone',$organisation->telephone    , ['class' => 'form-control','required']) !!}
                          </div>
                          <div class="form-group">
                             {!! Form::label('description','description') !!}
                             {!! Form::textarea('description',$organisation->description, ['class' => 'form-control','required']) !!}
                          </div>
                          <div class="form-group">
                            <label>
                                    <div class="checkbox">
                                            <input   id="checkbox" type="checkbox" name="online" > 
                                            <label for="checkbox"   >
                                                    Etat 
                                            </label>
                                        </div>
                            
                             en ligne?
                             </label> 
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












