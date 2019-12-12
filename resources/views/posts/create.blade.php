
@extends('layouts.app')

@section('title', 'Create Post')


@section('content')
<div class="container">
		<div class="row">
			<div class="col-md-12 col-md-offset-2">
				<h2>Create a new novel!</h2>
				<hr>
				@if ($errors->any())
					<div>
						Errors:
						<ul>
							@foreach ($errors->all() as $error)
								<div class="text-danger"><li>{{ $error }}</li></div>
							@endforeach
						</ul>
					</div>
				@endif

				<form method="POST" action="{{ route('posts.store') }}">
					@csrf
					<div class="form-group">
						<label for="title">Novel Title:</label>
						<input type="input" type="text" class="form-control" name="title"
                            value="{{ old('title') }}">
					</div>

					<div class="form-group">
						<label for="content">Novel Alternative Title:</label>
						<input type="input" type="text" class="form-control" name="alternative title" value="{{ old('alternative_title') }}">
					</div>

					<div class="form-group">
						<label for="content">Novel Cover URL:</label>
						<input type="input" type="text" class="form-control" name="cover_img" value="{{ old('cover_img') }}">
					</div>

					<div class="form-group">
						<label for="content">Novel Synopsis:</label>
						<textarea class="form-control" name="content" rows="5"
                            value="{{ old('content') }}"></textarea>
					</div>

					<div class="form-group">
						<label for="content">Novel Genres:</label>
						<input type="input" type="text" class="form-control" name="genres" value="{{ old('genres') }}">
					</div>

					<div class="form-group">
						<label for="content">Novel Publisher:</label>
						<input type="input" type="text" class="form-control" name="publisher" value="{{ old('publisher') }}">
					</div>

					<div class="form-group">
						<label for="content">Novel Author:</label>
						<input type="input" type="text" class="form-control" name="author" value="{{ old('author') }}">
					</div>

					<div class="form-group">
						<label for="content">Novel Release Date:</label>
						<input type="input" type="text" class="form-control" name="date_published" value="{{ old('date_published') }}">
					</div>

					<input type="submit" value="Create!" class="btn btn-primary btn-lg btn-block">
				</form>
			</div>
		</div>
	  </div>
@endsection
