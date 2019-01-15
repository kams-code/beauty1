@extends('layouts.app')

@section('content')

    @foreach($Stocks as $stock)
        {{ $stock->quantite_initial }}
        {{ $stock->quantite_final }}
        
        <p><a class="btn btn-primary" href="{{ route('Stocks.edit',$stock) }}">editer</a></p>
                   
    @endforeach

@endsection
