<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Détail du fournisseur</h4>
    </div>
    <div class="modal-body">
        <div class="row">
            {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('fournisseurs.store'),'files'=>true]) !!}

                
                <div class="col-md-12">
                    
                    <style>
                        .col-md-9 label {
                            margin-bottom: 10px
                        }
                    </style>
                   
                </div>
                <div class="col-md-12">

                    <div class="col-md-6" style="padding: 4px">
                        <strong style="padding: 4px">Nom :</strong>{{$fournisseur["nom"]}}
                    </div>

                    <div class="col-md-6" style="padding: 4px">
                        <strong style="padding: 4px">Téléphone :</strong>{{$fournisseur["telephone"]}}
                    </div>
                    </br>
                    </br>
                </div>
                </br>
                <div class="col-md-12">

                    <div class="col-md-6" style="padding: 4px">
                        <strong style="padding: 4px">Email :</strong>{{$fournisseur["email"]}}
                    </div>

                    <div class="col-md-6" style="padding: 4px">
                        <strong style="padding: 4px">Adresse :</strong>{{$fournisseur["adresse"]}}
                    </div>
                    </br>
                    </br>
                </div>
                </br>
                <div class="col-md-12">

                    <div class="col-md-6" style="padding: 4px">
                        <strong style="padding: 4px">Pays :</strong>{{$fournisseur["pays"]}}
                    </div>

                    <div class="col-md-6" style="padding: 4px">
                        <strong style="padding: 4px">Ville :</strong>{{$fournisseur["ville"]}}
                    </div>
                    </br>
                    </br>
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