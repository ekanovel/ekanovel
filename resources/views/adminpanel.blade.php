@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Admin Panel</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<div class="table-responsive">
                    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">No. Hp</th>
      <th scope="col">Email</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $row)
    <tr>
      <th scope="row">{{ $row->id }}</th>
      <td>{{ $row->name }} <span class="badge badge-pill badge-secondary">{{ $row->usertype }}</span></td>
      <td>{{ $row->nohp }}</td>
      <td>{{ $row->email }}</td>
      <td align="center"><a href="/adminpanel/edit/{{ $row->id }}" class="btn btn-success mr-2">Edit</a> <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#DeleteModal">Delete</button>  <div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="/adminpanel/delete/{{ $row->id }}" class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>
</div></td>
    </tr>
    @endforeach
  </tbody>
                    </table>










</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
