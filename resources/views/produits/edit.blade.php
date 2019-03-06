<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Modifier un produit</h4>
    </div>
    <div class="modal-body">
        <div class="row">
            {!! Form::open(['method'=>'PUT','class' => 'form-horizontal','role' => 'form','url' => route('produits.update',$produit),'files'=>true]) !!}
           
            <div class="col-md-12" style="padding: 0px">
                    <center>
                        <?php
                            if (strlen($produit->image) == 0) {
                                ?>
                                    <img id="imgpreview" src="/images/camera_icon.png" style="width: 100px;cursor: pointer;height: 100px">
                                <?php
                            }
                            else{
                                ?>
                                    <img style="width: 100px;cursor: pointer;height: 100px" src="{{asset('images/'.$produit->image)}}">
                                <?php
                            }
                        ?>
                        
                        <input id="inputimage" type="file" name="image" accept="images/*" style="display: none;">
                   
                    </center>
                </div>
                <div class="col-md-6" style="padding: 0px">
                    <label for="inputEmail3" class="col-sm-12 control-label">{!! Form::label('nom','Nom*', ['class' => 'pull-left']) !!}</label>
                    <div class="col-sm-12">
                      {!! Form::text('nom',$produit['nom'], ['class' => 'form-control','required']) !!}
                     </div>
                </div>
                <div class="col-md-6" style="padding: 0px">
                    <label for="inputEmail3" class="col-sm-12 control-label">{!! Form::label('fournisseur_id','Fournisseur*', ['class' => 'pull-left']) !!}</label>
                    <div class="col-sm-12">
                        {!! Form::select('fournisseur_id',$fournisseurs,null, ['class' => 'form-control','required']) !!}
                     </div>
                </div>
                <div class="col-md-6" style="padding: 0px">
                        <label for="inputEmail3" class="col-sm-12 control-label">{!! Form::label('categorie_id','Categorie*', ['class' => 'pull-left']) !!}</label>
                        <div class="col-sm-12">
                            {!! Form::select('categorie_id',$categories,null, ['class' => 'form-control','required']) !!}
                         </div>
                    </div> <div class="col-md-12" style="padding: 0px">
                            <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('description','Description*') !!}</label>
                            <div class="col-sm-12">
                                <textarea class="form-control"  name="description" required>{{$produit['description']}}</textarea>
                            </div>
                        </div>

                        <?php
                            if ($produit->vendable == 0) {
                                $checkedvend = "";
                                $stylevend = "display:none";
                            }
                            else{
                                $checkedvend = "checked";
                                $stylevend = "display:block";
                            }

                            if ($produit->stockable == 0) {
                                $checkedstock = "";
                                $stylestock = "display:none";
                            }
                            else{
                                $checkedstock = "checked";
                                $stylestock = "display:block";
                            }
                        ?>
<div class="col-md-12">
                    <div class="col-md-6" style="padding: 0px">
                            <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('vendable','Vendable*') !!}</label>
                            <div class="col-sm-12">
                                <div class="checkbox">
                                    <input <?=$checkedvend?> id="more_info" type="checkbox" name="vendable" > 
                                    <label for="checkbox"   >
                                            Est il vendable? 
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" style="padding: 0px;<?=$stylevend?>" id="conditional_part">
                                <label for="inputEmail3" class="col-sm-12 control-label">{!! Form::label('prix','Prix', ['class' => 'pull-left']) !!}</label>
                                <div class="col-sm-12">
                                    
                                  {!! Form::number('prix',$produit->prix, ['class' => 'form-control']) !!}
                                 </div>
                           </div><script>$('#more_info').change(function() {
                                    if(this.checked != true){
                                          $("#conditional_part").hide();
                                     }
                                  else{
                                        $("#conditional_part").show();
                                  }
                                });</script>
</div>

<div class="col-md-12">
<div class="col-md-6" style="padding: 0px">
        <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('vendable','Stockable*') !!}</label>
        <div class="col-sm-12">
                <div class="checkbox">
                        <input  <?=$checkedstock?> id="more_info1" type="checkbox" name="stockable" > 
                        <label for="checkbox"   >
                                Est il stockable? 
                        </label>
                    </div>
        
</div>
    </div>
    <div class="col-md-6" style="padding: 0px;<?=$stylestock?>" id="conditional_part1">
            <label for="inputEmail3" class="col-sm-12 control-label">{!! Form::label('prix','Quantité', ['class' => 'pull-left']) !!}</label>
            <div class="col-sm-12">
                
              {!! Form::number('quantite',$produit->quantite, ['class' => 'form-control']) !!}
             </div>
       </div><script>$('#more_info1').change(function() {
                if(this.checked != true){
                      $("#conditional_part1").hide();
                 }
              else{
                    $("#conditional_part1").show();
              }
            });</script>

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