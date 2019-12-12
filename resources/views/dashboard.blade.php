@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    
                        Welcome to User Dashboard!
                        
                     <br>
                     <br>
                        <a href="{{ route('posts.create') }}" class="btn btn-primary btn-sm" role="button">Publish Novel</a></td>
                     
                 </div>
            </div>
        </div>
    </div>


  
  


</div>
@endsection
