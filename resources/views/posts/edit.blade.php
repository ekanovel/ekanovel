
@extends('layouts.app')

@section('title', 'Edit Post')


@section('content')
<div class="container">
		<div class="row">
			<div class="col-md-12 col-md-offset-2">
                @if (session('message'))
                    <p class="text-success"><b>{{ session('message') }}</b></p>
                @endif
				<h2>Edit Post</h2>
				@if ($errors->any())
					<div>
						Errors:
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
				<hr>
				<form method="POST" action="{{ route('posts.update', ['id' => $post->id]) }}">
					@csrf
                    @method('PUT')
					<div class="form-group">
						<label for="title">Novel Title:</label>
						<input type="input" type="text" class="form-control" name="title"
                            value="{{ $post->title }}">
					</div>

					<div class="form-group">
						<label for="content">Novel Alternative Title:</label>
						<input type="input" type="text" class="form-control" name="alternative title" value="{{ $post->alternative_title }}">
					</div>

					<div class="form-group">
						<label for="content">Novel Cover URL:</label>
						<input type="input" type="text" class="form-control" name="cover_img" value="{{ $post->cover_img }}">
					</div>

					<div class="form-group">
						<label for="content">Novel Synopsis:</label>
						<textarea class="form-control" name="content" rows="5">{{ $post->content }}</textarea>
					</div>

					<div class="form-group">
						<label for="content">Novel Genres:</label>
						<input type="input" type="text" class="form-control" name="genres" value="{{ $post->genres }}">
					</div>

					<div class="form-group">
						<label for="content">Novel Publisher:</label>
						<input type="input" type="text" class="form-control" name="publisher" value="{{ $post->publisher }}">
					</div>

					<div class="form-group">
						<label for="content">Novel Author:</label>
						<input type="input" type="text" class="form-control" name="author" value="{{ $post->author }}">
					</div>

					<div class="form-group">
						<label for="content">Novel Release Date:</label>
						<input type="input" type="text" class="form-control" name="date_published" value="{{ $post->date_published }}">
					</div>
					<input type="submit" value="Edit Post" class="btn btn-primary btn-lg btn-block">
				</form>
			</div>
		</div>
</div>
@endsection
