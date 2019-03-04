<!-- Name Form Input -->

<script>
    $(".js-example-basic-multiple").select2();
 </script>
<div class="form-group @if ($errors->has('name')) has-error @endif">
    {!! Form::label('name', 'Identifiant*') !!}
    {!! Form::text('name', null, ['class' => 'form-control','required', 'placeholder' => 'Identifiant']) !!}
    @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
</div>
<div class="form-group @if ($errors->has('name')) has-error @endif">
    {!! Form::label('name', 'Nom*') !!}
    {!! Form::text('nom', null, ['class' => 'form-control','required', 'placeholder' => 'Identifiant']) !!}
    @if ($errors->has('nom')) <p class="help-block">{{ $errors->first('nom') }}</p> @endif
</div>

<!-- email Form Input -->
<div class="form-group @if ($errors->has('email')) has-error @endif">
    {!! Form::label('email', 'Email*') !!}
    {!! Form::email('email', null, ['class' => 'form-control','required', 'placeholder' => 'Email']) !!}
    @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
</div>

<div class="form-group">
   {!! Form::label('service_id','Service') !!}
   
        {!! Form::select('service_id',$services,null, ['class' => 'form-control','required']) !!}


</div>

@if (auth()->user()->organisation_id==0)
<div class="form-group">
    {!! Form::label('service_id','Organisation*') !!}
    
         {!! Form::select('organisation_id',$organisations,null, ['class' => 'form-control','required']) !!}
 
 
 </div>
@else
   
@endif

<!-- password Form Input -->
<div class="form-group @if ($errors->has('password')) has-error @endif">
    {!! Form::label('password', 'Mot de passe*') !!}
    {!! Form::password('password', ['class' => 'form-control','required', 'placeholder' => 'Password']) !!}
    @if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
</div>

<!-- Roles Form Input -->
<div class="form-group @if ($errors->has('roles')) has-error @endif">
    {!! Form::label('roles[]', 'Roles*') !!}
    {!! Form::select('roles[]', $roles, isset($user) ? $user->roles->pluck('id')->toArray() : null,  ['class' => 'js-example-basic-multiple form-control','required', 'multiple']) !!}
    @if ($errors->has('roles')) <p class="help-block">{{ $errors->first('roles') }}</p> @endif
</div>

<!-- Permissions -->
