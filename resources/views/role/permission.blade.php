@extends('layouts.mainlayout')
@include('partials.topbar')
@include('partials.sidebar')

                                 @section('content')
                                  @can('edit_plannings', 'delete_plannings')
                    <footer class="footer text-right">
                    2019 © QuickBeauty.
                </footer>
                @endcan
                 @can('edit_plannings', 'delete_plannings')
                  
  <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Privilèges</h4>
                                <ol class="breadcrumb pull-right" >
                                    <li><a href="home">Accueil</a></li>
                                    <li>Paramètres</li>
                                    <li class="active">Privilège</li>
                                </ol>
                            </div>
                        </div>


                        <div class="panel">
                            
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="m-b-30 pull-right">
                              
                                                                             
                                        </div>
                                    </div>
                                </div>
                                @can('view_plannings')                                                                  <table class="table table-bordered  table-striped" >
                                   
    
                                   <thead>
                                       <tr>
                                           <th>Privilèges</th>
                                           @foreach ($roles as $role )
                                       <th>{{$role->name}}</th>  
                                           @endforeach
                                           
                                       </tr>
                                   </thead>
                                   <tbody>
                                        {!! Form::model($role, ['method' => 'PUT', 'route' => ['roles.update',  $role->id ], 'class' => 'm-b']) !!}
    
                                       
                                       @foreach($permissions as $perm)
      
                  <tr class="gradeC">
                                        
                                           <td> 
                                                <?php $first = explode("_",  $perm->name);
                                                foreach ($first as $key => $value) {
               if($key==0){
                   $action=$value;
                   if ($action=="view") {
                    $action="Voir ";
                   }
                   if ($action=="add") {
                    $action="Ajouter";
                   }
                   if ($action=="edit") {
                    $action="Editer";
                   }
                   if ($action=="delete") {
                    $action="supprimer";
                   }
               }if($key==1){
                   $entity=$value;
                   if ($entity=="users") {
                    $entity="employés";
                   }
               }
            }
                                                ?>
                                                                                 {{$action}}/{{$entity}}</td>
                                           @foreach ($roles as $role )
                                          

                                           <td>  @if ($role->hasPermissionTo($perm->name))
                                           <input  data-action="remove" checked type="checkbox"   data-id="{{ $perm->id }}" data-idrole="{{ $role->id }}" class="adddire"> 
                            
                                
                            @else
                            <input  type="checkbox"  data-id="{{ $perm->id }}" data-idrole="{{ $role->id }}" class="adddire" data-action="add"> 
                            
                           
                                           @endif
                                           </td>  
                                               @endforeach
                                           

                                           
                                       
                                        
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
            <!--
              @can('edit_roles')
   {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
@endcan


{!! Form::close() !!}
-->
 
    <script src="{{asset('js/jquery.min.js')}}"></script>
   
	    <!-- Examples -->
	    <script src="{{asset('plugins/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
	    <script src="{{asset('plugins/jquery-datatables-editable/jquery.dataTables.js')}}"></script> 
	    <script src="{{asset('plugins/datatables/dataTables.bootstrap.js')}}"></script>
	    <script src="{{asset('pages/datatables.editable.init.js')}}"></script>

                @endcan
                @endsection
@include('partials.sidebarright')



















