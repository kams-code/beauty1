@extends('layouts.app')

@section('content')

    @foreach($produits as $produit)
        {{ $produit->nom }}
        <p><a class="btn btn-primary" href="{{ route('produits.edit',$produit) }}">editer</a></p>
                   
    @endforeach

@endsection
