@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
          <h2>{{$post['title']}}</h2>
          <small>Written on {{$post['created_at']}} </small>
          <p>By ...</p>

          <div>{!! $post['body'] !!}</div>
    </div>
</div>

@endsection
