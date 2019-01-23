@extends('layouts.mainlayout')
@section('title', 'Roles & Permissions')
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
                            <li class="active">Editer les tickets</li>
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
                        </div>
                        <div class="row">
                                <div class="col-md-5">
                                    <h3>Create</h3>
                                </div>
                                <div class="col-md-7 page-action text-right">
                                    <a href="{{ route('users.index') }}" class="btn btn-default btn-sm"> <i class="fa fa-arrow-left"></i> Back</a>
                                </div>
                            </div>
                        
                            <div class="row">
                                <div class="col-lg-12">
                                       <!-- Modal -->
    <div class="modal fade" id="roleModal" tabindex="-1" role="dialog" aria-labelledby="roleModalLabel">
            <div class="modal-dialog" role="document">
                {!! Form::open(['method' => 'post']) !!}
    
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="roleModalLabel">Role</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- name Form Input -->
                        <div class="form-group @if ($errors->has('name')) has-error @endif">
                            {!! Form::label('name', 'Name') !!}
                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Role Name']) !!}
                            @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    
                        <!-- Submit Form Button -->
                        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    
        <div class="row">
            <div class="col-md-5">
                <h3>Roles</h3>
            </div>
            <div class="col-md-7 page-action text-right">
                @can('add_roles')
                    <a href="#" class="btn btn-sm btn-success pull-right" data-toggle="modal" data-target="#roleModal"> <i class="glyphicon glyphicon-plus"></i> New</a>
                @endcan
            </div>
        </div>
    
    
        @forelse ($roles as $role)
            {!! Form::model($role, ['method' => 'PUT', 'route' => ['roles.update',  $role->id ], 'class' => 'm-b']) !!}
    
            @if($role->name === 'Admin')
                @include('shared._permissions', [
                              'title' => $role->name .' Permissions',
                              'options' => ['disabled'] ])
            @else
                @include('shared._permissions', [
                              'title' => $role->name .' Permissions',
                              'model' => $role ])
                @can('edit_roles')
                    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                @endcan
            @endif
    
            {!! Form::close() !!}
    
        @empty
            <p>No Roles defined, please run <code>php artisan db:seed</code> to seed some dummy data.</p>
        @endforelse
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

    </div>

@endsection
