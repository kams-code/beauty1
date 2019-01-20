@extends('layouts.mainlayout')
@include('partials.topbar')
@include('partials.sidebar')

                                 @section('content')
                                  @can('edit_plannings', 'delete_plannings')
                    <footer class="footer text-right">
                    2016 © Moltran.
                </footer>
                @endcan
                 @can('edit_plannings', 'delete_plannibgs')
                  
  <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Plannings</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">Moltran</a></li>
                                    <li><a href="#">Tables</a></li>
                                    <li class="active">Editer plannings</li>
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
                                                             {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('plannings.store')]) !!}
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">{!! Form::label('dateDeb','Date de debut') !!}</label>
                                                <div class="col-sm-9">
                                                  {!! Form::text('dateDeb',null, ['class' => 'form-control']) !!}
                                                 </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">{!! Form::label('dateFin','Date de fin') !!}</label>
                                                <div class="col-sm-9">
                                                  {!! Form::text('dateFin',null, ['class' => 'form-control']) !!}
                                                 </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">{!! Form::label('heureDeb','Heure de debut') !!}</label>
                                                <div class="col-sm-9">
                                                  {!! Form::text('heureDeb',null, ['class' => 'form-control']) !!}
                                                 </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">{!! Form::label('heureDeb','Heure de debut') !!}</label>
                                                <div class="col-sm-9">
                                                  {!! Form::text('heureFin',null, ['class' => 'form-control']) !!}
                                                 </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('User_id','Employe ') !!}</label>
                                                <div class="col-sm-9">
                                                    {!! Form::select('user_id',$jours,null, ['class' => 'form-control']) !!}
                         
          </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('jour_id','jour de la semaine') !!}</label>
                                                <div class="col-sm-9">
                                                   
                                                    {!! Form::select('jours[]', $jours, null, ['class' => 'form-control','multiple'=>'multiple']) !!}
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

                                                                              <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Add <i class="fa fa-plus"></i></button>
                                       
                                                                             
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-bordered table-striped" id="datatable-editable">
                                   
    
                                   <thead>
                                       <tr>
                                           <th>User</th>
                                           <th>Date de debut</th>
                                           <th>Date de fin</th>
                                           <th>Jour</th>
                                           <th>Heure de debut</th>
                                           <th>Heure de fin</th>
                                           <th>Actions</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                    
                                       @foreach($plannings as $planning)
      
                  <tr class="gradeC">
                                         @foreach($users as $user)
                                          @if($plannings->user_id=$user->id)
                                           <td> {{ $user->name}}</td>
                                          @endif
                                         @endForeach
                                           <td> {{ $planning->dateDeb }}</td>
                                           <td> {{ $planning->dateFin }}</td>
                                           @if($planning->jour)
                                            <td> {{ $planning->jour->nom }}</td>
                                           @endif

                                           
                                           <td class="actions">
                                               <a href="{{ route('reservations.edit',$reservation) }}" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                               <a href="{{ route('reservations.edit',$reservation) }}" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                               <a href="{{ route('reservations.edit',$reservation) }}" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                               <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                           </td>
                                       </tr> 
   @endforeach
                                      
                                   </tbody>
                               </table>
                            </div>
                            <!-- end: page -->

                        </div> <!-- end Panel -->

                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    2016 © Moltran.
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



















