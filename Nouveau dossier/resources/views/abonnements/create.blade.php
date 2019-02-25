<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Ajouter un abonnement</h4>
    </div>
    <div class="modal-body">
        <div class="row">
            {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('abonnements.store'),'files'=>true]) !!}
   
            
            <div class="col-md-6" style="padding: 0px">
                <label for="inputEmail3" class="col-sm-12 control-label">{!! Form::label('organisation_id','Institut*') !!}</label>
                <div class="col-sm-12">
                    {!! Form::select('organisation_id',$organisations,null, ['class' => 'form-control','required']) !!}
                </div>
            </div>
            <div class="col-md-6" style="padding: 0px">
                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('type',"Type d'abonnement :") !!}</label>
                <div class="col-sm-12">
                    <select name="heure" class="form-control">
                      <option value="mensuel">Mensuel</option>
                        <option value="annnuel">Annuel</option>
                      </select>
                 </div>
            </div>
            <div class="col-md-6" style="padding: 0px">
                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('datedebut','Date début*') !!}</label>
                <div class="col-sm-12">
                    <input class="form-control" type="datetime-local" id="meeting-time"
                    name="datedebut" 
                    >                </div>
            </div>
            <div class="col-md-6" style="padding: 0px">
                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('datedebut','Etat*') !!}</label>
              
                <div  class="col-sm-12">
                    <div class="checkbox checkbox-primary ">
                        <input class="form-control"id="checkbox2" type="checkbox">
                        <label for="checkbox2">
                            Etat
                        </label>
                    </div>
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