<div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title">Modifier un utilisateur</h4>
        </div>
        <div class="modal-body">
            <div class="row">
            {!! Form::model($user, ['method' => 'PUT', 'route' => ['users.update',  $user->id ],'files'=>true ]) !!}
                                                        <div class="col-md-12" style="padding: 0px">
    
                                                                <center>
                                                                    @if ($user->image!=null)
                                                                    <img id="imgpreview" class="thumb-lg img-circle img-thumbnail" src="{{asset('images/'.$user->image)}}" style="width: 100px;cursor: pointer;">
                                                                    
                                                                        @else
                                                                        <img id="imgpreview" src="/images/camera_icon.png" style="width: 100px;cursor: pointer;">
                                                           
                                                                    @endif
                                                                    <input id="inputimage" type="file" name="imageup" accept="images/*" style="display: none;">
                                                                </center>
                                                             </div>
                                                        @include('user._form')
                                                            <!-- Submit Form Button -->
                                                            <center>
                                                            {!! Form::submit('Modifier', ['class' => 'btn btn-primary']) !!}
                                                        </center>
                                                            {!! Form::close() !!}
            </div>
    
        </div>
    
    </div>