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
                                <li class="active">Editable Table</li>
                            </ol>
                        </div>
                    </div>


                    <div class="panel">
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="m-b-30">
                                    
                                      </div>
                                </div>

                                <div class="row">
                                        <div class="col-md-5">
                                            <h3 class="modal-title">{{ $result->total() }} {{ str_plural('User', $result->count()) }} </h3>
                                        </div>
                                        <div class="col-md-7 page-action text-right">
                                            @can('add_users')
                                                <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm"> <i class="glyphicon glyphicon-plus-sign"></i> Create</a>
                                            @endcan
                                        </div>
                                    </div>
                                
                                    <div class="result-set">
                                        @can('view_users')                                                                  <table class="table table-bordered  table-striped table-hover" id="data-table">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th>Created At</th>
                                                @can('edit_users', 'delete_users')
                                                <th class="text-center">Actions</th>
                                                @endcan
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($result as $item)
                                                <tr>
                                                    <td>{{ $item->id }}</td>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->email }}</td>
                                                    <td>{{ $item->roles->implode('name', ', ') }}</td>
                                                    <td>{{ $item->created_at->toFormattedDateString() }}</td>
                                
                                                    @can('edit_users')
                                                    <td class="text-center">
                                                        @include('shared._actions', [
                                                            'entity' => 'users',
                                                            'id' => $item->id
                                                        ])
                                                    </td>
                                                    @endcan
                                                </tr>
                                            @endforeach
                                            </tbody>
                                       </table>@endcan
                                
                                        <div class="text-center">
                                            {{ $result->links() }}
                                        </div>
                                    </div>
                                
                                   
                              
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