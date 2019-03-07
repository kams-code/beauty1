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
                                <h4 class="pull-left page-title">ventes</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="home">Accueil</a></li>
                                    <li class="active">ventes</li>
                                </ol>
                            </div>
                        </div>
                        @can('add_organisations')
                        <button type="button" class="btn btn-primary waves-effect waves-light btnadd pull-left"  data-toggle="modal" data-target="#con-close-modal" data-lien="produits/create"><i class="fa fa-plus"></i>&nbsp;Ajouter un produit </button> @endcan
                      
                        <div class="m-b-30 pull-right">
                              
                            @can('add_ventes')
                            <button type="button" class="btn btn-primary waves-effect waves-light btnadd"  data-toggle="modal" data-target="#con-close-modal" data-lien="ventes/create"><i class="fa fa-pencil"></i>&nbsp;Ajouter </button> @endcan
                          
                            @can('delete_ventes')
                            <button type="button" class="btn btn-primary waves-effect  btn-danger" id="boutdellAll" style="display: none;" data-toggle="modal" data-target="#deletemodal"><i class="fa fa-trash-o"></i>&nbsp;supprimer </button> @endcan

                        </div>
                    </div>
                    @can('view_ventes')
                    <table class="table table-bordered  table-striped" id="datatable-buttons">

                        <thead>
                            <tr>
                                <th><input  id="checkAll" type="checkbox"></th>
                                <th>Produit</th>
                                            <th>Quantité initial</th>
                                            <th>Quantité final</th>
                                            <th>Quantité limite</th>
                                            <th>date</th>
                                            <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="tablebody">

                            @foreach($ventes as $vente)
                                @php
                                $date=date('d-m-Y H:i:s', strtotime($vente->created_at));
                                @endphp
                            <tr class="gradeC"><td>
                                    <input  type="checkbox" class="check" onclick="verified();" value="{{ $vente->id }}"  name="etat">
                                </td>
                                    <td>
                       
                                            @foreach ( $Produits as $produit )
                                                @if ($produit->id===$vente->produit_id)
                                                {{ $produit->nom }}
                                                @endif
                                            @endforeach
                                            </td>
                                                                    <td>   {{ $vente->quantite_initial }}</td>
                                                                    <td> {{ $vente->quantite_final }}               </td>
                                                                    <td>  {{ $vente->quantite_limite }}</td>
                                                                     <td> {{ $vente->created_at}}</td>
                                <td class="actions">
                                    
                                    <a class="on-default seedetails btn btn-primary" data-toggle="modal" data-lien="ventes/{{$vente->id}}" data-id="{{$vente->id}}" data-target="#con-close-modal"><i class="fa fa-eye"></i></a> @can('edit_ventes','delete_ventes')


                                    <a data-toggle="modal" data-target="#deletemodal" data-id="{{$vente->id}}" data-lien="ventes/{{$vente->id}}" class="btn-delete btndelete btn btn-danger"><i class="fa fa-trash-o"></i></a>  @endcan
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
