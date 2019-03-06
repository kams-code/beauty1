<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Modifiez le stock d'un produit</h4>
    </div>
    <div class="modal-body">
        <div class="row">
            {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('stocks.store'),'files'=>true]) !!}
           

              
                <div class="col-md-6" style="padding: 0px">
                    <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('produit_id','Produit*') !!}</label>
                    <div class="col-sm-12">
                        {!! Form::select('produit_id',$produits,null, ['class' => 'form-control','required']) !!}
                    <br>  <br>  </div>
                </div>
                <div class="col-md-6" style="padding: 0px">
                        <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('type',"Type d'action") !!}</label>
                        <div class="col-sm-12">
                            <select name="type" class="form-control">
                              <option value="Ajout">Ajouter</option>
                                <option value="Retrait">Rétirer</option>
                              </select>
                         </div>
                    </div>
                <div class="col-md-6" style="padding: 0px">
                        <label for="inputEmail3" class="col-sm-3 control-label"> {!! Form::label('quantite_initial','Quantité*') !!}</label>
                        <div class="col-sm-12">
                            {!! Form::text('quantite',null, ['class' => 'form-control','required']) !!}
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