@extends('layouts.admin')

@section('content')
    <form method="POST" action="{{ route('admin.projects.store') }}">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Contenuto</label>
            <input type="text" class="form-control" id="content" name="content">
        </div>
        <button type="submit" class="btn btn-primary">Invia</button>
    </form>
@endsection
