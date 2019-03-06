<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Détail du client</h4>
    </div>
    <div class="modal-body">
        <div class="row">
            {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('clients.store'),'files'=>true]) !!}

                
                <div class="col-md-12">
                    
                    <style>
                        .col-md-9 label {
                            margin-bottom: 10px
                        }
                    </style>
                    <div class="col-md-3">
                        <img style="width: 100%;height: 115px" src="{{asset('images/'.$client->image)}}">
                    </div>
                    <div class="col-md-9">
                        <label>
                            <strong>Nom:</strong> {{$client->nom}}
                        </label>
                        <br>
                        <label>
                            <strong>Nom:</strong> {{$client->prenom}}
                        </label>
                        <br>
                        <label>
                            <strong>Téléphone:</strong> {{$client["telephone"]}}
                        </label>
                        <br>
                        <label><div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title">Différente réservation du client</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('clients.store'),'files'=>true]) !!}
                            
                                            
                                            <div class="col-md-12">
                                                
                                                <style>
                                                    .col-md-9 label {
                                                        margin-bottom: 10px
                                                    }
                                                </style>
                                                
                                                    <label>
                                                        <strong>Reservation:</strong>
                                                        @foreach($reservations  as $reservation)
                                                          @if($reservation->client_id == $client->id)
                                                             {{$reservation->code}}
                                                             {{$reservation->service_id}}
                                                             {{$reservation->datededut}}
                                                             {{$reservation->datefin}}
                                                          @endif
                                                        @endforeach
                                                    </label>
                            
                                                </div>
                                            </div>
                                           
                                       
                        
                         <table class="table table-bordered  table-striped" id="datatable-buttons">
                        
                                                        <thead>
                                                            <tr>
                                                                
                                                                <th>Code</th>
                                                                <th>Service</th>
                                                                <th>Date de début</th>
                                                                <th>Date de fin</th>
                                                                <th>Date de création</th>
                                                               
                                                            </tr>
                                                        </thead>
                                                        <tbody id="tablebody">
                        
                                                            @foreach($reservations as $reservation)
                                                                 @if($resevation->client_id == $client->id)
                                                                    @php
                                                                    $date=date('d-m-Y H:i:s', strtotime($reservation->created_at));
                                                                    @endphp
                                                                    <tr class="gradeC">
                                                                    
                                                                        <td> {{ $reservation->code }}</td>
                                                                        <td> {{ $reservation->service_id }}</td>
                                                                        <td> {{ $reservation->datedebut}}</td>
                                                                        <td> {{ $reservation->datefin }}</td>
                                
                                                                        <td> {{ $reservation->created_at}}</td>
                                
                                                                    
                                                                    </tr>
                                                               @endif
                                                            @endforeach
                        
                                                        </tbody>
                                                    </table>@endcan
                        
                                            
                                         
                            
                                        <div class="m-b-0">
                                            <div class="col-sm-offset-3 col-sm-9">
                            
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="border:0px;text-align: right;margin-top: 20px">
                                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Fermer</button>
                            
                                        </div>
                                        {!! Form::close() !!}
                            
                                    </div>
                            
                                </div>
                            
                            </div>  
                            <strong>Email:</strong> {{$client["email"]}}
                        </label>
                        <br>
                        <label>
                            <strong>Adresse:</strong> {{$client["adresse"]}} ({{$client["pays"]}}, {{$client["ville"]}})
                        </label>
                        <br>
                        <label>
                            <strong>Reservation:</strong>
                            @foreach($reservations  as $reservation)
                              @if($reservation->client_id == $client->id)
                                 {{$reservation->code}}
                                 {{$reservation->service_id}}
                                 {{$reservation->datededut}}
                                 {{$reservation->datefin}}
                              @endif
                            @endforeach
                        </label>

                    </div>
                </div>
               
           
                
             

            <div class="m-b-0">
                <div class="col-sm-offset-3 col-sm-9">

                </div>
            </div>
            <div class="col-md-12" style="border:0px;text-align: right;margin-top: 20px">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Fermer</button>

            </div>
            {!! Form::close() !!}

        </div>

    </div>

</div>  