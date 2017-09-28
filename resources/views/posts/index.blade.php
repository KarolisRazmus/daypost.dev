@extends('layouts.app')

@section('title', 'All Posts')

@section('css')

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/album.css') }}" rel="stylesheet">

@endsection


@section('content')

    <h1>All Posts</h1>

    <div class="album text-muted">

    @foreach($posts as $post)

                    <div class="card">
                        <h2>{{ $post->title }}</h2>

                        <img class="img-responsive" src="{{ asset('images/'.$post->img_path)}}" alt=''>

                        <h6 class="card-text">{{ $post->user->name }}</h6>

                        <div class="row">
                            <div class="col-sm-4"><a class="btn btn-primary btn-sm" href="{{route('posts.show', $post->id)}}"><i class="fa fa-eye fa-sm" aria-hidden="true"></i> View</a></div>
                            @if($post->user->id == Auth::id())
                                   <div class="col-sm-4"><a class="btn btn-success btn-sm" href="{{route('posts.edit', $post->id)}}"><i class="fa fa-pencil fa-sm" aria-hidden="true"></i> Edit</a></div>
                                   <div class="col-sm-4"><a class="btn btn-success btn-sm" href="{{route('posts.destroy', $post->id)}}"><i class="fa fa-pencil fa-sm" aria-hidden="true"></i> Delete</a></div>
                            @endif
                        </div>
                    </div>

    @endforeach

    </div>

@endsection