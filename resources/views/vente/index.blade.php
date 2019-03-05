
@extends('layouts.mainlayoutt')
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
                                <h4 class="pull-left page-title">Promotions</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="home">Accueil</a></li>
                                    <li class="active">Promotions</li>
                                </ol>
                            </div>
                        </div>
                        <div class="m-b-30 pull-right">

                            @can('add_ventes')
                            <button type="button" class="btn btn-primary waves-effect waves-light btnadd"  data-toggle="modal" data-target="#con-close-modal" data-lien="ventes/create"><i class="fa fa-plus"></i>&nbsp;Ajouter un Promotion </button> @endcan
                            @can('delete_ventes')
                            <button type="button" class="btn btn-primary waves-effect waves-light" id="boutdellAll" style="display: none;" data-toggle="modal" data-target="#deletemodal"><i class="fa fa-plus"></i>&nbsp;Suprimer </button> @endcan

                        </div>
                    </div>
                    <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                                <br>
                              <script>$(document).ready(function() {
                                        $(".js-example-basic-single").select2();
                                        $(".js-example-basic-multiple").select2();
                                      });</script>
                                
                            @can('view_ventes')
                            <table class="table table-bordered  table-striped" id="datatable-buttons">

                                <thead>
                                    <tr>
                                        <th><input  id="checkAll" type="checkbox"></th>
                                        <th>Titre</th>
                                                                            <th>Type</th>
                                                                            <th>Etat</th>
                                        <th>Date de début</th>
                                        <th>Date de fin</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="tablebody">

                                    @foreach($ventes as $vente)
                                     
                                    <tr class="gradeC">
                                        <td>
                                            <input  type="checkbox" class="check" onclick="verified();" value="{{ $vente->id }}"  name="etat">
                                        </td>
                                      
                                        <td> {{ $vente->titre }}</td>
                                        <td> {{ $vente->type }}</td>
                                        <td> {{ $vente['etat']}}</td>
                                        <td> {{ $vente->datedebut }}</td>

                                        <td> {{ $vente->datefin }}</td>

                                        <td class="actions">
                                            
                                            <a class="on-default seedetails btn btn-primary" data-toggle="modal" data-lien="ventes/{{$vente->id}}" data-id="{{$vente->id}}" data-target="#con-close-modal"><i class="fa fa-eye"></i></a> @can('edit_ventes','delete_ventes')


                                            <a data-toggle="modal" data-target="#con-close-modal" data-lien="ventes/{{$vente->id}}/edit" data-id="{{$vente->id}}" class="btn-delete btnedit btn btn-primary"><i class="fa fa-pencil"></i></a>
                                            <a data-toggle="modal" data-target="#deletemodal" data-id="{{$vente->id}}" data-lien="ventes/{{$vente->id}}" class="btn-delete btndelete btn btn-danger"><i class="fa fa-trash-o"></i></a>  @endcan
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
