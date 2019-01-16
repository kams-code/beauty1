@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">editer un client</div>

                <div class="panel-body">
                    {!! Form::open(['method' => 'PUT', 'url' => route('organisations.update', $organisation )]) !!}
                          <div class="form-group">
                             {!! Form::label('nom','nom') !!}
                             {!! Form::text('nom',$organisation->nom, ['class' => 'form-control']) !!}
                          </div>
                          <div class="form-group">
                             {!! Form::label('prenom','pays') !!}
                             {!! Form::text('prenom',$client->prenom, ['class' => 'form-control']) !!}
                          </div>
                          <div class="form-group">
                             {!! Form::label('adresse','adresse') !!}
                             {!! Form::text('adresse',$client->adresse, ['class' => 'form-control']) !!}
                          </div>
                          <div class="form-group">
                             {!! Form::label('telephone','telephone') !!}
                             {!! Form::text('telephone',$client->telephone    , ['class' => 'form-control']) !!}
                          </div>
                          <div class="form-group">
                             {!! Form::label('email','email') !!}
                             {!! Form::text('email',$client->ville, ['class' => 'form-control']) !!}
                          </div>
                        
                          <button class="btn btn-primary">envoyer</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
