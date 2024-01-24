@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="my-4">
            <a href="{{ url()->previous() }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Torna Indietro
            </a>
        </div>
        <h1>{{ $project->title }}</h1>
        <hr>
        <p>{{ $project->content }}</p>
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
@endsection