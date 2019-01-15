@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Ajouter un Stocks</div>

                <div class="panel-body">
                    {!! Form::open(['url' => route('stocks.store')]) !!}
                          <div class="form-group">
                             {!! Form::label('quantite_initial','quantite_initial') !!}
                             {!! Form::text('quantite_initial',null, ['class' => 'form-control']) !!}
                          </div>
                          <div class="form-group">
                             {!! Form::label('quantite_final','quantite_final') !!}
                             {!! Form::text('quantite_final',null, ['class' => 'form-control']) !!}
                          </div>
                          <div class="form-group">
                             {!! Form::label('quantite_limite','quantite_limite') !!}
                             {!! Form::text('quantite_limite',null, ['class' => 'form-control']) !!}
                          </div>
                          <button class="btn btn-primary">envoyer</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
