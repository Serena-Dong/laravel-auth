@extends('layouts.app')

@section('title', $project['name'])


@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('My Projects') }}
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-body d-flex flex-wrap justify-content-center">
                    <div class="col-4 p-3">
                        <img src="{{$project['image_url']}}" alt="">
                    </div>
                    <div class="col-6">
                        <div class="text">
                            <h2 class="mb-4" style="text-transform: uppercase;">{{$project['title']}}</h2>
                            <p>{{$project['description']}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="container my-4">
    <div class="d-flex justify-content-between">
        <div class="col">
            <a class="btn btn-success" href="{{route('admin.projects.index')}}"><i class="fa-solid fa-chevron-left"></i> Go Back</a>
        </div>

        <div class="col d-flex justify-content-end">
            <a class="btn btn-warning text-white mx-2" href="{{route('admin.projects.edit', $project->id)}}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
            
            <form class="delete-form" action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" data-project-name="{{ $project->name }}">
                @method('DELETE')
                @csrf
                <button class="btn btn-small btn-danger me-2"><i class="fa-solid fa-trash"></i> Delete</button>
            </form>
        </div>
    </div>
</div>

</div>
@endsection