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
                    {!! Form::open(['method' => 'PUT', 'url' => route('fournisseurs.update', $fournisseur )]) !!}
                          <div class="form-group">
                             {!! Form::label('nom','nom') !!}
                             {!! Form::text('nom',$fournisseur->nom, ['class' => 'form-control','required']) !!}
                          </div>
                          <div class="form-group">
                             {!! Form::label('description','description') !!}
                             {!! Form::text('description',$fournisseur->description, ['class' => 'form-control','required']) !!}
                          </div>
                                               
                          <div class="form-group">
                                {!! Form::label('prenom','Prénom') !!}
                                  {!! Form::text('prenom',$fournisseur->prenom, ['class' => 'form-control','required']) !!}
                            </div>
                            <div class="form-group">
                             {!! Form::label('adresse','Adresse') !!}
                                  {!! Form::text('adresse',$fournisseur->adresse, ['class' => 'form-control','required']) !!}

                            </div>

<div class="form-group">
                   {!! Form::label('email','Email') !!}
                                  {!! Form::text('email',$fournisseur->email, ['class' => 'form-control','required']) !!}

                            </div>

                            <div class="form-group">
                            {!! Form::label('telephone','Telephone') !!}
                                  {!! Form::text('telephone',$fournisseur->telephone, ['class' => 'form-control','required']) !!}

                            </div>

                          
                          <button class="btn btn-primary">envoyer</button>
                    {!! Form::close() !!}
                </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->

                        </div> <!-- End row -->


                    </div> <!-- container -->
                               
                </div> <!-- content -->
 @can('edit_fournisseurs', 'delete_fournisseurs')
                    <footer class="footer text-right">
                    2019 © QuickBeauty.
                </footer>
                @endcan
                

            </div>

@endsection
@include('partials.sidebarright')
