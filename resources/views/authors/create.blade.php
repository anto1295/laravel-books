@extends('layouts/main', [
  'title' => 'Create',
  'current_menu_item' => 'create'
])
@section('content')
<br>

@if ($author->id) 

<form action="" method="post">

  {{-- @method('PUT') --}}
  @else <form action='{{route('author')}}' method="post">
  @endif
  @csrf
  <label>Name:</label>
  <input type="text" name="name" value="{{ old('name', $author->name) }}">
  <br><br>

  <label>Slug:</label>
  <input type="text" name="slug" value="{{ old('slug', $author->slug) }}">
  <br><br>

      <button type="submit">Create</button><br>

      </form>

@endsection