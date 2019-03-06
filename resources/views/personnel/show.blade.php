<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Détail du personnel</h4>
    </div>
    <div class="modal-body">
        <div class="row">
            {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('personnels.store'),'files'=>true]) !!}

                
                <div class="col-md-12">
                    
                    <style>
                        .col-md-9 label {
                            margin-bottom: 10px
                        }
                    </style>
                    <div class="col-md-3">
                        <img style="width: 100%;height: 115px" src="{{asset('images/'.$personnel->image)}}">
                    </div>
                    <div class="col-md-9">
                        <label>
                            <strong>Nom:</strong> {{$personnel->nom}}
                        </label>
                        <br>
                        <label>
                            <strong>Nom:</strong> {{$personnel->prenom}}
                        </label>
                        <br>
                        <label>
                            <strong>Téléphone:</strong> {{$personnel["telephone"]}}
                        </label>
                        <br>
                        <label>
                            <strong>Email:</strong> {{$personnel["email"]}}
                        </label>
                        <br>
                        <label>
                            <strong>Adresse:</strong> {{$personnel["adresse"]}} ({{$personnel["pays"]}}, {{$personnel["ville"]}})
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