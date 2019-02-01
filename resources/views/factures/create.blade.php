<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Ajouter un facture</h4>
    </div>
    <div class="modal-body">
        <div class="row">
            {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('factures.store'),'files'=>true]) !!}
            <div class="col-md-6" style="padding: 0px">
                    <label for="inputEmail3" class="col-sm-12 control-label">{!! Form::label('client_id','Client') !!}</label>
                    <div class="col-sm-12">
                        {!! Form::select('client_id',$clients,null, ['class' => 'form-control','required']) !!}
                    </div>
                </div>
            <div class="col-md-12" style="padding: 0px">
                    <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('services','Services') !!}</label>
                    <div class="col-sm-12">
                        {!! Form::select('services[]', $services, null, ['class' => 'form-control','required','multiple'=>'multiple']) !!}
</div>
                </div>                         <div class="col-md-12" style="padding: 0px">
                        <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('services','Services') !!}</label>
                        <div class="col-sm-12">
                            {!! Form::select('services[]', $services, null, ['class' => 'form-control','required','multiple'=>'multiple']) !!}
</div>
                    </div>
            <div class="m-b-0">
                <div class="col-sm-offset-3 col-sm-9">

                </div>
            </div>
            <div class="col-md-12" style="border:0px;text-align: right;margin-top: 20px">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Fermer</button>
                <button class="btn btn-primary">Enregistrer</button>
            </div>
            {!! Form::close() !!}
        </div>

    </div>

</div>