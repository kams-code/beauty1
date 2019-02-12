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
                                <h4 class="pull-left page-title">factures</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="home">Accueil</a></li>
                                    <li class="active">factures</li>
                                </ol>
                            </div>
                        </div>
                        <div class="m-b-30 pull-right">

                                @can('add_services')
                                <button type="button" class="btn btn-primary waves-effect waves-light btnadd"  data-toggle="modal" data-target="#con-close-modal" data-lien="factures/create"><i class="fa fa-plus"></i>&nbsp;Créer </button> @endcan

                            </div>
                    </div>
                    
                    @can('view_factures')
                    <table class="table table-bordered  table-striped" id="datatable-buttons">

                        <thead>
                            <tr>
                                <th><input  id="checkAll" type="checkbox"></th>
                                <th>Code</th>
                                <th>Regler?</th>
                                <th>client</th>
                                                             <th>Date de création</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="tablebody">

                            @foreach($factures as $facture)
                                @php
                                $date=date('d-m-Y H:i:s', strtotime($facture->created_at));
                                @endphp
                            <tr class="gradeC">
                                <td>
                                    <input  type="checkbox" class="check" onclick="verified();" value="{{ $facture->id }}"  name="etat">
                                </td>
                              
                                <td> {{ $facture->code }}</td>
                                <td> {{ $facture->is_paid == 1 ? 'OUI' : 'NON'}}</td>
                                <td> {{ $facture->nom }}</td>

                                <td> {{ $date}}</td>

                                <td class="actions">
                                    <a href="{{ route('factures.show',$facture) }}" class="on-default seedetails btn btn-primary"><i class="fa fa-eye"></i></a>
 
 @can('edit_factures','delete_factures')


                                    <a data-toggle="modal" data-target="#con-close-modal" data-lien="factures/{{$facture->id}}/edit" data-id="{{$facture->id}}" class="btn-delete btnedit btn btn-primary"><i class="fa fa-pencil"></i></a>
                                    <a data-toggle="modal" data-target="#deletemodal" data-id="{{$facture->id}}" data-lien="factures/{{$facture->id}}" class="btn-delete btndelete btn btn-danger"><i class="fa fa-trash-o"></i></a>  @endcan
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
