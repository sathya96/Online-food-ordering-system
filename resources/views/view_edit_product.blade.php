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
                <form method="post" action="{{ action('ProductsController@updateproducts')}}" enctype="multipart/form-data">
                  {{csrf_field()}}
                <div class="form-group">
                    <label for="email">ID</label>
                    <input type="text" name="id" class="form-control" id="id" value="{{$products->id}}"> 
                  </div>
                 <div class="form-group">
                    <label for="email">Name</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{$products->name}}" > 
                  </div>
                  <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" name="price" class="form-control" id="price" value="{{$products->price}}" >
                  </div>
                  <div class="form-group">
                    <label for="email">Description</label>
                    <input type="text" name="description" class="form-control" id="description" value="{{$products->description}}">
                  </div>
                  <div class="form-group row">
                  <label for="trans_img" class="col-sm-2 col-form-label">Picture:</label>
                  <div class="col-sm-10">
                  <input type="file" class="form-control-file" id="img" name="img" >
                  </div>
                  </div>
                  <img src="{{ asset('img/' . $products->img) }}" style='width:500px; height:auto;'> 

                  
                  <button type="submit"  class="btn btn-info btn-sm">Update</button> 
                
            </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
