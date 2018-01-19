@extends('layouts.app')

@section('content')
    <div class="title m-b-md">
        Laratter, by <a href="https://github.com/diegofertr">YeyO</a>
    </div>

    @if (isset($teacher))
        <div class="subtitle m-b-md">
            by {{ $teacher }}
        </div>
    @else
        <div class="subtitle m-b-md">
            Profesor a definir
        </div>
    @endif

    <div class="links">
        @foreach ($links as $link => $text)                    
            <a href=" {{ $link }} "> {{ $text }} </a>
        @endforeach
    </div>
@endsection