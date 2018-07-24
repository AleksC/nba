@extends('layouts.master')

@section('content')


<form action="/" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="name">Name: </label>
      <input type="text" class="form-control" id="text" name="name">
    </div>
    @include('partials.error', ['fieldName' => 'name'])
    <div class="form-group">
      <label for="email">Email address:</label>
      <input type="email" class="form-control" id="email" name="email">
    </div>
    @include('partials.error', ['fieldName' => 'email'])
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="password">
    </div>
    @include('partials.error', ['fieldName' => 'password'])
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="password_confirmation">
    </div>
    @include('partials.error', ['fieldName' => 'password confirmation'])
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection