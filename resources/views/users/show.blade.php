@extends('layouts.app')
@section('content')
<br>
<div class="row valign-wrapper">
  <div class="col s6 m2">
    <img src="{{ $user->avatar }}" class="circle responsive-img">
  </div>
  <div class="col s6 m10">
    <span class="black-text">
      <h4> {{ $user->name }} </h4>
    </span>
  </div>
</div>
<hr>
<div class="row">
  @foreach ($user->messages as $message)
  <div class="col s12 m6">
    @include('messages.message')
  </div>
  @endforeach
</div>
@endsection