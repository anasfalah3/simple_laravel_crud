@extends('products.layout')
@section('header','Create a Product')

@section('content')
    
      <div>
            @if ($errors->any())
                <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{$error}}</li>
                  @endforeach
                </ul>
            @endif
      </div>
      <form action="{{route("product.store", ['product',])}}" method="post">
            @csrf
            <div class="form-floating mb-3">
                  <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                  <label for="name">Name</label>
            </div>
            <div class="form-floating mb-3">
                  <input type="text" class="form-control" name="qty" id="qty" placeholder="Quantity">
                  <label for="qty">Quantity</label>
            </div>
            <div class="form-floating mb-3">
                  <input type="text" class="form-control" name="price" id="price" placeholder="Price">
                  <label for="price">Price</label>
            </div>
            <div class="form-floating">
                  <input class="form-control" name="description" placeholder="Description" id="description"></input>
                  <label for="description">Description</label>
            </div>
            <div>
                  <input class="btn btn-primary" type="submit" value="Save a New Product">
                  <a class="btn btn-danger" href="{{route('product.index')}}">Cancel</a>
            </div>
      </form>
@endsection
