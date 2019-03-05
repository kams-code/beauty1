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
                                <h4 class="pull-left page-title">Moyen de paiement</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="home">Accueil</a></li>
                                    <li class="active">Moyen de paiement</li>
                                </ol>
                            </div>
                        </div>
                        <div class="m-b-30 pull-right">

                            @can('add_paiements')
                            <button type="button" class="btn btn-primary waves-effect waves-light btnadd"  data-toggle="modal" data-target="#con-close-modal" data-lien="paiements/create"><i class="fa fa-plus"></i>&nbsp;Ajouter un moyen de paiement </button> @endcan
                            @can('delete_paiements')
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
                                        <th>Image</th>
                                        <th>Nom</th>
                                        
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="tablebody">

                                    @foreach($paiements as $paiement)
                                        @php
                                        $date=date('d-m-Y H:i:s', strtotime($paiement->created_at));
                                        @endphp
                                    <tr class="gradeC">
                                        <td>
                                            <input  type="checkbox" class="check" onclick="verified();" value="{{ $paiement->id }}"  name="etat">
                                        </td>
                                        <td>
                                            @if ($paiement->image!=null)
                                                <img style="width: 70px;height: 70px" src="{{asset('images/'.$paiement->image)}}" alt="user-img" >
                                            
                                            @else
                                                <img style="width: 70px;height: 70px" src="/images/logo_dark.png" alt="user-img" >
                                            @endif
                                            
                                        </td>
                                        <td style="width:600px"> {{ $paiement->intitule }}</td>
                                        

                                        <td class="actions">
                                            
                                             @can('edit_paiements','delete_paiements')


                                            <a data-toggle="modal" data-target="#con-close-modal" data-lien="paiements/{{$paiement->id}}/edit" data-id="{{$paiement->id}}" class="btn-delete btnedit btn btn-primary"><i class="fa fa-pencil"></i></a>
                                            <a data-toggle="modal" data-target="#deletemodal" data-id="{{$paiement->id}}" data-lien="paiements/{{$paiement->id}}" class="btn-delete btndelete btn btn-danger"><i class="fa fa-trash-o"></i></a>  @endcan
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
