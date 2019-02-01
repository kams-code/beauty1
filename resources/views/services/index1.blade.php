@extends('layouts.mainlayout')
@include('partials.topbar')
@include('partials.sidebar')

                                 @section('content')
                                  @can('edit_clients', 'delete_clients')
                    <footer class="footer text-right">
                    2019 © QuickBeauty.
                </footer>
                @endcan
                 @can('edit_clients', 'delete_clients')
                  
  <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">clients</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">QuickBeauty</a></li>
                                    <li><a href="#">Tables</a></li>
                                    <li class="active">Editer clients</li>
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
                                                            <h4 class="modal-title">Ajouter un client</h4> 
                                                        </div> 
                                                        <div class="modal-body"> 
                                                            <div class="row"> 
                                                                 {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('clients.store'),'files'=>true]) !!}
                                               
                                                <div class="col-md-6" style="padding: 0px">
                                                    <label for="inputEmail3" class="col-sm-12 control-label">{!! Form::label('nom','Nom',['class' => 'pull-left']) !!}</label>
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
                                            </div> 
                                        
                                        
                                        
                                        
                                        <!-- /.modal -->

                                                                                 @can('add_clients')                                         <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Ajouter <i class="fa fa-plus"></i></button>                                     @endcan
                                       
                                                                             
                                        </div>
                                    </div>
                                </div>
                                @can('view_clients')                                                                  <table id="datatable-buttons" class="table table-bordered  table-striped" id="datatable-editable">
                                   
    
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Prenom</th>
                                            <th>Adresse</th>
                                            <th>Telephone</th>
                                            <th>Email</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     
                                    @foreach($clients as $client)
       
                                       <tr class="gradeC">
                                            <td>{{ $client->nom }}</td>
                                            <td>{{ $client->prenom }}</td>
                                            <td>{{ $client->adresse }}</td>
                                            <td>{{ $client->telephone }}</td>
                                            <td>{{ $client->email }}</td>
                                             
                                            <td class="actions"> <div id="con-close-modal{{$client->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                                                <div class="modal-dialog"> 
                                                    <div class="modal-content"> 
                                                        <div class="modal-header"> 
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                                                            <h4 class="modal-title">Détail de l'client</h4> 
                                                        </div> 
                                                        <div class="modal-body"> 
                                                            <div class="row"> 
                                                                 {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('clients.store'),'files'=>true]) !!}
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
                                                            <strong >Nom:</strong> {{$client->nom}}
                                                        </label>
                                                        <br>
                                                        <label>
                                                        <strong>Téléphone:</strong> {{$client->telephone}}
                                                    </label>
                                                        <br>
                                                        <label>
                                                        <strong>Email:</strong> {{$client->email}}
                                                    </label>
                                                        <br>
                                                        <label>
                                                        <strong>Adresse:</strong> {{$client->adresse}}
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
                                        <a  class="on-default seedetails btn btn-primary" data-toggle="modal" data-target="#con-close-modal{{$client->id}}"><i class="fa fa-eye"></i></a>
                                    
                                    
                                    
                                    
                                    @can('edit_clients','delete_clients')
                                     {!! Form::open( ['method' => 'delete', 'url' => route('clients.destroy', $client), 'style' => 'display: inline', 'onSubmit' => 'return confirm("Are yous sure wanted to delete it?")']) !!}
                                     <button type="submit" class="btn-delete btndelete btn btn-danger">
                                         <i class="fa fa-trash-o"></i>
                                     </button>
                                 {!! Form::close() !!}
    
                                     <a href="{{ route('clients.destroy',$client) }}" class="hidden on-editing cancel-row" ><i class="fa fa-times"></i></a>
                                     <a data-toggle="modal" data-target="#editroleModal{{ $client->id }}" class="btn-delete btndelete btn btn-danger"><i class="fa fa-pencil"></i></a>
                                     <div class="modal fade" id="editroleModal{{ $client->id }}" tabindex="-1" role="dialog" aria-labelledby="roleModalLabel">
                                            <div class="modal-dialog" role="document">
                                                    {!! Form::open(['method' => 'PUT', 'url' => route('clients.update', $client ),'files'=>true]) !!}
                                    
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
                                                
                
                                                           
                
                
                                                            <div class="col-md-12" style="padding: 0px">
                                                                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('description','Description', ['class' => 'pull-left']) !!}</label>
                                                                <div class="col-sm-12">
                                                                  <textarea class="form-control" name="description"></textarea>
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

                @endcan
                @endsection
@include('partials.sidebarright')












