@extends('layouts.mainlayout')
@include('partials.topbar')
@include('partials.sidebar')

                                 @section('content')
                                 {!! Charts::assets() !!}
                                 <div class="content-page">
                                        <!-- Start content -->
                                        <div class="content">
                                            <div class="container">
                       
                                                <!-- Page-Title -->
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <h4 class="pull-left page-title">Welcome !</h4>
                                                        <ol class="breadcrumb pull-right">
                                                            <li><a href="#">QuickBeauty</a></li>
                                                            <li class="active">Dashboard</li>
                                                        </ol>
                                                    </div>
                                                </div>
                        <!--  -->
                                                <!-- Start Widget -->
                                                <div class="row">
                                                    <div class="col-sm-6 col-lg-3">
                                                        <div class="mini-stat clearfix bx-shadow bg-info">
                                                            <span class="mini-stat-icon"><i class="ion-social-usd"></i></span>
                                                            <div class="mini-stat-info text-right">
                                                                  
                                                                <span class="counter">
                                                                    {{$value}}
                                                               
                                                                </span>
                                                                Total 
                                                            </div>
                                                            <div class="tiles-progress">
                                                                <div class="m-t-20">
                                                                    <h5 class="text-uppercase text-white m-0">Factures <span class="pull-right">{{$nbrefactures}}</span></h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-lg-3">
                                                        <div class="mini-stat clearfix bg-purple bx-shadow">
                                                            <span class="mini-stat-icon"><i class="ion-ios7-cart"></i></span>
                                                            <div class="mini-stat-info text-right">
                                                                <span class="counter">{{$nbrefactures}}</span>
                                                               


                                                              
                                                            </div>
                                                            <div class="tiles-progress">
                                                                <div class="m-t-20">
                                                                    <h5 class="text-uppercase text-white m-0">Réservations </h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                   
                                                    <div class="col-sm-6 col-lg-3">
                                                        <div class="mini-stat clearfix bg-primary bx-shadow">
                                                            <span class="mini-stat-icon"><i class="ion-android-contacts"></i></span>
                                                            <div class="mini-stat-info text-right">
                                                                <span class="counter">{{$nombreclient}}</span>
                                                                Nombre de client
                                                            </div>
                                                          
                                                        </div>
                                                    </div>
                                                </div> <!-- end row -->
                        
                        
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <div class="portlet"><!-- /portlet heading -->
                                                            {!! $chart->render() !!}
                                                        </div> <!-- /Portlet -->
                                                    </div> <!-- end col -->
                        
                                                   
                                                </div> <!-- End row -->
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <div class="portlet"><!-- /portlet heading -->
                                                            {!! $chart1->render() !!}
                                                        </div> <!-- /Portlet -->
                                                    </div> <!-- end col -->
                        
                                                   
                                                </div> 


                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <div class="portlet"><!-- /portlet heading -->
                                                            <table class="table table-bordered  table-striped" id="datatable-editable">
                                   
    
                                                                <thead>
                                                                    <tr>
                                                                        <th>Image</th>
                                                                        <th>Code</th>
                                                                        <th>Nom</th>
                                                                        <th>Desccription</th>
                                                                        <th>Date de création</th>
                                                                        <th>Employes</th>
                                                                        <th>En promotion</th>
                                                                        <th>Actions</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                 
                                                                    @foreach($services as $service)
                                   
                                               <tr class="gradeC">
                            
                                                                        <td> {{ $service->image}}</td>
                                                                        <td> {{ $service->code }}</td>
                                                                        <td> {{ $service->nom }}</td>
                                                                        <td> {{ $service->description }}</td>
                                                                        <td> {{ $service->created_at }}</td>
                                                                        <td> {{ $service->is_promote }}</td>
                                                                        
                                                                         
                                                                            <td> {{ $service->user_id }}</td>
                                                                        
                                                                        
                                                                        <td> {{ $service->is_promote }}</td>
                                                                        <td class="actions">
                                                                            @can('edit_services','delete_services')
                                                                            {!! Form::open( ['method' => 'delete', 'url' => route('services.destroy', $service->id), 'style' => 'display: inline', 'onSubmit' => 'return confirm("Are yous sure wanted to delete it?")']) !!}
                                                                            <button type="submit" class="btn-delete btn btn-sm btn-light">
                                                                                <i class="fa fa-trash-o"></i>
                                                                            </button>
                                                                        {!! Form::close() !!}
                                                                            <a href="{{ route('services.edit',$service) }}" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                                                            <a href="{{ route('services.edit',$service) }}" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                                                            <a href="{{ route('services.edit',$service) }}" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                                                            <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                                                        @endcan
                                                                        </td>
                                                                    </tr> 
                                @endforeach
                                                                   
                                                                </tbody>
                                                           </table>
                                                        </div> <!-- /Portlet -->
                                                    </div> <!-- end col -->
                        
                                                   
                                                </div> 


                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <div class="portlet"><!-- /portlet heading -->
                                                            <table class="table table-bordered  table-striped" id="datatable-editable">
                                   
    
                                                                <thead>
                                                                    <tr>
                                                                        <th>nom</th>
                                                                        <th>quantite</th>
                                                                        <th>Date de création</th>
                                                                        <th>Fournisseur</th>
                                                                        <th>Actions</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                 
                                                                    @foreach($commandes as $commande)
                                   
                                               <tr class="gradeC">
                                                                        <td> {{ $commande->nom }}</td>
                                                                        <td> {{ $commande->quantite }}
                                                                        </td>
                                                                        <td> {{ $commande->created_at }}</td>
                                                                         <td> {{ $commande->fournisseur_id }}</td>
                                                                        <td class="actions">
                                                                            @can('edit_commandes','delete_commandes')
                                                                            {!! Form::open( ['method' => 'delete', 'url' => route('commandes.destroy', $commande->id), 'style' => 'display: inline', 'onSubmit' => 'return confirm("Are yous sure wanted to delete it?")']) !!}
                                                                            <button type="submit" class="btn-delete btn btn-sm btn-light">
                                                                                <i class="fa fa-trash-o"></i>
                                                                            </button>
                                                                        {!! Form::close() !!}
                                                                            <a href="{{ route('commandes.destroy',$commande) }} }}" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                                                            <a href="{{ route('commandes.destroy',$commande) }} }}" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                                                            <a href="{{ route('commandes.destroy',$commande) }}" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                                                            <a href="{{ route('commandes.destroy',$commande) }}" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                                                        @endcan
                                                                        </td>
                                                                    </tr> 
                                @endforeach
                                                                   
                                                                </tbody>
                                                           </table></div> <!-- /Portlet -->
                                                    </div> <!-- end col -->
                        
                        
                                            </div> <!-- container -->
                                                       
                                        </div> <!-- content -->
                        
                                        <footer class="footer text-right">
                                            2019 © QuickBeauty.
                                        </footer>
                        
                                    </div>
                           
@endsection
@include('partials.sidebarright')
