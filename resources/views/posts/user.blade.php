@extends('layouts.app')

@section('title', 'MyPosts')

@section('content')
<div class="container">
		<div class="row">
			<div class="col-md-12 col-md-offset-2">	
				<br>
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">List Novel</h5>
						<br>
						<a href="{{ route('posts.create') }}" class="btn btn-primary btn-sm" role="button">Publish Novel</a>
					</div>
				</div>			
				<br>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<table class="table">
					<thead>
						<th>Post Id</th>
						<th>Title</th>
						<th>Date Created</th>
						<th>Edit/View</th>
					</thead>
					<tbody>
                         @foreach ($posts as $post)
                         <tr>
					        <td>{{ $post->id }}</td>
					        <td>{{ $post->title }}</td>
					        <td>{{ date('M j, Y', strtotime($post->created_at)) }}</td>
                            <td><a href="{{ $post->id }}/edit" class="btn btn-primary btn-sm" role="button">Edit</a>
                            <a href="{{ route('posts.show', ['id' => $post->id]) }}" class="btn btn-primary btn-sm" role="button">View</a></td>
				        </tr>
                        @endforeach
			        </tbody>
                </table>
            </div>
	  </div>
@endsection
