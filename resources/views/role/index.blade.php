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
                                <h4 class="pull-left page-title">Rôles</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="home">Accueil</a></li>
                                    <li class="active">Rôles</li>
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
                                                                    <h4 class="modal-title" id="roleModalLabel">Ajouter un rôle</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <!-- name Form Input -->
                                                                    <div class="form-group @if ($errors->has('name')) has-error @endif">
                                                                        {!! Form::label('name', 'Nom*') !!}
                                                                        {!! Form::text('name', null, ['class' => 'form-control','required', 'placeholder' => 'Nom']) !!}
                                                                        @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer" style="border: 0px">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                                                
                                                                    <!-- Submit Form Button -->
                                                                    {!! Form::submit('Ajouter', ['class' => 'btn btn-primary']) !!}
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
                                @can('view_roles')                                                                  <table id="datatable-buttons" class="table table-bordered  table-striped" id="datatable-editable">
                                   
    
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
                                                                     @can('edit_roles','delete_roles')


                                    <a data-toggle="modal" data-target="#con-close-modal" data-lien="roles/{{$role->id}}/edit" data-id="{{$role->id}}" class="btn-success btnedit btn btn-primary"><i class="fa fa-pencil"></i></a>
                                    <a data-toggle="modal" data-target="#deletemodal" data-id="{{$role->id}}" data-lien="roles/{{$role->id}}" class="btn-delete btndelete btn btn-danger"><i class="fa fa-trash-o"></i></a>  @endcan
                                
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