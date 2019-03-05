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
                                <h4 class="pull-left page-title">Liste des approvisionnements</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="home">Accueil</a></li>
                                    <li class="active">Approvisionnements </li>
                                </ol>
                            </div>
                        </div>
                        <div class="m-b-30 pull-right">

                            @can('add_commandes')
                            <button type="button" class="btn btn-primary waves-effect waves-light btnadd"  data-toggle="modal" data-target="#con-close-modal" data-lien="commandes/create"><i class="fa fa-plus"></i>&nbsp;Ajouter un approvisionnement </button> @endcan
                            @can('delete_commandes')
                            <button type="button" class="btn btn-primary waves-effect btn-danger" id="boutdellAll" style="display: none;" data-toggle="modal" data-target="#deletemodal"><i class="fa fa-trash-o"></i>&nbsp;supprimer </button> @endcan

                        </div>
                    </div>
                    <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            @can('view_commandes')
                                        
                     <table class="table table-bordered  table-striped" id="datatable-buttons">

                        <thead>
                            <tr>
                                <th><input  id="checkAll" type="checkbox"></th>
                                <th></th>
                                <th>Titre</th>
                                <th>Produit</th>
                                <th>Quantite</th>
                                <th>Employé</th>
                                <th>Fournisseur</th>
                                
                                <th>Livrer?</th>
                                <th>Date de création</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="tablebody">
                                @php
                                $i=1;
                                @endphp
                            @foreach($commandes as $commande)
                            
                                @php
                                $date=date('d-m-Y H:i:s', strtotime($commande->created_at));
                                @endphp
                            <tr class="gradeC">
                                <td>
                                    <input  type="checkbox" class="check" onclick="verified();" value="{{ $commande->id }}"  name="etat">
                                </td>
                                <td> {{ $i }}</td>
                                <td> {{ $commande->nom }}</td>
                                <td>@foreach($produits as $produit)
                                 @if($commande->produit_id)
                                  {{ $produit->nom }}
                                  @endif
                                 @endforeach</td> 
                                <td> {{ $commande->quantite }}</td>
                                <td>@foreach($users as $user)
                                 @if($commande->user_id ==$user['id'])
                                 <li>{{ $user->name }}</li>
                                @endif
                                @endforeach</td> 
                                
                                <td>@foreach($fournisseurs as $fournisseur)
                                 @if($commande->fournisseur_id)
                                 {{ $fournisseur->nom}}
                                @endif
                                @endforeach</td> 
                                <td> {{ $commande["etat"] == 1 ? 'OUI' : 'NON'}}</td>
                                    

                                <td> {{ $date}}</td>

                                <td class="actions">
                                    
                                    <a class="on-default seedetails btn btn-primary" data-toggle="modal" data-lien="commandes/{{$commande->id}}" data-id="{{$commande->id}}" data-target="#con-close-modal"><i class="fa fa-eye"></i></a> @can('edit_commandes','delete_commandes')


                                    <a data-toggle="modal" data-target="#con-close-modal" data-lien="commandes/{{$commande->id}}/edit" data-id="{{$commande->id}}" class="btn-success btnedit btn btn-primary"><i class="fa fa-pencil"></i></a>
                                    <a data-toggle="modal" data-target="#deletemodal" data-id="{{$commande->id}}" data-lien="commandes/{{$commande->id}}" class="btn-delete btndelete btn btn-danger"><i class="fa fa-trash-o"></i></a>  @endcan
                                </td>
                            </tr>
                            @php
                                $i=$i+1;
                                @endphp
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
