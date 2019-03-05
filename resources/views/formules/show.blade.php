<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Détail de la formule</h4>
    </div>
    <div class="modal-body">
        <div class="row">
            {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('formules.store'),'files'=>true]) !!}

            
                <div class="col-md-12">
                    
                    <style>
                        .col-md-9 label {
                            margin-bottom: 10px
                        }
                    </style>
                 
                    <div class="col-md-9">
                        <label>
                            <strong>Titre:</strong> {{$formule->titre}}
                        </label>
                        <br>
                        <label>
                            <strong>Type:</strong> {{$formule["type"]}}
                        </label>
                        <br>
                        <label>
                            <strong>Valeur:</strong> {{$formule["valeur"]}}
                        </label>
                        <br>
                        <label>
                            <strong>Etat:</strong> {{$formule["etat"]}}
                        </label>
                        <br>
                        <label>
                            <strong>Date de debut:</strong> {{$formule["datedebut"]}}
                        </label>
                        <br>
                        <br>
                        <label>
                            <strong>Date de fin:</strong> {{$formule["datefin"]}}
                        </label>
                        <br>


                    </div>
                </div>
                <div class="col-md-12">
                    @if ($formule["services_id"]!=null)
                    <div class="col-md-6" style="padding: 4px">
                        <strong>Services:</strong>
                    @foreach ($services as $service )
                    {{$service["nom"]}},
                    @endforeach
                       
                    </div>    
                    @endif
                    


                    @if ($formule["clients_id"]!=null)
                    <div class="col-md-6" style="padding: 4px">
                        <strong>Clients:</strong>
                    @foreach ($clients as $client )
                    {{$client["nom"]}},
                    @endforeach
                       
                    </div>    
                    @endif


                    
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