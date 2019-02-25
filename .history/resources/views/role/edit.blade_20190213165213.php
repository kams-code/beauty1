<div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title">Modifier le role</h4>
        </div>
        <div class="modal-body">
            <div class="row">
                {!! Form::open(['methode'=>'PUT','class' => 'form-horizontal','role' => 'form','url' => route('roles.update',$role)]) !!}
               
                    <div class="col-md-12" style="padding: 0px">
                            <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('name','Nom*') !!}</label>
                            <div class="col-sm-12">
                                    {!! Form::text('name', $role->n, ['class' => 'form-control','required']) !!}
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