<style>
   label{
       text-align:left;
   }
</style>
<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Ajouter une taxe</h4>
    </div>
    <div class="modal-body">
        <div class="row">
            {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('taxes.store'),'files'=>true]) !!}
            <div class="col-md-12" style="padding: 0px">
                <label for="inputEmail3" class="col-sm-12 control-label">{!! Form::label('intitule','Intitulé*') !!}</label>
                <div class="col-md-12">
                    {!! Form::text('intitule',null, ['class' => 'form-control','required']) !!}
                </div>
            </div>
            <div class="col-md-12" style="padding: 0px">
                <label for="inputEmail3" class="col-sm-12 control-label">Type de valeur</label>
                <div class="col-md-12">
                    <select class="form-control" name="typevaleur">
                        <option value="Pourcentage">Pourcentage</option>
                        <option value="Autres">Autres</option>
                    </select>
                </div>
            </div>
            <div class="col-md-12" style="padding: 0px">
                <label for="inputEmail3" class="col-sm-12 control-label">Valeur</label>
                <div class="col-md-12">
                    {!! Form::text('valeur',null, ['class' => 'form-control','required']) !!}
                </div>
            </div>
            <div class="m-b-0">
                <div class="col-sm-offset-3 col-sm-9">

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