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
                        @can('add_organisations')
                        <button type="button" class="btn btn-primary waves-effect waves-light btnadd pull-left"  data-toggle="modal" data-target="#con-close-modal" data-lien="produits/create"><i class="fa fa-plus"></i>&nbsp;Ajouter un produit </button> @endcan
                      
                        <div class="m-b-30 pull-right">
                              
                            @can('add_stocks')
                            <button type="button" class="btn btn-primary waves-effect waves-light btnadd"  data-toggle="modal" data-target="#con-close-modal" data-lien="stocks/create"><i class="fa fa-plus"></i>&nbsp;Ajouter </button> @endcan
                            @can('delete_stocks')
                            <button type="button" class="btn btn-primary waves-effect waves-light" id="boutdellAll" style="display: none;" data-toggle="modal" data-target="#deletemodal"><i class="fa fa-plus"></i>&nbsp;Suprimer </button> @endcan

                        </div>
                    </div>
                    @can('view_stocks')
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

                            @foreach($Stocks as $stock)
                                @php
                                $date=date('d-m-Y H:i:s', strtotime($stock->created_at));
                                @endphp
                            <tr class="gradeC"><td>
                                    <input  type="checkbox" class="check" onclick="verified();" value="{{ $stock->id }}"  name="etat">
                                </td>
                                    <td>
                       
                                            @foreach ( $Produits as $produit )
                                                @if ($produit->id===$stock->produit_id)
                                                {{ $produit->nom }}
                                                @endif
                                            @endforeach
                                            </td>
                                                                    <td>   {{ $stock->quantite_initial }}</td>
                                                                    <td> {{ $stock->quantite_final }}               </td>
                                                                    <td>  {{ $stock->quantite_limite }}</td>
                                                                     <td> {{ $stock->created_at}}</td>
                                <td class="actions">
                                    
                                    <a class="on-default seedetails btn btn-primary" data-toggle="modal" data-lien="stocks/{{$stock->id}}" data-id="{{$stock->id}}" data-target="#con-close-modal"><i class="fa fa-eye"></i></a> @can('edit_stocks','delete_stocks')


                                    <a data-toggle="modal" data-target="#con-close-modal" data-lien="stocks/{{$stock->id}}/edit" data-id="{{$stock->id}}" class="btn-delete btnedit btn btn-primary"><i class="fa fa-pencil"></i></a>
                                    <a data-toggle="modal" data-target="#deletemodal" data-id="{{$stock->id}}" data-lien="stocks/{{$stock->id}}" class="btn-delete btndelete btn btn-danger"><i class="fa fa-trash-o"></i></a>  @endcan
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
