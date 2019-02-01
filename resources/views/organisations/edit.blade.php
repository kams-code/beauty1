<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Modifier un institut</h4>
    </div>
    <div class="modal-body">
        <div class="row">
            {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('organisations.update',$organisation),'files'=>true]) !!}
            <div class="col-md-12">
                <h4>Informations de base</h4>
            </div>
            <div class="col-md-12" style="padding: 0px">
                <center>
                    <img id="imgpreview" src="{{asset('images/'.$organisation->image)}}" style="width: 100px;cursor: pointer;" required>
                    <input id="inputimage" type="file" name="imageup" accept="images/*" style="display: none;">

                </center>
            </div>
            <div class="col-md-6" style="padding: 0px">
                <label for="inputEmail3" class="col-sm-12 control-label">{!! Form::label('nom','Nom*') !!}</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="nom" value="{{$organisation->nom}}" required="">
                </div>
            </div>
            <div class="col-md-6" style="padding: 0px">
                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('telephone','Téléphone*') !!}</label>
                <div class="col-sm-12">
                    <input type="number" class="form-control" name="telephone" value="{{$organisation->telephone}}" required="">
                </div>
            </div>
            <div class="col-md-6" style="padding: 0px">
                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('email','Email*') !!}</label>
                <div class="col-sm-12">
                    <input type="email" class="form-control" name="email" value="{{$organisation->email}}" required="">
                </div>
            </div>
            <div class="col-md-6" style="padding: 0px">
                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('adresse','Adresse*') !!}</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="adresse" value="{{$organisation->adresse}}" required="">
                </div>
            </div>
            <div class="col-md-6" style="padding: 0px">
                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('pays','Pays*') !!}</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="pays" value="{{$organisation->pays}}" required="">
                </div>
            </div>
            <div class="col-md-6" style="padding: 0px">
                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('ville','Ville*') !!}</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="ville" value="{{$organisation->ville}}" required="">
                </div>
            </div>
            <div class="col-md-12" style="padding: 0px">
                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('description','Description*') !!}</label>
                <div class="col-sm-12">
                    <textarea class="form-control" name="description" required>{{$organisation->description}}</textarea>
                </div>
            </div>
            <div class="col-md-12">
                <h4><b >Informations de connexion</b></h4>
            </div>
            <div class="col-md-6" style="padding: 0px">
                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('name','Identifiant*') !!}</label>
                <div class="col-sm-12">
                    <input type="text" name="name" class="form-control" required value="{{$organisation->identifiant}}">
                </div>
            </div>
            <div class="col-md-6" style="padding: 0px">
                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('password','Mot de passe*') !!}</label>
                <div class="col-sm-12">
                    <input type="password" name="password" class="form-control" required>
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