<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Modifier un equipement</h4>
    </div>
    <div class="modal-body">
        <div class="row">
            {!! Form::open(['method'=>'PUT','class' => 'form-horizontal','role' => 'form','url' => route('equipements.update',$equipement),'files'=>true]) !!}
            
            <div class="col-md-12" style="padding: 0px">
                <center>
                    <img id="imgpreview" src="{{asset('images/'.$equipement->image)}}" style="width: 130px; height:120px; cursor: pointer;" required>
                    <input id="inputimage" type="file" name="imageup" accept="images/*" style="display: none;">

                </center>
            </div>
            </br>
           
            <div class="col-md-6" style="padding: 0px">
                <label for="inputEmail3" class="col-sm-12 control-label">{!! Form::label('nom','Nom*') !!}</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="nom" value="{{$equipement->nom}}" required="">
                </div>
            </div>
            <div class="col-md-6" style="padding: 0px">
                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('fournisseur_id','Fournisseur*') !!}</label>
                <div class="col-sm-12">
                {!! Form::select('fournisseur_id',$fournisseurs,$equipement->F, ['class' => 'form-control']) !!}
                </div>
            </div>
            </br>
          
           
            <div class="col-md-12" style="padding: 0px">
                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('description','Description*') !!}</label>
                <div class="col-sm-12">
                    <textarea class="form-control" name="description" required>{{$equipement->description}}</textarea>
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