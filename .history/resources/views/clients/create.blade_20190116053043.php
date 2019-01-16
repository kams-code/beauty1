@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ajouter un client</div>

                <div class="panel-body">
                    {!! Form::open(['url' => route('clients.store')]) !!}
                          <div class="form-group">
                             {!! Form::label('nom','nom') !!}
                             {!! Form::text('nom',null, ['class' => 'form-control']) !!}
                          </div>
                          <div class="form-group">
                             {!! Form::label('prenom','prenom') !!}
                             {!! Form::text('pays',null, ['class' => 'form-control']) !!}
                          </div>
                          <div class="form-group">
                             {!! Form::label('adresse','adresse') !!}
                             {!! Form::text('adresse',null, ['class' => 'form-control']) !!}
                          </div>
                          <div class="form-group">
                             {!! Form::label('telephone','telephone') !!}
                             {!! Form::text('telephone',null, ['class' => 'form-control']) !!}
                          </div>
                          <div class="form-group">
                             {!! Form::label('email','telephone') !!}
                             {!! Form::text('telephone',null, ['class' => 'form-control']) !!}
                          </div>
                          <div class="form-group">
                             {!! Form::label('description','description') !!}
                             {!! Form::textarea('description',null, ['class' => 'form-control']) !!}
                          </div>
                          <button class="btn btn-primary">envoyer</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
