@extends('layouts.admin')

@section('content')
    <div class="container">
        <main>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $project->title }}</h5>
                    <p class="card-text">{{ $project->content }}</p>
                    <h5 class="card-title">{{ $project->slug }}</h5>
                    <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Come Back</a>
                    <a href="#" class="btn btn-secondary">↑</a>
                </div>
            </div>
        </main>
    </div>
@endsection
