<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Détail sur l' equipement</h4>
    </div>
    <div class="modal-body">
        <div class="row">
            {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('equipements.store'),'files'=>true]) !!}

                
                <div class="col-md-12">
                    
                    <style>
                        .col-md-9 label {
                            margin-bottom: 10px
                        }
                    </style>
                    <div class="col-md-3">
                        <img style="width: 110px;height: 110px" src="{{asset('images/'.$equipement->image)}}">
                    </div>
                    <div class="col-md-9">
                        
                        <label>
                            <strong>Nom:</strong> {{$equipement->nom}}
                        </label>
                        <br>
                        <label>
                            <strong>Fournisseur:</strong> {{$equipement->fournisseur_id}}
                        </label>


                    </div>
                </div>
                
                <div class="col-md-12">
                    <div class="col-md-6" style="padding: 4px">
                        <strong>Description:</strong>
                    </div>
                    <div class="col-sm-12">
                        {{$equipement["description"]}}

                    </div>
                    <label></label>

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