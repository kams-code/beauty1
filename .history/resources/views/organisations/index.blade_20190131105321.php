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
                                <h4 class="pull-left page-title">Instituts</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="home">Accueil</a></li>
                                    <li class="active">Instituts</li>
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
                                                        <h4 class="modal-title">Ajouter un institut</h4> 
                                                    </div> 
                                                    <div class="modal-body"> 
                                                        <div class="row"> 
                                                             {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('organisations.store'),'files'=>true]) !!}
                                            <div class="col-md-12">
                                                <h4>Informations de base</h4>
                                            </div>
                                            <div class="col-md-12" style="padding: 0px">
                                                <center>
                                                    <img id="imgpreview" src="/images/camera_icon.png" style="width: 100px;cursor: pointer;" required>
                                                    <input id="inputimage" type="file" name="imageup" accept="images/*" style="display: none;" required>
                                               
                                                </center>
                                            </div>
                                            <div class="col-md-6" style="padding: 0px">
                                                <label for="inputEmail3" class="col-sm-12 control-label">{!! Form::label('nom','Nom*') !!}</label>
                                                <div class="col-sm-12">
                                                  {!! Form::text('nom',null, ['class' => 'form-control','required']) !!}
                                                 </div>
                                            </div>
                                            <div class="col-md-6" style="padding: 0px">
                                                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('telephone','Téléphone*') !!}</label>
                                                <div class="col-sm-12">
                                                  {!! Form::number('telephone',null, ['class' => 'form-control','required']) !!}
          </div>
                                            </div>
                                            <div class="col-md-6" style="padding: 0px">
                                                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('email','Email*') !!}</label>
                                                <div class="col-sm-12">
                                                  {!! Form::email('email',null, ['class' => 'form-control','required']) !!}
                                            </div>
                                            </div>
                                            <div class="col-md-6" style="padding: 0px">
                                                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('adresse','Adresse*') !!}</label>
                                                <div class="col-sm-12">
                                                  {!! Form::text('adresse',null, ['class' => 'form-control','required']) !!}
                                            </div>
                                            </div>
                                            <div class="col-md-6" style="padding: 0px">
                                                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('pays','Pays*') !!}</label>
                                                <div class="col-sm-12">
                                                  {!! Form::text('pays',null, ['class' => 'form-control','required']) !!}
                                           </div>
                                            </div>
                                            <div class="col-md-6" style="padding: 0px">
                                                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('ville','Ville*') !!}</label>
                                                <div class="col-sm-12">
                                                  {!! Form::text('ville',null, ['class' => 'form-control','required']) !!}
          </div>
                                            </div>
                                            <div class="col-md-12" style="padding: 0px">
                                                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('description','Description*') !!}</label>
                                                <div class="col-sm-12">
                                                  <textarea class="form-control" name="description" required></textarea>
          </div>
                                            </div>
                                            <div class="col-md-12">
                                                <h4 ><b >Informations de connexion</b></h4>
                                            </div>
                                            <div class="col-md-6" style="padding: 0px">
                                                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('name','Identifiant*') !!}</label>
                                                <div class="col-sm-12">
                                                  <input type="text" name="name" class="form-control" required>
          </div>
                                            </div>
                                            <div class="col-md-6" style="padding: 0px">
                                                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('password','Mot de passe*') !!}</label>
                                                <div class="col-sm-12">
                                                  <input type="password" name="password" class="form-control" required>
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

                                            @can('add_organisations')                                         <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-plus"></i>Ajouter </button>                                     @endcan
                                       
                                                                             
                                        </div>
                                    </div>
                                </div>
                                @can('view_organisations')                                                                  <table class="table table-bordered  table-striped" id="datatable-buttons">
                                   
    
                                    <thead>
                                        <tr>
                                                <th>#</th>
                                                <th>Image</th>
                                            <th>Nom</th>
                                            <th>Adresse</th>
                                            <th>Téléphone</th>
                                            <th>Email</th>
                                            
                                            
                                           
                                            <th>Date de création</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     
                                        @foreach($organisations as $organisation)
       
                   <tr class="gradeC">
                        <td>              <div >
                                                      
                                        
                                <input   id="checkbox" type="checkbox" name="etat" > 
                                <label for="checkbox"   >
                                        Etat
                                </label>
                          

