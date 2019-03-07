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
                                <h4 class="pull-left page-title">Clients</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="home">Accueil</a></li>
                                    <li class="active">Clients</li>
                                </ol>
                            </div>
                        </div>
                        <div class="m-b-30 pull-right">

                            @can('add_clients')
                            <button type="button" class="btn btn-primary waves-effect waves-light btnadd"  data-toggle="modal" data-target="#con-close-modal" data-lien="clients/create"><i class="fa fa-plus"></i>&nbsp;Ajouter un client </button> @endcan
                            @can('delete_clients')
                            <button type="button" class="btn btn-primary waves-effect  btn-danger" id="boutdellAll" style="display: none;" data-toggle="modal" data-target="#deletemodal"><i class="fa fa-trash-o"></i>&nbsp;supprimer </button> @endcan

                        </div>
                    </div>
                    <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            @can('view_clients')
                            <table class="table table-bordered  table-striped" id="datatable-buttons">

                                <thead>
                                    <tr>
                                        <th><input  id="checkAll" type="checkbox"></th>
                                        <th>Image</th>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>Téléphone</th>
                                        <th>Email</th>
                                        <th>Ville</th>
                                        <th>Adresse</th>
                                        
                                        
                                        
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="tablebody">

                                    @foreach($clients as $client)
                                        @php
                                        $date=date('d-m-Y H:i:s', strtotime($client->created_at));
                                        @endphp
                                    <tr class="gradeC">
                                        <td>
                                            <input  type="checkbox" class="check" onclick="verified();" value="{{ $client->id }}"  name="etat">
                                        </td>
                                        <td>
                                            @if ($client->image!=null)
                                            <img style="width: 70px;height: 70px" src="{{asset('images/'.$client->image)}}" alt="user-img" >
                                                                                    @else
                                                                                     <img style="width: 70px;height: 70px" src="{{asset('images/profile.jpg')}}" alt="user-img" >
                                                                                    @endif 
                                        </td>
                                        <td> {{ $client->nom }}</td>
                                        <td> {{ $client->prenom }}</td>
                                        <td> {{ $client->telephone}}</td>
                                        <td> {{ $client->email }}</td>
                                        <td> {{ $client->ville }}</td>
                                        <td> {{ $client->adresse }}</td>
                                       

                                       

                                        <td class="actions">
                                                <a class="on-default seedetails btn btn-primary" data-toggle="modal" data-lien="clients/{{$client->id}}" data-id="{{$client->id}}" data-target="#con-close-modal"><i class="fa fa-history"></i></a> 
                                            
                                         @can('edit_clients','delete_clients')


                                            <a data-toggle="modal" data-target="#con-close-modal" data-lien="clients/{{$client->id}}/edit" data-id="{{$client->id}}" class="btn-success btnedit btn btn-primary"><i class="fa fa-pencil"></i></a>
                                            <a data-toggle="modal" data-target="#deletemodal" data-id="{{$client->id}}" data-lien="clients/{{$client->id}}" class="btn-delete btndelete btn btn-danger"><i class="fa fa-trash-o"></i></a>  @endcan
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>@endcan
                        </div>
                    </div>
                </div>
                </div>
                <!-- end: page -->

            </div>
            <!-- end Panel -->

        </div>
        <!-- container -->

    </div>
    <!-- content -->

    <footer class="footer text-right">
        2019 © QuickBeauty.
    </footer>

</div>

@endsection @include('partials.sidebarright')
