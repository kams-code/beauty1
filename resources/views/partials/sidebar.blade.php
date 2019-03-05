
@section('sidebar')
<div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
             
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="{{ route('home') }}" class="waves-effect"><i class="md md-home"></i><span> Accueil </span></a>
                            </li>
                            @can('view_organisations')
                            <li >
                                    <a href="{{ route('organisations.index') }}" class="waves-effect"><i class="md md-palette"></i> <span> Institut </span> <span class="pull-right"></span></a>
                                 </li>
                            <li >
                            @endcan
                           
                                    <a href="{{ route('reservations.index') }}" class="waves-effect"><i class="md md-shopping-cart"></i> <span> Reservations </span> <span class="pull-right"></span></a>
                                 </li> 

                                 <li class="has_sub">
                                        <a href="#" class="waves-effect"><i class="md md-perm-identity"></i> <span> Personnel </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                        <ul class="list-unstyled">
                                            <li>                                    <a href="{{ route('employe') }}" class="waves-effect"><i class="md md-palette"></i> <span> Employe </span> <span class="pull-right"></span></a>
                                            </li>
                                            <li>                                <a href="{{ route('plannings.index') }}" class="waves-effect"><i class="md md-access-time"></i> <span> Plannings </span> <span class="pull-right"></span></a>
                                            </li>
                                           
                                        </ul>
                                 
                                 </li>
                                 <li class="has_sub">
                                        <a href="#" class="waves-effect"><i class="md md-perm-identity"></i> <span> Services </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                        <ul class="list-unstyled">
                                          <li >
                                             <a href="{{ route('categories.index') }}" class="waves-effect"><i class="md md-settings"></i> <span> Catégories </span> <span class="pull-right"></span></a>
                                          </li>   
                                          <li >
                                                        <a href="{{ route('services.index') }}" class="waves-effect"><i class="md md-shop-two"></i> <span> Services </span> <span class="pull-right"></span></a>
                                                    </li>
                                                    <li >
                                                      <a href="{{ route('formules.index') }}" class="waves-effect"><i class="md md-shop-two"></i> <span> Formules </span> <span class="pull-right"></span></a>
                                                  </li>
                                               
                                        </ul>

                                        
                                 
                                 </li>
                                  <li >
                                        <a href="{{ route('clients.index') }}" class="waves-effect"><i class="md md-contacts"></i> <span> Clients </span> <span class="pull-right"></span></a>
                                     </li>
                            
                                     <li >
                                            <a href="{{ route('factures.index') }}" class="waves-effect"><i class="md md-attach-money"></i> <span> Factures </span> <span class="pull-right"></span></a>
                                         </li>
                                         <li >
                                                <a href="{{ route('tickets.index') }}" class="waves-effect"><i class="md md-palette"></i> <span> Promotion </span> <span class="pull-right"></span></a>
                                             </li>
                             

                          
                             <li class="has_sub">
                                    <a href="#" class="waves-effect"><i class="md md-layers"></i> <span> Produits </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                    <ul class="list-unstyled">
                                            <li >
                                                    <a href="{{ route('produits.index') }}" class="waves-effect"><i class="md md-shop-two"></i> <span> Produits </span> <span class="pull-right"></span></a>
                                                </li>
                                                 <li >
                                                        <a href="{{ route('categorieproduits.index') }}" class="waves-effect"><i class="md md-settings"></i> <span> Catégories</span> <span class="pull-right"></span></a>
                                                     </li>
                                                     <li >
                                                      <a href="{{ route('stocks.index') }}" class="waves-effect"><i class="md md-account-balance-wallet"></i> <span> Stocks </span> <span class="pull-right"></span></a>
                                                   </li>  
                                       <li >
                                              <a href="{{ route('commandes.index') }}" class="waves-effect"><i class="md md-content-paste"></i> <span> Approvisionnements </span> <span class="pull-right"></span></a>
                                           </li>
                                    </ul>
                             
                             </li>
                             <li >
                                    <a href="{{ route('equipements.index') }}" class="waves-effect"><i class="md md-layers"></i> <span> Equipements </span> <span class="pull-right"></span></a>
                                 </li> 
                                 <li >
                                        <a href="{{ route('fournisseurs.index') }}" class="waves-effect"><i class="md md-group"></i> <span> Fournisseurs </span> <span class="pull-right"></span></a>
                                     </li>  
                     
                                 <li >
                                    <a href="{{ route('commandes.index') }}" class="waves-effect"><i class="md md-content-paste"></i> <span> Abonnement </span> <span class="pull-right"></span></a>
                                 </li> 
                                 <li class="has_sub">
                                        <a href="javascript:void(0);" class="waves-effect"><i class="md md-settings"></i><span>Paramètres </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                        <ul>
                                               <li >
                                                            <a href="{{ route('users.index') }}" class="waves-effect"><i class="md md-settings"></i> <span> Utilisateurs </span> <span class="pull-right"></span></a>
                                                         </li>
                                                   
                                                    <li >
                                                            <a href="{{ route('roles.index') }}" class="waves-effect"><i class="md md-settings"></i> <span> Rôles </span> <span class="pull-right"></span></a>
                                                         </li>
                                                         <li >
                                                                <a href="{{ route('permissions') }}" class="waves-effect"><i class="md md-settings"></i> <span> Privilèges </span> <span class="pull-right"></span></a>
                                                             </li>
                                                <li >
                                                        <a href="{{ route('taxes.index') }}" class="waves-effect"><i class="md md-settings"></i> <span> Taxes </span> <span class="pull-right"></span></a>
                                                     </li>
                                                <li >
                                                        <a href="{{ route('paiements.index') }}" class="waves-effect"><i class="md md-settings"></i> <span> Paiement </span> <span class="pull-right"></span></a>
                                                     </li>
                                        </ul>
                                    </li>


                                   
                                 
                                   

                                     
                               
                             
                             
                             
                         
                             
                             
                                   
                           
                         
                           
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>


    @endsection