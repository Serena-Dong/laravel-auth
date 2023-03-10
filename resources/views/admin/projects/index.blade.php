@extends('layouts.app')

@section('title', 'Projects')

@section('content')
<div class="container">
    <div class="d-flex align-items-center justify-content-between">
        <h2 class="fs-4 text-secondary my-4">
            {{ __('My Projects') }}
        </h2>
        <div class="button">
            <a class="btn btn-primary" href="{{route('admin.projects.create')}}">Add</a>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header text-center">{{ __('P O R T F O L I O') }}</div>

                <div class="card-body d-flex flex-wrap justify-content-center">

                    @foreach ($projects as $project)

                    <div class="card col-3 m-3 text-center">
                        <img src="{{$project['image_url']}}" alt="">
                        <a href="{{route('admin.projects.show', $project['id'])}}"><h5 class="m-3" style="text-transform: uppercase;">{{$project['title']}}</h5></a>
                    </div>
                    
                    @endforeach

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
