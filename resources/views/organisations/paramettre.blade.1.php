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
                                <h4 class="pull-left page-title">Instituts</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="home">Accueil</a></li>
                                    <li class="active">Instituts</li>
                                </ol>
                            </div>
                        </div>


                        <div class="row">
                       
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Paramèttres de l'institut</h3></div>
                                    <div class="panel-body">
                                        {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('organisations.update',$organisation),'files'=>true]) !!}
                                      

          
                                        <div class="col-md-12" style="padding: 0px">
                                            <label for="inputEmail3" class="col-sm-12 control-label">{!! Form::label('nom','Temps de repot entre chaques services*') !!}</label>
                                            <div class="col-sm-12">
                                                <input type="time" class="form-control" name="tempstransition" value="{{$organisation->tempstransition}}" required="">
                                            </div>
                                        </div>
                                        <div class="m-b-0">
                                            <div class="col-sm-offset-3 col-sm-9">
                            
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="border:0px;text-align: right;margin-top: 20px">
                                          <button class="btn btn-primary">Modifier</button>
                                        </div>
                                        {!! Form::close() !!}
                                    </div><!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col-->
                            
                            
                        </div> <!-- End row -->



                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    2016 © Moltran.
                </footer>

            </div>
         

</div>

@endsection @include('partials.sidebarright')
