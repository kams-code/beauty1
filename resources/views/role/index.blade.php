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
                                <h4 class="pull-left page-title">Instituts</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="home">Accueil</a></li>
                                    <li class="active">Instituts</li>
                                </ol>
                            </div>
                        </div>


                        <div class="panel">
                            
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="m-b-30 pull-right">
                                                <div class="modal fade" id="roleModal" tabindex="-1" role="dialog" aria-labelledby="roleModalLabel">
                                                        <div class="modal-dialog" role="document">
                                                            {!! Form::open(['method' => 'post']) !!}
                                                
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="roleModalLabel">Role</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <!-- name Form Input -->
                                                                    <div class="form-group @if ($errors->has('name')) has-error @endif">
                                                                        {!! Form::label('name', 'Nom') !!}
                                                                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nom']) !!}
                                                                        @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
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
                                                
                                                    <div class="row">
                                                       
                                                        <div class="col-md-7 page-action text-right">
                                                            @can('add_roles')
                                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#roleModal">Ajouter <i class="fa fa-plus"></i></button> 
                                                            @endcan
                                                        </div>
                                                    </div>

                                                   
                                                    





                                                                             
                                                     
    
                                                                             
                                        </div>
                                    </div>
                                </div>
                                @can('view_organisations')                                                                  <table id="datatable-buttons" class="table table-bordered  table-striped" id="datatable-editable">
                                   
    
                                    <thead>
                                        <tr>
                                            
                                            <th>Nom</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     
                                                            @forelse ($roles as $role)
       
                                    <tr class="gradeC">
                                                             <td> {{ $role->name }}</td>
                                                        
                                                              
                                                             <td class="actions">
                                                                 @can('edit_organisations','delete_organisations')
                                                                 {!! Form::open( ['method' => 'delete', 'url' => route('roles.destroy', $role->id), 'style' => 'display: inline', 'onSubmit' => 'return confirm("Are yous sure wanted to delete it?")']) !!}
                                                                 <button type="submit" class="btn-delete btn btn-sm btn-light">
                                                                     <i class="fa fa-trash-o"></i>
                                                                 </button>
                                                             {!! Form::close() !!}
                 
                                                                 <a href="{{ route('roles.edit',$role) }}" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                                                 <a href="{{ route('roles.destroy',$role) }}" class="hidden on-editing cancel-row" ><i class="fa fa-times"></i></a>
                                                                 <a data-toggle="modal" data-target="#editroleModal{{ $role->id }}" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                                                 <div class="modal fade" id="editroleModal{{ $role->id }}" tabindex="-1" role="dialog" aria-labelledby="roleModalLabel">
                                                                        <div class="modal-dialog" role="document">
                                                                                {!! Form::open(['method' => 'PUT', 'url' => route('roles.update', $role )]) !!}
                                                                
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h4 class="modal-title" id="roleModalLabel">Role</h4>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <!-- name Form Input -->
                                                                                    <div class="form-group">
                                                                                        {!! Form::label('name', 'Nom') !!}
                                                                                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nom']) !!}
                                                                                       
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
                                      
                                                                 
                                                                 
                                                                 
                                                                 <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                                            @endcan
                                                             </td>
                                                         </tr> 
                     @endforeach
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
<script type="text/javascript">
    $(document).on('click','#imgpreview',function(){
        $('#inputimage').trigger('click');
    });
    
    function readURL(input, ids) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();
              
              reader.onload = function (e) {
                  $('#'+ids).attr('src', e.target.result);
                  var src = $('#'+ids).attr('src');
                  
              }
              
              reader.readAsDataURL(input.files[0]);
          }
      }
          
      $(document).on('change','#inputimage',function(){
          readURL(this,'imgpreview');
      });
</script>