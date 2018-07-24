@extends('layouts.master')

@section('content')

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1>{{ $player->first_name . ' ' . $player->last_name }}</h1> 
    </div>
</div>

<ul class="list-group">
    <li class="list-group-item list-group-item-light">
        First name: {{ $player->first_name }}
    </li>
    <li class="list-group-item list-group-item-light">
        Last name: {{ $player->last_name }}
    </li>
    <li class="list-group-item list-group-item-light">
        Email: {{ $player->email }}
    </li>
    <a href="/teams/{{ $player->team->id }}" class="list-group-item list-group-item-action">
      Team:  {{ $player->team->city . ' ' . $player->team->name }}
    </a>
</ul>

@endsection