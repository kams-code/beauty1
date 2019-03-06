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
                                <h4 class="pull-left page-title">Planning</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="home">Accueil</a></li>
                                    <li class="active">Plannings</li>
                                </ol>
                            </div>
                        </div>
                        <div class="m-b-30 pull-right">

                            @can('add_plannings')
                            <button type="button" class="btn btn-primary waves-effect waves-light btnadd"  data-toggle="modal" data-target="#con-close-modal" data-lien="plannings/create"><i class="fa fa-plus"></i>&nbsp;Ajouter une Planning </button> @endcan
                            @can('delete_plannings')
                            <button type="button" class="btn btn-primary waves-effect  btn-danger" id="boutdellAll" style="display: none;" data-toggle="modal" data-target="#deletemodal"><i class="fa fa-trash-o"></i>&nbsp;supprimer </button> @endcan

                        </div>
                    </div>
                    <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                         
                            <table class="table table-bordered  table-striped" id="datatable-buttons">

                                <thead>
                                    <tr>
                                            
                                        <th><input  id="checkAll" type="checkbox"></th>
                                    
                                        <th>Nom de l'utilisateur</th>
                                        
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="tablebody">
                                    @foreach ($personnels as $personnel)
                                    @foreach ($plannings as $planning)
                                    @if ($personnel['id']==$planning['user_id'])
                                        
                                   
                                    <tr class="gradeC">
                                            <td>
                                                    <input  type="checkbox" class="check" onclick="verified();" value="{{ $personnel->id }}"  name="etat">
                                                </td>
                                    <td style="width:600px"> {{ $personnel->nom }}</td>
                                   
                                    <td class="actions">
                                            
                                            @can('edit_plannings','delete_plannings')


                                           <a data-toggle="modal" data-target="#con-close-modal" data-lien="plannings/{{$personnel->id}}/edit" data-id="{{$personnel->id}}" class="btn-success btnedit btn btn-primary"><i class="fa fa-pencil"></i></a>
                                           <a data-toggle="modal" data-target="#deletemodal" data-id="{{$personnel->id}}" data-lien="plannings/{{$personnel->id}}" class="btn-delete btndelete btn btn-danger"><i class="fa fa-trash-o"></i></a>  @endcan
                                       </td>
                                   </tr>
                                   @endif
                                   @endforeach

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

</div>@endsection 