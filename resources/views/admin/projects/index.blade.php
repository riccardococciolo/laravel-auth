@extends('layouts.admin')

@section('content')
    <div class="container py-5">
        <h1>Lista</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="text-end">
            <a class="btn btn-primary" href="{{ route('admin.projects.create') }}">Aggiungi un Progetto</a>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <th scope="row">{{ $project->id }}</th>
                        <td>{{ $project->title }}</td>
                        <td>
                            <a class="btn btn-success" href="{{ route('admin.projects.show', ['project' => $project->slug]) }}">Dettagli</a>
                            <a class="btn btn-warning" href="{{ route('admin.projects.edit', ['project' => $project->slug]) }}">Modifica</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


@endsection