<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Modifier un service</h4>
    </div>
    <div class="modal-body">
        <div class="row">
            {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('services.update',$service),'files'=>true]) !!}
            
            <div class="col-md-12" style="padding: 0px">
                <center>
                    <img id="imgpreview" src="{{asset('images/'.$service->image)}}" style="width: 130px; height:120px; cursor: pointer;" required>
                    <input id="inputimage" type="file" name="imageup" accept="images/*" style="display: none;">

                </center>
            </div>
            </br>
            <div class="col-md-6" style="padding: 0px">
                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('code','Code*') !!}</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="code" value="{{$service->code}}" required="">
                </div>
            </div>
            <div class="col-md-6" style="padding: 0px">
                <label for="inputEmail3" class="col-sm-12 control-label">{!! Form::label('nom','Nom*') !!}</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="nom" value="{{$service->nom}}" required="">
                </div>
            </div>
            </br>
            <div class="col-md-6" style="padding: 0px">
                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('montant','Montant*') !!}</label>
                <div class="col-sm-12">
                    <input type="number" class="form-control" name="montant" value="{{$service->montant}}" required="">
                </div>
            </div>
            <div class="col-md-6" style="padding: 0px">
                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('categorie_id','Categorie*') !!}</label>
                <div class="col-sm-12">
                    <input type="select" class="form-control" name="categorie_id" value="{{$service->categorie_id}}" required="">
                </div>
            </div>
            </br>
            <div class="col-md-6" style="padding: 0px">
                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('user_id','Employe*') !!}</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="user_id" value="{{$service->user_id}}" >
                   
                </div>
            </div>
            </br>
           
            <div class="col-md-12" style="padding: 0px">
                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('description','Description*') !!}</label>
                <div class="col-sm-12">
                    <textarea class="form-control" name="description" required>{{$service->description}}</textarea>
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