@extends('layouts.mainlayout')
@include('partials.topbar')
@include('partials.sidebar')

                                 @section('content')
                    
             
                  <!-- DataTables -->
        <link href="{{asset('plugins/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('plugins/datatables/buttons.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('plugins/datatables/fixedHeader.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('plugins/datatables/responsive.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('plugins/datatables/scroller.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
  <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Reservations</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="home">Acceuil</a></li>
                                    <li class="active">Reservations</li>
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
                                                        <h4 class="modal-title">Ajouter réservation</h4> 
                                                    </div> 
                                                    <div class="modal-body"> 
                                                        <div class="row"> 
                                                             {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('reservations.store')]) !!}
                                            <div class="col-md-12" style="padding: 0px">
                                                <label for="inputEmail3" class="col-sm-3 control-label">{!! Form::label('code','Code') !!}</label>
                                                <div class="col-sm-6">
                                                  {!! Form::text('code',null, ['class' => 'form-control']) !!}
                                                 </div>
                                            </div>
                                            
                                            <div class="col-md-6" style="padding: 0px">
                                                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('client_id','Client') !!}</label>
                                                <div class="col-sm-9">
                                                    {!! Form::select('client_id',$clients,null, ['class' => 'form-control']) !!}
                         
                                                </div>
                                            </div>
                                            <div class="col-md-6" style="padding: 0px">
                                                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('service_id','Service') !!}</label>
                                                <div class="col-sm-12">
                                                   
                                                    {!! Form::select('services[]', $services, null, ['class' => 'form-control','multiple'=>'multiple']) !!}
          </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">{!! Form::label('date','Date :') !!}</label>
                                                <div class="col-sm-9">
                                                  {!! Form::date('date',null, ['class' => 'form-control']) !!}
                                                 </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">{!! Form::label('heure','Heure :') !!}</label>
                                                <div class="col-sm-9">
                                                  {!! Form::time('heure',null, ['class' => 'form-control']) !!}
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

                                                                              
                                        @can('add_reservations')
                                           @can('add_reservations')                                         <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Ajouter <i class="fa fa-plus"></i></button>                                     @endcan
                                    @endcan
                                       
                                       
                                                                             
                                        </div>
                                    </div>
                                </div>
                                                           
                                @can('view_reservations')                                                                  <table class="table table-bordered  table-striped" id="datatable-buttons">
                                   
    
                                   <thead>
                                       <tr>
                                           <th>code</th>
                                           <th>Date de création</th>
                                           <th>client</th>
                                           <th>service</th>
                                           <th>Actions</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                    
                                       @foreach($codedistinct as $code)
      
                  <tr class="gradeC">
                  
                                           <td> {{ $code->code}}</td>
                                           
                                           <td> @foreach($reservations as $reservation)
                                            @if($reservation->code===$code->code)
                                              {{  $yourVar = $reservation->created_at }}
                                               @break
                                           @endif
                                        
                                           @endforeach</td>
                                            <td> @foreach($reservations as $reservation)
                                            @if($reservation->code===$code->code)
                                             @foreach($Clients as $client)
                                           @if($client->id===$reservation->client_id)
                                              {{  $yourclient =$client->nom }}
                                                @endif
                                                @endforeach
                                                
                                               @break
                                           @endif
                                        
                                           @endforeach</td>

 


                                           <td> 
                                            @foreach($reservations as $reservation)
                                         
                                           @if($reservation->code===$code->code)
                                           @foreach($Services as $client)
                                           @if($client->id===$reservation->service_id)
                                               <li>  {{ $client->nom }}
                                               
                                               </li>
                                           @endif
                                           @endforeach
                                           @endif
                                           @endforeach
                                           </td>






                                           
                                           <td class="actions">
                                                @can('edit_reservations','delete_reservations')
                                                {!! Form::open( ['method' => 'delete', 'url' => route('reservations.destroy', $reservation->id), 'style' => 'display: inline', 'onSubmit' => 'return confirm("Are yous sure wanted to delete it?")']) !!}
                                                <button type="submit" class="btn-delete btn btn-sm btn-light">
                                                    <i class="fa fa-trash-o"></i>
                                                </button>
                                            {!! Form::close() !!}
                                                <a href="{{ route('reservations.edit',$reservation) }}" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                                <a href="{{ route('reservations.edit',$reservation) }}" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                                <a href="{{ route('reservations.edit',$reservation) }}" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                    @endcan
                                           @foreach($reservations as $reservation)
                                            @if($reservation->code===$code->code)
                                         
                                         
                                               @break
                                           @endif
                                        
                                           @endforeach
                                                 </td>
                                       </tr> 
   @endforeach
                                      
                                   </tbody>
                              </table>
                               @endcan

                            </div>
                    

                        </div> <!-- end Panel -->

                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    2019 © QuickBeauty.
                </footer>

            </div>

                
                @endsection
@include('partials.sidebarright')




















