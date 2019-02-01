<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Modifier un institut</h4>
    </div>
    <div class="modal-body">
        <div class="row">
            {!! Form::open(['method' => 'PUT', 'class' => 'form-horizontal','role' => 'form','url' => route('stocks.update',$stock),'files'=>true]) !!}
            <div class="col-md-6" style="padding: 0px">
                    <label for="inputEmail3" class="col-sm-3 control-label"> {!! Form::label('quantite_initial','Quantité initial') !!}</label>
                    <div class="col-sm-12">
                        {!! Form::number('quantite_initial',$stock["quantite_initial"], ['class' => 'form-control','required']) !!}
                     </div>
                </div>
                <div class="col-md-6" style="padding: 0px">
                    <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('quantite_limite','quantité limite') !!}</label>
                    <div class="col-sm-12">
                        {!! Form::number('quantite_limite',$stock["quantite_limite"], ['class' => 'form-control','required']) !!}
</div>
                </div>
              
                <div class="col-md-6" style="padding: 0px">
                    <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('produit_id','Produit') !!}</label>
                    <div class="col-sm-12">
                        {!! Form::select('produit_id',$produits,null, ['class' => 'form-control','required']) !!}
                    <br>  <br>  </div>
                </div>
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