@extends('layouts.app')

@section('content')
    <h1>Create New Post</h1>

    {!! Form::open(['url' => route('posts.store'), 'files' => true]) !!}


    {{--<label class="btn btn-primary btn-sm btn-file">--}}
        {{--<i class="fa fa-upload fm-sm" aria-hidden="true"></i>--}}
        {{--<input type="file" onchange="this.form.submit()" name="file" hidden>--}}
    {{--</label>--}}

    <div class="form-group">
        {!! Form::label('img_path', 'Image') !!}
        {!! Form::file('img_path') !!}
    </div>

    <div class="form-group">
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title', '', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('body', 'Body') !!}
        {!! Form::textarea('body', '', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
    <button class="btn btn-success" type="submit">Publish!</button>
    </div>

    {!! Form::close() !!}

@endsection()