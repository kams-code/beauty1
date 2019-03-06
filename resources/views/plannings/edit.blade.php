<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Ajouter un planning</h4>
    </div>
    <div class="modal-body">
        <div class="row"> 
               
           
            {!! Form::open(['method'=>'PUT','class' => 'form-horizontal','role' => 'form','url' => route('plannings.update',$id)]) !!}
             
          
                <div class="col-md-12">
                <div class="col-sm-2" style="padding: 5px">
                        <style type="text/css">
    
                            .asd {
                              
                                background:rgba(0,0,0,0);
                                border:none;
                            }
                            
                            </style>
                            
                            <input type="text" class="asd " name="Lundi" value="Lundi"/>
                    </div>
                <div class="checkbox col-sm-2">
                                     
                        <input type="checkbox" id="yourBoxLundi" />
                           <label for="checkbox"   >
                        
                    </label>                      
                    </div> 
                  
                
                <div  style="padding: 0px">

                        @foreach ($plannings as $planning)
                        @if ($planning['jour']=="Lundi")
                        <div class="col-sm-3">
                        <input type="time" class="form-control" name="heureouvertureLundi" value="{{$planning['heureouverture']}}" id="yourTextLundi" disabled />
                            </div>
                            <div class="col-sm-3">
                                       <input type="time" class="form-control" name="heurefermetureLundi" value="{{$planning['heurefermeture']}}" id="yourTextLundi1" disabled />
                                </div>
                        @else
                        <div class="col-sm-3">
                                <input type="time" class="form-control" name="heureouvertureLundi" id="yourTextLundi" disabled />
                            </div>
                            <div class="col-sm-3">
                                       <input type="time" class="form-control" name="heurefermetureLundi" id="yourTextLundi1" disabled />
                                </div>
                        @endif                  
                      @endforeach
                        
                        </div>
                    </div>
                    <div class="col-md-12" style="margin-top: 25px;">
                            <div class="col-sm-2" style="padding: 5px">
                                    <style type="text/css">
    
                                        .asd {
                                          
                                            background:rgba(0,0,0,0);
                                            border:none;
                                        }
                                        
                                        </style>
                                        
                                        <input type="text" class="asd " name="Mardi" value="Mardi"/>
                                </div>
                            <div class="checkbox col-sm-2">
                                                 
                                    <input type="checkbox" id="yourBoxMardi" />
                                       <label for="checkbox"   >
                                    
                                </label>                      
                                </div> 
                              
                            
                            <div style="padding: 0px">
                                    @foreach ($plannings as $planning)
                                    @if ($planning['jour']=="Mardi")
                                    <div class="col-sm-3">
                                    <input type="time" class="form-control" name="heureouvertureMardi" value="{{$planning['heureouverture']}}" id="yourTextMardi" disabled />
                                        </div>
                                        <div class="col-sm-3">
                                                   <input type="time" class="form-control" name="heurefermetureMardi" value="{{$planning['heurefermeture']}}" id="yourTextMardi1" disabled />
                                            </div>
                                    @else
                                    <div class="col-sm-3">
                                            <input type="time" class="form-control" name="heureouvertureMardi" id="yourTextMardi" disabled />
                                        </div>
                                        <div class="col-sm-3">
                                                   <input type="time" class="form-control" name="heurefermetureMardi" id="yourTextMardi1" disabled />
                                            </div>
                                    @endif                  
                                  @endforeach
                                    </div>
                                </div>
                              
    
    
                    
                                <div class="col-md-12" style="margin-top: 25px;">
                                        <div class="col-sm-2" style="padding: 5px">
                                                <style type="text/css">
    
                                                    .asd {
                                                      
                                                        background:rgba(0,0,0,0);
                                                        border:none;
                                                    }
                                                    
                                                    </style>
                                                    
                                                    <input type="text" class="asd " name="Mercredi" value="Mercredi"/>
                                            </div>
                                        <div class="checkbox col-sm-2">
                                                             
                                                <input type="checkbox" id="yourBoxMercredi" />
                                                   <label for="checkbox"   >
                                                
                                            </label>                      
                                            </div> 
                                          
                                        
                                        <div style="padding: 0px">
                                                @foreach ($plannings as $planning)
                        @if ($planning['jour']=="Mercredi")
                        <div class="col-sm-3">
                        <input type="time" class="form-control" name="heureouvertureMercredi" value="{{$planning['heureouverture']}}" id="yourTextMercredi" disabled />
                            </div>
                            <div class="col-sm-3">
                                       <input type="time" class="form-control" name="heurefermetureMercredi" value="{{$planning['heurefermeture']}}" id="yourTextMercredi1" disabled />
                                </div>
                        @else
                        <div class="col-sm-3">
                                <input type="time" class="form-control" name="heureouvertureMercredi" id="yourTextMercredi" disabled />
                            </div>
                            <div class="col-sm-3">
                                       <input type="time" class="form-control" name="heurefermetureMercredi" id="yourTextMercredi1" disabled />
                                </div>
                        @endif                  
                      @endforeach
                                                </div>
                                            </div>
                                            <div class="col-md-12" style="margin-top: 25px;">
                                                    <div class="col-sm-2"  style="padding: 5px">
                                                            <style type="text/css">
            
                                                                .asd {
                                                                  
                                                                    background:rgba(0,0,0,0);
                                                                    border:none;
                                                                }
                                                                
                                                                </style>
                                                                
                                                                <input type="text" class="asd " name="Jeudi" value="Jeudi"/>
                                                        </div>
                                                    <div class="checkbox col-sm-2">
                                                                         
                                                            <input type="checkbox" id="yourBoxJeudi" />
                                                               <label for="checkbox"   >
                                                            
                                                        </label>                      
                                                        </div> 
                                                      
                                                    
                                                    <div style="padding: 0px">
                                                            @foreach ($plannings as $planning)
                                                            @if ($planning['jour']=="Jeudi")
                                                            <div class="col-sm-3">
                                                            <input type="time" class="form-control" name="heureouvertureJeudi" value="{{$planning['heureouverture']}}" id="yourTextJeudi" disabled />
                                                                </div>
                                                                <div class="col-sm-3">
                                                                           <input type="time" class="form-control" name="heurefermetureJeudi" value="{{$planning['heurefermeture']}}" id="yourTextJeudi1" disabled />
                                                                    </div>
                                                            @else
                                                            <div class="col-sm-3">
                                                                    <input type="time" class="form-control" name="heureouvertureJeudi" id="yourTextJeudi" disabled />
                                                                </div>
                                                                <div class="col-sm-3">
                                                                           <input type="time" class="form-control" name="heurefermetureJeudi" id="yourTextJeudi1" disabled />
                                                                    </div>
                                                            @endif                  
                                                          @endforeach
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12" style="margin-top: 25px;">
                                                                <div class="col-sm-2"  style="padding: 5px">
                                                                        <style type="text/css">
                        
                                                                            .asd {
                                                                              
                                                                                background:rgba(0,0,0,0);
                                                                                border:none;
                                                                            }
                                                                            
                                                                            </style>
                                                                            
                                                                            <input type="text" class="asd " name="Vendredi" value="Vendredi"/>
                                                                    </div>
                                                                <div class="checkbox col-sm-2">
                                                                                     
                                                                        <input type="checkbox" id="yourBoxVendredi" />
                                                                           <label for="checkbox"   >
                                                                        
                                                                    </label>                      
                                                                    </div> 
                                                                  
                                                                
                                                                <div style="padding: 0px">
                                                                        @foreach ($plannings as $planning)
                        @if ($planning['jour']=="Vendredi")
                        <div class="col-sm-3">
                        <input type="time" class="form-control" name="heureouvertureVendredi" value="{{$planning['heureouverture']}}" id="yourTextVendredi" disabled />
                            </div>
                            <div class="col-sm-3">
                                       <input type="time" class="form-control" name="heurefermetureVendredi" value="{{$planning['heurefermeture']}}" id="yourTextVendredi1" disabled />
                                </div>
                        @else
                        <div class="col-sm-3">
                                <input type="time" class="form-control" name="heureouvertureVendredi" id="yourTextVendredi" disabled />
                            </div>
                            <div class="col-sm-3">
                                       <input type="time" class="form-control" name="heurefermetureVendredi" id="yourTextVendredi1" disabled />
                                </div>
                        @endif                  
                      @endforeach
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12" style="margin-top: 25px;">
                                                                            <div class="col-sm-2" style="padding: 5px">
                                                                                    <style type="text/css">
                                    
                                                                                        .asd {
                                                                                          
                                                                                            background:rgba(0,0,0,0);
                                                                                            border:none;
                                                                                        }
                                                                                        
                                                                                        </style>
                                                                                        
                                                                                        <input type="text" class="asd " name="Samedi" value="Samedi"/>
                                                                                </div>
                                                                            <div class="checkbox col-sm-2">
                                                                                                 
                                                                                    <input type="checkbox" id="yourBoxSamedi" />
                                                                                       <label for="checkbox"   >
                                                                                    
                                                                                </label>                      
                                                                                </div> 
                                                                              
                                                                            
                                                                            <div style="padding: 0px">
                                                                                    @foreach ($plannings as $planning)
                        @if ($planning['jour']=="Samedi")
                        <div class="col-sm-3">
                        <input type="time" class="form-control" name="heureouvertureSamedi" value="{{$planning['heureouverture']}}" id="yourTextSamedi" disabled />
                            </div>
                            <div class="col-sm-3">
                                       <input type="time" class="form-control" name="heurefermetureSamedi" value="{{$planning['heurefermeture']}}" id="yourTextSamedi1" disabled />
                                </div>
                        @else
                        <div class="col-sm-3">
                                <input type="time" class="form-control" name="heureouvertureSamedi" id="yourTextSamedi" disabled />
                            </div>
                            <div class="col-sm-3">
                                       <input type="time" class="form-control" name="heurefermetureSamedi" id="yourTextSamedi1" disabled />
                                </div>
                        @endif                  
                      @endforeach
                                                                                    </div>
                                                                                </div>
                
                                                                                <div class="col-md-12" style="margin-top: 25px;">
                                                                                        <div class="col-sm-2"  style="padding: 5px">
                                                                                                <style type="text/css">
                                                
                                                                                                    .asd {
                                                                                                      
                                                                                                        background:rgba(0,0,0,0);
                                                                                                        border:none;
                                                                                                    }
                                                                                                    
                                                                                                    </style>
                                                                                                    
                                                                                                    <input type="text" class="asd " name="Dimanche" value="Dimanche"/>
                                                                                            </div>
                                                                                        <div class="checkbox col-sm-2">
                                                                                                             
                                                                                                <input type="checkbox" id="yourBoxDimanche" />
                                                                                                   <label for="checkbox"   >
                                                                                                
                                                                                            </label>                      
                                                                                            </div> 
                                                                                          
                                                                                        
                                                                                        <div style="padding: 0px">
                                                                                                @foreach ($plannings as $planning)
                                                                                                @if ($planning['jour']=="Dimanche")
                                                                                                <div class="col-sm-3">
                                                                                                <input type="time" class="form-control" name="heureouvertureDimanche" value="{{$planning['heureouverture']}}" id="yourTextDimanche" disabled />
                                                                                                    </div>
                                                                                                    <div class="col-sm-3">
                                                                                                               <input type="time" class="form-control" name="heurefermetureDimanche" value="{{$planning['heurefermeture']}}" id="yourTextDimanche1" disabled />
                                                                                                        </div>
                                                                                                @else
                                                                                                <div class="col-sm-3">
                                                                                                        <input type="time" class="form-control" name="heureouvertureDimanche" id="yourTextDimanche" disabled />
                                                                                                    </div>
                                                                                                    <div class="col-sm-3">
                                                                                                               <input type="time" class="form-control" name="heurefermetureDimanche" id="yourTextDimanche1" disabled />
                                                                                                        </div>
                                                                                                @endif                  
                                                                                              @endforeach
                                                                                                </div>
                                                                                            </div>
    
    
                                                                                            
    <script>
        document.getElementById('yourBoxDimanche').onchange = function() {
                                                                                                                                document.getElementById('yourTextDimanche').disabled = !this.checked;
                                                                                                                                document.getElementById('yourTextDimanche1').disabled = !this.checked;
                                                                                                                        
                                                                                                                            };
        document.getElementById('yourBoxSamedi').onchange = function() {
                                                                                                                    document.getElementById('yourTextSamedi').disabled = !this.checked;
                                                                                                                    document.getElementById('yourTextSamedi1').disabled = !this.checked;
                                                                                                            
                                                                                                                };
    document.getElementById('yourBoxLundi').onchange = function() {
            document.getElementById('yourTextLundi').disabled = !this.checked;
            document.getElementById('yourTextLundi1').disabled = !this.checked;
    
        };
        document.getElementById('yourBoxMardi').onchange = function() {
                                                                    document.getElementById('yourTextMardi').disabled = !this.checked;
                                                                    document.getElementById('yourTextMardi1').disabled = !this.checked;
                                                            
                                                                };
    document.getElementById('yourBoxMercredi').onchange = function() {
                                                                                document.getElementById('yourTextMercredi').disabled = !this.checked;
                                                                                document.getElementById('yourTextMercredi1').disabled = !this.checked;
                                                                        
                                                                            };
    document.getElementById('yourBoxJeudi').onchange = function() {
                    document.getElementById('yourTextJeudi').disabled = !this.checked;
                    document.getElementById('yourTextJeudi1').disabled = !this.checked;
            
                };
                document.getElementById('yourBoxVendredi').onchange = function() {
                                                                                                        document.getElementById('yourTextVendredi').disabled = !this.checked;
                                                                                                        document.getElementById('yourTextVendredi1').disabled = !this.checked;
                                                                                                
                                                                                                    };</script>
                                                                                            
    
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