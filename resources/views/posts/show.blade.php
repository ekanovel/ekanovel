@extends('layouts.app')

@section('title', 'My Blog')

@section('content')
	  <div class="container">
		<div class="row">
			<div class="col-md-12 col-md-offset-2">
                @if (session('message'))
                    <p class="text-success"><b>{{ session('message') }}</b></p>
                @endif
                
				<div class="card mt-4">
					
					<div class="card-body center justify-content-center" style="margin: 0 auto;float: none;margin-bottom: 10px;">
					<center>	<h2 class="card-title mb-4">{{ $posts->title }}</h2></center>	
						<img class="img-fluid" src="{{ $posts->cover_img}}">
					</div>
					
					<div class="card-body center">
							
							<ul>
									<li>Alternative title:</strong> {{ $posts->alternative_title }}</li>
									<li>Genres:</strong> {{ $posts->genres }}</li>
									<li>Author:</strong> {{ $posts->author }}</li>
									<li>Publisher:</strong> {{ $posts->publisher }}</li>
							</ul>
						</div>
<br>
						<div class="card-body">
								<h5>Synopsis</h5>
								<p class="card-text">{{ $posts->content }}</p>
							</div>
					<div class="card-header">
						<i>{{ date('M j, Y h:ia', strtotime($posts->created_at)) }}</i>
						<br>
						<span><a href="/posts/{{ $posts->id }}/edit">Edit</a></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
	
	
		
		
	  </div>
@endsection
