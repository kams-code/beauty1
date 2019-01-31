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
                                    <li class="active">Editer les services</li>
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
                                                        <h4 class="modal-title">Services</h4> 
                                                    </div> 
                                                    <div class="modal-body"> 
                                                        <div class="row"> 
                                                             {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('services.store'),'files'=>true]) !!}
                                                             <div class="col-md-12" style="padding: 0px">
                                                                <center>
                                                                    <img id="imgpreview" src="/images/camera_icon.png" style="width: 100px;cursor: pointer;" required>
                                                                    <input id="inputimage" type="file" name="image" accept="images/*" style="display: none;" required>
                                                               
                                                                </center>
                                                            </div>
                                            
                                                             <div class="col-md-6" style="padding: 0px">
                                                <label for="inputEmail3" class="col-sm-3 control-label">{!! Form::label('nom','Nom*') !!}</label>
                                                <div class="col-sm-12">
                                                  {!! Form::text('nom',null, ['class' => 'form-control','required']) !!}
                                                 </div>
                                            </div>
                                              <div class="col-md-6" style="padding: 0px">
                                                <label for="inputEmail3" class="col-sm-3 control-label">{!! Form::label('code','code*') !!}</label>
                                                <div class="col-sm-12">
                                                  {!! Form::text('code',null, ['class' => 'form-control','required']) !!}
                                                 </div>
                                            </div>
                                         
                                             <div class="col-md-6" style="padding: 0px">
                                                <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('montant','montant*') !!}</label>
                                                <div class="col-sm-12">
                                                  {!! Form::text('montant',null, ['class' => 'form-control','required']) !!}
          </div>
                                            </div>
                                            
                                        <div class="col-md-6" style="padding: 0px">
                                                <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('description','Description*') !!}</label>
                                                <div class="col-sm-12">
                                          {!! Form::text('description',null, ['class' => 'form-control','required']) !!}
                         
     
          </div>
                                            </div>  
                                            

                                             <div class="col-sm-12">
                            
                                          <div class="checkbox">
                                                <input   id="checkbox" type="checkbox" name="is_promote" > 
                                                <label for="checkbox"   >
                                                        En promotion?
                                                </label>
                                            </div>
     
          </div>
                                            
                                            
           
                                            
                                     

                                             <div class="col-md-6" style="padding: 0px">
                                                <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('categorie_id','Categorie') !!}</label>
                                                <div class="col-sm-12">
                                                    {!! Form::select('categorie_id',$categories,null, ['class' => 'form-control','required']) !!}
                         
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

                                                                                 @can('add_services')                                         <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Ajouter <i class="fa fa-plus"></i></button>                                     @endcan
                                       
                                                                             
                                        </div>
                                    </div>
                                </div>
                                @can('view_reservations')                                                                  <table id="datatable-buttons" class="table table-bordered  table-striped" id="datatable-editable">
                                   
    
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Code</th>
                                            <th>Nom</th>
                                            <th>Desccription</th>
                                            <th>Date de création</th>
                                            <th>Employes</th>
                                            <th>En promotion</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     
                                        @foreach($services as $service)
       
                   <tr class="gradeC">

                                            <td>
                                                <a href="#" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="{{asset('images/'.$service->image)}}" alt="user-img" > </a>
                                                </td>
                                            <td> {{ $service->code }}</td>
                                            <td> {{ $service->nom }}</td>
                                            <td> {{ $service->description }}</td>
                                            <td> {{ $service->created_at }}</td>
                                            <td> {{ $service->is_promote }}</td>
                                    
                                     <td>
                                  
                                              @foreach ($Users as $ser)
                                              
                                              @endforeach
                                             
                                            </td>
                                            <td> {{ $service->is_promote }}</td>
                                            <td class="actions">  <div id="con-close-modal{{$service->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                                                <div class="modal-dialog"> 
                                                    <div class="modal-content"> 
                                                        <div class="modal-header"> 
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                                                            <h4 class="modal-title">Détail du service</h4> 
                                                        </div> 
                                                        <div class="modal-body"> 
                                                            <div class="row"> 
                                                                 {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('services.store'),'files'=>true]) !!}
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
                                                                <strong >Code:</strong> {{$service->code}}
                                                            </label>
                                                            <br>
                                                        <label>
                                                            <strong >Nom:</strong> {{$service->nom}}
                                                        </label>
                                                        <br>
                                                        <label>
                                                        <strong>Date de création:</strong> {{$service->created_at}}
                                                    </label>
                                                        <br>
                                                        <label>
                                                        <strong>En promotion? :</strong> {{$service->is_promote}}
                                                    </label>
                                                        <br>
                                                      
                                                        
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
                                        <a  class="on-default seedetails btn btn-primary" data-toggle="modal" data-target="#con-close-modal{{$service->id}}"><i class="fa fa-eye"></i></a>
                                    
                                    
                                    
                                    
                                    @can('edit_services','delete_services')
                                     {!! Form::open( ['method' => 'delete', 'url' => route('services.destroy', $service), 'style' => 'display: inline', 'onSubmit' => 'return confirm("Are yous sure wanted to delete it?")']) !!}
                                     <button type="submit" class="btn-delete btndelete btn btn-danger">
                                         <i class="fa fa-trash-o"></i>
                                     </button>
                                 {!! Form::close() !!}
    
                                     <a href="{{ route('services.destroy',$service) }}" class="hidden on-editing cancel-row" ><i class="fa fa-times"></i></a>
                                     <a data-toggle="modal" data-target="#editroleModal{{ $service->id }}" class="btn-delete btndelete btn btn-danger"><i class="fa fa-pencil"></i></a>
                                     <div class="modal fade" id="editroleModal{{ $service->id }}" tabindex="-1" role="dialog" aria-labelledby="roleModalLabel">
                                            <div class="modal-dialog" role="document">
                                                    {!! Form::open(['method' => 'PUT', 'url' => route('services.update', $service ),'files'=>true]) !!}
                                    
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
                                                        <label for="inputEmail3" class="col-sm-3 control-label">{!! Form::label('nom','Nom*') !!}</label>
                                                        <div class="col-sm-12">
                                                          {!! Form::text('nom',null, ['class' => 'form-control','required']) !!}
                                                         </div>
                                                    </div>
                                                      <div class="col-md-6" style="padding: 0px">
                                                        <label for="inputEmail3" class="col-sm-3 control-label">{!! Form::label('code','code*') !!}</label>
                                                        <div class="col-sm-12">
                                                          {!! Form::text('code',null, ['class' => 'form-control','required']) !!}
                                                         </div>
                                                    </div>
                                                 
                                                     <div class="col-md-6" style="padding: 0px">
                                                        <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('montant','montant*') !!}</label>
                                                        <div class="col-sm-12">
                                                          {!! Form::text('montant',null, ['class' => 'form-control','required']) !!}
                  </div>
                                                    </div>
                                                    
                                                <div class="col-md-6" style="padding: 0px">
                                                        <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('description','Description*') !!}</label>
                                                        <div class="col-sm-12">
                                                  {!! Form::text('description',null, ['class' => 'form-control','required']) !!}
                                 
             
                  </div>
                                                    </div>  
                                                    
        
                                                     <div class="col-sm-12">
                                    
                                                  <div class="checkbox">
                                                        <input   id="checkbox" type="checkbox" name="is_promote" > 
                                                        <label for="checkbox"   >
                                                                En promotion?
                                                        </label>
                                                    </div>
             
                  </div>
                                                    
                                                    
                   
                                                    
                                             
        
                                                     <div class="col-md-6" style="padding: 0px">
                                                        <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('categorie_id','Categorie') !!}</label>
                                                        <div class="col-sm-12">
                                                            {!! Form::select('categorie_id',$categories,null, ['class' => 'form-control','required']) !!}
                                 
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
 @endsection
@include('partials.sidebarright')
