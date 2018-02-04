@extends('layouts.app')

@section('content')
  <h2> Mensaje id: {{ $message->id }}</h2>
  {{-- <img class="responsive-img" src="{{ $message->image }}"> --}}
  <img class="materialboxed" width="650" src="{{ $message->image }}">
  <p class="flow-text">
    {{ $message->content }}
    <blockquote>{{ $message->created_at}}</blockquote>
  </p>
@endsection