<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Ajouter une réservation</h4>
    </div>
    <div class="modal-body">
        <div class="row">
            {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('personnelReservations.store'),'files'=>true]) !!}
           
            <div class="col-md-12">
                    <div class="col-md-2" style="padding: 0px">
                            <label for="inputPassword3" class="col-sm-12 control-label">  <h4 class="modal-title">Ordre</h4></label>
                            
                            </div>
                <div class="col-md-5" style="padding: 0px">
                <label for="inputPassword3" class="col-sm-12 control-label">  <h4 class="modal-title">Services</h4></label>
                
                </div>
                <div class="col-md-5" style="padding: 0px">
                    <label for="inputPassword3" class="col-sm-12 control-label">  <h4 class="modal-title">Personnels</h4></label>
                
                
                </div>
            </div>

           
            
            @foreach ($reservations as $reservation)
            <input  name='reservation' type='hidden' value='{{$reservation['id']}}'>

           
                <div class="col-md-12">
                        <div class="col-sm-2">
                                <select name="ordre[]" class="form-control">
                                        <?php $i=1  ?>    
                            @foreach ($reservations as $reservation)
                            @foreach ($services as $service)
                            
                                @if ($reservation['service_id']==$service['id'])
                               
                              <option value="{{$i}}">{{$i}}</option>
                              <?php $i=$i+1 ?>
                              @endif
                              @endforeach
                          @endforeach
                        </select>
                         </div>
                        
                       
                        <div class="col-sm-5">
                                <select name="services[]" class="form-control">
                            @foreach ($reservations as $reservation)
                            @foreach ($services as $service)
                            
                                @if ($reservation['service_id']==$service['id'])
                           
                              <option value="{{$service['id']}}">{{$service['nom']}}</option>
                              
                              @endif
                              @endforeach
                          @endforeach
                        </select>
                         </div>
                
                <div class="col-md-5" style="padding: 0px">
                     <div class="col-sm-12">
                        {!! Form::select('users[]',$users,null, ['class' => 'form-control','required']) !!}
    
                    </div>
                </div>

            </div>
              
            
            @endforeach
         
            <div class="m-b-0">
                <div class="col-sm-offset-3 col-sm-12">

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