@extends('layouts.admin')

@section('content')
    <form method="POST" action="{{ route('admin.projects.update', ['project' => $project->slug]) }}">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $project->title) }}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Contenuto</label>
            <input type="text" class="form-control" id="content" name="content"
                value="{{ old('content', $project->content) }}">
        </div>
        <button type="submit" class="btn btn-primary">Invia</button>
    </form>
@endsection
