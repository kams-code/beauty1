
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
                                <h4 class="pull-left page-title">formules</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="home">Accueil</a></li>
                                    <li class="active">formules</li>
                                </ol>
                            </div>
                        </div>
                        <div class="m-b-30 pull-right">

                     
                            <button type="button" class="btn btn-primary waves-effect waves-light btnadd"  data-toggle="modal" data-target="#con-close-modal" data-lien="formules/create"><i class="fa fa-plus"></i>&nbsp;Ajouter une formule </button> 
                            <button type="button" class="btn btn-primary waves-effect  btn-danger" id="boutdellAll" style="display: none;" data-toggle="modal" data-target="#deletemodal"><i class="fa fa-trash-o"></i>&nbsp;supprimer </button>

                        </div>
                    </div>
                    <div class="container">
                    <div class="row">
                        
                                <br>
                              <script>$(document).ready(function() {
                                        $(".js-example-basic-single").select2();
                                        $(".js-example-basic-multiple").select2();
                                      });</script>
                                
         @php
             $i=0;$first=0;$second=0;
         @endphp
                            @foreach($formules as $formule)
                            @php
                                $i=$i+1
                            @endphp
@if ($i==1)
<div class="col-md-12">
@endif


                            <div class="col-md-6">
                            <table class="table table-bordered  table-striped" >

                                <thead>
                                    <tr >
                                        
                                        <th style="text-align: center;background: black;color:white">{{$formule['nom']}}</th>
                                                                 
                                    </tr>
                                </thead>
                                <tbody id="tablebody">
                                    <tr class="gradeC" style="text-align: center">
                                       
                                        <td> <b>{{ $formule->prix }} Fcfa</b></td>
                                        
                                    </tr>
                                  
    
                                     @foreach ($services as $service)
                                         @if (substr_count($formule['services_id'], $service['id']))
                                         <tr class="gradeC" style="text-align: center">
                                                @if ($i==1)
                                                @php
                                                $first=$first+1;
                                            @endphp
                                                @endif
                                                @if ($i==2)
                                                @php
                                                $second=$second+1;
                                            @endphp
                                                @endif
                                            <td> {{ $service->nom }}({{ $service->code }})</td>
                                            
                                        </tr>
                                        
                                         @endif
                                     @endforeach
                                     @if ($first!=$second)
                                         
                                     @endif
                                     <tr class="gradeC" style="border: none">
                                     <td class="pull-right">
                                            
                                       

                                        <a data-toggle="modal" data-target="#con-close-modal" data-lien="formules/{{$formule->id}}/edit" data-id="{{$formule->id}}" class="btn-success btnedit btn btn-primary"><i class="fa fa-pencil"></i></a>
                                        <a data-toggle="modal" data-target="#deletemodal" data-id="{{$formule->id}}" data-lien="formules/{{$formule->id}}" class="btn-delete btndelete btn btn-danger"><i class="fa fa-trash-o"></i></a> 
                                    </td>
                                </tr>
                                   
                                   

                                </tbody>
                            </table>
                        </div>
                        @if ($i==2)
<div class="col-md-12">
    @php
        $i=0;
    @endphp
@endif
                            @endforeach
                        
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
