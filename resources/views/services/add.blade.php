<style type="text/css">
    .ms-container{
        width: 100% !important;
    }
</style>
<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Affecté des utilisateurs au service</h4>
    </div>
    <div class="modal-body">
        <div class="row">

            {!! Form::open(['class' => 'form-horizontal','role' => 'form','url' => route('services/add'),'files'=>true]) !!}
            <div class="col-md-12"><input type="hidden" name="id" value="{{$id}}">
                <select multiple="multiple" class="js-example-basic-multiple form-control" id="my_multi_select1" name="my_multi_select1[]">
                    
                    @foreach ($users as $user )
                        <?php
                            $select = array();
                        ?>
                        @foreach ($usersvi as $uservi )
                            <?php
                                $select[] = $uservi->user_id;
                            ?>
                        @endforeach
                        <option <?=in_array($user->id, $select) ? 'selected' : ''?> value="{{$user->id}}">{{$user->nom}}</option>  
                
                    @endforeach
                </select>
            </div><script>   $('#my_multi_select1').multiSelect();</script>
            <div class="m-b-0">
                <div class="col-sm-offset-3 col-sm-9">

                </div>
            </div>
            <div class="col-md-12" style="border:0px;text-align: right;margin-top: 20px">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Fermer</button>
                <button class="btn btn-primary">Affecter</button>
            </div>
            {!! Form::close() !!}
        </div>

    </div>

</div>