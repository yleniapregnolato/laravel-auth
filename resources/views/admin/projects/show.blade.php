@extends('layouts.admin')

@section('content')
    <h1 class="mt-4">DETTAGLI DEL PROGETTO:</h1>

    <div>
        <h3>Contenuto:</h3>
        <p>{{ $project->content }}</p>
    </div>
    <div>
        <h3>Slug:</h3>
        <p>{{ $project->slug }}</p>
    </div>
@endsection