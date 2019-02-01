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
                                <h4 class="pull-left page-title">Plannings</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">QuickBeauty</a></li>
                                    <li><a href="#">Tables</a></li>
                                    <li class="active">Editer plannings</li>
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
                                @can('view_plannings')                                                                  <table id="datatable-buttons" class="table table-bordered  table-striped" id="datatable-editable">
                                   
    
                                   <thead>
                                       <tr>
                                           <th>Privilèges</th>
                                           @foreach ($roles as role )
                                       <th>{{$role->name}}</th>  
                                           @endforeach
                                           
                                       </tr>
                                   </thead>
                                   <tbody>
                                    
                                       @foreach($permissions as $perm)
      
                  <tr class="gradeC">
                                        
                                           <td> {{ $perm->name}}</td>
                                           @foreach ($roles as role )


                                           @if ($role->hasPermissionTo($perm->name))
                                           <input  $check="checked" id="checkbox" type="checkbox" name="permissions[]" value="{{ $perm->name }}"> 
                            
                                
                            @else
                            <input  $check="" id="checkbox" type="checkbox" name="permissions[]" value="{{ $perm->name }}"> 
                            
                            @endif
                                           @endif
                                           <td>{{$role->name}} </td>  
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
 
    <script src="{{asset('js/jquery.min.js')}}"></script>
       
	    <!-- Examples -->
	    <script src="{{asset('plugins/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
	    <script src="{{asset('plugins/jquery-datatables-editable/jquery.dataTables.js')}}"></script> 
	    <script src="{{asset('plugins/datatables/dataTables.bootstrap.js')}}"></script>
	    <script src="{{asset('pages/datatables.editable.init.js')}}"></script>

                @endcan
                @endsection
@include('partials.sidebarright')



















