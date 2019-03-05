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
                                    <div class="col-sm-12">
                                        <div class="m-b-30 pull-right">
                                        <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog"> 
        <div class="modal-content"> 
            <div class="modal-header"> 
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                <h4 class="modal-title">Ajouté un produit en stock</h4> 
            </div> 
            <div class="modal-body"> 
                <div class="row"> 
                    {!! Form::open(['url' => route('stocks.store')]) !!} 
                    <div class="col-md-6" style="padding: 0px">
                        <label for="inputEmail3" class="col-sm-3 control-label"> {!! Form::label('quantite_initial','Quantité initial') !!}</label>
                        <div class="col-sm-12">
                            {!! Form::text('quantite_initial',null, ['class' => 'form-control','required']) !!}
                         </div>
                    </div>
                    <div class="col-md-6" style="padding: 0px">
                        <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('quantite_limite','quantité limite') !!}</label>
                        <div class="col-sm-12">
                            {!! Form::text('quantite_limite',null, ['class' => 'form-control','required']) !!}
</div>
                    </div>
                  
                    <div class="col-md-6" style="padding: 0px">
                        <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('produit_id','Produit') !!}</label>
                        <div class="col-sm-12">
                            {!! Form::select('produit_id',$produits,null, ['class' => 'form-control','required']) !!}
                        <br>  <br>  </div>
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





<div id="con-close-modal-minus" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog"> 
        <div class="modal-content"> 
            <div class="modal-header"> 
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                <h4 class="modal-title">Retiré un produit en stock</h4> 
            </div> 
            <div class="modal-body"> 
                <div class="row"> 
                    {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('stocks.store')]) !!}
                    
                    <div class="col-md-6" style="padding: 0px">
                        <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('sorti_produit_id','Produit') !!}</label>
                        <div class="col-sm-12">
                            {!! Form::select('sorti_produit_id',$produits,null, ['class' => 'form-control','required']) !!}
                        </div>
                    </div>
                    <div class="col-md-6" style="padding: 0px">
                        <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('quantite','Quantite') !!}</label>
                        <div class="col-sm-12">
                            {!! Form::text('quantite',null, ['class' => 'form-control','required']) !!}   
                            <br><br>
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
@can('add_stocks','edit_stocks')
    
<button type="button" class="btn btn-primary waves-effect waves-light pull-right" data-toggle="modal" data-target="#con-close-modal-minus">Sortir <i class="fa fa-minus"></i></button>

<button type="button" class="btn btn-primary waves-effect waves-light pull-right" data-toggle="modal" data-target="#con-close-modal">Ajouter <i class="fa fa-plus"></i></button>

    

