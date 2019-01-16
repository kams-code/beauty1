@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">liste des clients</div>

                <div class="panel-body">
                    @foreach($clients as $client)
                       <p>{{ $organisation->nom }}</p>
                       <p>{{ $organisation->pays }}</p>
                       <p>{{ $organisation->ville }}</p>
                       <p>{{ $organisation->description }}</p>
                       <p>{{ $organisation->adresse }}</p>
                       <p>{{ $organisation->tel }}</p>
                       <p><a class="btn btn-primary" href="{{ route('organisations.edit',$organisation) }}">editer</a></p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
