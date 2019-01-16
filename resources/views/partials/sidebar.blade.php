
@section('sidebar')
<div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-details">
                        <div class="pull-left">
                            <img src="images/users/avatar-1.jpg" alt="" class="thumb-md img-circle">
                        </div>
                        <div class="user-info">
                            <div class="dropdown">
                 
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> {{ auth()->user()->name }}<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile<div class="ripple-wrapper"></div></a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-settings-power"></i> Logout</a></li>
                                </ul>
                            </div>
                            
                            <p class="text-muted m-0">{{ auth()->user()->roles->first()->name }}</p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="index-2.html" class="waves-effect"><i class="md md-home"></i><span> Dashboard </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-mail"></i><span> Mail </span><span class="pull-right"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="mail-inbox.html">Inbox</a></li>
                                    <li><a href="mail-compose.html">Compose Mail</a></li>
                                    <li><a href="mail-read.html">View Mail</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="calendar.html" class="waves-effect"><i class="md md-event"></i><span> Calendar </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="{{ route('produits.index') }}" class="waves-effect"><i class="md md-palette"></i> <span> Produits </span> <span class="pull-right"></span></a>
                             </li>  
                             <li class="has_sub">
                                <a href="{{ route('clients.index') }}" class="waves-effect"><i class="md md-palette"></i> <span> Clients </span> <span class="pull-right"></span></a>
                             </li>  
                             <li class="has_sub">
                                <a href="{{ route('factures.index') }}" class="waves-effect"><i class="md md-palette"></i> <span> Factures </span> <span class="pull-right"></span></a>
                             </li>  
                              <li class="has_sub">
                                <a href="{{ route('tickets.index') }}" class="waves-effect"><i class="md md-palette"></i> <span> Tickets </span> <span class="pull-right"></span></a>
                             </li>  
                              <li class="has_sub">
                                <a href="{{ route('reservations.index') }}" class="waves-effect"><i class="md md-palette"></i> <span> Reservations </span> <span class="pull-right"></span></a>
                             </li>  
                              <li class="has_sub">
                                <a href="{{ route('equipements.index') }}" class="waves-effect"><i class="md md-palette"></i> <span> Equipements </span> <span class="pull-right"></span></a>
                             </li>  
                              <li class="has_sub">
                                <a href="{{ route('services.index') }}" class="waves-effect"><i class="md md-palette"></i> <span> Services </span> <span class="pull-right"></span></a>
                             </li>  
                              <li class="has_sub">
                                <a href="{{ route('personnels.index') }}" class="waves-effect"><i class="md md-palette"></i> <span> Personnels </span> <span class="pull-right"></span></a>
                             </li>  
                              <li class="has_sub">
                                <a href="{{ route('plannings.index') }}" class="waves-effect"><i class="md md-palette"></i> <span> Plannings </span> <span class="pull-right"></span></a>
                             </li>  
                              <li class="has_sub">
                                <a href="{{ route('fournisseurs.index') }}" class="waves-effect"><i class="md md-palette"></i> <span> Fournisseurs </span> <span class="pull-right"></span></a>
                             </li>  
                              <li class="has_sub">
                                <a href="{{ route('organisations.index') }}" class="waves-effect"><i class="md md-palette"></i> <span> Organisations </span> <span class="pull-right"></span></a>
                             </li>
                                     <li class="has_sub">
                                <a href="{{ route('stocks.index') }}" class="waves-effect"><i class="md md-palette"></i> <span> Stocks </span> <span class="pull-right"></span></a>
                             </li>
                           
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>


    @endsection