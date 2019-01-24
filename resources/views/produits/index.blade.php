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
                                    <div class="col-sm-6">
                                        <div class="m-b-30">
                                        <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                                            <div class="modal-dialog"> 
                                                <div class="modal-content"> 
                                                    <div class="modal-header"> 
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                                                        <h4 class="modal-title">Modal Content is Responsive</h4> 
                                                    </div> 
                                                    <div class="modal-body"> 
                                                        <div class="row"> 
                                                                
                                                             {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('produits.store'),'files'=>true]) !!}
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">{!! Form::label('nom','nom') !!}</label>
                                                <div class="col-sm-9">
                                                  {!! Form::text('nom',null, ['class' => 'form-control']) !!}
                                                 </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('description','description') !!}</label>
                                                <div class="col-sm-9">
                                                  {!! Form::text('description',null, ['class' => 'form-control']) !!}
          </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('image','Image') !!}</label>
                                                <div class="col-sm-9">
                                                  {!! Form::file('image') !!}
          </div>
                                            </div>
                                          

                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('fournisseur_id','Fournisseur') !!}</label>
                                                <div class="col-sm-9">
                                                    {!! Form::select('fournisseur_id',$fournisseurs,null, ['class' => 'form-control']) !!}
                         
          </div>
                                            </div>
                                           
                                            <div class="form-group m-b-0">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                
     </div>
                                            </div>
                                            <div class="modal-footer"> 
                                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Fermer</button> 
                                                      
                                                       <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>
                                                      
                                                    </div> 
                                       {!! Form::close() !!}
                                    </form>  
                                                        </div> 

                                                        
                                                    </div> 
                                                    
                                                </div> 
                                            </div>
                                        </div><!-- /.modal -->

                                                                                 @can('add_produits')                                         <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Add <i class="fa fa-plus"></i></button>                                     @endcan
                                       
                                                                             
                                        </div>
                                    </div>
                                </div>
                                @can('view_produits')                                                                  <table class="table table-bordered  table-striped" id="datatable-editable">
                                   
    
                                    <thead>
                                        <tr>
                                            <th>nom</th>
                                            <th>Description</th>
                                            <th>Date de création</th>
                                            <th>Fournisseur</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     
                                        @foreach($produits as $produit)
       
                   <tr class="gradeC">
                                            <td> {{ $produit->nom }}</td>
                                            <td> {{ $produit->description }}
                                            </td>
                                            <td> {{ $produit->created_at }}</td>
                                             <td> {{ $produit->fournisseur_id }}</td>
                                            <td class="actions">
                                                @can('edit_produits','delete_produits')
                                                {!! Form::open( ['method' => 'delete', 'url' => route('produits.destroy', $produit->id), 'style' => 'display: inline', 'onSubmit' => 'return confirm("Are yous sure wanted to delete it?")']) !!}
                                                <button type="submit" class="btn-delete btn btn-sm btn-light">
                                                    <i class="fa fa-trash-o"></i>
                                                </button>
                                            {!! Form::close() !!}  
                                              
                                                <a href="{{ route('produits.edit',$produit) }}" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                                <a href="{{ route('produits.edit',$produit) }}" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                                <a href="{{ route('produits.edit',$produit) }}" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                                <a href="{{ route('produits.destroy',$produit) }}" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
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
 
    <script src="{{asset('js/jquery.min.js')}}"></script>
       
	    <!-- Examples -->
	    <script src="{{asset('plugins/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
	    <script src="{{asset('plugins/jquery-datatables-editable/jquery.dataTables.js')}}"></script> 
	    <script src="{{asset('plugins/datatables/dataTables.bootstrap.js')}}"></script>
	    <script src="{{asset('pages/datatables.editable.init.js')}}"></script>

            
                @endsection
@include('partials.sidebarright')
