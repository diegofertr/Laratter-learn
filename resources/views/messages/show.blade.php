@extends('layouts.app')

@section('content')
  <h2> Mensaje id: {{ $message->id }}</h2>
  {{-- <img class="responsive-img" src="{{ $message->image }}"> --}}
  @include('messages.message')
@endsection