<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Modifier la formule</h4>
    </div>
    <div class="modal-body">
        <div class="row">
     
{!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('formules.store'),'files'=>true]) !!}
       

<script>
        $(".js-example-basic-multiple").select2();
     </script>

<div class="col-md-12" style="padding: 0px">
    <label for="inputEmail3" class="col-sm-3 control-label">
        {!! Form::label('titre','Nom*') !!}
     </label>                                                <div class="col-sm-12">
        {!! Form::text('nom',$formule['nom'], ['class' => 'form-control','required']) !!}
    </div>
</div>

    <div class="col-md-12" style="padding: 0px">
        <label for="inputPassword3" class="col-sm-3 control-label">
            {!! Form::label('valeur','Prix') !!}</label>                                                <div class="col-sm-12">
                {!! Form::number('prix',$formule['prix'], ['class' => 'form-control','required']) !!}
            </div>
    </div>

 
    <div class="col-md-12">
           
                    <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('service_id','Services') !!}</label>
                    <div class="col-sm-12" style="padding: 0px" id="conditional_part">
                        {!! Form::select('services[]', $services, null, ['class' => 'js-example-basic-multiple form-control','multiple'=>'multiple']) !!}
                    </div>
                
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