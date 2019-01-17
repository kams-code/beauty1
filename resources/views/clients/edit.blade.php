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
                                    <li><a href="#">Moltran</a></li>
                                    <li><a href="#">Forms</a></li>
                                    <li class="active">General elements</li>
                                </ol>
                            </div>
                        </div>

                      <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Horizontal form</h3></div>
                                   <div class="panel-body">
                    
                                   {!! Form::open(['method' => 'PUT', 'url' => route('clients.update', $client )]) !!}
                          <div class="form-group">
                             {!! Form::label('nom','nom') !!}
                             {!! Form::text('nom',$client->nom, ['class' => 'form-control']) !!}
                          </div>
                          <div class="form-group">
                             {!! Form::label('prenom','prenom') !!}
                             {!! Form::text('prenom',$client->prenom, ['class' => 'form-control']) !!}
                          </div>
                          <div class="form-group">
                             {!! Form::label('adresse','adresse') !!}
                             {!! Form::text('adresse',$client->adresse, ['class' => 'form-control']) !!}
                          </div>
                          <div class="form-group">
                             {!! Form::label('telephone','telephone') !!}
                             {!! Form::text('telephone',$client->telephone    , ['class' => 'form-control']) !!}
                          </div>
                          <div class="form-group">
                             {!! Form::label('email','email') !!}
                             {!! Form::text('email',$client->ville, ['class' => 'form-control']) !!}
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
                    2016 © Moltran.
                </footer>
                @endcan
                

            </div>

@endsection
@include('partials.sidebarright')