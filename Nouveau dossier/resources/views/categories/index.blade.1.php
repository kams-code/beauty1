@extends('layouts.mainlayout')
@include('partials.topbar')
@include('partials.sidebar')

                                 @section('content')
                                  @can('edit_produits', 'delete_produits')
                    <footer class="footer text-right">
                    2019 © QuickBeauty.
                </footer>
                @endcan
                 @can('edit_produits', 'delete_produits')
                  
  <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Produits</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">QuickBeauty</a></li>
                                    <li><a href="#">Tables</a></li>
                                    <li class="active">Editer produits</li>
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
                                                        <h4 class="modal-title">Modal Content is Responsive</h4> 
                                                    </div> 
                                                    <div class="modal-body"> 
                                                        <div class="row"> 
                                                             {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('categories.store')]) !!}
                                                                                            <div class="col-md-6" style="padding: 0px">
                                                <label for="inputEmail3" class="col-sm-3 control-label">{!! Form::label('nom','Nom*') !!}                                   <div class="col-md-6" style="padding: 0px"></label>
                                                <div class="col-sm-9">
                                                  {!! Form::text('nom',null, ['class' => 'form-control','required']) !!}
                                                 </div>
                                            </div>
                                                                                            <div class="col-md-6" style="padding: 0px">
                                                <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('pays','Pays*') !!}                                   <div class="col-md-6" style="padding: 0px"></label>
                                                <div class="col-sm-9">
                                                  {!! Form::text('pays',null, ['class' => 'form-control','required']) !!}
          </div>
                                            </div>
                                                                                            <div class="col-md-6" style="padding: 0px">
                                                <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('ville','Ville*') !!}                                   <div class="col-md-6" style="padding: 0px"></label>
                                                <div class="col-sm-9">
                                                  {!! Form::text('ville',null, ['class' => 'form-control','required']) !!}
          </div>
                                            </div>
                                                                                            <div class="col-md-6" style="padding: 0px">
                                                <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('adresse','Adresse*') !!}                                   <div class="col-md-6" style="padding: 0px"></label>
                                                <div class="col-sm-9">
                                                  {!! Form::text('adresse',null, ['class' => 'form-control','required']) !!}
          </div>
                                            </div>

                                                                                            <div class="col-md-6" style="padding: 0px">
                                                <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('telephone','Telephone*') !!}                                   <div class="col-md-6" style="padding: 0px"></label>
                                                <div class="col-sm-9">
                                                  {!! Form::number('telephone',null, ['class' => 'form-control','required']) !!}
          </div>
                                            </div>
                                            
                                                                                            <div class="col-md-6" style="padding: 0px">
                                                <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('description','Description*') !!}                                   <div class="col-md-6" style="padding: 0px"></label>
                                                <div class="col-sm-9">
                                                  {!! Form::text('description',null, ['class' => 'form-control','required']) !!}
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

                                                                                 @can('add_categories')                                         <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Ajouter <i class="fa fa-plus"></i></button>                                     @endcan
                                       
                                                                             
                                        </div>
                                    </div>
                                </div>
                                @can('view_categories')                                                                  <table id="datatable-buttons" class="table table-bordered  table-striped" id="datatable-editable">
                                   
    
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Pays</th>
                                            <th>Ville</th>
                                            <th>Adresse</th>
                                            <th>Telephone</th>
                                            <th>Description</th>
                                            <th>Date de création</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     
                                        @foreach($categories as $categorie)
       
                   <tr class="gradeC">
                                            <td> {{ $categorie->nom }}</td>
                                            <td> {{ $categorie->pays }}</td>
                                            <td> {{ $categorie->ville }}</td>
                                            <td> {{ $categorie->adresse }}</td>
                                            <td> {{ $categorie->telephone}}</td>
                                            <td> {{ $categorie->description }} </td>
                                            <td> {{ $categorie->created_at }}</td>
                                             
                                            <td class="actions">   <a href="javascript:;" class="on-default seedetails btn btn-primary"><i class="fa fa-eye"></i></a>
                                                <a href="{{ route('categories.edit',$categorie) }}" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                                <a href="{{ route('categories.destroy',$categorie) }}" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                                <a href="{{ route('categories.edit',$categorie) }}" class="btn-delete btn btn-sm btn-light"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
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
 
    <script src="{{asset('js/jquery.min.js')}}"></script>
       
       
	    <!-- Examples -->
	    <script src="{{asset('plugins/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
	    <script src="{{asset('plugins/jquery-datatables-editable/jquery.dataTables.js')}}"></script> 
	    <script src="{{asset('plugins/datatables/dataTables.bootstrap.js')}}"></script>
	    <script src="{{asset('pages/datatables.editable.init.js')}}"></script>

                @endcan
                @endsection
@include('partials.sidebarright')