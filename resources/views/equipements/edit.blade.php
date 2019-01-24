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


                        <div class="row">
                          
                            <div class="col-md-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Horizontal form</h3></div>
                                   <div class="panel-body">
                    {!! Form::open(['method' => 'PUT', 'url' => route('equipements.update', $equipement ),'files'=>true]) !!}
                          <div class="form-group">
                             {!! Form::label('nom','nom') !!}
                             {!! Form::text('nom',$equipement->nom, ['class' => 'form-control']) !!}
                          </div>
                          <div class="form-group">
                             {!! Form::label('description','description') !!}
                             {!! Form::text('description',$equipement->description, ['class' => 'form-control']) !!}
                          </div>
                          <div class="form-group">
                            {!! Form::label('imageup','Image') !!}
                            
                                {!! Form::file('imageup') !!}

                          </div>
                          <div class="form-group">
                             {!! Form::label('fournisseur_id','Fournisseur') !!}
                             {!! Form::select('fournisseur_id',$fournisseurs,$equipement->fournisseur_id, ['class' => 'form-control']) !!}
                          </div> 
                          <button class="btn btn-primary">envoyer</button>
                    {!! Form::close() !!}
                </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->

                        </div> <!-- End row -->


                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    2019 © QuickBeauty.
                </footer>

            </div>

@endsection
@include('partials.sidebarright')
