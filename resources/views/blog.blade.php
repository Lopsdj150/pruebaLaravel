{{-- @extends('layouts.app')
@section('title','Blog')
@section('meta-description','Blog meta desdcription')

@section('content')
    <h1>Blog</h1>
@endsection --}}

<x-layouts.app title="Blog" 
:meta-description="'Blog meta description' ">

<h1>Blog</h1>
@foreach ($posts as $pos )
<h1>Nombre: {{ $pos->title }}</h1>
<h2>Apellido: {{ $pos->body }}</h2>
<h3>Fecha de entrada: {{ $pos->created_at}}</h3>
@endforeach
<p>{{count($posts) }} Beneficiari@s </p>


</x-layouts.app>