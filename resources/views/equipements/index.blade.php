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
                                <h4 class="pull-left page-title">Equipements</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="home">Acceuil</a></li>
                                    <li class="active">Editer equipements</li>
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
                                                        <h4 class="modal-title">Ajouter un équipement</h4> 
                                                    </div> 
                                                    <div class="modal-body"> 
                                                        <div class="row"> 
                                                             {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('equipements.store'),'files'=>true]) !!}
                                                             <div class="col-md-12" style="padding: 0px">
                                                                <center>
                                                                    <img id="imgpreview" src="/images/camera_icon.png" style="width: 100px;cursor: pointer;">
                                                                    <input id="inputimage" type="file" name="imageup" accept="images/*" style="display: none;">
                                                                </center>
                                                             </div>
                                                             
                                                             <div class="col-md-6" style="padding: 0px">
                                                                <label for="inputEmail3" class="col-sm-12 control-label">{!! Form::label('nom','nom') !!}</label>
                                                                <div class="col-sm-12">
                                                                {!! Form::text('nom',null, ['class' => 'form-control']) !!}
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6" style="padding: 0px">
                                                                <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('fournisseur_id','Fournisseur') !!}</label>
                                                                <div class="col-sm-12">
                                                                    {!! Form::select('fournisseur_id',$fournisseurs,null, ['class' => 'form-control']) !!}
                                        
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12" style="padding: 0px">
                                                                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('description','Description') !!}</label>
                                                                <div class="col-sm-12">
                                                                    <textarea class="form-control" name="description"></textarea>
                                                                </div>
                                                            </div>

                                                            <div class="m-b-0">
                                                                <div class="col-sm-offset-3 col-sm-9">
                                                                
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12" style="border:0px;text-align: right;margin-top: 20px"> 
                                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Fermer</button> 
                                                                <button class="btn btn-primary">Enregistrer</button>
                                                            </div> 
                                       {!! Form::close() !!}
                                                        </div> 

                                                        
                                                    </div> 
                                                    
                                                </div> 
                                            </div>
                                        </div><!-- /.modal -->

                                                                                 @can('add_equipements')                                         <button type="button" class="btn btn-primary waves-effect waves-light pull-right" data-toggle="modal" data-target="#con-close-modal">Ajouter <i class="fa fa-plus"></i></button>                                     @endcan
                                       
                                                                             
                                        </div>
                                    </div>
                                </div>
                                @can('view_equipements')                                                                  <table id="datatable-buttons" class="table table-bordered  table-striped" id="datatable-editable">
                                <thead>
                                        <tr>
                                            <th>image</th>
                                            <th>nom</th>
                                            <th>Description</th>
                                            <th>Date de création</th>
                                            <th>Fournisseur</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     
                                        @foreach($equipements as $equipement)
       
                   <tr class="gradeC"> <td>
                        <a href="#" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="{{asset('images/'.$equipement->image)}}" alt="user-img" > </a>
                        </td>
                                            
                                            <td> {{ $equipement->nom }}</td>
                                            <td> {{ $equipement->description }} </td>
                                            <td> {{ $equipement->created_at }}</td>
                                            @if($equipement->fournisseur)
                                             <td> {{ $equipement->fournisseur->nom }}</td>
                                             @else
                                             <td> Aucun</td>
                                            @endif
                                            <td class="actions">
                                                @can('edit_equipements','delete_equipements')
                                                {!! Form::open( ['method' => 'delete', 'url' => route('equipements.destroy', $equipement->id), 'style' => 'display: inline', 'onSubmit' => 'return confirm("Are yous sure wanted to delete it?")']) !!}
                                                <button type="submit" class="btn-delete btndelete btn btn-danger">
                                                    <i class="fa fa-trash-o"></i>
                                                </button>
                                            {!! Form::close() !!}
                                                <a href="{{ route('equipements.edit',$equipement) }}" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                                <a href="{{ route('equipements.edit',$equipement) }}" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                                <a href="{{ route('equipements.edit',$equipement) }}" class="btn-delete btn btn-sm btn-light"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                           @endcan
                                            </td>
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

                
                @endsection
@include('partials.sidebarright')