</div></td>
                        <td>

                                <a href="#" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="{{asset('images/'.$organisation->image)}}" alt="user-img" > </a>
                                </td>
                                <td> </td>
                                            <td> {{ $organisation->nom }}</td>
                                            <td> {{ $organisation->adresse }}</td>
                                            <td> {{ $organisation->telephone}}</td>
                                            <td> {{ $organisation->email }}</td>
                                            
                                            
                                            <td> {{ $organisation->created_at }}</td>
                                             
                                            <td class="actions">
                                                    <div id="con-close-modal{{$organisation->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                                                            <div class="modal-dialog"> 
                                                                <div class="modal-content"> 
                                                                    <div class="modal-header"> 
                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                                                                        <h4 class="modal-title">Détail de l'institut</h4> 
                                                                    </div> 
                                                                    <div class="modal-body"> 
                                                                        <div class="row"> 
                                                                             {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('organisations.store'),'files'=>true]) !!}
                                                            <div class="col-md-12">
                                                                <h4>Informations de base</h4>
                                                            </div>
                                                            <div class="col-md-12">
                                                            <div class="col-md-3" style="padding: 0px">
                                                                <img id="imgpreview" src="{{asset('images/'.$organisation->image)}}" style="width: 100%;height: 130px;;cursor: pointer;">
                                                                
                                                                
                                                            </div>
                                                            <style>
                                                                .col-md-9 label{
                                                                    margin-bottom: 10px
                                                                }
                                                            </style>
                                                            <div class="col-md-9">
                                                                    <label>
                                                                        <strong >Nom:</strong> {{$organisation->nom}}
                                                                    </label>
                                                                    <br>
                                                                    <label>
                                                                    <strong>Téléphone:</strong> {{$organisation->telephone}}
                                                                </label>
                                                                    <br>
                                                                    <label>
                                                                    <strong>Email:</strong> {{$organisation->email}}
                                                                </label>
                                                                    <br>
                                                                    <label>
                                                                    <strong>Adresse:</strong> {{$organisation->adresse}}
                                                                </label>
                                                                    
                                                            </div>
                                                        </div>
                                                            <div class="col-md-12">
                                                           
                                                            <div class="col-md-6" style="padding: 4px">
                                                                    <strong>Pays:</strong>{{$organisation->pays}}
                                                                </div>
                                                            
                                                            <div class="col-md-6" style="padding: 4px">
                                                                    <strong>Ville:</strong>{{$organisation->ville}}
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12" >
                                                                    <div class="col-md-6" style="padding: 4px">
                                                                            <strong>Description:</strong>
                                                                        </div>
                                                                     <div class="col-sm-12">
                                                                        {{$organisation->description}}   


                          </div>
                          <label ></label>
                                                               
                                                            </div>
                                                            <div class="col-md-12">
                                                                <h4 ><b >Informations de connexion</b></h4>
                                                            </div>
                                                            <div class="col-md-6" style="padding: 0px">
                                                                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('name','Identifiant') !!}</label>
                                                                <div class="col-sm-12">
                                                                        {{$organisation->identifiant}}
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
                                                    <a  class="on-default seedetails btn btn-primary" data-toggle="modal" data-target="#con-close-modal{{$organisation->id}}"><i class="fa fa-eye"></i></a>
                                                @can('edit_organisations','delete_organisations')


                                                <div id="con-close-modaledit{{$organisation->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                                                        <div class="modal-dialog"> 
                                                            <div class="modal-content"> 
                                                                <div class="modal-header"> 
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                                                                    <h4 class="modal-title">Ajouter un institut</h4> 
                                                                </div> 
                                                                <div class="modal-body"> 
                                                                    <div class="row"> 

                                                                            {!! Form::open(['method' => 'PUT', 'url' => route('organisations.update', $organisation ),'files'=>true]) !!}
                                                                            <div class="col-md-12">
                                                            <h4>Informations de base</h4>
                                                        </div>
                                                       
                                                        <div class="col-md-6" style="padding: 0px">
                                                            <label for="inputEmail3" class="col-sm-12 control-label">{!! Form::label('nom','Nom*') !!}</label>
                                                            <div class="col-sm-12">
                                                              {!! Form::text('nom',null, ['class' => 'form-control','required']) !!}
                                                             </div>
                                                        </div>
                                                        <div class="col-md-6" style="padding: 0px">
                                                            <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('telephone','Téléphone*') !!}</label>
                                                            <div class="col-sm-12">
                                                              {!! Form::number('telephone',null, ['class' => 'form-control','required']) !!}
                      </div>
                                                        </div>
                                                        <div class="col-md-6" style="padding: 0px">
                                                            <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('email','Email*') !!}</label>
                                                            <div class="col-sm-12">
                                                              {!! Form::email('email',null, ['class' => 'form-control','required']) !!}
                      </div>
                                                        </div>
                                                        <div class="col-md-6" style="padding: 0px">
                                                            <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('adresse','Adresse*') !!}</label>
                                                            <div class="col-sm-12">
                                                              {!! Form::text('adresse',null, ['class' => 'form-control','required']) !!}
                      </div>
                                                        </div>
                                                        <div class="col-md-6" style="padding: 0px">
                                                            <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('pays','Pays*') !!}</label>
                                                            <div class="col-sm-12">
                                                              {!! Form::text('pays',null, ['class' => 'form-control','required']) !!}
                      </div>
                                                        </div>
                                                        <div class="col-md-6" style="padding: 0px">
                                                            <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('ville','Ville*') !!}</label>
                                                            <div class="col-sm-12">
                                                              {!! Form::text('ville',null, ['class' => 'form-control','required']) !!}
                      </div>
                                                        </div>
                                                        <div class="col-md-12" style="padding: 0px">
                                                            <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('description','Description*') !!}</label>
                                                            <div class="col-sm-12">
                                                              <textarea class="form-control" name="description" required></textarea>
                      </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <h4 ><b >Informations de connexion</b></h4>
                                                        </div>
                                                        <div class="col-md-6" style="padding: 0px">
                                                            <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('name','Identifiant*') !!}</label>
                                                            <div class="col-sm-12">
                                                              <input type="text" name="name" class="form-control" required>
                      </div>
                                                        </div>
                                                        <div class="col-md-6" style="padding: 0px">
                                                            <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('password','Mot de passe*') !!}</label>
                                                            <div class="col-sm-12">
                                                              <input type="password" name="password" class="form-control" required>
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
                                                    </div>
                                            
                 














                                        <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                                            <div class="modal-dialog"> 
                                                <div class="modal-content"> 
                                                    <div class="modal-header"> 
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                                                        <h4 class="modal-title">Ajouter un institut</h4> 
                                                    </div> 
                                                    <div class="modal-body"> 
                                                        <div class="row"> 
                                                             {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('organisations.update',),'files'=>true]) !!}
                                            <div class="col-md-12">
                                                <h4>Informations de base</h4>
                                            </div>
                                            <div class="col-md-12" style="padding: 0px">
                                                <center>
                                                    <img id="imgpreview" src="/images/camera_icon.png" style="width: 100px;cursor: pointer;" required>
                                                    <input id="inputimage" type="file" name="imageup" accept="images/*" style="display: none;" required>
                                               
                                                </center>
                                            </div>
                                            <div class="col-md-6" style="padding: 0px">
                                                <label for="inputEmail3" class="col-sm-12 control-label">{!! Form::label('nom','Nom*') !!}</label>
                                                <div class="col-sm-12">
                                                  {!! Form::text('nom',null, ['class' => 'form-control','required']) !!}
                                                 </div>
                                            </div>
                                            <div class="col-md-6" style="padding: 0px">
                                                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('telephone','Téléphone*') !!}</label>
                                                <div class="col-sm-12">
                                                  {!! Form::number('telephone',null, ['class' => 'form-control','required']) !!}
          </div>
                                            </div>
                                            <div class="col-md-6" style="padding: 0px">
                                                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('email','Email*') !!}</label>
                                                <div class="col-sm-12">
                                                  {!! Form::email('email',null, ['class' => 'form-control','required']) !!}
                                            </div>
                                            </div>
                                            <div class="col-md-6" style="padding: 0px">
                                                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('adresse','Adresse*') !!}</label>
                                                <div class="col-sm-12">
                                                  {!! Form::text('adresse',null, ['class' => 'form-control','required']) !!}
                                            </div>
                                            </div>
                                            <div class="col-md-6" style="padding: 0px">
                                                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('pays','Pays*') !!}</label>
                                                <div class="col-sm-12">
                                                  {!! Form::text('pays',null, ['class' => 'form-control','required']) !!}
                                            </div>
                                            </div>
                                            <div class="col-md-6" style="padding: 0px">
                                                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('ville','Ville*') !!}</label>
                                                <div class="col-sm-12">
                                                  {!! Form::text('ville',null, ['class' => 'form-control','required']) !!}
          </div>
                                            </div>
                                            <div class="col-md-12" style="padding: 0px">
                                                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('description','Description*') !!}</label>
                                                <div class="col-sm-12">
                                                  <textarea class="form-control" name="description" required></textarea>
          </div>
                                            </div>
                                            <div class="col-md-12">
                                                <h4 ><b >Informations de connexion</b></h4>
                                            </div>
                                            <div class="col-md-6" style="padding: 0px">
                                                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('name','Identifiant*') !!}</label>
                                                <div class="col-sm-12">
                                                  <input type="text" name="name" class="form-control" required>
          </div>
                                            </div>
                                            <div class="col-md-6" style="padding: 0px">
                                                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('password','Mot de passe*') !!}</label>
                                                <div class="col-sm-12">
                                                  <input type="password" name="password" class="form-control" required>
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
                                                 
                                                    <a data-toggle="modal" data-target="#editroleModal{{ $organisation->id }}" class="btn-delete btndelete btn btn-danger"><i class="fa fa-pencil"></i></a>
                                                                                                           
                                            {!! Form::open( ['method' => 'delete', 'url' => route('organisations.destroy', $organisation), 'style' => 'display: inline', 'onSubmit' => 'return confirm("Are yous sure wanted to delete it?")']) !!}
                                            <button type="submit" class="btn-delete btndelete btn btn-danger">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                        {!! Form::close() !!} 
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
 
                @endsection
@include('partials.sidebarright')
