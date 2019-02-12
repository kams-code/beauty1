@extends('layouts.layout2')
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
                                        <h4 class="pull-left page-title">Réservations</h4>
                                     
                                    </div>
                                </div>

                                @can('add_organisations')
                                <button type="button" class="btn btn-primary waves-effect waves-light btnadd pull-right"  data-toggle="modal" data-target="#con-close-modal" data-lien="reservations/create"><i class="fa fa-plus"></i>&nbsp;Ajouter </button> @endcan
                              
        
                                <!-- SECTION FILTER
                                ================================================== -->  
                                <div class="row">
                                   
                                                  <div class="col-lg-8">
                                                    <div id="error"></div>
                                                    <div id="calendar"></div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <legend> Details </legend>
                                                    <div id="appointment-details">
                                                        <p>Click on an appointment to show details.</p>
                                                    </div>
                                                </div>
                                                
                                                <script src="{{ asset('/js/admin/appointments.js') }}"></script>          
                                </div>
        
                            </div> <!-- container -->
                                       
                        </div> <!-- content -->
        
                        <footer class="footer text-right">
                            2016 © Moltran.
                        </footer>
        
                    </div>

@endsection @include('partials.sidebarright')
