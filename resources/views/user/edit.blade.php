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
                    <h4 class="pull-left page-title">Editable Table</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">QuickBeauty</a></li>
                        <li><a href="#">Tables</a></li>
                        <li class="active">Editable Table</li>
                    </ol>
                </div>
            </div>


            <div class="panel">
                
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="m-b-30">
                            
                              </div>
                        </div>

                       
                            <div class="result-set">
                                @can('view_users')    
                                <div class="row">
                                    <div class="col-md-5">
                                        <h3>Edit {{ $user->first_name }}</h3>
                                    </div>
                                    <div class="col-md-7 page-action text-right">
                                        <a href="{{ route('users.index') }}" class="btn btn-default btn-sm"> <i class="fa fa-arrow-left"></i> Back</a>
                                    </div>
                                </div>
                            
                                <div class="wrapper wrapper-content animated fadeInRight">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="ibox float-e-margins">
                                                <div class="ibox-content">
                                                        
                                                            <div class="profile-info-name">
                                                                    <img src="{{asset('images/'.$user->image)}}" class="thumb-lg img-circle img-thumbnail" alt="profile-image">
                                                                    <h3 class="text-white">John Deon</h3>
                                                                </div>
                                                    {!! Form::model($user, ['method' => 'PUT', 'route' => ['users.update',  $user->id ],'files'=>true ]) !!}
                                                       
                                                    @include('user._form')
                                                        <!-- Submit Form Button -->
                                                        {!! Form::submit('Save Changes', ['class' => 'btn btn-primary']) !!}
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>@endcan
                        
                                <div class="text-center">
                            
                                </div>
                            </div>
                        
                           
                      
                </div>
                <!-- end: page -->

            </div> <!-- end Panel -->

        </div> <!-- container -->
                   
    </div> <!-- content -->

    <footer class="footer text-right">
        2019 © QuickBeauty.
    </footer>












@endsection