<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Différente réservation du client</h4>
    </div>
    <div class="modal-body">
        <div class="row">
            {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('clients.store'),'files'=>true]) !!}

                
              
               
           

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
                        </table>

                
             

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