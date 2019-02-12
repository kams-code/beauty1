<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Détail de la réservation</h4>
    </div>
    <div class="modal-body">
        <div class="row">
            {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('produits.store'),'files'=>true]) !!}

                <div class="col-md-12">
                    <h4>Informations du client</h4>
                </div>
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
                            <strong>Telephone:</strong> {{$client["telephone"]}}
                        </label>
                        <br>
                        <label>
                            <strong>Email:</strong> {{ $client["email"] }}
                        </label>
                        <br>
                   
                    </div>
                </div>
             
                <div class="col-md-12">
                    <div class="table-responsive">
                                                                  
                        <div class="col-md-12">
                            <h4>Services</h4>
                        </div>                        
                                                                  
                        <table id="datatable-buttons" class="table table-bordered  table-striped" id="datatable-editable">


                            <thead>
                                <tr>
                              
                                    <th>Nom</th>
                                    <th>Montant</th>
                                    <th>Enpromotion?</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                             
                                @foreach($services as $service)

           <tr class="gradeC">
                                 
                                    <td> {{ $service->nom }}</td>
                                    <td> {{ $service->montant }}</td>
                                   
                                    <td> {{ $service["is_promote"] == 1 ? 'OUI' : 'NON'}}</td>
                                    
                                </tr> 
@endforeach
                               
                            </tbody>
                       </table>
                                    </div>
                </div>
              

            <div class="m-b-0">
                <div class="col-sm-offset-3 col-sm-9">

                </div>
            </div>
            <div class="col-md-12" style="border:0px;text-align: right;margin-top: 20px">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Fermer</button>

            </div>

        </div>

    </div>

</div>  