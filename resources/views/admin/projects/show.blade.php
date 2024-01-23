@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>{{ $project->title }}</h1>
        <hr>
        <p>{{ $project->content }}</p>
    </div>
@endsection