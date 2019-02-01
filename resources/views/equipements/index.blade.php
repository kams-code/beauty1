@extends('layouts.mainlayout')
@include('partials.topbar')
@include('partials.sidebar')

                                 @section('content')
<<<<<<< HEAD
                           
                                 <style type="text/css">
                      .form-horizontal .control-label{
                        text-align: left;
                      }
                  </style>   
=======
                    
>>>>>>> cb51a88d04e18f675a4f53417688c4b9a978eac5
                  
  <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
<<<<<<< HEAD
                                <h4 class="pull-left page-title">Equipements</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="home">Acceuil</a></li>
=======
                                <h4 class="pull-left page-title">equipements</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">QuickBeauty</a></li>
                                    <li><a href="#">Tables</a></li>
>>>>>>> cb51a88d04e18f675a4f53417688c4b9a978eac5
                                    <li class="active">Editer equipements</li>
                                </ol>
                            </div>
                        </div>


                        <div class="panel">
                            
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="m-b-30 pull-right">
<<<<<<< HEAD
=======
                                       
                                       
                                        
>>>>>>> cb51a88d04e18f675a4f53417688c4b9a978eac5
                                        <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                                            <div class="modal-dialog"> 
                                                <div class="modal-content"> 
                                                    <div class="modal-header"> 
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
<<<<<<< HEAD
                                                        <h4 class="modal-title">Ajouter un équipement</h4> 
=======
                                                        <h4 class="modal-title">Ajouter un institut</h4> 
>>>>>>> cb51a88d04e18f675a4f53417688c4b9a978eac5
                                                    </div> 
                                                    <div class="modal-body"> 
                                                        <div class="row"> 
                                                             {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('equipements.store'),'files'=>true]) !!}
<<<<<<< HEAD
                                                             <div class="col-md-12" style="padding: 0px">
                                                                <center>
                                                                    <img id="imgpreview" src="/images/camera_icon.png" style="width: 100px;cursor: pointer;">
                                                                    <input id="inputimage" type="file" name="image" accept="images/*" style="display: none;">
                                                                </center>
                                                             </div>
                                                             
                                                             <div class="col-md-6" style="padding: 0px">
                                                                <label for="inputEmail3" class="col-sm-12 control-label">{!! Form::label('nom','nom') !!}</label>
                                                                <div class="col-sm-12">
                                                                {!! Form::text('nom',null, ['class' => 'form-control']) !!}
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6" style="padding: 0px">
                                                                <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('fournisseur_id','Fournisseur') !!}</label>
                                                                <div class="col-sm-12">
                                                                    {!! Form::select('fournisseur_id',$fournisseurs,null, ['class' => 'form-control']) !!}
                                        
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12" style="padding: 0px">
                                                                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('description','Description') !!}</label>
                                                                <div class="col-sm-12">
                                                                    <textarea class="form-control" name="description"></textarea>
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
=======
                                         
                                            <div class="col-md-12" style="padding: 0px">
                                                <center>
                                                    <img id="imgpreview" src="/images/camera_icon.png" style="width: 100px;cursor: pointer;">
                                                    <input id="inputimage" type="file" name="imageup" accept="images/*" style="display: none;">
                                               
                                                </center>
                                            </div>
                                            <div class="col-md-6" style="padding: 0px">
                                                <label for="inputEmail3" class="col-sm-12 control-label">{!! Form::label('nom','Nom', ['class' => 'pull-left']) !!}</label>
                                                <div class="col-sm-12">
                                                  {!! Form::text('nom',null, ['class' => 'form-control','required']) !!}
                                                 </div>
                                            </div>
                                            <div class="col-md-6" style="padding: 0px">
                                                <label for="inputEmail3" class="col-sm-12 control-label">{!! Form::label('fournisseur_id','Fournisseur', ['class' => 'pull-left']) !!}</label>
                                                <div class="col-sm-12">
                                                    {!! Form::select('fournisseur_id',$fournisseurs,null, ['class' => 'form-control','required']) !!}
                                                 </div>
                                            </div>


                                           


                                            <div class="col-md-12" style="padding: 0px">
                                                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('description','Description', ['class' => 'pull-left']) !!}</label>
                                                <div class="col-sm-12">
                                                  <textarea class="form-control" name="description"></textarea>
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
>>>>>>> cb51a88d04e18f675a4f53417688c4b9a978eac5
                                       {!! Form::close() !!}
                                                        </div> 

                                                        
                                                    </div> 
                                                    
                                                </div> 
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        <!-- /.modal -->

