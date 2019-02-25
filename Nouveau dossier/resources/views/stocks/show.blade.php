<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Détail de la modification</h4>
    </div>
    <div class="modal-body">
        <div class="row">
            {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('stocks.store'),'files'=>true]) !!}

              
                <div class="col-md-12">
                    
                    <style>
                        .col-md-9 label {
                            margin-bottom: 10px
                        }
                    </style>
                    <div class="col-md-3">
                        <img style="width: 100%;height: 115px" src="{{asset('images/'.$produit->image)}}">
                    </div>
                    <div class="col-md-9">
                        <label>
                            <strong>Quantité initial:</strong> {{$stock->quantite_initial}}
                        </label>
                        <br>
                        <label>
                            <strong>Quantité finale:</strong> {{$stock["quantite_final"]}}
                        </label>
                        <br>
                        <label>
                            <strong>Quantité limite:</strong> {{$stock["quantite_limite"]}}
                        </label>
                        <br>
                        <label>
                                <strong>Date d'entrer en stock:</strong> {{$stock["created_at"]}}
                            </label>
                            <br>
                            <label>
                                    <strong>Dernière mise à jour:</strong> {{$stock["updated_at"]}}
                                </label>
                                <br>

                    </div>
                </div>
                <div class="col-md-12">

                    <div class="col-md-6" style="padding: 4px">
                        <strong>Produit:</strong>{{$produit["nom"]}}
                    </div>
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