<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Retirer un produit en stock</h4>
    </div>
    <div class="modal-body">
            <div class="row"> 
                    {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('stocks.store')]) !!}
                    
                    <div class="col-md-6" style="padding: 0px">
                        <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('sorti_produit_id','Produit*') !!}</label>
                        <div class="col-sm-12">
                            {!! Form::select('sorti_produit_id',$produits,null, ['class' => 'form-control','required']) !!}
                        </div>
                    </div>
                    <div class="col-md-6" style="padding: 0px">
                        <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('quantite','Quantité*') !!}</label>
                        <div class="col-sm-12">
                            {!! Form::text('quantite',null, ['class' => 'form-control','required']) !!}   
                            <br><br>
</div>
                    </div>
               
                    <div class="form-group m-b-0">
                        <div class="col-sm-offset-3 col-sm-9">

                        </div>
                    </div>
                    <div class="modal-footer"> 
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Fermer</button> 
                        <button class="btn btn-primary">Envoyer</button>
                    </div> 
                    {!! Form::close() !!}
                </div> 
    </div>

</div>