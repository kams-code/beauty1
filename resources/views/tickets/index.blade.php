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
                                    <li class="active">Editer les tickets</li>
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
                                                                {!! Form::open(['url' => route('tickets.store')]) !!}
                         <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-3 control-label">
                                                        {!! Form::label('titre','Titre') !!}
                                                    </label>
                                                    <div class="col-sm-9">
                                                        {!! Form::text('titre',null, ['class' => 'form-control']) !!}
                                                     </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-3 control-label">
                                                            {!! Form::label('type','Type') !!}</label>
                                                    <div class="col-sm-9">
                                                            {!! Form::text('type',null, ['class' => 'form-control']) !!}
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

                                                <div class="form-group">
                                                        <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('service_id','Service') !!}</label>
                                                        <div class="col-sm-9">
                                                            {!! Form::select('service_id',$services,null, ['class' => 'form-control']) !!}
                                 
                  </div>
                                                    </div>
                                                    <div class="form-group">
                                                            <label for="inputPassword3" class="col-sm-3 control-label">
                                                                    {!! Form::label('valeur','Valeur') !!}</label>
                                                            <div class="col-sm-9">
                                                                    {!! Form::text('valeur',null, ['class' => 'form-control']) !!}
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
    
                                                                                     @can('add_tickets')                                         <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Ajouter <i class="fa fa-plus"></i></button>                                    
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
                                                                                        <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('client_id','Clients') !!}</label>
                                                                                        <div class="col-sm-9">
                                                                                            {!! Form::select('clients[]',$clients, null, ['class' => 'form-control','multiple'=>'multiple']) !!}
                                                                 
                                                  </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('tickets','Tickets') !!}</label>
                                                                                        <div class="col-sm-9">
                                                                                           
                                                                                            {!! Form::select('tickets[]', $tickets, null, ['class' => 'form-control','multiple'=>'multiple']) !!}
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
                                            <td class="actions">
                                                @can('edit_tickets', 'delete_tickets')
                                                {!! Form::open( ['method' => 'delete', 'url' => route('tickets.destroy', $ticket->id), 'style' => 'display: inline', 'onSubmit' => 'return confirm("Are yous sure wanted to delete it?")']) !!}
                                                <button type="submit" class="btn-delete btn btn-sm btn-light">
                                                    <i class="fa fa-trash-o"></i>
                                                </button>
                                            {!! Form::close() !!}     
                                             
                                                <a href="{{ route('tickets.edit',$ticket) }}" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                                <a href="{{ route('tickets.edit',$ticket) }}" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                                <a href="{{ route('tickets.edit',$ticket) }}" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
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
