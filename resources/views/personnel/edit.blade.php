<div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title">Modifier un employé</h4>
        </div>
        <div class="modal-body">
            <div class="row">
                {!! Form::open(['method'=>'PUT','class' => 'form-horizontal','role' => 'form','url' => route('personnels.update',$personnel),'files'=>true]) !!}
               
           
                <div class="col-md-12" style="padding: 0px">
                    <center>
                        <?php
                            if (strlen($personnel->image) == 0) {
                                ?>
                                    <img id="imgpreview" src="/images/camera_icon.png" style="width: 100px;cursor: pointer;" >
                                <?php
                            }
                            else{
                                ?>
                                    <img id="imgpreview" src="/images/{{$personnel->image}}" style="width: 100px;cursor: pointer;" >
                                <?php
                            }
                        ?>
                        
                        <input id="inputimage" type="file" name="imageup" accept="images/*" style="display: none;" >
    
                    </center>
                </div>
                <div class="col-md-6" style="padding: 0px">
                    <label for="inputEmail3" class="col-sm-12 control-label">{!! Form::label('nom','Nom*') !!}</label>
                    <div class="col-sm-12">
                        {!! Form::text('nom',$personnel['nom'], ['class' => 'form-control','required']) !!}
                    </div>
                </div>
                <div class="col-md-6" style="padding: 0px">
                    <label for="inputEmail3" class="col-sm-12 control-label">{!! Form::label('prenom','Prenom*') !!}</label>
                    <div class="col-sm-12">
                        {!! Form::text('prenom',$personnel['prenom'], ['class' => 'form-control','required']) !!}
                    </div>
                </div>
                <div class="col-md-6" style="padding: 0px">
                    <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('telephone','Téléphone*') !!}</label>
                    <div class="col-sm-12">
                        {!! Form::number('telephone',$personnel['telephone'], ['class' => 'form-control','required']) !!}
                    </div>
                </div>
                <div class="col-md-6" style="padding: 0px">
                    <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('email','Email*') !!}</label>
                    <div class="col-sm-12">
                        {!! Form::email('email',$personnel['email'], ['class' => 'form-control','required']) !!}
                    </div>
                </div>
                <div class="col-md-6" style="padding: 0px">
                    <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('adresse','Adresse*') !!}</label>
                    <div class="col-sm-12">
                        {!! Form::text('adresse',$personnel['adresse'], ['class' => 'form-control','required']) !!}
                    </div>
                </div>
              
                <div class="col-md-6" style="padding: 0px">
                    <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('ville','Ville*') !!}</label>
                    <div class="col-sm-12">
                        {!! Form::text('ville',$personnel['ville'], ['class' => 'form-control','required']) !!}
                    </div>
                </div>
    
                <div class="col-md-6" style="padding: 0px">
                    <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('ville','Services') !!}</label>
                    <div class="col-sm-12">
                        <select class="js-example-basic-multiple form-control" name="services_id[]" multiple="">
                            <?php
                                $select ="";
                                foreach ($Services as $service) {

                                    foreach ($services as $serviceq) {
                                        if ($serviceq->services_id == $service->id AND $serviceq->user_id == $personnel->id) {
                                            $select = "selected";
                                            break;
                                        }
                                        else{
                                             $select ="";
                                        }
                                    }
                                    ?>
                                        <option <?=$select?> value="<?=$service->id?>"><?=$service->nom?></option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <script>
                    $(".js-example-basic-multiple").select2();
                 </script>
    
    
    <div class="col-md-6" style="padding: 0px;">
            <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('ville','CV') !!} 
                <?php
                    if (strlen($personnel->cv) != 0) {
                        ?>
                            (<a href="/assets/images/{{$personnel->cv}}">{{$personnel->cv}}</a>)
                        <?php
                    }
                ?></label>
                    
        <label for="inputPassword3" class="col-sm-12 control-label">
       
            <center>
             
                <input title="CV" type="file" name="cvup" >
        
            </center>
        </label>
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