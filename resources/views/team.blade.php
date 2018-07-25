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


<br> <span class="badge badge-pill badge-primary">Players: </span><br><br>

@foreach($team->players as $player)
<div class="list-group">
    <a href="/players/{{ $player->id }}" 
    class="list-group-item list-group-item-action">{{ $player->first_name . 
        ' ' . $player->last_name }}</a>
</div> 
@endforeach

@include('add-comment')
<br>
<h4 class="list-group">Comments: </h4>
<br>

@foreach($team->comments as $comment)
    <div class="card">
        <div class="card-body">
            @foreach($users as $user)
                @if($user->id == $comment->user_id)
                    <h6 class="card-title"> {{$user->name}} says: </h6>
                @endif
            @endforeach
            <p class="card-text">{{ $comment->content }}</p>
        </div>
    </div>
    <br>
@endforeach  

@endsection
