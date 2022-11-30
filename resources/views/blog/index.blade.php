@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                 <div class="row">
                    <div class="col-8">
                        <h1 class="display-one text-uppercase fw-bold">My-Blog!</h1>
                        <p class="fs-4">Enjoy reading my posts. Click on a post to read!</p>
                    </div>
                    <div class="col-4 text-center">
                        <p class="fs-4">Create new Post</p>
                        <a href="/blog/create/post" class="btn btn-primary ">Add Post</a>
                    </div>
                </div>                
                @forelse($posts as $post)
                    <ul>
                        <li class="list-unstyled"><a class="text-decoration-none fs-4 fw-bold" href="./blog/{{ $post->id }}">{{ ucfirst($post->title) }}</a></li>
                    </ul>
                @empty
                    <p class="text-warning">No blog Posts available</p>
                @endforelse
                <a href="/" class="btn btn-primary">Go Back</a>
            </div>
        </div>
    </div>
@endsection