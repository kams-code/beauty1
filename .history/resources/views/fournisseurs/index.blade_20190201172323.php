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
                        <div class="m-b-30 pull-right">

                            @can('add_fournisseurs')
                            <button type="button" class="btn btn-primary waves-effect waves-light btnadd"  data-toggle="modal" data-target="#con-close-modal" data-lien="fournisseurs/create"><i class="fa fa-plus"></i>&nbsp;Ajouter </button> @endcan
                            @can('delete_fournisseurs')
                            <button type="button" class="btn btn-primary waves-effect waves-light" id="boutdellAll" style="display: none;" data-toggle="modal" data-target="#deletemodal"><i class="fa fa-plus"></i>&nbsp;Ajouter </button> @endcan

                        </div>
                    </div>
                    @can('view_fournisseurs')
                    <table class="table table-bordered  table-striped" id="datatable-buttons">

                        <thead>
                            <tr>
                                <th><input  id="checkAll" type="checkbox"></th>
                                <th>Image</th>
                                <th>Nom</th>
                                <th>Adresse</th>
                                <th>Téléphone</th>
                                <th>Email</th>
                                <th>Pays</th>
                                <th>Ville</th>
                                <th>Date de création</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="tablebody">

                            @foreach($fournisseurs as $fournisseur)
                                @php
                                $date=date('d-m-Y H:i:s', strtotime($fournisseur->created_at));
                                @endphp
                            <tr class="gradeC">
                                <td>
                                    <input  type="checkbox" class="check" onclick="verified();" value="{{ $fournisseur->id }}"  name="etat">
                                </td>
                                <td>
                                    <img style="width: 70px;height: 70px" src="{{asset('images/'.$fournisseur->image)}}" alt="user-img" >
                                </td>
                                <td> {{ $fournisseur->nom }}</td>
                                <td> {{ $fournisseur->adresse }}</td>
                                <td> {{ $fournisseur->telephone}}</td>
                                <td> {{ $fournisseur->email }}</td>
                                <td> {{ $fournisseur->email }}</td>

                                <td> {{ $date}}</td>

                                <td class="actions">
                                    
                                    <a class="on-default seedetails btn btn-primary" data-toggle="modal" data-lien="fournisseurs/{{$fournisseur->id}}" data-id="{{$fournisseur->id}}" data-target="#con-close-modal"><i class="fa fa-eye"></i></a> @can('edit_fournisseurs','delete_fournisseurs')


                                    <a data-toggle="modal" data-target="#con-close-modal" data-lien="fournisseurs/{{$fournisseur->id}}/edit" data-id="{{$fournisseur->id}}" class="btn-delete btnedit btn btn-primary"><i class="fa fa-pencil"></i></a>
                                    <a data-toggle="modal" data-target="#deletemodal" data-id="{{$fournisseur->id}}" data-lien="fournisseurs/{{$fournisseur->id}}" class="btn-delete btndelete btn btn-danger"><i class="fa fa-trash-o"></i></a>  @endcan
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>@endcan
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
