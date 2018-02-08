@extends('blog.admin.index')
@section('content-admin')
  <h4>Admin Categories</h4>
  <ul>
    @foreach ($categories as $category)
      <li>{{ $category->name }}</li>
    @endforeach
  </ul>
@endsection