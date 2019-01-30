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
                                   
                                   
                                    
    
                                </div>
                            </div> <!-- End row -->
    

                      <div class="row">
                           
                            <div class="col-md-12">
                                    
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Formulaire</h3></div>
                                   
                                    <div class="panel-body">
                                     
                                   {!! Form::open(['method' => 'PUT', 'url' => route('tickets.update', $ticket ),'files'=>true]) !!}
                                   <div class="form-group">
                                                       {!! Form::label('titre','Titre') !!}
                                                   
                                                
                                                        {!! Form::text('titre',null, ['class' => 'form-control','required']) !!}
                                                     
                                                </div>
                                                
                                                <div class="form-group">
                                                           {!! Form::label('type','Type') !!}</label>
                                                           {!! Form::text('type',null, ['class' => 'form-control','required']) !!}
           
                                                </div>
                                                <div class="form-group">
                                                  
                                                          
                                                            <div class="checkbox">
                                                                    <input   id="checkbox" type="checkbox" name="etat" > 
                                                                    <label for="checkbox"   >
                                                                            Etat
                                                                    </label>
                                                                </div>
                             
              
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












