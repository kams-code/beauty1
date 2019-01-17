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
                                        <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog"> 
        <div class="modal-content"> 
            <div class="modal-header"> 
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                <h4 class="modal-title">Modal Content is Responsive</h4> 
            </div> 
            <div class="modal-body"> 
                <div class="row"> 
                    {!! Form::open(['url' => route('stocks.store')]) !!} 
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label"> {!! Form::label('quantite_initial','Quantité initial') !!}</label>
                        <div class="col-sm-9">
                            {!! Form::text('quantite_initial',null, ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('quantite_limite','quantité limite') !!}</label>
                        <div class="col-sm-9">
                            {!! Form::text('quantite_limite',null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('produit_id','Produit') !!}</label>
                        <div class="col-sm-9">
                           {!! Form::select('produit_id',$produits,null, ['class' => 'form-control']) !!}

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

<button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Ajouter <i class="fa fa-plus"></i></button>





<div id="con-close-modal-minus" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog"> 
        <div class="modal-content"> 
            <div class="modal-header"> 
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                <h4 class="modal-title">Modal Content is Responsive</h4> 
            </div> 
            <div class="modal-body"> 
                <div class="row"> 
                    {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('sortie')]) !!}
                    
                    
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('produit_id','Produit') !!}</label>
                        <div class="col-sm-9">
                           {!! Form::select('produit_id',$produits,null, ['class' => 'form-control']) !!}

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('quantite','Quantite') !!}</label>
                        <div class="col-sm-9">
                            {!! Form::text('quantite',null, ['class' => 'form-control']) !!}
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

<button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal-minus">Sortir <i class="fa fa-minus"></i></button>

                                          </div>
                                    </div>

                                    @foreach($Stocks as $stock)
      
       
        
                                       {{ $stock->quantite_final }}==={{ $stock->quantite_limite }}   
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                           
                                    <span class="badge badge-warning">Nom PRODUIT     {{ $stock->produit_id }}</span>
                                    <span class="caret"></span>
                                </a>
                                        
                                             
    @endforeach
                                </div>
                                <table class="table table-bordered table-striped" id="datatable-editable">
                                   
    
                                    <thead>
                                        <tr>
                                            <th>Quantité initial</th>
                                            <th>Quantité final</th>
                                            <th>Quantité limite</th>
                                            <th>date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     
    @foreach($Stocks as $stock)
      
       
        
        
                   <tr class="gradeC">
                                            <td>   {{ $stock->quantite_initial }}</td>
                                            <td> {{ $stock->quantite_final }}
                                            </td>
                                            <td>  {{ $stock->quantite_limite }}</td>
                                             <td> {{ $stock->updated_at }}</td>
                                            <td class="actions">
                                                <a href="{{ route('stocks.edit',$stock) }}" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                                <a href="{{ route('stocks.edit',$stock) }}" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                                <a href="{{ route('stocks.edit',$stock) }}" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
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
