<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Ajouter un utilisateur</h4>
    </div>
    <div class="modal-body">
        <div class="row">
            
                {!! Form::open(['route' => ['users.store'],'files'=>true ]) !!}
                
                <div class="form-group @if ($errors->has('name')) has-error @endif">
                    {!! Form::label('name', 'Identifiant*') !!}
                    {!! Form::text('name', null, ['class' => 'form-control','required', 'placeholder' => 'Identifiant']) !!}
                    @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
                </div>
                              <!-- password Form Input -->
<div class="form-group @if ($errors->has('password')) has-error @endif">
    {!! Form::label('password', 'Mot de passe*') !!}
    {!! Form::password('password', ['class' => 'form-control','required', 'placeholder' => 'Password']) !!}
    @if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
</div>
<style type="text/css">

    .asd {
      
        background:rgba(0,0,0,0);
        border:none;
        display: none;
    }
    
    </style>
    
<input type="text" class="asd " name="idpersonnel" value="{{$id}}"/>

<!-- Roles Form Input -->
<div class="form-group @if ($errors->has('roles')) has-error @endif">
    {!! Form::label('roles[]', 'Roles*') !!}
    {!! Form::select('roles[]', $roles, isset($user) ? $user->roles->pluck('id')->toArray() : null,  ['class' => 'js-example-basic-multiple form-control','required', 'multiple']) !!}
    @if ($errors->has('roles')) <p class="help-block">{{ $errors->first('roles') }}</p> @endif

    <script>
        $(".js-example-basic-multiple").select2();
     </script>
</div>
                    <!-- Submit Form Button -->
            <center>
                    {!! Form::submit('Ajouter', ['class' => 'btn btn-primary']) !!}
                </center>
                    {!! Form::close() !!}
        </div>

    </div>

</div>