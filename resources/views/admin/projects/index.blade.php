@extends('layouts.admin')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Slug</th>
                <th scope="col">Info</th>
                <th scope="col">Modifica</th>
                <th scope="col">Elimina</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->content }}</td>
                    <td>{{ $project->slug }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('admin.projects.show', $project->slug) }}">Info</a>
                    </td>
                    <td>
                        <a class="btn btn-secondary" href="{{ route('admin.projects.edit', $project->slug) }}">Modifica</a>
                    </td>
                    <td>
                        <form class="form_delete_post"
                            action="{{ route('admin.projects.destroy', ['project' => $project->slug]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Elimina</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
