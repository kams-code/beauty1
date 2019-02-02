<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Modifier un institut</h4>
    </div>
    <div class="modal-body">
        <div class="row">
            {!! Form::open(['method' => 'PUT','class' => 'form-horizontal','role' => 'form','url' => route('produits.update',$produit),'files'=>true]) !!}
            
            <div class="col-md-12" style="padding: 0px">
                    <center>
                        <img id="imgpreview" src="/images/camera_icon.png" style="width: 100px;cursor: pointer;">
                        <input id="inputimage" type="file" name="image" accept="images/*" style="display: none;">
                   
                    </center>
                </div>


                <div class="col-md-6" style="padding: 0px">
                        <label for="inputEmail3" class="col-sm-12 control-label">{!! Form::label('nom','Nom*') !!}</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="nom" value="{{$produit->nom}}" required="">
                        </div>
                    </div>
                  
               















                <div class="col-md-6" style="padding: 0px">
                    <label for="inputEmail3" class="col-sm-12 control-label">{!! Form::label('fournisseur_id','Fournisseur', ['class' => 'pull-left']) !!}</label>
                    <div class="col-sm-12">
                            <select id="pet-select" name="fournisseur_id"  class="form-control">
                                @foreach ($fournisseurs as $fournisseur )
                                <option value="{{$fournisseur->id}}">{{$fournisseur->nom}}</option>

                                @endforeach
                                  
                                </select>
                     </div>
                </div>
                <div class="col-md-6" style="padding: 0px">
                        <label for="inputEmail3" class="col-sm-12 control-label">{!! Form::label('categorie_id','Categorie', ['class' => 'pull-left']) !!}</label>
                        <div class="col-sm-12">
                                <select id="pet-select" name="categorie_id" class="form-control">
                                        @foreach ($categories as $categorie )
                                        <option value="{{$categorie->id}}">{{$categorie->nom}}</option>
        
                                        @endforeach
                                          
                                        </select>
                         </div>
                    </div>
                    <div class="col-md-6" style="padding: 0px">
                            <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('vendable','Vendable') !!}</label>
                            <div class="col-sm-12">
                                    <div class="checkbox">
                                            <input   id="checkbox" type="checkbox" name="vendable" > 
                                            <label for="checkbox"   >
                                                    Le produit est il vendable? 
                                            </label>
                                        </div>
                            
</div>
                        </div>
                        <div class="col-md-6" style="padding: 0px">
                                <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('stockable','Stockable') !!}</label>
                                <div class="col-sm-12">
                                        <div class="checkbox">
                                                <input   id="checkbox" type="checkbox" name="stockable" > 
                                                <label for="checkbox"   >
                                                      Est il stockable?
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
                <button class="btn btn-primary">Modifier</button>
            </div>
            {!! Form::close() !!}
        </div>

    </div>

</div>