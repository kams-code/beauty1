@extends('layouts.app')

@section('content')

    @foreach($Tickets as $ticket)
        {{ $ticket->quantite_initial }}
        {{ $ticket->quantite_final }}
        
        <p><a class="btn btn-primary" href="{{ route('tickets.edit',$ticket) }}">editer</a></p>
                   
    @endforeach

@endsection
