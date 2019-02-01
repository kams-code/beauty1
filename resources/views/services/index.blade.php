@extends('layouts.mainlayout')
@include('partials.topbar')
@include('partials.sidebar')

<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Gallery</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="home">Acceuil</a></li>
                                    <li class="active">Service</li>
                                </ol>
                            </div>
                        </div>

                        <!-- SECTION FILTER
                        ================================================== -->  
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="portfolioFilter">
                                    <a href="#" data-filter="*" class="current">tous les services</a>
                                    <a href="#" data-filter=".webdesign">Web Design</a>
                                    <a href="#" data-filter=".graphicdesign">Graphic Design</a>
                                    <a href="#" data-filter=".illustrator">Illustrator</a>
                                    <a href="#" data-filter=".photography">Photography</a>
                                </div>
                            </div>
                        </div>

<<<<<<< HEAD
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
                                                        <h4 class="modal-title">Services</h4> 
                                                    </div> 
                                                    <div class="modal-body"> 
                                                        <div class="row"> 
                                                             {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('services.store'),'files'=>true]) !!}
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">{!! Form::label('nom','Nom') !!}</label>
                                                <div class="col-sm-9">
                                                  {!! Form::text('nom',null, ['class' => 'form-control']) !!}
                                                 </div>
                                            </div>
                                             <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">{!! Form::label('code','code') !!}</label>
                                                <div class="col-sm-9">
                                                  {!! Form::text('code',null, ['class' => 'form-control']) !!}
                                                 </div>
                                            </div>
                                            <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('image','Logo') !!}</label>
                                                    <div class="col-sm-9">
                                                      {!! Form::file('image') !!}
              </div>
                                                </div>
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('montant','montant') !!}</label>
                                                <div class="col-sm-9">
                                                  {!! Form::text('montant',null, ['class' => 'form-control']) !!}
          </div>
                                            </div>
                                            
                                       <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('description','Description') !!}</label>
                                                <div class="col-sm-9">
                                          {!! Form::text('description',null, ['class' => 'form-control']) !!}
                         
     
          </div>
                                            </div>  
                                            
=======
                        <div class="port">
                            <div class="portfolioContainer row">
                            <div class="m-b-30 pull-right">
>>>>>>> cb51a88d04e18f675a4f53417688c4b9a978eac5

                                @can('add_services')
                                <button type="button" class="btn btn-primary waves-effect waves-light btnadd"  data-toggle="modal" data-target="#con-close-modal" data-lien="services/create"><i class="fa fa-plus"></i>&nbsp;Ajouter </button> @endcan

                            </div> 
                                @foreach($services as $service)
                                <div class="col-sm-6 col-lg-3 col-md-4 webdesign illustrator">
                                    <div class="gal-detail thumb">
                                        <a href="assets/images/gallery/1.jpg" class="image-popup" title="Screenshot-1">
                                        <a data-toggle="modal" data-target="#con-close-modal" data-lien="organisations/{{$service->id}}/edit" data-id="{{$service->id}}" class="btn-delete btnedit btn btn-primary pull-right">{{$service->montant}}</i></a>
                                            <img  src="{{asset('images/'.$service->image)}}" class="thumb-img" alt="work-thumbnail">
                                        </a>
                                        <div  >
                                            <div class="col-sm-12 control-label" style="padding: 0px">
                                               <h4>{{ $service->nom }} </h4>
                                               <p>{{ $service->description}} </p>
                                            
                                            </div> 
                                            <a class="on-default seedetails btn btn-primary" data-toggle="modal" data-lien="services/{{$service->id}}" data-id="{{$service->id}}" data-target="#con-close-modal"><i class="fa fa-eye"></i></a> {{--@can('edit_service','delete_service')--}} 
                                            
<<<<<<< HEAD
                                     

                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('categorie_id','Categorie') !!}</label>
                                                <div class="col-sm-9">
                                                    {!! Form::select('categorie_id',$categories,null, ['class' => 'form-control']) !!}
                         
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

                                                                                 @can('add_services')                                         <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Ajouter <i class="fa fa-plus"></i></button>                                     @endcan
                                       
                                                                             
                                        </div>
                                    </div>
                                </div>
                                @can('view_reservations')                                                                  <table id="datatable-buttons" class="table table-bordered  table-striped" id="datatable-editable">
                                   
    
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Code</th>
                                            <th>Nom</th>
                                            <th>Desccription</th>
                                            <th>Date de création</th>
                                            <th>Employes</th>
                                            <th>En promotion</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     
                                        @foreach($services as $service)
       
                   <tr class="gradeC">

                                            <td>
                                                <a href="#" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="{{asset('images/'.$service->image)}}" alt="user-img" > </a>
                                                </td>
                                            <td> {{ $service->code }}</td>
                                            <td> {{ $service->nom }}</td>
                                            <td> {{ $service->description }}</td>
                                            <td> {{ $service->created_at }}</td>
                                            <td> {{ $service->is_promote }}</td>
                                    
                                     <td>
                                  
                                              @foreach ($Users as $ser)
                                              
                                              @endforeach
                                             
                                            </td>
                                            <td> {{ $service->is_promote }}</td>
                                            <td class="actions">
                                                @can('edit_services','delete_services')
                                                {!! Form::open( ['method' => 'delete', 'url' => route('services.destroy', $service->id), 'style' => 'display: inline', 'onSubmit' => 'return confirm("Are yous sure wanted to delete it?")']) !!}
                                                <button type="submit" class="btn-delete btn btn-sm btn-light">
                                                    <i class="fa fa-trash-o"></i>
                                                </button>
                                            {!! Form::close() !!}
                                                <a href="{{ route('services.edit',$service) }}" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                                <a href="{{ route('services.edit',$service) }}" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                                <a href="{{ route('services.edit',$service) }}" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            @endcan
                                            </td>
                                        </tr> 
    @endforeach
                                       
                                    </tbody>
                               </table>@endcan
                            </div>
                            <!-- end: page -->
=======
                                                <a data-toggle="modal" data-target="#con-close-modal" data-lien="organisations/{{$service->id}}/edit" data-id="{{$service->id}}" class="btn-delete btnedit btn btn-primary"><i class="fa fa-pencil"></i></a>
                                                <a data-toggle="modal" data-target="#deletemodal" data-id="{{$service->id}}" data-lien="organisations/{{$service->id}}" class="btn-delete btndelete btn btn-danger"><i class="fa fa-trash-o"></i></a> 
                                          {{--@endcan--}}  
                               
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                                

>>>>>>> cb51a88d04e18f675a4f53417688c4b9a978eac5

                                
                                

                            </div>
                        </div> <!-- End row -->

                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    2016 © Moltran.
                </footer>

            </div>