
</style>
<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Ajouter un service</h4>
    </div>
    <div class="modal-body">
        <div class="row">
            {!! Form::open(['method'=>'PUT','class' => 'form-horizontal','role' => 'form','url' => route('services.update',$id),'files'=>true]) !!}
            <div class="col-md-12">
                <select multiple="multiple" class="multi-select col-md-6" id="my_multi_select1" name="my_multi_select1[]">
                    @foreach ($users as $user )
                   @if ( mb_strpos($user['services_id'],$id) !== false)
                 
                   <option selected="selected"  value="{{$user->id}}">{{$user->nom}}</option>  
                   @else
                   <option value="{{$user->id}}">{{$user->nom}}</option>  
                   @endif
                
                    @endforeach
                   
                </select>
            </div><script>   $('#my_multi_select1').multiSelect();</script>
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