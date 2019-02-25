<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Modifier une commande</h4>
    </div>
    <div class="modal-body">
        <div class="row">
            {!! Form::open(['method' =>'PUT','class' => 'form-horizontal','role' => 'form','url' => route('commandes.update',$commande),'files'=>true]) !!}
           
            <div class="col-md-6" style="padding: 0px">
                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('produit_id','Produit*') !!}</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="email" value="{{$commande->produit_id}}" required="">
                </div>
            </div>
            <div class="col-md-6" style="padding: 0px">
                <label for="inputEmail3" class="col-sm-12 control-label">{!! Form::label('quantite','Quantite*') !!}</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="nom" value="{{$commande->quantite}}" required="">
                </div>
            </div>
            <div class="col-md-6" style="padding: 0px">
                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('user_id','Employe*') !!}</label>
                <div class="col-sm-12">
                    <input type="number" class="form-control" name="telephone" value="{{$commande->user_id}}" required="">
                </div>
            </div>
        
            <div class="col-md-6" style="padding: 0px">
                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('fournisseur_id','Fournisseur*') !!}</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="adresse" value="{{$commande->fournisseur_id}}" required="">
                </div>
            </div>
            <div class="col-md-6" style="padding: 0px">
    
           
          
            <div class="m-b-0">
                <div class="col-sm-offset-3 col-sm-9">

                </div>
            </div>
            <div class="col-md-12" style="border:0px;text-align: right;margin-top: 20px">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Fermer</button>
                <button class="btn btn-primary">Modifier</button>
            </div>
            {!! Form::close() !!}
        </div>

    </div>

</div>