
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

                            @can('add_tickets')
                            <button type="button" class="btn btn-primary waves-effect waves-light btnadd"  data-toggle="modal" data-target="#con-close-modal" data-lien="tickets/create"><i class="fa fa-plus"></i>&nbsp;Ajouter une promotion </button> @endcan
                            @can('delete_tickets')
                            <button type="button" class="btn btn-primary waves-effect  btn-danger" id="boutdellAll" style="display: none;" data-toggle="modal" data-target="#deletemodal"><i class="fa fa-trash-o"></i>&nbsp;supprimer </button> @endcan

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
                                
                            @can('view_tickets')
                            <table class="table table-bordered  table-striped" id="datatable-buttons">

                                <thead>
                                    <tr>
                                        <th><input  id="checkAll" type="checkbox"></th>
                                        <th>Titre</th>
                                                                            <th>Type</th>
                                                                            
                                        <th>Date de début</th>
                                        <th>Date de fin</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="tablebody">

                                    @foreach($Tickets as $ticket)
                                     
                                    <tr class="gradeC">
                                        <td>
                                            <input  type="checkbox" class="check" onclick="verified();" value="{{ $ticket->id }}"  name="etat">
                                        </td>
                                      
                                        <td> {{ $ticket->titre }}</td>
                                        <td> {{ $ticket->type }}</td>
                                       
                                        <td> {{ $ticket->datedebut }}</td>

                                        <td> {{ $ticket->datefin }}</td>

                                        <td class="actions">
                                            
                                            <a class="on-default seedetails btn btn-primary" data-toggle="modal" data-lien="tickets/{{$ticket->id}}" data-id="{{$ticket->id}}" data-target="#con-close-modal"><i class="fa fa-eye"></i></a> @can('edit_tickets','delete_tickets')


                                            <a data-toggle="modal" data-target="#con-close-modal" data-lien="tickets/{{$ticket->id}}/edit" data-id="{{$ticket->id}}" class="btn-success btnedit btn btn-primary"><i class="fa fa-pencil"></i></a>
                                            <a data-toggle="modal" data-target="#deletemodal" data-id="{{$ticket->id}}" data-lien="tickets/{{$ticket->id}}" class="btn-delete btndelete btn btn-danger"><i class="fa fa-trash-o"></i></a>  @endcan
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
