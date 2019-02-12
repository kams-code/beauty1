<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Ajouter une réservation</h4>
    </div>
    <div class="modal-body">
        <div class="row">
            {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('reservations.store'),'files'=>true]) !!}
           
            
            <div class="col-md-12" style="padding: 0px">
                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('client_id','Client') !!}</label>
                <div class="col-sm-12">
                    {!! Form::select('client_id',$clients,null, ['class' => 'form-control','required']) !!}

                </div>
            </div>
          
            <div class="col-md-6" style="padding: 0px">
                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('date','Date de debut :') !!}</label>
                <div class="col-sm-12">
                  {!! Form::date('datedebut',null, ['class' => 'form-control','required']) !!}
                 </div>
            </div>
            
            <div class="col-md-6" style="padding: 0px">
                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('heure','Heure :') !!}</label>
                <div class="col-sm-12">
                    <select name="heure" class="form-control">
                          <option value="12:00">12:00am</option><option class="ui-timepicker-am">12:30am</option><option class="ui-timepicker-am">1:00am</option><option class="ui-timepicker-am">1:30am</option><option class="ui-timepicker-am">2:00am</option><option class="ui-timepicker-am">2:30am</option><option class="ui-timepicker-am">3:00am</option><option class="ui-timepicker-am">3:30am</option><option class="ui-timepicker-am">4:00am</option><option class="ui-timepicker-am">4:30am</option><option class="ui-timepicker-am">5:00am</option><option class="ui-timepicker-am">5:30am</option><option class="ui-timepicker-am">6:00am</option><option class="ui-timepicker-am">6:30am</option><option class="ui-timepicker-am">7:00am</option><option class="ui-timepicker-am">7:30am</option><option class="ui-timepicker-am">8:00am</option><option class="ui-timepicker-am">8:30am</option><option class="ui-timepicker-am">9:00am</option><option class="ui-timepicker-am">9:30am</option><option class="ui-timepicker-am">10:00am</option><option class="ui-timepicker-am">10:30am</option><option class="ui-timepicker-am">11:00am</option><option class="ui-timepicker-am">11:30am</option><option class="ui-timepicker-pm">12:00pm</option><option class="ui-timepicker-pm">12:30pm</option><option class="ui-timepicker-pm">1:00pm</option><option class="ui-timepicker-pm">1:30pm</option><option class="ui-timepicker-pm">2:00pm</option><option class="ui-timepicker-pm">2:30pm</option><option class="ui-timepicker-pm">3:00pm</option><option class="ui-timepicker-pm">3:30pm</option><option class="ui-timepicker-pm">4:00pm</option><option class="ui-timepicker-pm">4:30pm</option><option class="ui-timepicker-pm">5:00pm</option><option class="ui-timepicker-pm">5:30pm</option><option class="ui-timepicker-pm">6:00pm</option><option class="ui-timepicker-pm">6:30pm</option><option class="ui-timepicker-pm">7:00pm</option><option class="ui-timepicker-pm">7:30pm</option><option class="ui-timepicker-pm">8:00pm</option><option class="ui-timepicker-pm">8:30pm</option><option class="ui-timepicker-pm">9:00pm</option><option class="ui-timepicker-pm">9:30pm</option><option class="ui-timepicker-pm">10:00pm</option><option class="ui-timepicker-pm">10:30pm</option><option class="ui-timepicker-pm">11:00pm</option><option class="ui-timepicker-pm">11:30pm</option>
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                      </select>
                 </div>
            </div>
            <div class="col-md-6" style="padding: 0px">
                <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('service_id','Service') !!}</label>
                <div class="col-sm-12">
                   
                    {!! Form::select('services[]', $services, null, ['class' => 'form-control','required','multiple'=>'multiple']) !!}
</div>
            </div>

            <div class="m-b-0">
                <div class="col-sm-offset-3 col-sm-12">

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