<<<<<<< HEAD
                                                                                 @can('add_equipements')                                         <button type="button" class="btn btn-primary waves-effect waves-light pull-right" data-toggle="modal" data-target="#con-close-modal">Ajouter <i class="fa fa-plus"></i></button>                                     @endcan
=======
                                                                                 @can('add_equipements')                                         <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Ajouter <i class="fa fa-plus"></i></button>                                     @endcan
>>>>>>> cb51a88d04e18f675a4f53417688c4b9a978eac5
                                       
                                                                             
                                        </div>
                                    </div>
                                </div>
                                @can('view_equipements')                                                                  <table id="datatable-buttons" class="table table-bordered  table-striped" id="datatable-editable">
<<<<<<< HEAD
                                <thead>
=======
                                   
    
                                    <thead>
>>>>>>> cb51a88d04e18f675a4f53417688c4b9a978eac5
                                        <tr>
                                                <th>Image</th>
                                            <th>nom</th>
                                            <th>Description</th>
                                            <th>Date de création</th>
                                            <th>Fournisseur</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     
                                        @foreach($equipements as $equipement)
       
<<<<<<< HEAD
                   <tr class="gradeC"> <td>
                        <a href="#" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="{{asset('images/'.$equipement->image)}}" alt="user-img" > </a>
                        </td>
                                            
                                            <td> {{ $equipement->nom }}</td>
                                            <td> {{ $equipement->description }} </td>
                                            <td> {{ $equipement->created_at }}</td>
                                            @if($equipement->fournisseur)
                                             <td> {{ $equipement->fournisseur->nom }}</td>
                                             @else
                                             <td> Aucun</td>
                                            @endif
                                            <td class="actions">
                                                @can('edit_equipements','delete_equipements')
                                                {!! Form::open( ['method' => 'delete', 'url' => route('equipements.destroy', $equipement->id), 'style' => 'display: inline', 'onSubmit' => 'return confirm("Are yous sure wanted to delete it?")']) !!}
                                                <button type="submit" class="btn-delete btn btn-sm btn-light">
                                                    <i class="fa fa-trash-o"></i>
                                                </button>
                                            {!! Form::close() !!}
                                                <a href="{{ route('equipements.edit',$equipement) }}" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                                <a href="{{ route('equipements.edit',$equipement) }}" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                                <a href="{{ route('equipements.edit',$equipement) }}" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                           @endcan
=======
                   <tr class="gradeC">
                        <td>
                                <a href="#" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="{{asset('images/'.$equipement->image)}}" alt="user-img" > </a>
                                </td>
                                            <td> {{ $equipement->nom }}</td>
                                            <td> {{ $equipement->description }}
