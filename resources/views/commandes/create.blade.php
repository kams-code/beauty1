<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Ajouter un approvisionnement </h4>
    </div>
    <div class="modal-body">
        <div class="row">
            {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('commandes.store'),'files'=>true]) !!}
            
            <div class="col-md-12" style="padding: 0px">
                <center>
                    <img id="imgpreview" src="/images/logo_dark.png" style="width: 100px;cursor: pointer;" >
                
                </center>
            </div>
            <div class="col-md-12" style="padding: 0px">
                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('nom','Titre de la commande*') !!}</label>
                <div class="col-sm-12">
                {!! Form::text('nom',null, ['class' => 'form-control','required']) !!}
                </div>
            </div>
            <div class="col-md-6" style="padding: 0px">
                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('produit_id','Produits*') !!}</label>
                <div class="col-sm-12">
                {!! Form::select('produit_id',$produits,null, ['class' => 'form-control','required']) !!}
                </div>
            </div>
            <div class="col-md-6" style="padding: 0px">
                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('quantite','Quantite*') !!}</label>
                <div class="col-sm-12">
                {!! Form::number('quantite',null, ['class' => 'form-control','required']) !!}
                </div>
            </div>
           
           
            <div class="col-md-6" style="padding: 0px">
                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('fournisseur_id','Fournisseur*') !!}</label>
                <div class="col-sm-12">
                {!! Form::select('fournisseur_id',$fournisseurs,null, ['class' => 'form-control','required']) !!}

                </div>
            </div>
            <div class="col-md-6" style="padding: 0px">
                            <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('etat','Etat') !!}</label>
                            <div class="col-sm-12">
                                    <div class="checkbox">
                                            <input   id="checkbox" type="checkbox" name="etat" > 
                                            <label for="checkbox"   >
                                                    Est il livrer? 
                                            </label>
                                    </div> 
                            
                            </div>
            </div>

            <div class="col-md-12" style="padding: 0px">
                    <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('etat','Envoyer un mail?') !!}</label>
                    <div class="col-sm-12">
                            <div class="checkbox">
                                    <input   id="checkbox" type="checkbox" name="mail" > 
                                    <label for="checkbox"   >
                                            
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
                <button class="btn btn-primary">Ajouter</button>
            </div>
            {!! Form::close() !!}
        </div>

    </div>

</div>