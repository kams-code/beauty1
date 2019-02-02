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
                                <h4 class="pull-left page-title">fournisseurs</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="home">Accueil</a></li>
                                    <li class="active">fournisseurs</li>
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
                                                        <h4 class="modal-title">Ajouter un fournisseur</h4> 
                                                    </div> 
                                                    <div class="modal-body"> 
                                                        <div class="row"> 
                                                             {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('fournisseurs.store'),'files'=>true]) !!}
                                           
                               
                                            <div class="col-md-6" style="padding: 0px">
                                                <label for="inputEmail3" class="col-sm-12 control-label">{!! Form::label('nom','Nom*') !!}</label>
                                                <div class="col-sm-12">
                                                  {!! Form::text('nom',null, ['class' => 'form-control','required']) !!}
                                                 </div>
                                            </div>
                                            <div class="col-md-6" style="padding: 0px">
                                                <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('prenom','Prénom') !!}</label>
                                                <div class="col-sm-12">
                                                    {!! Form::text('prenom',null, ['class' => 'form-control','required']) !!}
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6" style="padding: 0px">
                                                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('telephone','Téléphone*') !!}</label>
                                                <div class="col-sm-12">
                                                  {!! Form::number('telephone',null, ['class' => 'form-control','required']) !!}
          </div>
                                            </div>
                                            <div class="col-md-6" style="padding: 0px">
                                                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('email','Email*') !!}</label>
                                                <div class="col-sm-12">
                                                  {!! Form::email('email',null, ['class' => 'form-control','required']) !!}
          </div>
                                            </div>
                                            <div class="col-md-6" style="padding: 0px">
                                                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('adresse','Adresse*') !!}</label>
                                                <div class="col-sm-12">
                                                  {!! Form::text('adresse',null, ['class' => 'form-control','required']) !!}
          </div>
                                            </div>
                                           
                                           
                                            <div class="m-b-0">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                
     </div>
                                            </div>
                                            <div class="col-md-12" style="border:0px;text-align: right;margin-top: 20px"> 
                                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Fermer</button> 
                                                       <button class="btn btn-primary">Enregistrer</button>
                                                    </div> 
                                       {!! Form::close() !!}
                                                        </div> 

                                                        
                                                    </div> 
                                                    
                                                </div> 
                                            </div>
                                        </div><!-- /.modal -->

<<<<<<< HEAD
                                                                                 @can('add_fournisseurs')                                         <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Ajouter <i class="fa fa-plus"></i></button>                                     @endcan
=======
                                            @can('add_fournisseurs')                                         <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Ajouter <i class="fa fa-plus"></i></button>                                     @endcan
