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
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Created</th>
                        <th scope="col">Updated</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                      <tr>
                        <th scope="row">{{$project->title}}</th>
                        <td>{{$project->slug}}</td>
                        <td>{{$project->created_at}}</td>
                        <td>{{$project->updated_at}}</td>
                      </tr>
                      @endforeach

                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
@endsection