@endcan

                                          </div>
                                    </div>

                                    @foreach($Stocks as $stock)
      

       @if($stock->quantite_final<= $stock->quantite_limite)
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                           
                                    <span class="badge badge-danger">Nom PRODUIT :
                                                    @foreach($Produits as $produit)
      
       @if($produit->id===$stock->produit_id)
                                        {{ $produit->nom }}</span>
                                    
                                </a>
                                   @endif
        
                                     
                                   
                                        
                                             
    @endforeach
       @endif
        
                                     
                                   
                                        
                                             
    @endforeach
                                </div>
                                @can('view_stocks')
    

                               
                                <table id="datatable-buttons" class="table table-bordered table-striped" id="datatable-editable">
                                   
    
                                    <thead>
                                        <tr><th>Produit</th>
                                            <th>Quantité initial</th>
                                            <th>Quantité final</th>
                                            <th>Quantité limite</th>
                                            <th>date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     
    @foreach($Stocks as $stock)
      
       
        
        
                   <tr class="gradeC"> <td>
                       
                    @foreach ( $Produits as $produit )
                        @if ($produit->id===$stock->produit_id)
                        {{ $produit->nom }}
                        @endif
                    @endforeach
                    </td>
                                            <td>   {{ $stock->quantite_initial }}</td>
                                            <td> {{ $stock->quantite_final }}
                                            </td>
                                            <td>  {{ $stock->quantite_limite }}</td>
                                             <td> {{ $stock->updated_at }}</td>
                                            <td class="actions">  <div id="con-close-modal{{$stock->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                                                <div class="modal-dialog"> 
                                                    <div class="modal-content"> 
                                                        <div class="modal-header"> 
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                                                            <h4 class="modal-title">Détail de l'stock</h4> 
                                                        </div> 
                                                        <div class="modal-body"> 
                                                            <div class="row"> 
                                                                 {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('stocks.store'),'files'=>true]) !!}
                                                
                                                <div class="col-md-12">
                                                
                                                <style>
                                                    .col-md-9 label{
                                                        margin-bottom: 10px
                                                    }
                                                </style>
                                                <div class="col-md-9">
                                                        <label>    <strong>Produit:</strong>  @foreach ( $Produits as $produit )
                                                        @if ($produit->id===$stock->produit_id)
                                                        {{ $produit->nom }}
                                                        @endif
                                                    @endforeach
                                                    </label><br>
                                                        <label>
                                                            <strong >Quantité initial:</strong> {{$stock->quantite_initial}}
                                                        </label><br>
                                                        <label>
                                                            <strong >Quantité final:</strong> {{$stock->quantite_final}}
                                                        </label>
                                                        <br>
                                                        <label>
                                                        <strong>Quantité limite:</strong> {{$stock->quantite_limite}}
                                                    </label>
                                                        <br>
                                                        <label>
                                                        <strong>Dernière modification:</strong> {{$stock->updated_at}}
                                                    </label>
                                                        <br>
                                                      
                                                        
                                                </div>
                                            </div>
                                           
                                         
                                               
                                               
                                               
                                                <div class="m-b-0">
                                                    <div class="col-sm-offset-3 col-sm-9">
                                                    
         </div>
                                                </div>
                                                <div class="col-md-12" style="border:0px;text-align: right;margin-top: 20px"> 
                                                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Fermer</button> 
                                                         
                                                        </div> 
                                           
                                                            </div> 
    
                                                            
                                                        </div> 
                                                        
                                                    </div> 
                                                </div>
                                            </div>
                                        <a  class="on-default seedetails btn btn-primary" data-toggle="modal" data-target="#con-close-modal{{$stock->id}}"><i class="fa fa-eye"></i></a>
                                    
                                    
                                    
                                    
                                    @can('edit_stocks','delete_stocks')
                                     {!! Form::open( ['method' => 'delete', 'url' => route('stocks.destroy', $stock), 'style' => 'display: inline', 'onSubmit' => 'return confirm("Are yous sure wanted to delete it?")']) !!}
                                     <button type="submit" class="btn-delete btndelete btn btn-danger">
                                         <i class="fa fa-trash-o"></i>
                                     </button>
                                 {!! Form::close() !!}
    
                                     <a href="{{ route('stocks.destroy',$stock) }}" class="hidden on-editing cancel-row" ><i class="fa fa-times"></i></a>
                                     <a data-toggle="modal" data-target="#editroleModal{{ $stock->id }}" class="btn-delete btndelete btn btn-danger"><i class="fa fa-pencil"></i></a>
                                     <div class="modal fade" id="editroleModal{{ $stock->id }}" tabindex="-1" role="dialog" aria-labelledby="roleModalLabel">
                                            <div class="modal-dialog" role="document">
                                                    {!! Form::open(['method' => 'PUT', 'url' => route('stocks.update', $stock ),'files'=>true]) !!}
                                    
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="roleModalLabel">Stock</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                                <div class="col-md-6" style="padding: 0px">
                                                                        <label for="inputEmail3" class="col-sm-3 control-label"> {!! Form::label('quantite_initial','Quantité initial') !!}</label>
                                                                        <div class="col-sm-12">
                                                                            {!! Form::text('quantite_initial',null, ['class' => 'form-control','required']) !!}
                                                                         </div>
                                                                    </div>
                                                                    <div class="col-md-6" style="padding: 0px">
                                                                        <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('quantite_limite','quantité limite') !!}</label>
                                                                        <div class="col-sm-12">
                                                                            {!! Form::text('quantite_limite',null, ['class' => 'form-control','required']) !!}
                                                </div>
                                                                    </div>
                                                                  
                                                                    <div class="col-md-6" style="padding: 0px">
                                                                        <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('produit_id','Produit') !!}</label>
                                                                        <div class="col-sm-12">
                                                                            {!! Form::select('produit_id',$produits,null, ['class' => 'form-control','required']) !!}
                                                                        <br>  <br>  </div>
                                                                    </div>
                                                                    
                                                             </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                                    
                                                        <!-- Submit Form Button -->
                                                        {!! Form::submit('Ajouter', ['class' => 'btn btn-primary']) !!}
                                                    </div>
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                        </div>
          
                                       @endcan
                                            </td>
                                        </tr> 
    @endforeach
                                       
                                    </tbody>
                                </table>

                                @endcan
                              
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
