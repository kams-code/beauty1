<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Ajouter un planning</h4>
    </div>
    <div class="modal-body">
        <div class="row"> 
            {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('plannings.store')]) !!}
            <div class="col-md-12" style="padding: 0px">
                <label for="inputEmail3" class="col-sm-3 control-label">{!! Form::label('heureDeb','Jours') !!}</label>
               
                </div>

            <div class="col-md-6" style="padding: 0px">
<label for="inputEmail3" class="col-sm-3 control-label">{!! Form::label('dateDeb','Debut') !!}</label>
<div class="col-sm-12">
 {!! Form::date('dateDeb',null, ['class' => 'form-control','required']) !!}
</div>
</div>

<div class="col-md-6" style="padding: 0px">
<label for="inputEmail3" class="col-sm-3 control-label">{!! Form::label('dateFin','Fin') !!}</label>
<div class="col-sm-12">
 {!! Form::date('dateFin',null, ['class' => 'form-control','required']) !!}
</div>
</div>
<div class="col-md-12" style="padding: 0px">
    <label for="inputEmail3" class="col-sm-3 control-label">{!! Form::label('heureDeb','Plage horaire') !!}</label>
   
    </div>
<div class="col-md-6" style="padding: 0px">
<label for="inputEmail3" class="col-sm-3 control-label">{!! Form::label('heureDeb','Debut') !!}</label>
<div class="col-sm-12">
 {!! Form::time('heureDeb',null, ['class' => 'form-control','required']) !!}
</div>
</div>

<div class="col-md-6" style="padding: 0px">
<label for="inputEmail3" class="col-sm-3 control-label">{!! Form::label('heureDeb','Fin') !!}</label>
<div class="col-sm-12">
 {!! Form::time('heureFin',null, ['class' => 'form-control','required']) !!}
</div>
</div>

<div class="col-md-6" style="padding: 0px">
<label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('User_id','Employé ') !!}</label>
<div class="col-sm-12">
   {!! Form::select('user_id',$users,null, ['class' => 'form-control','required']) !!}

</div>
</div>

<div class="col-md-6" style="padding: 0px">
    <label for="inputEmail3" class="col-sm-12 control-label">{!! Form::label('categorie_id','Jours', ['class' => 'pull-left']) !!}</label>
    <div class="col-sm-12">
            <select id="pet-select" name="jours[]" class="form-control" multiple="multiple">
                     <option value="Monday">Lundi</option>
                     <option value="Tuesday">Mardi</option>
                     <option value="Wednesday">Mercredi</option>
                     <option value="Thursday">Jeudi</option>
                     <option value="Friday">Vendredi</option>
                     <option value="Saturday">Samedi</option>
                     <option value="Sunday">Dimanche</option>
                    </select>
     
     </div>
</div>

<div class="form-group m-b-0">
<div class="col-sm-offset-3 col-sm-9">

</div>
</div>
<div class="modal-footer"> 
       <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Fermer</button> 
      <button class="btn btn-primary">Envoyer</button>
   </div> 
{!! Form::close() !!}
       </div> 

    </div>

</div>