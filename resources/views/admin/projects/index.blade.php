@extends('layouts.app')
@section('content')
    <section class="container">
        <h2>Projects</h2>

        @if (!empty(session('message')))
            <div class="alert alert-success" role="alert">
                {{ session('message') }}
            </div>
        @endif
        <table class="table table table-striped mt-5">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <th scope="row"> <a href="{{ route('admin.projects.show', $project->id) }}"> <i
                                    class="fa-regular fa-eye"></i> </a></th>
                        <td> {{ $project->title }}</td>
                        <td> <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-warning">Edit</a>
                            <a href="{{ route('admin.projects.destroy', $project->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <button class="btn btn-primary mt-3">
            <a class="text-white text-decoration-none" href="{{ route('admin.projects.create') }}">Create</a>
        </button>
    </section>
@endsection
