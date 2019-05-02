<style>
    
</style>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
                    <a class="btn btn-User Account " href="/usersaccount">User Account</a>
                    <a class="btn btn-Admin Account" href="/adminsaccount">Admin Account</a>
                    <a class="btn btn-Staff Account" href="/staffsaccount">Staff Account</a>
                     <a class="btn btn-Admin Products" href="{{url('/products')}}">Products</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
