<div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title">Détail du produit</h4>
        </div>
        <div class="modal-body">
            <div class="row">
                {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('produits.store'),'files'=>true]) !!}
    
                   
                    <div class="col-md-12">
                        
                        <style>
                            .col-md-9 label {
                                margin-bottom: 10px
                            }
                        </style>
                        <div class="col-md-3">
                            <?php
                                if (strlen($produit->image) == 0) {
                                    ?>
                                        <img style="width: 100%;height: 115px" src="{{asset('images/default.png')}}">
                                    <?php
                                }
                                else{
                                    ?>
                                        <img style="width: 100%;height: 115px" src="{{asset('images/'.$produit->image)}}">
                                    <?php
                                }
                            ?>
                            
                        </div>
                        <div class="col-md-9">
                            <label>
                                <strong>Nom:</strong> {{$produit->nom}}
                            </label>
                            <?php
                                if (count($fournisseurs) != 0) {
                                    ?>
                                        <br>
                                        <label>
                                            <strong>Fournisseur:</strong> 
                                            @foreach($fournisseurs as $fournisseur)
                                                {{$fournisseur["nom"]}}
                                            @endforeach
                                        </label>
                                    <?php
                                }
                            ?>
                            
                            <br>
                            <label>
                                <strong>Stockable?:</strong> {{ $produit["stockable"] == 1 ? 'OUI' : 'NON'}}
                            </label>
                            <br>
                            <label>
                                <strong>Vendable?:</strong> {{ $produit["vendable"] == 1 ? 'OUI' : 'NON'}}
                            </label>
                            <?php
                                if ($produit->vendable == 1) {
                                    ?>
                                        <br>
                                        <label>
                                            <strong>Prix:</strong> {{$produit->prix}}
                                        </label>
                                    <?php
                                }
                            ?>
                        </div>
                    </div>
                 
                    <div class="col-md-12">
                        <div class="col-md-6" style="padding: 4px">
                            <strong>Description:</strong>
                        </div>
                        <div class="col-sm-12">
                            {{$produit["description"]}}
    
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