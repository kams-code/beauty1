<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Ajouter un personnel</h4>
    </div>
    <div class="modal-body">
        <div class="row">
            {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('personnels.store'),'files'=>true]) !!}
           
            <div class="col-md-12" style="padding: 0px">
                <center>
                    <img id="imgpreview" src="/images/camera_icon.png" style="width: 100px;cursor: pointer;" >
                    <input id="inputimage" type="file" name="imageup" accept="images/*" style="display: none;" >

                </center>
            </div>
            <div class="col-md-6" style="padding: 0px">
                <label for="inputEmail3" class="col-sm-12 control-label">{!! Form::label('nom','Nom*') !!}</label>
                <div class="col-sm-12">
                    {!! Form::text('nom',null, ['class' => 'form-control','required']) !!}
                </div>
            </div>
            <div class="col-md-6" style="padding: 0px">
                <label for="inputEmail3" class="col-sm-12 control-label">{!! Form::label('prenom','Prenom*') !!}</label>
                <div class="col-sm-12">
                    {!! Form::text('prenom',null, ['class' => 'form-control','required']) !!}
                </div>
            </div>
            <div class="col-md-6" style="padding: 0px">
                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('telephone','Téléphone*') !!}</label>
                <div class="col-sm-12">
                    {!! Form::number('telephone',null, ['class' => 'form-control','required']) !!}
                </div>
            </div>
            <div class="col-md-6" style="padding: 0px">
                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('email','Email*') !!}</label>
                <div class="col-sm-12">
                    {!! Form::email('email',null, ['class' => 'form-control','required']) !!}
                </div>
            </div>
            <div class="col-md-6" style="padding: 0px">
                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('adresse','Adresse*') !!}</label>
                <div class="col-sm-12">
                    {!! Form::text('adresse',null, ['class' => 'form-control','required']) !!}
                </div>
            </div>
          
            <div class="col-md-6" style="padding: 0px">
                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('ville','Ville*') !!}</label>
                <div class="col-sm-12">
                    {!! Form::text('ville',null, ['class' => 'form-control','required']) !!}
                </div>
            </div>

<<<<<<< HEAD
            <div class="col-md-12" style="padding: 0px">
                <center>
                    <img id="imgpreview" src="/images/pdf_icon.png" style="width: 100px;cursor: pointer;" >
                    <input type="file" name="cv" style="display: none;" >

                </center>
=======
            <div class="col-md-6" style="padding: 0px">
                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('ville','Services') !!}</label>
                <div class="col-sm-12">
                   
                    {!! Form::select('services_id[]',$services,null, ['class' => 'js-example-basic-multiple form-control', 'multiple']) !!}
                </div>
>>>>>>> 26a9eb48f0c1ffacdfa2d005a21aefd917d7660a
            </div>
            <script>
                $(".js-example-basic-multiple").select2();
             </script>


<div class="col-md-6" style="padding: 0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('ville','CV') !!}</label>
                
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
                <button class="btn btn-primary">Ajouter</button>
            </div>
            {!! Form::close() !!}
        </div>

    </div>

</div>