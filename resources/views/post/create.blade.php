@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
          <h1>Create new post</h1>
            {!! Form::open(['action' => 'PostController@store', 'method' => 'POST' ]) !!}
              <div class="form-group">
                {!! Form::label('title', 'Title') !!}
                {!! Form::text('title', '', ['title', 'class' => 'form-control mb-3', 'placeholder' => 'Title']) !!}

                {!! Form::label('description', 'Description') !!}
                {!! Form::text('description', '', ['class' => 'form-control mb-3', 'placeholder' => 'Description']) !!}

                {!! Form::label('body', 'Body') !!}
                {!! Form::textarea('body', '', ['name' => 'body','class' => 'form-control mb-3', 'placeholder' => 'Body Text']) !!}

                {!! Form::submit('Post', ['class' => 'form-control mt-5 btn btn-dark col-2']) !!}
              </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('body');
</script>
@endsection
