@extends('layouts/main', [
  'title' => 'Authors',
  'current_menu_item' => 'author'
])

@section('content')

  <h1>Authors</h1>

  @foreach ($authors as $author)
  
  <p>
    {{$author->name}}
  </p>

  @endforeach

@endsection