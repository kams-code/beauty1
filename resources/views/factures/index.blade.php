@extends('layouts.mainlayout')
@include('partials.topbar')
@include('partials.sidebar')

                                 @section('content')
                    <footer class="footer text-right">
                    2019 © QuickBeauty.
                </footer>
             
                  
  <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">fournisseurs</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">QuickBeauty</a></li>
                                    <li><a href="#">Tables</a></li>
                                    <li class="active">Editer fournisseurs</li>
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
                                                             {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('fournisseurs.store')]) !!}
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">{!! Form::label('nom','nom') !!}</label>
                                                <div class="col-sm-9">
                                                  {!! Form::text('nom',null, ['class' => 'form-control']) !!}
                                                 </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('prenom','Prénom') !!}</label>
                                                <div class="col-sm-9">
                                                  {!! Form::text('prenom',null, ['class' => 'form-control']) !!}
          </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('adresse','Adresse') !!}</label>
                                                <div class="col-sm-9">
                                                  {!! Form::text('adresse',null, ['class' => 'form-control']) !!}
          </div>
                                            </div>

<div class="form-group">
                                                <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('email','Email') !!}</label>
                                                <div class="col-sm-9">
                                                  {!! Form::text('email',null, ['class' => 'form-control']) !!}
          </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('telephone','Telephone') !!}</label>
                                                <div class="col-sm-9">
                                                  {!! Form::text('telephone',null, ['class' => 'form-control']) !!}
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

                                                                                 @can('add_fournisseurs')                                         <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Add <i class="fa fa-plus"></i></button>                                     @endcan
                                       
                                                                             
                                        </div>
                                    </div>
                                </div>
                                @can('view_fournisseurs')   
                                <!DOCTYPE html>
                                <html>
                                <head>
                                    <title></title>
                                    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                                    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
                                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-confirmation/1.0.5/bootstrap-confirmation.min.js"></script>
                                </head>
                                <body>
                                    @if ($message = Session::get('success'))
                                        <div class="alert alert-success">
                                            <p>{{ $message }}</p>
                                        </div>
                                    @endif
                                    @can('view_factures')                                                                  <table class="table table-bordered ">
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th width="280px">Action</th>
                                        </tr>
                                        {{ $i=0 }}
                                    @foreach ($factures as $member)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $member->code}}</td>
                                        <td>{{ $member->is_paid}}</td>
                                        <td>            
                                            {!! Form::open(['method' => 'DELETE','route' => ['factures.destroy', $member->id],'style'=>'display:inline']) !!}
                                            {!! Form::button('Valider', ['class' => 'btn btn-danger','data-toggle'=>'confirmation']) !!}
                                            {!! Form::close() !!}
                                            <a href="{{ route('factures.show',$member->id) }}" class="on-default edit-row"><i class="fa fa-eye"></i></a>
                                               
                                        </td>
                                    </tr>
                                    @endforeach
                                   </table>@endcan
                                    {!! $factures->render() !!}
                                <script type="text/javascript">
                                    $(document).ready(function () {        
                                        $('[data-toggle=confirmation]').confirmation({
                                            rootSelector: '[data-toggle=confirmation]',
                                            onConfirm: function (event, element) {
                                                element.closest('form').submit();
                                            }
                                        });   
                                    });
                                </script>
                                </body>
                                </html>
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
 
    <script src="{{asset('js/jquery.min.js')}}"></script>
       
	    <!-- Examples -->
	    <script src="{{asset('plugins/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
	    <script src="{{asset('plugins/jquery-datatables-editable/jquery.dataTables.js')}}"></script> 
	    <script src="{{asset('plugins/datatables/dataTables.bootstrap.js')}}"></script>
	    <script src="{{asset('pages/datatables.editable.init.js')}}"></script>

            
                @endsection
@include('partials.sidebarright')
