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
                             <div class="col-md-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Horizontal form</h3></div>
                                    <div class="panel-body">
                                        <form class="form-horizontal" role="form">
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                                                <div class="col-sm-9">
                                                  <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
                                                <div class="col-sm-9">
                                                  <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword4" class="col-sm-3 control-label">Re Password</label>
                                                <div class="col-sm-9">
                                                  <input type="password" class="form-control" id="inputPassword4" placeholder="Retype Password">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="checkbox2" type="checkbox">
                                                        <label for="checkbox2">
                                                            Check me out !
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group m-b-0">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                  <button type="submit" class="btn btn-info waves-effect waves-light">Sign in</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->

                            <div class="col-md-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Horizontal form</h3></div>
                                    <div class="panel-body">
                                        {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('reservations.store')]) !!}
                                        
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('code','Code') !!}</label>
                                                <div class="col-sm-9">
                                                  {!! Form::text('code',null, ['class' => 'form-control']) !!}
          </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('client_id','Client') !!}</label>
                                                <div class="col-sm-9">
                                                    {!! Form::select('client_id',$clients,null, ['class' => 'form-control']) !!}
                         
          </div>
                                            </div>
                                            {!! Form::select('dogs[]', $dogs, $customer->dogs->lists('id')->all(), ['id' => 'dogs', 'multiple' => 'multiple']) !!}
                                           
                                            <div class="form-group m-b-0">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                <button class="btn btn-primary">envoyer</button>
     </div>
                                            </div>
                                       {!! Form::close() !!}
                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->

                        </div> <!-- End row -->


                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    2016 © Moltran.
                </footer>

            </div>

@endsection
@include('partials.sidebarright')
