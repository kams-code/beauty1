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
                                    <li><a href="#">Moltran</a></li>
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
                                            <button type="button" id="addToTable" class="btn btn-primary waves-effect waves-light">Add <i class="fa fa-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-bordered table-striped" id="datatable-editable">
                                   
    
                                    <thead>
                                        <tr>
                                            <th>
                                            <th>nom</th>
                                            <th>Description</th>
                                            <th>Date de création</th>
                                            <th>Fournisseur</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     
                                        @foreach($equipements as $equipement)
       
                   <tr class="gradeC">
                                            <td> {{ $equipement->image }}</td>
                                            <td> {{ $equipement->nom }}</td>
                                            <td> {{ $equipement->description }} </td>
                                            <td> {{ $equipement->created_at }}</td>
                                            @if($equipement->fournisseur)
                                             <td> {{ $equipement->fournisseur->nom }}</td>
                                            @endif
                                            <td class="actions">
                                                <a href="{{ route('equipements.edit',$equipement) }}" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                                <a href="{{ route('equipements.edit',$equipement) }}" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                                <a href="{{ route('equipements.edit',$equipement) }}" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
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