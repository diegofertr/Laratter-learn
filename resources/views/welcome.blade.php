@extends('layouts.app')

@section('content')
<div class="row">
    <form action="/messages/create" method="post" class="col s12">
        {{ csrf_field() }}
        <div class="input-field col s6">
            <input placeholder="Qué estás pensando?" name="message" type="text" class="validate">
            @if ($errors->has('message'))
            @foreach ($errors->get('message') as $error)
            <div>{{ $error }}</div>
            <label for="email" data-error="{{ $error }}" data-success="right"></label>
            @endforeach
            @endif
        </div>
    </form>
    <hr>
</div>
<div class="row">
    @forelse ($messages as $message)
    <div class="col s12 m6">
        @include('messages.message')
    </div>
    @empty
    <h4>No hay mensajes destacados :)</h4>
    @endforelse
    @if (count($messages))            
        <div class="row">
            <div class="col s12">
                {{--  {{ $messages->links() }}  --}}
                {{ $messages->render() }}
            </div>
        </div>
    @endif
</div>
@endsection