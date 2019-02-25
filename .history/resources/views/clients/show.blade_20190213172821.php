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
                        <label>
                            <strong>Email:</strong> {{$client["email"]}}
                        </label>
                        <br>
                        <label>
                            <strong>Adresse:</strong> {{$client["adresse"]}} ({{$client["pays"]}}, {{$client["ville"]}})
                        </label>

                    </div>
                </div>
                <div class="col-md-12">

                    <div class="col-md-6" style="padding: 4px">
                        <strong>Pays:</strong>
                    </div>

                    <div class="col-md-6" style="padding: 4px">
                        <strong>Ville:</strong>{{$client["ville"]}}
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