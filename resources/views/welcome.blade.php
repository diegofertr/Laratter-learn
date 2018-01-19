@extends('layouts.app')

@section('content')
    <div class="row">
        @forelse ($messages as $message)
        <div class="col s6">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="{{ $message['image'] }}">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">{{ $message['content'] }}<i class="material-icons right">more_vert</i></span>
                    <p><a href="/messages/{{ $message['id'] }}">Leer más</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">{{ $message['content'] }}<i class="material-icons right">close</i></span>
                    <p>Acá ira contenido relevante del mensaje destacado. :)</p>
                </div>
            </div>
        </div>
        @empty
           <h4>No hay mensajes destacados :)</h4>
        @endforelse
    </div>
@endsection