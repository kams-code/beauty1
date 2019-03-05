<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Ajouter un utilisateur</h4>
    </div>
    <div class="modal-body">
        <div class="row">
                {!! Form::open(['route' => ['users.store'],'files'=>true ]) !!}
                <div class="col-md-12" style="padding: 0px">
                        <center>
                            <img id="imgpreview" src="/images/camera_icon.png" style="width: 100px;cursor: pointer;">
                            <input id="inputimage" type="file" name="imageup" accept="images/*" style="display: none;">
                        </center>
                     </div>    
                @include('user._form')
                    <!-- Submit Form Button -->
            <center>
                    {!! Form::submit('Ajouter', ['class' => 'btn btn-primary']) !!}
                </center>
                    {!! Form::close() !!}
        </div>

    </div>

</div>