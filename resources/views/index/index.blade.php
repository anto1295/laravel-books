@extends('layouts/main', [
  'title' => 'Home',
  'current_menu_item' => 'home'
])

@section('content')
    

<h1>The Books Project </h1>

<p>
  We sell the best books of the city. Come here!!
</p>

<div id="partners"></div>

@viteReactRefresh

@vite("resources/js/partners.jsx")

@endsection
