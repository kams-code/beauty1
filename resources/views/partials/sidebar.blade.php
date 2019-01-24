
@section('sidebar')
<div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-details">
                        <div class="pull-left">
                        <img src="{{asset('images/'.auth()->user()->image)}}" alt="" class="thumb-md img-circle">
                        </div>
                        <div class="user-info">
                            <div class="dropdown">
                 
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> {{ auth()->user()->name }}<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('profile') }}"><i class="md md-face-unlock"></i> Profile<div class="ripple-wrapper"></div></a></li>
                                    <li><a href="{{ route('logout') }}"><i class="md md-settings-power"></i> Logout</a></li>
                                </ul>
                            </div>
                            
                            <p class="text-muted m-0">{{ auth()->user()->roles->first()->name }}</p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="{{ route('home') }}" class="waves-effect"><i class="md md-home"></i><span> Dashboard </span></a>
                            </li>

                            <li >
                                    <a href="{{ route('users.index') }}" class="waves-effect"><i class="md md-palette"></i> <span> Personnel </span> <span class="pull-right"></span></a>
                                 </li>

                            <li >
                                <a href="{{ route('produits.index') }}" class="waves-effect"><i class="md md-palette"></i> <span> Produits </span> <span class="pull-right"></span></a>
                             </li>  
                             <li >
                                    <a href="{{ route('commandes.index') }}" class="waves-effect"><i class="md md-palette"></i> <span> Commandes </span> <span class="pull-right"></span></a>
                                 </li> 
                             <li >
                                <a href="{{ route('clients.index') }}" class="waves-effect"><i class="md md-palette"></i> <span> Clients </span> <span class="pull-right"></span></a>
                             </li>  
                             <li >
                                <a href="{{ route('factures.index') }}" class="waves-effect"><i class="md md-palette"></i> <span> Factures </span> <span class="pull-right"></span></a>
                             </li>  
                              <li >
                                <a href="{{ route('tickets.index') }}" class="waves-effect"><i class="md md-palette"></i> <span> Tickets </span> <span class="pull-right"></span></a>
                             </li>  
                              <li >
                                <a href="{{ route('reservations.index') }}" class="waves-effect"><i class="md md-palette"></i> <span> Reservations </span> <span class="pull-right"></span></a>
                             </li>  
                              <li >
                                <a href="{{ route('equipements.index') }}" class="waves-effect"><i class="md md-palette"></i> <span> Equipements </span> <span class="pull-right"></span></a>
                             </li>  
                              <li >
                                <a href="{{ route('services.index') }}" class="waves-effect"><i class="md md-palette"></i> <span> Services </span> <span class="pull-right"></span></a>
                             </li>  
                         
                              <li >
                                <a href="{{ route('plannings.index') }}" class="waves-effect"><i class="md md-palette"></i> <span> Plannings </span> <span class="pull-right"></span></a>
                             </li>  
                              <li >
                                <a href="{{ route('fournisseurs.index') }}" class="waves-effect"><i class="md md-palette"></i> <span> Fournisseurs </span> <span class="pull-right"></span></a>
                             </li>  
                              <li >
                                <a href="{{ route('organisations.index') }}" class="waves-effect"><i class="md md-palette"></i> <span> Organisations </span> <span class="pull-right"></span></a>
                             </li>
                                     <li >
                                <a href="{{ route('stocks.index') }}" class="waves-effect"><i class="md md-palette"></i> <span> Stocks </span> <span class="pull-right"></span></a>
                             </li>
                            </li>
                         
                           
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>


    @endsection