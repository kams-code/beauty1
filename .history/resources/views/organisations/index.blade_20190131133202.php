@extends('layouts.mainlayout') @include('partials.topbar') @include('partials.sidebar') @section('content')
<style type="text/css">
    .form-horizontal .control-label {
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

                                @can('add_organisations')
                                <button type="button" class="btn btn-primary waves-effect waves-light btnadd"  data-toggle="modal" data-target="#con-close-modal" data-lien="organisations/create"><i class="fa fa-plus"></i>&nbsp;Ajouter </button> @endcan

                            </div>
                        </div>
                    </div>
                    @can('view_organisations')
                    <table class="table table-bordered  table-striped" id="datatable-buttons">

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
                                @php
                                $date=date('d-m-Y H:i:s', strtotime($organisation->created_at));
                                @endphp
                            <tr class="gradeC">
                                <td>
                                    <input id="checkbox" type="checkbox" name="etat">
                                </td>
                                <td>
                                    <img style="width: 70px;height: 70px" src="{{asset('images/'.$organisation->image)}}" alt="user-img" >
                                </td>
                                <td> {{ $organisation->nom }}</td>
                                <td> {{ $organisation->adresse }}</td>
                                <td> {{ $organisation->telephone}}</td>
                                <td> {{ $organisation->email }}</td>

                                <td> {{ $date}}->format('</td>

                                <td class="actions">
                                    
                                    <a class="on-default seedetails btn btn-primary" data-toggle="modal" data-lien="organisations" data-id="{{$organisation}}" data-target="#con-close-modal"><i class="fa fa-eye"></i></a> @can('edit_organisations','delete_organisations')


                                    <a data-toggle="modal" data-target="#con-close-modal" data-lien="organisations" data-id="{{$organisation->id}}" class="btn-delete btnedit btn btn-primary"><i class="fa fa-pencil"></i></a>
                                    <a data-toggle="modal" data-target="#deletemodal" data-id="{{$organisation->id}}" data-lien="organisations" class="btn-delete btndelete btn btn-danger"><i class="fa fa-trash-o"></i></a>  @endcan
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