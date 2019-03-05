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
                                <h4 class="pull-left page-title">Taxes</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="home">Accueil</a></li>
                                    <li class="active">Taxess</li>
                                </ol>
                            </div>
                        </div>
                        <div class="m-b-30 pull-right">

                            @can('add_taxes')
                            <button type="button" class="btn btn-primary waves-effect waves-light btnadd"  data-toggle="modal" data-target="#con-close-modal" data-lien="taxes/create"><i class="fa fa-plus"></i>&nbsp;Ajouter une taxes </button> @endcan
                            @can('delete_taxes')
                            <button type="button" class="btn btn-primary waves-effect waves-light" id="boutdellAll" style="display: none;" data-toggle="modal" data-target="#deletemodal"><i class="fa fa-plus"></i>&nbsp;Suprimer </button> @endcan

                        </div>
                    </div>
                    <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            
                            <table class="table table-bordered  table-striped" id="datatable-buttons">

                                <thead>
                                    <tr>
                                        <th><input  id="checkAll" type="checkbox"></th>
                                    
                                        <th>Intitule</th>
                                        <th>Type de valeur</th>
                                        <th>Valeur</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="tablebody">

                                    @foreach($taxes as $categorie)
                                        @php
                                        $date=date('d-m-Y H:i:s', strtotime($categorie->created_at));
                                        @endphp
                                    <tr class="gradeC">
                                        <td>
                                            <input  type="checkbox" class="check" onclick="verified();" value="{{ $categorie->id }}"  name="etat">
                                        </td>
                                       
                                        <td style="width:600px"> {{ $categorie->intitule }}</td>
                                        <td style="width:600px"> {{ $categorie->typevaleur }}</td>
                                        <td style="width:600px"> {{ $categorie->valeur }}</td>

                                        <td class="actions">
                                            
                                             @can('edit_taxes','delete_taxes')


                                            <a data-toggle="modal" data-target="#con-close-modal" data-lien="taxes/{{$categorie->id}}/edit" data-id="{{$categorie->id}}" class="btn-delete btnedit btn btn-primary"><i class="fa fa-pencil"></i></a>
                                            <a data-toggle="modal" data-target="#deletemodal" data-id="{{$categorie->id}}" data-lien="taxes/{{$categorie->id}}" class="btn-delete btndelete btn btn-danger"><i class="fa fa-trash-o"></i></a>  @endcan
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
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
