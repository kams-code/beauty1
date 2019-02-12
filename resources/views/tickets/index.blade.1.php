
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
                                <h4 class="pull-left page-title">tickets</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="home">Accueil</a></li>
                                    <li class="active">tickets</li>
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
                                                        <h4 class="modal-title">Ajouter un ticket</h4> 
                                                    </div> 
                                                    <div class="modal-body"> 
                                                        <div class="row"> 
                                                            {!! Form::open(['url' => route('tickets.store')]) !!}
                                                
                                          
                                            <div class="col-md-6" style="padding: 0px">
                                                <label for="inputEmail3" class="col-sm-3 control-label">
                                                    {!! Form::label('titre','Titre') !!}
                                                </label>                                                <div class="col-sm-12">
                                                    {!! Form::text('titre',null, ['class' => 'form-control','required']) !!}
                                                </div>
                                            </div>
                                            <div class="col-md-6" style="padding: 0px">
                                                <label for="inputPassword3" class="col-sm-3 control-label">
                                                    {!! Form::label('type','Type') !!}</label>                                                <div class="col-sm-12">
                                                        {!! Form::text('type',null, ['class' => 'form-control','required']) !!}
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                  
                                                <div class="col-sm-9">
                                                      
                                                        <div class="checkbox">
                                                                <input   id="checkbox" type="checkbox" name="etat" > 
                                                                <label for="checkbox"   >
                                                                        Etat
                                                                </label>
                                                            </div>
                         
          </div>
                                            </div>
                                            <div class="col-md-6" style="padding: 0px">
                                                <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('service_id','Service') !!}</label>
                                                <div class="col-sm-12">
                                                    {!! Form::select('service_id',$services,null, ['class' => 'form-control','required']) !!}
                                                </div>
                                            </div>
                                            <div class="col-md-6" style="padding: 0px">
                                                <label for="inputPassword3" class="col-sm-3 control-label">
                                                    {!! Form::label('valeur','Valeur') !!}</label>                                                <div class="col-sm-12">
                                                        {!! Form::text('valeur',null, ['class' => 'form-control','required']) !!}
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

                                        @can('add_tickets')                                         <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Ajouter <i class="fa fa-plus"></i></button>                                     @endcan
                                       
                                        @can('add_tickets')                                                                            
                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal1">Attribuer <i class="fa fa-plus"></i></button>
                                        @endcan
 
                                       
                                       
  
                                        <div id="con-close-modal1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                                          <div class="modal-dialog"> 
                                              <div class="modal-content"> 
                                                  <div class="modal-header"> 
                                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                                                      <h4 class="modal-title">Modal Content is Responsive</h4> 
                                                  </div> 
                                                  <div class="modal-body"> 
                                                      <div class="row"> 
                                                           {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('usertickets.store')]) !!}
                                        
                                          <div class="form-group">
                                              <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('clients','Clients') !!}</label>
                                              <div class="col-sm-9">
                                                  {!! Form::select('users[]',$clients, null, ['class' => 'form-control','required','multiple'=>'multiple']) !!}
                       
        </div>
                                          </div>
                                          <div class="form-group">
                                              <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('tickets','Tickets') !!}</label>
                                              <div class="col-sm-9">
                                                 
                                                  {!! Form::select('tickets[]', $tickets, null, ['class' => 'form-control','required','multiple'=>'multiple']) !!}
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
                                      </div>                                    
                                    </div>
                                </div>
                            </div>
                                @can('view_tickets')                                                                  <table id="datatable-buttons" class="table table-bordered  table-striped" id="datatable-editable">
                                   
    
                                    <thead>
                                        <tr>
                                            <th>Tire</th>
                                            <th>Type</th>
                                            <th>Etat</th>
                                            <th>Service</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                     
    @foreach($Tickets as $ticket)
       
                   <tr class="gradeC">
                                            <td> {{ $ticket->titre }}</td>
                                            <td> {{ $ticket->type }}
                                            </td>
                                            <td> 
                                            @if( $ticket->etat==1)
  {{ $ticket->etat }}
@else
   0
@endif

                                            
                                            
                                            </td>
                                             <td> {{ $ticket->service_id }}</td>
                                            <td class="actions">  <div id="con-close-modal{{$ticket->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                                                <div class="modal-dialog"> 
                                                    <div class="modal-content"> 
                                                        <div class="modal-header"> 
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                                                            <h4 class="modal-title">Détail de l'ticket</h4> 
                                                        </div> 
                                                        <div class="modal-body"> 
                                                            <div class="row"> 
                                                                 {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('tickets.store'),'files'=>true]) !!}
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
                                                            <strong >Nom:</strong> {{$ticket->nom}}
                                                        </label>
                                                        <br>
                                                        <label>
                                                        <strong>Téléphone:</strong> {{$ticket->telephone}}
                                                    </label>
                                                        <br>
                                                        <label>
                                                        <strong>Email:</strong> {{$ticket->email}}
                                                    </label>
                                                        <br>
                                                        <label>
                                                        <strong>Adresse:</strong> {{$ticket->adresse}}
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
                                        <a  class="on-default seedetails btn btn-primary" data-toggle="modal" data-target="#con-close-modal{{$ticket->id}}"><i class="fa fa-eye"></i></a>
                                    
                                    
                                    
                                    
                                    @can('edit_tickets','delete_tickets')
                                     {!! Form::open( ['method' => 'delete', 'url' => route('tickets.destroy', $ticket), 'style' => 'display: inline', 'onSubmit' => 'return confirm("Are yous sure wanted to delete it?")']) !!}
                                     <button type="submit" class="btn-delete btndelete btn btn-danger">
                                         <i class="fa fa-trash-o"></i>
                                     </button>
                                 {!! Form::close() !!}
    
                                     <a href="{{ route('tickets.destroy',$ticket) }}" class="hidden on-editing cancel-row" ><i class="fa fa-times"></i></a>
                                     <a data-toggle="modal" data-target="#editroleModal{{ $ticket->id }}" class="btn-delete btndelete btn btn-danger"><i class="fa fa-pencil"></i></a>
                                     <div class="modal fade" id="editroleModal{{ $ticket->id }}" tabindex="-1" role="dialog" aria-labelledby="roleModalLabel">
                                            <div class="modal-dialog" role="document">
                                                    {!! Form::open(['method' => 'PUT', 'url' => route('tickets.update', $ticket ),'files'=>true]) !!}
                                    
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
 <script>
            var resizefunc = [];
        </script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/detect.js')}}"></script>
        <script src="{{asset('js/fastclick.js')}}"></script>
        <script src="{{asset('js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('js/jquery.blockUI.js')}}"></script>
        <script src="{{asset('js/waves.js')}}"></script>
        <script src="{{asset('js/wow.min.js')}}"></script>
        <script src="{{asset('js/jquery.nicescroll.js')}}"></script>
        <script src="{{asset('js/jquery.scrollTo.min.js')}}"></script>

        <script src="{{asset('js/jquery.app.js')}}"></script>

	    <!-- Examples -->
	    <script src="{{asset('plugins/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
	    <script src="{{asset('plugins/jquery-datatables-editable/jquery.dataTables.js')}}"></script> 
	    <script src="{{asset('plugins/datatables/dataTables.bootstrap.js')}}"></script>
	    <script src="{{asset('pages/datatables.editable.init.js')}}"></script>
@endsection
@include('partials.sidebarright')