>>>>>>> cb51a88d04e18f675a4f53417688c4b9a978eac5
                                            </td>
                                            <td> {{ $equipement->created_at }}</td>
                                             <td> @foreach ($Fournisseurs as$Fourn )
                                                @if ($Fourn->id===$equipement->fournisseur_id)
                                                {{$Fourn->nom}}
                                                @endif
                                            @endforeach</td>
          
                              
                             <td class="actions"> 
                                
                                    <div id="con-close-modal{{$equipement->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                                            <div class="modal-dialog"> 
                                                <div class="modal-content"> 
                                                    <div class="modal-header"> 
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                                                        <h4 class="modal-title">Détail de l'institut</h4> 
                                                    </div> 
                                                    <div class="modal-body"> 
                                                        <div class="row"> 
                                                             {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('equipements.store'),'files'=>true]) !!}
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
                                                        <strong >Nom:</strong> {{$equipement->nom}}
                                                    </label>
                                                    <br>
                                                    <label>
                                                        <strong >Fournisseur:</strong> @foreach ($Fournisseurs as$Fourn )
                                                            @if ($Fourn->id===$equipement->fournisseur_id)
                                                            {{$Fourn->nom}}
                                                            @endif
                                                        @endforeach
                                                    </label>
                                                
                                                    
                                            </div>
                                        </div>
                                           
                                            <div class="col-md-12" >
                                                    <div class="col-md-6" style="padding: 4px">
                                                            <strong>Description:</strong>
                                                        </div>
                                                     <div class="col-sm-12">
                                                        {{$equipement->description}}   


          </div>
          <label ></label>
                                               
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
                                    <a  class="on-default seedetails btn btn-primary" data-toggle="modal" data-target="#con-close-modal{{$equipement->id}}"><i class="fa fa-eye"></i></a>
                                
                                
                                
                                
                                @can('edit_equipements','delete_equipements')
                                 {!! Form::open( ['method' => 'delete', 'url' => route('equipements.destroy', $equipement), 'style' => 'display: inline', 'onSubmit' => 'return confirm("Are yous sure wanted to delete it?")']) !!}
                                 <button type="submit" class="btn-delete btndelete btn btn-danger">
                                     <i class="fa fa-trash-o"></i>
                                 </button>
                             {!! Form::close() !!}

                                 <a href="{{ route('equipements.destroy',$equipement) }}" class="hidden on-editing cancel-row" ><i class="fa fa-times"></i></a>
                                 <a data-toggle="modal" data-target="#editroleModal{{ $equipement->id }}" class="btn-delete btndelete btn btn-danger"><i class="fa fa-pencil"></i></a>
                                 <div class="modal fade" id="editroleModal{{ $equipement->id }}" tabindex="-1" role="dialog" aria-labelledby="roleModalLabel">
                                        <div class="modal-dialog" role="document">
                                                {!! Form::open(['method' => 'PUT', 'url' => route('equipements.update', $equipement ),'files'=>true]) !!}
                                
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="roleModalLabel">Role</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div >
                                                    <!-- name Form Input -->
                                                    <div class="col-md-12" style="padding: 0px">
                                                            <center>
                                                                    <img class="imgpreviewupdate" id="imgpreview{{$equipement->id}}" data-id="{{$equipement->id}}" src="/images/camera_icon.png" style="width: 100px;cursor: pointer;" required>
                                                                <input id="inputimage{{$equipement->id}}" data-id="{{$equipement->id}}" class="inputimage" type="file" name="imageup" accept="images/*" style="display: none;" required>

                                                            </center>
                                                        </div>
                                                        <div class="col-md-6" style="padding: 0px">
                                                            <label for="inputEmail3" class="col-sm-12 control-label">{!! Form::label('nom','Nom', ['class' => 'pull-left']) !!}</label>
                                                            <div class="col-sm-12">
                                                              {!! Form::text('nom',null, ['class' => 'form-control','required']) !!}
                                                             </div>
                                                        </div>
                                                        <div class="col-md-6" style="padding: 0px">
                                                            <label for="inputEmail3" class="col-sm-12 control-label">{!! Form::label('fournisseur_id','Fournisseur', ['class' => 'pull-left']) !!}</label>
                                                            <div class="col-sm-12">
                                                                {!! Form::select('fournisseur_id',$fournisseurs,null, ['class' => 'form-control','required']) !!}
                                                             </div>
                                                        </div>
            
            
                                                       
            
            
                                                        <div class="col-md-12" style="padding: 0px">
                                                            <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('description','Description', ['class' => 'pull-left']) !!}</label>
                                                            <div class="col-sm-12">
                                                              <textarea class="form-control" name="description"></textarea>
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

<<<<<<< HEAD
                
=======
            
>>>>>>> cb51a88d04e18f675a4f53417688c4b9a978eac5
                @endsection
@include('partials.sidebarright')
