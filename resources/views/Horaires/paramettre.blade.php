@extends('layouts.mainlayout')
@include('partials.topbar')
@include('partials.sidebar')

                                 @section('content')
                  <style type="text/css">
                      .form-horizontal .control-label{
                        text-align: left;
                      }
                  </style>
      <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Instituts</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="home">Accueil</a></li>
                                    <li class="active">Instituts</li>
                                </ol>
                            </div>
                        </div>


                        <div class="row">
                       
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Paramèttres de l'institut</h3></div>
                                    <div class="panel-body">
                                        {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('horaires.update',$horaire),'files'=>true]) !!}
                                        <div class="col-md-12">
                                        <div class="col-sm-1">
                                                <style type="text/css">

                                                    .asd {
                                                      
                                                        background:rgba(0,0,0,0);
                                                        border:none;
                                                    }
                                                    
                                                    </style>
                                                    
                                                    <input type="text" class="asd " name="Lundi" value="Lundi"/>
                                            </div>
                                        <div class="checkbox col-sm-1">
                                                             
                                                <input type="checkbox" id="yourBoxLundi" />
                                                   <label for="checkbox"   >
                                                
                                            </label>                      
                                            </div> 
                                          
                                        
                                        <div class="col-md-6" style="padding: 0px">
                                                <div class="col-sm-3">
                                                        <input type="time" class="form-control" name="heureouvertureLundi" id="yourTextLundi" disabled />
                                                    </div>
                                                    <div class="col-sm-3">
                                                               <input type="time" class="form-control" name="heurefermetureLundi" id="yourTextLundi1" disabled />
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12" style="margin-top: 25px;">
                                                    <div class="col-sm-1">
                                                            <style type="text/css">
            
                                                                .asd {
                                                                  
                                                                    background:rgba(0,0,0,0);
                                                                    border:none;
                                                                }
                                                                
                                                                </style>
                                                                
                                                                <input type="text" class="asd " name="Mardi" value="Mardi"/>
                                                        </div>
                                                    <div class="checkbox col-sm-1">
                                                                         
                                                            <input type="checkbox" id="yourBoxMardi" />
                                                               <label for="checkbox"   >
                                                            
                                                        </label>                      
                                                        </div> 
                                                      
                                                    
                                                    <div class="col-md-6" style="padding: 0px">
                                                            <div class="col-sm-3">
                                                                    <input type="time" class="form-control" name="heureouvertureMardi" id="yourTextMardi" disabled />
                                                                </div>
                                                                <div class="col-sm-3">
                                                                        <input type="time" class="form-control" name="heurefermetureMardi" id="yourTextMardi1" disabled />
                                                                    </div>
                                                            </div>
                                                        </div>
                                                      


                                            
                                                        <div class="col-md-12" style="margin-top: 25px;">
                                                                <div class="col-sm-1">
                                                                        <style type="text/css">
                        
                                                                            .asd {
                                                                              
                                                                                background:rgba(0,0,0,0);
                                                                                border:none;
                                                                            }
                                                                            
                                                                            </style>
                                                                            
                                                                            <input type="text" class="asd " name="Mercredi" value="Mercredi"/>
                                                                    </div>
                                                                <div class="checkbox col-sm-1">
                                                                                     
                                                                        <input type="checkbox" id="yourBoxMercredi" />
                                                                           <label for="checkbox"   >
                                                                        
                                                                    </label>                      
                                                                    </div> 
                                                                  
                                                                
                                                                <div class="col-md-6" style="padding: 0px">
                                                                        <div class="col-sm-3">
                                                                                <input type="time" class="form-control" name="heureouvertureMercredi" id="yourTextMercredi" disabled />
                                                                            </div>
                                                                            <div class="col-sm-3">
                                                                                    <input type="time" class="form-control" name="heurefermetureMercredi" id="yourTextMercredi1" disabled />
                                                                                </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12" style="margin-top: 25px;">
                                                                            <div class="col-sm-1">
                                                                                    <style type="text/css">
                                    
                                                                                        .asd {
                                                                                          
                                                                                            background:rgba(0,0,0,0);
                                                                                            border:none;
                                                                                        }
                                                                                        
                                                                                        </style>
                                                                                        
                                                                                        <input type="text" class="asd " name="Jeudi" value="Jeudi"/>
                                                                                </div>
                                                                            <div class="checkbox col-sm-1">
                                                                                                 
                                                                                    <input type="checkbox" id="yourBoxJeudi" />
                                                                                       <label for="checkbox"   >
                                                                                    
                                                                                </label>                      
                                                                                </div> 
                                                                              
                                                                            
                                                                            <div class="col-md-6" style="padding: 0px">
                                                                                    <div class="col-sm-3">
                                                                                            <input type="time" class="form-control" name="heureouvertureJeudi" id="yourTextJeudi" disabled />
                                                                                        </div>
                                                                                        <div class="col-sm-3">
                                                                                                <input type="time" class="form-control" name="heurefermetureJeudi" id="yourTextJeudi1" disabled />
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12" style="margin-top: 25px;">
                                                                                        <div class="col-sm-1">
                                                                                                <style type="text/css">
                                                
                                                                                                    .asd {
                                                                                                      
                                                                                                        background:rgba(0,0,0,0);
                                                                                                        border:none;
                                                                                                    }
                                                                                                    
                                                                                                    </style>
                                                                                                    
                                                                                                    <input type="text" class="asd " name="Vendredi" value="Vendredi"/>
                                                                                            </div>
                                                                                        <div class="checkbox col-sm-1">
                                                                                                             
                                                                                                <input type="checkbox" id="yourBoxVendredi" />
                                                                                                   <label for="checkbox"   >
                                                                                                
                                                                                            </label>                      
                                                                                            </div> 
                                                                                          
                                                                                        
                                                                                        <div class="col-md-6" style="padding: 0px">
                                                                                                <div class="col-sm-3">
                                                                                                        <input type="time" class="form-control" name="heureouvertureVendredi" id="yourTextVendredi" disabled />
                                                                                                    </div>
                                                                                                    <div class="col-sm-3">
                                                                                                            <input type="time" class="form-control" name="heurefermetureVendredi" id="yourTextVendredi1" disabled />
                                                                                                        </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-12" style="margin-top: 25px;">
                                                                                                    <div class="col-sm-1">
                                                                                                            <style type="text/css">
                                                            
                                                                                                                .asd {
                                                                                                                  
                                                                                                                    background:rgba(0,0,0,0);
                                                                                                                    border:none;
                                                                                                                }
                                                                                                                
                                                                                                                </style>
                                                                                                                
                                                                                                                <input type="text" class="asd " name="Samedi" value="Samedi"/>
                                                                                                        </div>
                                                                                                    <div class="checkbox col-sm-1">
                                                                                                                         
                                                                                                            <input type="checkbox" id="yourBoxSamedi" />
                                                                                                               <label for="checkbox"   >
                                                                                                            
                                                                                                        </label>                      
                                                                                                        </div> 
                                                                                                      
                                                                                                    
                                                                                                    <div class="col-md-6" style="padding: 0px">
                                                                                                            <div class="col-sm-3">
                                                                                                                    <input type="time" class="form-control" name="heureouvertureSamedi" id="yourTextSamedi" disabled />
                                                                                                                </div>
                                                                                                                <div class="col-sm-3">
                                                                                                                        <input type="time" class="form-control" name="heurefermetureSamedi" id="yourTextSamedi1" disabled />
                                                                                                                    </div>
                                                                                                            </div>
                                                                                                        </div>
                                        
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
                                                                                                                                <input type="time" class="form-control" name="heureouvertureDimanche" id="yourTextDimanche" disabled />
                                                                                                                            </div>
                                                                                                                            <div class="col-sm-3">
                                                                                                                                    <input type="time" class="form-control" name="heurefermetureDimanche" id="yourTextDimanche1" disabled />
                                                                                                                                </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    
                                                                                                        <div class="m-b-0">
                                            <div class="col-sm-offset-3 col-sm-9">
                            
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="border:0px;text-align: right;margin-top: 20px">
                                          <button class="btn btn-primary">Ajouter</button>
                                        </div>
                                        {!! Form::close() !!}
                                    </div><!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col-->
                            
                            
                        </div> <!-- End row -->



                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    2016 © Moltran.
                </footer>

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

@endsection @include('partials.sidebarright')
