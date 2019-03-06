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
                                <h4 class="pull-left page-title">Utilisateurs</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="home">Accueil</a></li>
                                    <li class="active">Utilisateurs</li>
                                </ol>
                            </div>
                        </div>
                        <div class="m-b-30 pull-right">

                            @can('add_users')
                            <button type="button" class="btn btn-primary waves-effect waves-light btnadd"  data-toggle="modal" data-target="#con-close-modal"  data-ismploy="<?=$ismploy?>" data-lien="users/create"><i class="fa fa-plus"></i>&nbsp;Ajouter</button> @endcan
                            @can('delete_users')
                            <button type="button" class="btn btn-primary waves-effect  btn-danger" id="boutdellAll" style="display: none;" data-toggle="modal" data-target="#deletemodal"><i class="fa fa-trash-o"></i>&nbsp;supprimer </button> @endcan

                        </div>
                    </div>
                    <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            @can('view_users')
                            <table class="table table-bordered  table-striped" id="datatable-buttons">

                                <thead>
                                    <tr>
                                        <th><input  id="checkAll" type="checkbox"></th>
                                        <th>Image</th>
                                        <th>Nom</th>
                                        <th>Identifiant</th>
                                       
                                        <th>Email</th>
                                        <th>Date de création</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="tablebody">

                                    @foreach($users as $user)
                                        @php
                                        $date=date('d-m-Y H:i:s', strtotime($user->created_at));
                                        @endphp
                                    <tr class="gradeC">
                                        <td>
                                        
                                            <input  type="checkbox" class="check" onclick="verified();" value="{{ $user->id }}"  name="etat">
                                        </td>
                                        <td>
                                            @if ($user->image!=null)
    <img style="width: 70px;height: 70px" src="{{asset('images/'.$user->image)}}" alt="user-img" >
                                            @else
                                             <img style="width: 70px;height: 70px" src="{{asset('images/profile.jpg')}}" alt="user-img" >
                                            @endif 
                                        </td>
                                        <td> {{ $user->nom }}</td>
                                        <td> {{ $user->name }}</td>
                                          <td> {{ $user->email }}</td>

                                        <td> {{ $date}}</td>

                                        <td class="actions">
                                                <?php
                                                    if ($ismploy == 1) {
                                                        ?>
                                                            <a href="{{route("users.show",$user)}}" class="on-default seedetails btn btn-primary"  data-target="#con-close-modal"><i class="fa fa-eye"></i></a> 
                                                        <?php
                                                    }
                                                ?>
                                                
                                                @can('edit_users','delete_users')


                                            <a data-toggle="modal" data-target="#con-close-modal" data-lien="users/{{$user->id}}/edit"  data-ismploy="{{$user->isemploye}}"  data-id="{{$user->id}}" class="btn-delete btnedit btn btn-primary"><i class="fa fa-pencil"></i></a>
                                            <a data-toggle="modal" data-target="#deletemodal" data-id="{{$user->id}}" data-lien="users/{{$user->id}}" class="btn-delete btndelete btn btn-danger"><i class="fa fa-trash-o"></i></a>  @endcan
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
y