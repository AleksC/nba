@extends('layouts.master')

@section('content')

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1>NBA teams</h1> 
    </div>
</div>

@foreach($teams as $team)

<div class="list-group">
    <a href="/teams/{{ $team->id }}" class="list-group-item list-group-item-action">{{ $team->city . 
     ' ' . $team->name }}</a>
</div>  

@endforeach

@endsection