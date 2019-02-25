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
                                <h4 class="pull-left page-title">Fournisseurs</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="home">Accueil</a></li>
                                    <li class="active">Fournisseurs</li>
                                </ol>
                            </div>
                        </div>
                        <div class="m-b-30 pull-right">

                            @can('add_fournisseurs')
                            <button type="button" class="btn btn-primary waves-effect waves-light btnadd"  data-toggle="modal" data-target="#con-close-modal" data-lien="fournisseurs/create"><i class="fa fa-plus"></i>&nbsp;Ajouter un fournisseur </button> @endcan
                            @can('delete_fournisseurs')
                            <button type="button" class="btn btn-primary waves-effect waves-light" id="boutdellAll" style="display: none;" data-toggle="modal" data-target="#deletemodal"><i class="fa fa-plus"></i>&nbsp;Suprimer </button> @endcan

                        </div>
                    </div>
                    <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            @can('view_fournisseurs')
                            
                            
                            
                            
                            @endcan
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
