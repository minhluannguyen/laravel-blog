@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                @foreach ($posts as $post)
                <div class="card-body">
                  <div class="card text-center">
                    <div class="card-body">
                      <h5 class="card-title">{{$post['title']}}</h5>
                      <p class="card-text">{{$post['description']}}</p>
                      <a href="/posts/{{$post['id']}}" class="btn btn-primary">Detail</a>
                    </div>
                    @php
                    
                        $currentTime = new DateTime(date('H:i:s',time()), new DateTimeZone(date_default_timezone_get()));
                        $postCreated = new DateTime($post['created_at'], new DateTimeZone(date_default_timezone_get()));
                        $res = $currentTime->diff($postCreated);
                    @endphp
                    <div class="card-footer text-muted">
                      {{date('H:i:s',time())}} ago
                    </div>
                  </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </div>
</div>
@endsection
