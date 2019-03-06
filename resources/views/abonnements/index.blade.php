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
                                <h4 class="pull-left page-title">Abonnements</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="home">Accueil</a></li>
                                    <li class="active">Abonnements</li>
                                </ol>
                            </div>
                        </div>
                        <div class="m-b-30 pull-right">

                            @can('add_organisations')
                            <button type="button" class="btn btn-primary waves-effect waves-light btnadd"  data-toggle="modal" data-target="#con-close-modal" data-lien="abonnements/create"><i class="fa fa-plus"></i>&nbsp;Ajouter </button> @endcan
                            @can('delete_organisations')
                            <button type="button" class="btn btn-primary waves-effect  btn-danger" id="boutdellAll" style="display: none;" data-toggle="modal" data-target="#deletemodal"><i class="fa fa-plus"></i>&nbsp;Ajouter </button> @endcan

                        </div>
                    </div>
                    @can('view_organisations')
                    <table class="table table-bordered  table-striped" id="datatable-buttons">

                        <thead>
                            <tr>
                                <th><input  id="checkAll" type="checkbox"></th>
                                <th>Nom de l'institut</th>
                                <th>Type d'abonnement</th>
                                <th>Etat</th>
                                <th>Date de création</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="tablebody">

                            @foreach($abonnements as $abonnement)
                                @php
                                $date=date('d-m-Y H:i:s', strtotime($abonnement->created_at));
                                @endphp
                            <tr class="gradeC">
                                <td>
                                    <input  type="checkbox" class="check" onclick="verified();" value="{{ $abonnement->id }}"  name="etat">
                                </td>
                                <td>
                                    {{$abonnement->nominstitut}}                                </td>
                                <td> {{ $abonnement->type }}</td>
                                <td> {{ $abonnement->etat }}</td>

                                <td> {{ $date}}</td>

                                <td class="actions">
                                    
                                    <a class="on-default seedetails btn btn-primary" data-toggle="modal" data-lien="abonnements/{{$abonnement->id}}" data-id="{{$abonnement->id}}" data-target="#con-close-modal"><i class="fa fa-eye"></i></a> @can('edit_organisations','delete_organisations')


                                    <a data-toggle="modal" data-target="#con-close-modal" data-lien="abonnements/{{$abonnement->id}}/edit" data-id="{{$abonnement->id}}" class="btn-delete btnedit btn btn-primary"><i class="fa fa-pencil"></i></a>
                                    <a data-toggle="modal" data-target="#deletemodal" data-id="{{$abonnement->id}}" data-lien="abonnements/{{$abonnement->id}}" class="btn-delete btndelete btn btn-danger"><i class="fa fa-trash-o"></i></a>  @endcan
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
