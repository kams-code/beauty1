<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Détail de l'institut</h4>
    </div>
    <div class="modal-body">
        <div class="row">
            {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('horaires.store'),'files'=>true]) !!}

                <div class="col-md-12">
                    <h4>Informations de base</h4>
                </div>
                <div class="col-md-12">
                    
                    <style>
                        .col-md-9 label {
                            margin-bottom: 10px
                        }
                    </style>
                    <div class="col-md-3">
                        <img style="width: 100%;height: 115px" src="{{asset('images/'.$horaire->image)}}">
                    </div>
                    <div class="col-md-9">
                        <label>
                            <strong>Nom:</strong> {{$horaire->nom}}
                        </label>
                        <br>
                        <label>
                            <strong>Téléphone:</strong> {{$horaire["telephone"]}}
                        </label>
                        <br>
                        <label>
                            <strong>Email:</strong> {{$horaire["email"]}}
                        </label>
                        <br>
                        <label>
                            <strong>Adresse:</strong> {{$horaire["adresse"]}}
                        </label>

                    </div>
                </div>
                <div class="col-md-12">

                    <div class="col-md-6" style="padding: 4px">
                        <strong>Pays:</strong>{{$horaire["pays"]}}
                    </div>

                    <div class="col-md-6" style="padding: 4px">
                        <strong>Ville:</strong>{{$horaire["ville"]}}
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-6" style="padding: 4px">
                        <strong>Description:</strong>
                    </div>
                    <div class="col-sm-12">
                        {{$horaire["description"]}}

                    </div>
                    <label></label>

                </div>
                <div class="col-md-12">
                    <h4><b >Informations de connexion</b></h4>
                </div>
                <div class="col-md-6" style="padding: 0px">
                    <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('name','Identifiant') !!}</label>
                    <div class="col-sm-12">
                        {{$horaire["identifiant"]}}
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