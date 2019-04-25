@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">ADMIN Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as <strong>ADMIN</strong>
                </div>
                <form method="GET" action="/search" class="form-inline mt-2 mt-md-0" style="padding-top: 8px;">
              <input class="form-control" type="text" name="search" placeholder="Search" aria-label="Search">
              <button type="submit" class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <br>
                <div>
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($admins as $value)
                      <tr>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->email }}</td>
                        <td>{{ $value->password }}</td>
                        <td><a href="/vieweditadmin/{{ $value->id }}"> Edit</a></td>
                        <td><a href="/deleteadmin/{{ $value->id }}"> Add</a></td>
                        <td><a href="/deleteadmin/{{ $value->id }}"> Delete</a></td>
                      </tr>
                       @endforeach
                    </tbody>
                  </table>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

