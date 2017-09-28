@extends('layouts.app')

@section('content')
    <h1>Create New Post</h1>

    <h2>{{ $post->title }}</h2>

    {!! Form::model($post, ['route' => ['posts.update', $post->id]]) !!}
{{--    {!! Form::model($post, ['method' => 'PATCH', 'action' => ['PostController@update', $post->id]]) !!}--}}
    {{--{!! Form::model($post, ['action' => ['PostController@store']]) !!}--}}
{{--    {!! Form::open(['url' => route('posts.store'), 'files' => true]) !!}--}}

    <div class="form-group">
        {!! Form::label('img_path', 'Image') !!}
        {!! Form::file('img_path') !!}
    </div>

    <div class="form-group">
        {{--{!! Form::label('title', 'Title') !!}--}}
        {!! Form::text('title', 'null', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {{--{!! Form::label('body', 'Body') !!}--}}
        {!! Form::textarea('body', 'null', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        <button class="btn btn-success" type="submit">Publish!</button>
    </div>

    {!! Form::close() !!}

@endsection()