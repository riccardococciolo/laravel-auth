@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="text-center">Crea un Progetto</h1>

        <div class="row justify-content-center mt-5">
            <div class="col-6 mb-5">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('admin.projects.store') }}" method="POST">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                    </div>

                    <div class="mb-3">
                        <label for="content" class="form-label">Descrizione</label>
                        <textarea class="form-control" id="content" rows="3" name="content">{{ old('content') }}</textarea>
                    </div>

                    <button class="btn btn-success" type="submit">Salva</button>
                   
                </form>
            </div>
        </div>
       
    </div>
@endsection