@extends('layouts.app')

@section('content')
<div class="row">
  <h3 class="center">Panel de Administrador</h3>
  <nav>
    <div class="nav-wrapper teal">
      {{--  <a href="#" class="brand-logo right">Panel de administrador</a>  --}}
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="posts">Posts</a></li>
        <li><a href="categories">Categories</a></li>
        {{--  <li><a href="collapsible.html">JavaScript</a></li>  --}}
      </ul>
    </div>
  </nav>
</div>
<div class="row">
  <div class="col s12">
    @yield('content-admin')
  </div>
</div>
@endsection