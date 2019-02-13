@extends('layouts.mainlayout')
@include('partials.topbar')
@include('partials.sidebar')

                                 @section('content')
                                 <div class="content-page">
                                  <!-- Start content -->
                                  <div class="content">
                                      <div class="container">
                  
                                          <!-- Page-Title -->
                                          <div class="row">
                                              <div class="col-sm-12">
                                                  <h4 class="pull-left page-title">Invoice</h4>
                                                  <ol class="breadcrumb pull-right">
                                                      <li><a href="#">QuickBeauty</a></li>
                                                      <li><a href="#">Pages</a></li>
                                                       <li class="active">Facture</li>
                                                  </ol>
                                              </div>
                                          </div>
                  
                                          <div class="row">
                                              <div class="col-md-12">
                                                  <div class="panel panel-default">
                                                      <!-- <div class="panel-heading">
                                                          <h4>Invoice</h4>
                                                      </div> -->
                                                      <div class="panel-body">
                                                          <div class="clearfix">
                                                              <div class="pull-left">
                                                                  <h4 class="text-right"><img height="50" width="50" src="{{asset('images/'.$organisation->image)}}" alt="velonic"></h4>
                                                                  
                                                              </div>
                                                              
                                                              <div class="pull-right">
                                                                  <h4>Facture # <br>
                                                                      <strong>{{ $facture->created_at }}-{{$facture->code}}</strong>
                                                                  </h4>
                                                              </div>
                                                          </div>
                                                          <hr>
                                                          <div class="row">
                                                              <div class="col-md-12">
                                                                  
                                                                  <div class="pull-left m-t-30">
                                                                      <address>
                                                                        <strong>{{$organisation->nom}}, Inc.</strong><br>
                                                                        {{$organisation->pays}},  <br>
                                                                        {{$organisation->ville}}, {{$organisation->adresse}}94107<br>
                                                                        <abbr title="Phone">P:</abbr> {{$organisation->telephone}}
                                                                        </address>
                                                                  </div>
                                                                  <div class="pull-right m-t-30">
                                                                      <p><strong>Order Date: </strong> {{$facture->created_at}}</p>
                                                                      <p class="m-t-10"><strong>Order Status: </strong> <span class="label label-pink">
                                                                          @if (0===$facture->created_at)
                                                                              Non payé
                                                                              @else
                                                                              Payé
                                                                          @endif
                                                                          </span></p>
                                                                      <p class="m-t-10"><strong>Order ID: </strong> #{{$facture->code}}</p>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div class="m-h-50"></div>
                                                          <div class="row">
                                                              <div class="pull-left m-t-30">
                                                      
                                                                  <h2>Services reservés:</h2><br>
                                                                 
                                                            </div>
                                                              <div class="col-md-12">
                                                                  <div class="table-responsive">
                                                                      <table id="datatable-buttons" class="table m-t-30">
                                                                          <thead>
                                                                              <tr><th>#</th>
                                                                              <th>Services</th>
                                                                              <th>Description</th>
                                                                              <th>Prix</th>
                                                                              <th>Total</th>
                                                                          </tr></thead>
                                                                          <tbody>

                                                                              @foreach ($categories as $categorie )
                                                                             
                                                                           
                                                                                  <tr><th>#</th>
                                                                                  <th>Categorie:</th>
                                                                                  <th>{{$categorie->nom}}</th>
                                                                              </tr>
                                                                              @foreach ($services as $service )
                                                                          
                                                                              @if ($service->categorie_id=== $categorie->id )
                                                                              @foreach ($reservations as $reservation )
                                                                          
                                                                              @if ($service->id=== $reservation->service_id )
                                                                              
                                                                              <tr>
                                                                                  <th>#</th>
                                                                                  <td>{{$service->nom}}</td>
                                                                                  <td>jkdsjdbksbdbkbd</td>
                                                                                  <td>{{$service->montant}}</td>
                                                                                  <td>{{$service->montant}}</td>
                                                                              </tr>  
                                                                              @endif
                                                                             
                                                                              @endforeach     
                                                                              @endif
                                                                             
                                                                              @endforeach
                                                                              @endforeach


                                                                           
                                                                          </tbody>
                                                                     </table>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div class="pull-left m-t-30">
                                                      
                                                                <h2>Tickets de remise:</h2><br>
                                                               
                                                          </div>
                                                          <div class="row">
                                                              <div class="col-md-12">
                                                                  <div class="table-responsive">
                                                                      <table id="datatable-buttons" class="table m-t-30">
                                                                          <thead>
                                                                              <tr><th>#</th>
                                                                              <th>Titre</th>
                                                                              <th>Valeur</th>
                                                                              <th>Service</th>
                                                                             
                                                                          </tr></thead>
                                                                          <tbody>
                                                                                <?php $rabet=0; ?>
                                                                             
                                                                            @foreach ($tickets as $ticket )
                                                                            @foreach ($usertickets as $usertick )
                                                                                
                                                                            
                                                                                @if ($usertick->ticket_id=== $ticket->id )
                                                                                <tr>
                                                                                    <th>#</th>
                                                                                    <td>{{$ticket->titre}}</td>
                                                                                    <td>{{$ticket->valeur}}
                                                                                            <?php $rabet=$rabet+$ticket->valeur; ?>
                                                                                    </td>
                                                                                    
                                                                                    <td>null</td>
                                                                                </tr>       
                                                                                @endif
                                                                                @endforeach
                                                                               
                                                                                @endforeach
                                                                           
                                                                                @foreach ($reservations as $reservation )
                                                                          
                                                                               


                                                                              @foreach ($services as $service )
                                                                             
                                                                              @if ($service->id=== $reservation->service_id )
                                                                           
                                                                                
                                                                              @foreach ($tickets as $ticket )
                                                                          
                                                                              @if ($service->id=== $ticket->service_id )
                                                                              <tr>
                                                                                  <th>#</th>
                                                                                  <td>{{$ticket->titre}}</td>
                                                                                  <td>{{$ticket->valeur}}</td>
                                                                                  <?php $rabet=$rabet+$ticket->valeur; ?>
                                                                                  <td>{{$service->nom}}</td>
                                                                              </tr>       
                                                                              @endif
                                                                             
                                                                              @endforeach
                                                                              @endif
                                                                              @endforeach
                                                                              @endforeach







                                                                           
                                                                           


                                                                           
                                                                          </tbody>
                                                                     </table>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div class="row" style="border-radius: 0px">
                                                              <div class="col-md-3 col-md-offset-9">
                                                                  <p class="text-right"><b>Sub-total:</b> {{$facture->montant}}</p>
                                                                  <p class="text-right">Discout:{{ $rabet}} %</p>
                                                                  <p class="text-right">VAT: {{ $rabet}}%</p>
                                                                  <hr><?php $foo = $facture->montant;
                                                                  $total=$foo-$foo*$rabet
                                                                  ?>
                                                                  <h3 class="text-right">USD {{ $total}}</h3>
                                                              </div>
                                                          </div>
                                                          <hr>
                                                          <div class="hidden-print">
                                                              <div class="pull-right">
                                                                  <a href="javascript:window.print()" class="btn btn-inverse waves-effect waves-light"><i class="fa fa-print"></i></a>
                                                                  <a href="#" class="btn btn-primary waves-effect waves-light">Submit</a>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                  
                                              </div>
                  
                                          </div>
                  
                                      </div> <!-- container -->
                                                 
                                  </div> <!-- content -->
                  
                                  <footer class="footer text-right">
                                      2015 © QuickBeauty.
                                  </footer>
                  
                              </div>
                @endsection
@include('partials.sidebarright')












