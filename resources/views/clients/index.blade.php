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
                                    <li class="active">Clients</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="m-b-30 pull-right">

                        @can('add_services')
                        <button type="button" class="btn btn-primary waves-effect waves-light btnadd"  data-toggle="modal" data-target="#con-close-modal" data-lien="clients/create"><i class="fa fa-plus"></i>&nbsp;Ajouter </button> @endcan

                    </div>
                    
                    @can('view_clients')

                    <div class="row">
                        
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="input-group input-group-lg">
                                        <input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control" placeholder="Search">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn-lg btn waves-effect waves-light btn-primary w-md"><i class="fa fa-search"></i></button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </div>



                    @foreach($clients as $client)
<div class="col-sm-6 col-lg-4">
    <div class="panel">
        <div class="panel-body">
            <div class="media-main">
                <a class="pull-left" href="#">
                    <img class="thumb-lg img-circle" src="{{asset('images/'.$client->image)}}" alt="">
                </a>
                <div class="pull-right btn-group-sm">
                    <a href="{{route("clients.show",$client)}}" class="on-default seedetails btn btn-primary"  data-target="#con-close-modal"><i class="fa fa-eye"></i></a> @can('edit_clients','delete_clients')
                 
                    <a data-toggle="modal" data-target="#con-close-modal" data-lien="clients/{{$client->id}}/edit" data-id="{{$client->id}}" class="btn-delete btnedit btn btn-primary"><i class="fa fa-pencil"></i></a>
                    <a data-toggle="modal" data-target="#deletemodal" data-id="{{$client->id}}" data-lien="clients/{{$client->id}}" class="btn-delete btndelete btn btn-danger"><i class="fa fa-trash-o"></i></a>  @endcan

                </div>
                <div class="pull-left btn-group-sm">
                    <input  type="checkbox" class="check" onclick="verified();" value="{{ $client->id }}"  name="etat">

                </div>
                <div class="info">
                    <h4>{{ $client->nom }}</h4>
                    <p class="text-muted">{{ $client->telephone}}</p>
                </div>
            </div>
            <div class="clearfix"></div>
            <hr>
            <ul class="social-links list-inline">
                <li>
                    <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                    <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                    <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="LinkedIn"><i class="fa fa-linkedin"></i></a>
                </li>
                <li>
                    <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Skype"><i class="fa fa-skype"></i></a>
                </li>
                <li>
                    <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Message"><i class="fa fa-envelope-o"></i></a>
                </li>
            </ul>
        </div> <!-- panel-body -->
    </div> <!-- panel -->
</div> <!-- end col -->

@endforeach











@endcan
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
