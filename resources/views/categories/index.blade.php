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
                                <h4 class="pull-left page-title">Table </h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">QuickBeauty</a></li>
                                    <li><a href="#">Tables</a></li>
                                    <li class="active"> Catégories</li>
                                </ol>
                            </div>
                        </div>


                        <div class="panel">
                            
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="m-b-30 pull-right">
                                          <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                                            <div class="modal-dialog"> 
                                                <div class="modal-content"> 
                                                    <div class="modal-header"> 
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                                                        <h4 class="modal-title">Catégorie</h4> 
                                                    </div> 
                                                    <div class="modal-body"> 
                                                        <div class="row"> 
                                                             {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('categories.store'),'files'=>true]) !!}
                                                             <div class="col-md-12" style="padding: 0px">
                                                                <center>
                                                                    <img id="imgpreview" src="/images/camera_icon.png" style="width: 100px;cursor: pointer;" required>
                                                                    <input id="inputimage" type="file" name="imageup" accept="images/*" style="display: none;" required>
                                                               
                                                                </center>
                                                            </div>
                                            
                                            
                                            
                                            
                                                                                                             <div class="col-md-6" style="padding: 0px">
                                                <label for="inputEmail3" class="col-sm-3 control-label">{!! Form::label('nom','Nom*') !!}</label>
                                                <div class="col-sm-12">                                                  {!! Form::text('nom',null, ['class' => 'form-control','required']) !!}
                                                 </div>
                                            </div>
                                                                                             <div class="col-md-6" style="padding: 0px">
                                                <label for="inputEmail3" class="col-sm-3 control-label">{!! Form::label('code','Code*') !!}</label>
                                                <div class="col-sm-12">                                                  {!! Form::text('code',null, ['class' => 'form-control','required']) !!}
                                                 </div>
                                            </div>
                           
                                           
                                            
                                            <div class="col-md-12" style="padding: 0px">
                                                <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('description','Description*', ['class' => 'pull-left']) !!}</label>
                                                <div class="col-sm-12">
                                                  <textarea class="form-control" name="description" required></textarea>
          </div>
                                            </div>

                                            <div class="form-group m-b-0">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                
     </div>
                                            </div>
                                            <div class="modal-footer"> 
                                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Fermer</button> 
                                                       <button class="btn btn-primary">Envoyer</button>
                                                    </div> 
                                       {!! Form::close() !!}
                                                        </div> 

                                                        
                                                    </div> 
                                                    
                                                </div> 
                                            </div>
                                        </div><!-- /.modal -->
                                        Table  des catégories de categories
                                                                                 @can('add_categories')                                         <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Ajouter <i class="fa fa-plus"></i></button>                                     @endcan
                                       
                                                                             
                                        </div>
                                    </div>
                                </div>
                                @can('view_categories')                                                                  <table id="datatable-buttons" class="table table-bordered  table-striped" id="datatable-editable">
                                   
    
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Nom</th>
                                            <th>Desccription</th>
                                            <th>Date de création</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     
                                        @foreach($categories as $categorie)
       
                   <tr class="gradeC">

                                            <td> {{ $categorie->image}}</td>
                                            <td> {{ $categorie->nom }}</td>
                                            <td> {{ $categorie->description }}</td>
                                            <td> {{ $categorie->created_at }}</td>
                                           
                                            <td> {{ $categorie->is_promote }}</td>
                                            <td class="actions">   <a href="javascript:;" class="on-default seedetails btn btn-primary"><i class="fa fa-eye"></i></a>

 <a href="javascript:;" class="on-default seedetails btn btn-primary"><i class="fa fa-eye"></i></a>
                                                @can('edit_categories','delete_categories')
                                                {!! Form::open( ['method' => 'delete', 'url' => route('categories.destroy', $categorie->id), 'style' => 'display: inline', 'onSubmit' => 'return confirm("Are yous sure wanted to delete it?")']) !!}
                                                <button type="submit" style="display: none;" class="btn-delete btn btn-primary">
                                                    <i class="fa fa-trash-o"></i>
                                                </button>
                                            {!! Form::close() !!}
                                                <a href="javascript:;" class="btndelete btn btn-danger"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:;" class="btndelete btn btn-danger"><i class="fa fa-trash-o"></i></a>
                                           @endcan


                                                @can('edit_categories','delete_categories')
                                                {!! Form::open( ['method' => 'delete', 'url' => route('categories.destroy', $categorie->id), 'style' => 'display: inline', 'onSubmit' => 'return confirm("Are yous sure wanted to delete it?")']) !!}
                                                <button type="submit" class="btn-delete btndelete btn btn-danger">
                                                    <i class="fa fa-trash-o"></i>
                                                </button>
                                            {!! Form::close() !!}
                                                <a href="{{ route('categories.edit',$categorie) }}" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                                <a href="{{ route('categories.edit',$categorie) }}" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                                <a href="{{ route('categories.edit',$categorie) }}" class="btn-delete btn btn-sm btn-light"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                           @endcan
                                            </td>
                                        </tr> 
    @endforeach
                                       
                                    </tbody>
                               </table>@endcan
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
@include('partials.sidebarright')
