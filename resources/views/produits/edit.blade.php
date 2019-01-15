@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">editer un produits</div>

                <div class="panel-body">
                    {!! Form::open(['method' => 'PUT', 'url' => route('produits.update', $produit )]) !!}
                          <div class="form-group">
                             {!! Form::label('nom','nom') !!}
                             {!! Form::text('nom',$produit->nom, ['class' => 'form-control']) !!}
                          </div>
                          <div class="form-group">
                             {!! Form::label('description','description') !!}
                             {!! Form::text('description',$produit->description, ['class' => 'form-control']) !!}
                          </div>
                          <button class="btn btn-primary">envoyer</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
