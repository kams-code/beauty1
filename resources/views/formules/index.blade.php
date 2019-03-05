
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
                <!-- Start content 
                   -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Formules</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="home">Accueil</a></li>
                                    <li class="active">Formules</li>
                                </ol>
                            </div>
                        </div>
                        <div class="m-b-30 pull-right">

                     
                            <button type="button" class="btn btn-primary waves-effect waves-light btnadd"  data-toggle="modal" data-target="#con-close-modal" data-lien="formules/create"><i class="fa fa-plus"></i>&nbsp;Ajouter une Formule </button> 
                            <button type="button" class="btn btn-primary waves-effect  btn-danger" id="boutdellAll" style="display: none;" data-toggle="modal" data-target="#deletemodal"><i class="fa fa-trash-o"></i>&nbsp;supprimer </button>

                        </div>
                    </div>
                    <div class="container">
                    <div class="row">
                        <?php
                function format_money($number){
                  $n = $number;
                  $n = number_format($number, 0);
                    return str_replace(",", " ", $n);
                }
            ?>
                                <br>
                              <script>$(document).ready(function() {
                                        $(".js-example-basic-single").select2();
                                        $(".js-example-basic-multiple").select2();
                                      });</script>
                                
         @php
            $count=0; $i=0;$first=0;$indice=0;
         @endphp
                            @foreach($formules as $formule)


                            <div class="col-md-12" >
                            <table class="table table-bordered  table-striped" @if ($i==1)
                            id="leftDiv{{$indice}}"
                            @php
                                $id1="leftDiv".$indice
                            @endphp
                            @endif     
                            @if ($i==2)
                            id="rightDiv{{$indice}}"
                            @php
                                $id2="rightDiv".$indice
                            @endphp
                            @endif >

                                <thead>
                                    <tr >
                                       
                                       <th style="text-align: center;background: black;color:white">{{$formule['nom']}}</th>
                
                                                                                         
                                    </tr>
                                </thead>
                                <tbody id="tablebody">
                                    <tr class="gradeC" style="text-align: center">
                                       
                                        <td> <b style="color: black;"><?=format_money($formule->prix) ?> Fcfa</b></td>
                                        @php
                                            $first=0;$second=0;
                                        @endphp
                                    </tr>
                                  
    @if ($i==1)
    <div class="col-md-12">
    @endif
                                     @foreach ($services as $service)
                                         @if (substr_count($formule['services_id'], $service['id']))
                                         <tr class="gradeC" style="text-align: center">
                                       
                                            <td> {{ $service->nom }} - {{ $service->code }}</td>
                                            
                                        </tr>
                                        
                                         @endif
                                     @endforeach
                                     <tr class="gradeC" style="border: none">
                                     <td class="pull-right">
                                            
                                       

                                        <a data-toggle="modal" data-target="#con-close-modal" data-lien="formules/{{$formule->id}}/edit" data-id="{{$formule->id}}" class="btn-success btnedit btn btn-primary"><i class="fa fa-pencil"></i></a>
                                        <a data-toggle="modal" data-target="#deletemodal" data-id="{{$formule->id}}" data-lien="formules/{{$formule->id}}" class="btn-delete btndelete btn btn-danger"><i class="fa fa-trash-o"></i></a> 
                                    </td>
                                </tr>
                                   
                                   

                                </tbody>
                            </table>
                        </div>
                     
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
