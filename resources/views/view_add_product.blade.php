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
                <form method="post" action="{{ action('ProductsController@addproduct')}}" enctype="multipart/form-data">
                <!-- <div class="form-group">
                    <label for="email">ID</label>
                    <input type="text" name="id" class="form-control" id="id"> 
                  </div> -->
                 <div class="form-group">
                    <label for="email">Name</label>
                    <input type="text" name="name" class="form-control" id="name"> 
                  </div>
                  <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" name="price" class="form-control" id="price">
                  </div>
                  <div class="form-group">
                    <label for="email">Description</label>
                    <input type="text" name="description" class="form-control" id="description">
                  </div>
                  <div class="form-group row">
                  <label for="trans_img" class="col-sm-2 col-form-label">Picture:</label>
                  <div class="col-sm-10">
                  <input type="file" class="form-control-file" id="img" name="img" >
                 </div>
                  </div>

                  
                  <button type="submit" class="btn btn-default">SAVE</button>

            
                
            </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
