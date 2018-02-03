@extends('layouts.app')

@section('content')
    <div class="row">
      <form class="col s12">
        {{ csrf_field() }}
        <h4>Crear Mensaje</h4>
        <hr>
        <textarea-component 
          name="{{$persona['name']}}" 
          last-name="{{$persona['lastName']}}">
        </textarea-component>
      </form>
    </div>
@endsection