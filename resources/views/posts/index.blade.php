@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header">Home</div>
                <div class="card-body">
                    
                    Welcome to Dashboard!
                        
                        <br>
                        <br>
                        <a href="{{ route('posts.create') }}" class="btn btn-primary btn-sm" role="button">Create a Post</a></td>
                     
                 </div>
            </div>
        </div>
    </div>

    @foreach ($posts as $post)
    <div class="card mb-4">
        <div class="card-header">
            {{ $post->title }}
        </div>
        <div class="card-body">
            <span class="card-title">{{ $post->content }}</span>
            <p class="card-text">     {{ date('M j, Y h:ia', strtotime($post->created_at)) }}</p>

        

            <a href="{{ route('posts.show', ['id' => $post->id]) }}" class="btn btn-secondary" role="button">View Post</a>
        </div>                
    </div>
    @endforeach

    <div class="text-center" style="margin-left: 500px;margin-top: 20px;">
	    {!! $posts->links(); !!}
    </div>


@endsection
