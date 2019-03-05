<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Ajouter un Promotion</h4>
    </div>
    <div class="modal-body">
        <div class="row">
            {!! Form::open(['method' => 'PUT','class' => 'form-horizontal','role' => 'form','url' => route('tickets.update',$ticket),'files'=>true]) !!}
          
            <div class="col-md-6" style="padding: 0px">
                <label for="inputEmail3" class="col-sm-3 control-label">
                    {!! Form::label('titre','Titre') !!}
                 </label>                                                <div class="col-sm-12">
                    {!! Form::text('titre',$ticket->titre, ['class' => 'form-control','required']) !!}
                </div>
            </div>
            <div class="col-md-6" style="padding: 0px">
                    <label for="inputPassword3" class="col-sm-12 control-label">{!! Form::label('type',"Type") !!}</label>
                    <div class="col-sm-12">
                        <select name="type" class="form-control">
                          <option value="Pourcentage">Pourcentage</option>
                            <option value="Montant">Montant</option>
                          </select>
                     </div>
                </div>
                <div class="col-md-6" style="padding: 0px">
                    <label for="inputPassword3" class="col-sm-3 control-label">
                        {!! Form::label('valeur','Valeur') !!}</label>                                                <div class="col-sm-12">
                            {!! Form::text('valeur',$ticket->valeur, ['class' => 'form-control','required']) !!}
                        </div>
                </div>

                <div class="col-md-6" style="padding: 0px">
                    <div class="col-md-6" style="padding: 0px">
                        <label for="inputPassword3" class="col-sm-3 control-label">
                            {!! Form::label('valeur','Debut') !!}</label>                                                <div class="col-sm-12">
                                {!! Form::date('datedebut',null, ['class' => 'form-control','required']) !!}
                            </div>
                    </div><div class="col-md-6" style="padding: 0px">
                        <label for="inputPassword3" class="col-sm-3 control-label">
                            {!! Form::label('valeur','Fin') !!}</label>                                                <div class="col-sm-12">
                                {!! Form::date('datefin',null, ['class' => 'form-control','required']) !!}
                            </div>
                    </div>
                </div>
                        
            <div class="col-md-12">
                    <div class="col-md-6" style="padding: 0px">
                            <div class="col-sm-12">
                                    <div class="checkbox">
                                            <input checked  id="more_info" type="checkbox" name="service" > 
                                            <label for="checkbox"   >
                                                Services
                                        </label>                      
                                        </div>
                            
</div>
                        </div>
                        
                    <div class="col-md-6" style="padding: 0px">
                        <div class="col-sm-12">
                                <div class="checkbox">
                                        <input checked  id="more_info1" type="checkbox" name="client" > 
                                        <label for="checkbox"   >
                                            Clients
                                    </label>
                                                                            </div>
                        
</div>
                    </div>
                </div>
                <div class="col-md-6">
                        <div class="col-md-12" style="padding: 0px" id="conditional_part">
                                <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('service_id','Services') !!}</label>
                                <div class="col-sm-12">
                                    {!! Form::select('services[]', $services, null, ['class' => 'form-control','multiple'=>'multiple']) !!}
                                </div>
                            </div>
                        </div>
                           <script>$('#more_info').change(function() {
                                    if(this.checked != true){
                                          $("#conditional_part").hide();
                                     }
                                  else{
                                        $("#conditional_part").show();
                                  }
                                });</script>
                                 <div class="col-md-6" >
                                   <div class="col-md-12" style="padding: 0px" id="conditional_part1">
                                    <label for="inputPassword3" class="col-sm-3 control-label">{!! Form::label('service_id','Clients') !!}</label>
                                    <div class="col-sm-12">
                                        {!! Form::select('clients[]', $clients, null, ['class' => 'form-control','multiple'=>'multiple']) !!}
                                    </div>
                                </div>
                            </div>
                               <script>$('#more_info1').change(function() {
                                        if(this.checked != true){
                                              $("#conditional_part1").hide();
                                         }
                                      else{
                                            $("#conditional_part1").show();
                                      }
                                    });</script>





         
           
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