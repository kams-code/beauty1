<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Modifier un fournisseur</h4>
    </div>
    <div class="modal-body">
        <div class="row">
            {!! Form::open(['method'=>'PUT', 'class' => 'form-horizontal','role' => 'form','url' => route('fournisseurs.update',$fournisseur),'files'=>true]) !!}
            <div class="col-md-12">
                <h4>Informations de base</h4>
            </div>
            <div class="col-md-12" style="padding: 0px">
                <center>
                    <img id="imgpreview" src="{{asset('images/logo_dark.png')}}" style="width: 100px;cursor: pointer;" required>
                  

                </center>
            </div>
            <div class="col-md-6" style="padding: 0px">
                <label for="inputEmail3" class="col-sm-12 control-label">{!! Form::label('nom','Nom*') !!}</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="nom" value="{{$fournisseur->nom}}" required="">
                </div>
            </div>
            <div class="col-md-6" style="padding: 0px">
                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('telephone','Téléphone*') !!}</label>
                <div class="col-sm-12">
                    <input type="number" class="form-control" name="telephone" value="{{$fournisseur->telephone}}" required="">
                </div>
            </div>
            <div class="col-md-6" style="padding: 0px">
                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('email','Email*') !!}</label>
                <div class="col-sm-12">
                    <input type="email" class="form-control" name="email" value="{{$fournisseur->email}}" required="">
                </div>
            </div>
            <div class="col-md-6" style="padding: 0px">
                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('adresse','Adresse*') !!}</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="adresse" value="{{$fournisseur->adresse}}" required="">
                </div>
            </div>
            <div class="col-md-6" style="padding: 0px">
                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('pays','Pays*') !!}</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="pays" value="{{$fournisseur->pays}}" required="">
                </div>
            </div>
            <div class="col-md-6" style="padding: 0px">
                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('ville','Ville*') !!}</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="ville" value="{{$fournisseur->ville}}" required="">
                </div>
            </div>
            <div class="col-md-12" style="padding: 0px">
                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('description','Description*') !!}</label>
                <div class="col-sm-12">
                    <textarea class="form-control" name="description" required>{{$fournisseur->description}}</textarea>
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
            
        </div>

    </div>

</div>