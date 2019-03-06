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
                                <h4 class="pull-left page-title">personnels</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="home">Accueil</a></li>
                                    <li class="active">personnels</li>
                                </ol>
                            </div>
                        </div>
                        <div class="m-b-30 pull-right">

                         
                            <button type="button" class="btn btn-primary waves-effect waves-light btnadd"  data-toggle="modal" data-target="#con-close-modal" data-lien="personnels/create"><i class="fa fa-plus"></i>&nbsp;Ajouter un personnel </button>
                          
                            <button type="button" class="btn btn-primary waves-effect  btn-danger" id="boutdellAll" style="display: none;" data-toggle="modal" data-target="#deletemodal"><i class="fa fa-trash-o"></i>&nbsp;supprimer </button>

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
                                        <th>Prenom</th>
                                        <th>Téléphone</th>
                                        <th>Email</th>
                                        <th>Ville</th>
                                        <th>Adresse</th>
                                        
                                        
                                        
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="tablebody">

                                    @foreach($personnels as $personnel)
                                        @php
                                        $date=date('d-m-Y H:i:s', strtotime($personnel->created_at));
                                        @endphp
                                    <tr class="gradeC">
                                        <td>
                                            <input  type="checkbox" class="check" onclick="verified();" value="{{ $personnel->id }}"  name="etat">
                                        </td>
                                        <td>
                                            <img style="width: 70px;height: 70px" src="{{asset('images/'.$personnel->image)}}" alt="user-img" >
                                        </td>
                                        <td> {{ $personnel->nom }}</td>
                                        <td> {{ $personnel->prenom }}</td>
                                        <td> {{ $personnel->telephone}}</td>
                                        <td> {{ $personnel->email }}</td>
                                        <td> {{ $personnel->ville }}</td>
                                        <td> {{ $personnel->adresse }}</td>
                                       

                                       

                                        <td class="actions">
                                            
                                    

                                            <a data-toggle="modal" data-target="#con-close-modal" data-lien="personnels/{{$personnel->id}}/edit" data-id="{{$personnel->id}}" class="btn-success btnedit btn btn-primary"><i class="fa fa-pencil"></i></a>
                                            <a data-toggle="modal" data-target="#deletemodal" data-id="{{$personnel->id}}" data-lien="personnels/{{$personnel->id}}" class="btn-delete btndelete btn btn-danger"><i class="fa fa-trash-o"></i></a>  @end
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
