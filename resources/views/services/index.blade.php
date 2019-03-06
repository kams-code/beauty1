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
                                <h4 class="pull-left page-title">Services</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="home">Accueil</a></li>
                                    <li class="active">Services</li>
                                </ol>
                            </div>
                        </div>
                        <div class="m-b-30 pull-right">

                            @can('add_services')
                            <button type="button" class="btn btn-primary waves-effect waves-light btnadd"  data-toggle="modal" data-target="#con-close-modal" data-lien="services/create"><i class="fa fa-plus"></i>&nbsp;Ajouter un service </button> 
                            @endcan
                            @can('delete_services')
                            <button type="button" class="btn btn-primary waves-effect  btn-danger" id="boutdellAll" style="display: none;" data-toggle="modal" data-target="#deletemodal"><i class="fa fa-trash-o"></i>&nbsp;supprimer </button> 
                            @endcan

                        </div>
                        <!-- SECTION FILTER
                        ================================================== -->  
                        <div class="row">
                            <div class="col-md-12">
                                @can('view_services')
                                <table class="table table-bordered  table-striped" id="datatable-buttons">

                                    <thead>
                                        <tr>
                                            <th><input  id="checkAll" type="checkbox"></th>
                                            <th>Image</th>
                                            <th>Nom</th>
                                            <th>Code</th>
                                            <th>Catégorie</th>
                                            <th>Montant</th>
                                            <th>Affecter à</th>
                                            <th>Description</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tablebody">

                                        @foreach($services as $service)
                                            @php
                                            $date=date('d-m-Y H:i:s', strtotime($service->created_at));
                                            @endphp
                                        <tr class="gradeC">
                                            <td>
                                                <input  type="checkbox" class="check" onclick="verified();" value="{{ $service->id }}"  name="etat">
                                            </td>
                                            <td>

                                                    @if ($service->image!=null)
                                                    <img style="width: 70px;height: 70px" src="{{asset('images/'.$service->image)}}" alt="user-img" > 
                                                        @else
                                                        <img style="width: 70px;height: 70px" src="{{asset('images/'."1551778501.png")}}" alt="user-img" >
                                                    @endif
                                                
                                            </td>
                                            <td> {{ $service->nom }}</td>
                                            <td> {{ $service->code }}</td>
                                            <td> 
                                            @foreach($categories as $categorie)
                                            @if($service->categorie_id==$categorie->id)
                                            {{ $categorie->nom}}
                                            @endif
                                            @endforeach</td>
                                            <td> {{ $service->montant }}</td>
                                            <td><?php
                                                        $list= "";
                                                    ?>
                                                @foreach ($users as $user )
                                                    
                                                    @foreach ($usersvi as $uservi )

                                                        <?php

                                                            if ($uservi->services_id == $service->id) {
                                                                if ($uservi->user_id == $user->id) {
                                                                    $list .=",".$user->nom;
                                                                }
                                                            }
                                                            
                                                            
                                                        ?>
                                                    @endforeach
                                            
                                                @endforeach
                                                <?php
                                                    echo substr($list, 1);
                                                ?>
                                            </td>
                                           
                                            <td> {{ $service->description }}</td>

                                            <td class="actions">
                                                
                                              @can('edit_organisations','delete_organisations')

                                                <a data-toggle="modal" data-target="#con-close-modal" data-lien="services/{{$service->id}}/edit" data-id="{{$service->id}}" class="btn-success btnedit btn btn-primary"   title="Editer"><i class="fa fa-pencil"></i></a>
                                                <a data-toggle="modal" data-target="#deletemodal" data-id="{{$service->id}}" data-lien="services/{{$service->id}}" class="btn-delete btndelete btn btn-danger"  title="Supprimer"><i class="fa fa-trash-o"></i></a>
                                                <a data-toggle="modal" data-target="#con-close-modal" data-lien="servicespersonnel/{{$service->id}}" data-id="{{$service->id}}" class="btn-delete btnedit btn btn-primary" title="Affecter"><i class="fa fa-user"></i></a>

                                                @endcan
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>@endcan
                            </div>
                        </div>

                    </div> <!-- container -->
                               
                </div> <!-- content -->
            </div>
                <footer class="footer text-right">
                    2016 © Moltran.
                </footer>
            </div>


@endsection @include('partials.sidebarright')