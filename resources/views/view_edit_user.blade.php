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
                <div>
                <form method="post" action="/edituser">
                @foreach ($user as $value)
                 <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" value=" {{ $value->email }} ">
                  </div>
                  <div class="form-group">
                    <label for="pwd">Name</label>
                    <input type="text" name="name" class="form-control" id="pwd" value=" {{ $value->name }}">
                  </div>
                  <input type="hidden" name="id" class="form-control" id="pwd" value=" {{ $value->id }}">
                  <button type="submit" class="btn btn-default">SAVE</button>

            
                @endforeach
            </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
