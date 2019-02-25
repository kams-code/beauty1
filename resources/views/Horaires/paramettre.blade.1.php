<div class="col-md-12" style="margin-top: 25px;">
                                        <div class="col-sm-1">
                                                <style type="text/css">

                                                    .asd {
                                                      
                                                        background:rgba(0,0,0,0);
                                                        border:none;
                                                    }
                                                    
                                                    </style>
                                                    
                                                    <input type="text" class="asd " name="Dimanche" value="Dimanche"/>
                                            </div>
                                        <div class="checkbox col-sm-1">
                                                             
                                                <input type="checkbox" id="yourBoxDimanche" />
                                                   <label for="checkbox"   >
                                                
                                            </label>                      
                                            </div> 
                                          
                                        
                                        <div class="col-md-6" style="padding: 0px">
                                                <div class="col-sm-3">
                                                        <input type="time" class="form-control" name="heurefermetureDimanche" id="yourTextDimanche" disabled />
                                                    </div>
                                                    <div class="col-sm-3">
                                                            <input type="time" class="form-control" name="heurefermetureDimanche" id="yourTextDimanche1" disabled />
                                                        </div>
                                                </div>
                                            </div>
                                            <script>document.getElementById('yourBoxDimanche').onchange = function() {
                                                    document.getElementById('yourTextDimanche').disabled = !this.checked;
                                                    document.getElementById('yourTextDimanche1').disabled = !this.checked;
                                            
                                                };</script>