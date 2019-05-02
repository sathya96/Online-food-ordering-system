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
                    <a href="/addproduct" class = "btn btn-danger"> ADD Products</a>
                </div>
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Description</th>
                      </tr>
                    </thead>
                    <tbody action="{{ action('ProductsController@index')}}">
                        @foreach($products as $product)
                      <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                         <td>{{$product->price}}</td>
                        <td>{{$product->description}}</td>
                        <td><a type="button" href="{{ url('updateproducts',$product->id) }}"   class="btn btn-info btn-sm">Update</a></td>
                        <td><a type="button" href='destroyproduct/{{$product->id}}' class="btn btn-info btn-sm" onclick="return confirm('You sure you want to delete this product?')">Delete</a></td>
                      </tr>
                       @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
@endsection
