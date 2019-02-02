<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Détail sur le service</h4>
    </div>
    <div class="modal-body">
        <div class="row">
            {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('services.store'),'files'=>true]) !!}

                <div class="col-md-12">
                    <h4>Informations sur le service</h4>
                </div>
                <div class="col-md-12">
                    
                    <style>
                        .col-md-9 label {
                            margin-bottom: 10px
                        }
                    </style>
                    <div class="col-md-3">
                        <img style="width: 100%;height: 115px" src="{{asset('images/'.$service->image)}}">
                    </div>
                    <div class="col-md-9">
                        <label>
                            <strong>Code:</strong> {{$service["code"]}}
                        </label>
                        <br>
                        
                        <label>
                            <strong>Nom:</strong> {{$service->nom}}
                        </label>
                   
                    <label ></label>
                    
                        {{$service["categorie_id"]}}
                    
                        

                    </div>
                </div>
                <div class="col-md-12">

                    <div class="col-md-6" style="padding: 4px">
                        <strong>Montant:</strong>{{$service["montant"]}}
                    </div>

                    <div class="col-md-6" style="padding: 4px">
                        <strong>Employe:</strong>{{$service["user_id"]}}
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-6" style="padding: 4px">
                        <strong>Description:</strong>
                    </div>
                    <div class="col-sm-12">
                        {{$service["description"]}}

                    </div>
                    <label></label>

                </div>
                <div class="col-md-12">
                    <h4><b >Informations sur les employes du service</b></h4>
                </div>
                

            <div class="m-b-0">
                <div class="col-sm-offset-3 col-sm-9">

                </div>
            </div>
            <div class="col-md-12" style="border:0px;text-align: right;margin-top: 20px">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Fermer</button>

            </div>

        </div>

    </div>

</div>  