>>>>>>> cb51a88d04e18f675a4f53417688c4b9a978eac5
                                       
                                                                             
                                        </div>
                                    </div>
                                </div>
                                @can('view_fournisseurs')                                                                  <table id="datatable-buttons" class="table table-bordered  table-striped" id="datatable-editable">
                                   
    
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Prenom</th>
                                            <th>Code</th>
                                            <th>Adresse</th>
 <th>Email</th>
  <th>Telephone</th>

                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     
                                        @foreach($fournisseurs as $fournisseur)
       
                   <tr class="gradeC">
                                            <td> {{ $fournisseur->nom }}</td>
                                            <td> {{ $fournisseur->prenom }}
                                            </td>
                                            <td> {{ $fournisseur->code }}</td>
                                             <td> {{ $fournisseur->adresse }}</td>
                                             <td> {{ $fournisseur->email }}</td>
                                             <td> {{ $fournisseur->telephone }}</td>
                                            <td class="actions">  <div id="con-close-modal{{$fournisseur->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                                                <div class="modal-dialog"> 
                                                    <div class="modal-content"> 
                                                        <div class="modal-header"> 
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                                                            <h4 class="modal-title">Détail de l'fournisseur</h4> 
                                                        </div> 
                                                        <div class="modal-body"> 
                                                            <div class="row"> 
                                                                 {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('fournisseurs.store'),'files'=>true]) !!}
                                                <div class="col-md-12">
                                                    <h4>Informations de base</h4>
                                                </div>
                                                <div class="col-md-12">
                                                
                                                <style>
                                                    .col-md-9 label{
                                                        margin-bottom: 10px
                                                    }
                                                </style>
                                                <div class="col-md-9">
                                                        <label>
                                                            <strong >Nom:</strong> {{$fournisseur->nom}}
                                                        </label>
                                                        <br>
                                                        <label>
                                                        <strong>Téléphone:</strong> {{$fournisseur->telephone}}
                                                    </label>
                                                        <br>
                                                        <label>
                                                        <strong>Email:</strong> {{$fournisseur->email}}
                                                    </label>
                                                        <br>
                                                        <label>
                                                        <strong>Adresse:</strong> {{$fournisseur->adresse}}
                                                    </label>
                                                        
                                                </div>
                                            </div>
                                           
                                         
                                               
                                               
                                               
                                                <div class="m-b-0">
                                                    <div class="col-sm-offset-3 col-sm-9">
                                                    
         </div>
                                                </div>
                                                <div class="col-md-12" style="border:0px;text-align: right;margin-top: 20px"> 
                                                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Fermer</button> 
                                                         
                                                        </div> 
                                           
                                                            </div> 
    
                                                            
                                                        </div> 
                                                        
                                                    </div> 
                                                </div>
                                            </div>
                                        <a  class="on-default seedetails btn btn-primary" data-toggle="modal" data-target="#con-close-modal{{$fournisseur->id}}"><i class="fa fa-eye"></i></a>
                                    
                                    
                                    
                                    
                                    @can('edit_fournisseurs','delete_fournisseurs')
                                     {!! Form::open( ['method' => 'delete', 'url' => route('fournisseurs.destroy', $fournisseur), 'style' => 'display: inline', 'onSubmit' => 'return confirm("Are yous sure wanted to delete it?")']) !!}
                                     <button type="submit" class="btn-delete btndelete btn btn-danger">
                                         <i class="fa fa-trash-o"></i>
                                     </button>
                                 {!! Form::close() !!}
    
                                     <a href="{{ route('fournisseurs.destroy',$fournisseur) }}" class="hidden on-editing cancel-row" ><i class="fa fa-times"></i></a>
                                     <a data-toggle="modal" data-target="#editroleModal{{ $fournisseur->id }}" class="btn-delete btndelete btn btn-danger"><i class="fa fa-pencil"></i></a>
                                     <div class="modal fade" id="editroleModal{{ $fournisseur->id }}" tabindex="-1" role="dialog" aria-labelledby="roleModalLabel">
                                            <div class="modal-dialog" role="document">
                                                    {!! Form::open(['method' => 'PUT', 'url' => route('fournisseurs.update', $fournisseur ),'files'=>true]) !!}
                                    
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="roleModalLabel">Role</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-6" style="padding: 0px">
                                                                <label for="inputEmail3" class="col-sm-12 control-label">{!! Form::label('nom','Nom', ['class' => 'pull-left']) !!}</label>
                                                                <div class="col-sm-12">
                                                                  {!! Form::text('nom',null, ['class' => 'form-control','required']) !!}
                                                                 </div>
                                                            </div>
                                                            
                                                            <div class="col-md-6" style="padding: 0px">
                                                                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('prenom','Prénom',['class' => 'pull-left']) !!}</label>
                                                                <div class="col-sm-12">
                                                                  {!! Form::text('prenom',null, ['class' => 'form-control','required']) !!}
                          </div>
                                                            </div>
                                                          
                                                            <div class="col-md-6" style="padding: 0px">
                                                                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('adresse','Adresse',['class' => 'pull-left']) !!}</label>
                                                                <div class="col-sm-12">
                                                                  {!! Form::text('adresse',null, ['class' => 'form-control','required']) !!}
                          </div>
                                                            </div>
                                                            <div class="col-md-6" style="padding: 0px">
                                                                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('telephone','Téléphone',['class' => 'pull-left']) !!}</label>
                                                                <div class="col-sm-12">
                                                                  {!! Form::number('telephone',null, ['class' => 'form-control','required']) !!}
                          </div>
                                                            </div>
                                                            
                                                            <div class="col-md-6" style="padding: 0px">
                                                                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('email','Email',['class' => 'pull-left']) !!}</label>
                                                                <div class="col-sm-12">
                                                                  {!! Form::email('email',null, ['class' => 'form-control','required']) !!}
                          </div>
                                                            </div>
                                                
                
                                                           
                
                                                             </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                                    
                                                        <!-- Submit Form Button -->
                                                        {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary']) !!}
                                                    </div>
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                        </div>
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
