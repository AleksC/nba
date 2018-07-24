@extends('layouts.master')

@section('content')

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1>{{ $team->city . ' ' . $team->name }}</h1> 
    </div>
</div>

<ul class="list-group">
    <li class="list-group-item list-group-item-light">City: {{ $team->city }}</li>
    <li class="list-group-item list-group-item-light">Name: {{ $team->name }}</li>
    <li class="list-group-item list-group-item-light">Arena: {{ $team->address }}</li>
    <li class="list-group-item list-group-item-light">email: {{ $team->email }}</li>
</ul>


<span class="badge badge-pill badge-primary">Players: </span>

@foreach($team->players as $player)
<div class="list-group">
    <a href="/players/{{ $player->id }}" 
    class="list-group-item list-group-item-action">{{ $player->first_name . 
        ' ' . $player->last_name }}</a>
</div> 
@endforeach

@endsection