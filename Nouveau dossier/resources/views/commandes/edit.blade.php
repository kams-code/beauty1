<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Modifier une commande</h4>
    </div>
    <div class="modal-body">
        <div class="row">
            {!! Form::open(['method'=>'PUT','class' => 'form-horizontal','role' => 'form','url' => route('commandes.update',$commande),'files'=>true]) !!}
            
            <div class="col-md-12" style="padding: 0px">
                <center>
                    <img id="imgpreview" src="/images/logo_dark.png" style="width: 100px;cursor: pointer;" >
                
                </center>
            </div>
            <div class="col-md-12" style="padding: 0px">
                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('nom','Titre de la commande*') !!}</label>
                <div class="col-sm-12">
                {!! Form::text('nom',$commande->nom, ['class' => 'form-control','required']) !!}
                </div>
            </div>
            <div class="col-md-6" style="padding: 0px">
                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('produit_id','Produits*') !!}</label>
                <div class="col-sm-12">
                {!! Form::select('produit_id',$produits,$commande->produit_id,['class' => 'form-control','required']) !!}
                </div>
            </div>
            <div class="col-md-6" style="padding: 0px">
                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('quantite','Quantite*') !!}</label>
                <div class="col-sm-12">
                {!! Form::number('quantite',$commande->quantite, ['class' => 'form-control','required']) !!}
                </div>
            </div>
            <div class="col-md-6" style="padding: 0px">
                <label for="inputEmail3" class="col-sm-12 control-label">{!! Form::label('user_id','Employe*') !!}</label>
                <div class="col-sm-12">
                {!! Form::select('user_id',$users,$commande->user_id, ['class' => 'form-control','required']) !!}
                </div>
            </div>
           
            <div class="col-md-6" style="padding: 0px">
                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('fournisseur_id','Fournisseur*') !!}</label>
                <div class="col-sm-12">
                {!! Form::select('fournisseur_id',$fournisseurs,$commande->fournisseur_id, ['class' => 'form-control','required']) !!}

                </div>
            </div>
            <div class="col-md-6" style="padding: 0px">
                            <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('etat','Etat') !!}</label>
                            <div class="col-sm-12">
                                    <div class="checkbox">
                                            <input   id="checkbox" type="checkbox" name="etat" > 
                                            <label for="checkbox"   >
                                                    Est il valide? 
                                            </label>
                                    </div> 
                            
                            </div>
            </div>
            

            <div class="m-b-0">
                <div class="col-sm-offset-3 col-sm-9">

                </div>
            </div>
            <div class="col-md-12" style="border:0px;text-align: right;margin-top: 20px">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Fermer</button>
                <button class="btn btn-primary">Enregistrer</button>
            </div>
            {!! Form::close() !!}
        </div>

    </div>

</div>