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


                            <div class="col-md-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Horizontal form</h3></div>
                                    <div class="panel-body">
                                    {!! Form::open(['url' => route('organisations.store')]) !!}
                          <div class="form-group">
                             {!! Form::label('nom','nom') !!}
                             {!! Form::text('nom',, ['class' => 'form-control','required']) !!}
                          </div>
                          <div class="form-group">
                             {!! Form::label('pays','pays') !!}
                             {!! Form::text('pays',null, ['class' => 'form-control','required']) !!}
                          </div>
                          <div class="form-group">
                             {!! Form::label('ville','ville') !!}
                             {!! Form::text('ville',null, ['class' => 'form-control','required']) !!}
                          </div>
                          <div class="form-group">
                             {!! Form::label('adresse','adresse') !!}
                             {!! Form::text('adresse',null, ['class' => 'form-control','required']) !!}
                          </div>
                          <div class="form-group">
                             {!! Form::label('telephone','telephone') !!}
                             {!! Form::number('telephone',null, ['class' => 'form-control','required']) !!}
                          </div>
                          <div class="form-group">
                             {!! Form::label('description','description') !!}
                             {!! Form::textarea('description',null, ['class' => 'form-control','required']) !!}
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

                <footer class="footer text-right">
                    2019 © QuickBeauty.
                </footer>

            </div>

@endsection
@include('partials.sidebarright')
@endsection
