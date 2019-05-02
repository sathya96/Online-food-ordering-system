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
                   
                </div>
                <table class="table table-invisible">
                                      {{$products->links()}}
                    <thead>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                    </thead>
                    <tbody action="{{ action('ProductsController@index')}}">
                        @foreach($products as $product)
                      <tr>
                        <td> <img src="{{ asset('img/' . $product->img) }}" style='width:150px; height:150px;'> </td>
                        <td style="color:red"><h2>{{$product->name}}</h2></td>
                         <td>RM:{{$product->price}}</td>
                        <td>{{$product->description}}</td>
                       
                      </tr>
                       @endforeach
                    </tbody>
                  </table>
                  
            </div>
        </div>
    </div>
</div>
@endsection
