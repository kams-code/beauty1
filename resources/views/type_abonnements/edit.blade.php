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
                           
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Horizontal form</h3></div>
                                   <div class="panel-body">
                    {!! Form::open(['method' => 'PUT', 'url' => route('reservations.update', $reservation )]) !!}
                          <div class="form-group">
                             {!! Form::label('code','Code') !!}
                             {!! Form::text('code',$reservation->code, ['class' => 'form-control','required']) !!}
                          </div>
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">{!! Form::label('date','Date :') !!}</label>
                            <div class="col-sm-9">
                              {!! Form::date('date',$reservation->date, ['class' => 'form-control','required']) !!}
                             </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">{!! Form::label('heure','Heure :') !!}</label>
                            <div class="col-sm-9">
                              {!! Form::time('heure',$reservation->heure, ['class' => 'form-control','required']) !!}
                             </div>
                        </div>    
                          <div class="form-group">
                             {!! Form::label('client_id','Client') !!}
                             {!! Form::select('client_id',$clients,$reservation->client_id, ['class' => 'form-control','required']) !!}
                          </div> 

                          <div class="form-group">
                             {!! Form::label('service_id','Service') !!}
                            {!! Form::select('services[]', $services, null, ['class' => 'form-control','required','multiple'=>'multiple']) !!}
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
