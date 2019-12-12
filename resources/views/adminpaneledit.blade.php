@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Edit</div>

                <div class="card-body">

<form action="/adminpanel/update/{{ $users->id }}" method="post">

  {{ csrf_field() }}
  {{ method_field('PUT') }}

  <div class="form-group">
    <label for="EditEmail">Email address</label>
    <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="{{ $users->email }}" readonly>
  </div>
  <div class="form-group">
    <label for="EditName">Name</label>
    <input type="text" name="name" class="form-control" value="{{ $users->name }}">

    @if($errors->has('name'))
            <div class="text-danger">
                {{ $errors->first('name')}}
            </div>
        @endif

  </div>
  <div class="form-group">
    <label for="EditNoHp">No. Hp</label>
    <input type="number" name="nohp" class="form-control" value="{{ $users->nohp }}">

     @if($errors->has('nohp'))
            <div class="text-danger">
                {{ $errors->first('nohp')}}
            </div>
        @endif

  </div>
  
  <a href="/adminpanel/" class="btn btn-secondary mt-2">Cancel</a>
  <button type="submit" class="btn btn-primary mt-2">Submit</button>
  
</form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
