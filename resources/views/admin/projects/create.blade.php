@extends('layouts.app')

@section('title', 'Create')

@section('content')

<div class="container mt-5 p-5">

    <div class="card">                
        <div class="card-body d-flex flex-wrap justify-content-center">
            
            <form action="{{ route('admin.projects.store', $project->id) }}" method="POST">
                <h3 class="text-center my-3">Add a new project</h3>
                @csrf
                <div class="row ">
                    <div class="mb-3 col-6 px-5">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="mb-3 col-6 px-5">
                        <label for="project_url" class="form-label">Project URL</label>
                        <input type="url" class="form-control" id="project_url" name="project_url">
                    </div>
                    <div class="mb-3 col-6 px-5">
                        <label for="image_url" class="form-label">Image URL</label>
                        <input type="url" class="form-control" id="image_url" name="image_url">
                    </div>
                    <div class="mb-3 col-6 px-5">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" id="description" name="description">
                    </div>
                </div>

                <div class="buttons d-flex justify-content-between">
                    <a class="btn btn-primary mx-5 my-2" href="{{route('admin.projects.index')}}"><i class="fa-solid fa-chevron-left"></i> Go Back</a>
                    <button type="submit" class="btn btn-success mx-5 my-2"><i class="fa-regular fa-floppy-disk"></i> Save</button>
                </div>

            </form>
            
            
        </div>
    </div>

</div>
@endsection