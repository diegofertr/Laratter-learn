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
    </div>
    <div class="row">
        @forelse ($messages as $message)
        <div class="col s6">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="{{ $message->image }}">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">{{ $message->content }}<i class="material-icons right">more_vert</i></span>
                    <p><a href="/messages/{{ $message->id }}">Leer más</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">{{ $message->content }}<i class="material-icons right">close</i></span>
                    <p>Acá ira contenido relevante del mensaje destacado. :)</p>
                </div>
            </div>
        </div>
        @empty
           <h4>No hay mensajes destacados :)</h4>
        @endforelse
    </div>
@endsection