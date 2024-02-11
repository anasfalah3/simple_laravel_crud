@extends('products.layout')
@section('title','update Product')
@section('header','Edit a Product')
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
      <form class="row g-3" action="{{route('product.update',['product'=>$product])}}" method="post" >
            @csrf
            @method('put')
            <div class="form-floating mb-3">
                  <input type="text" class="form-control" name="name" id="name" placeholder="Name" value={{$product->name}}>
                  <label for="name">Name</label>
            </div>
            <div class="form-floating mb-3">
                  <input type="text" class="form-control" name="qty" id="qty" placeholder="Quantity" value={{$product->qty}}>
                  <label for="qty">Quantity</label>
            </div>
            <div class="form-floating mb-3">
                  <input type="text" class="form-control" name="price" id="price" placeholder="Price" value={{$product->price}}>
                  <label for="price">Price</label>
            </div>
            <div class="form-floating">
                  <input class="form-control" name="description" placeholder="Description" id="description" value={{$product->description}}></input>
                  <label for="description">Description</label>
            </div>
            <div>
                  <input class="btn btn-warning" type="submit" value="Save the Update">
                  <a class="btn btn-danger" href="{{route('product.index')}}">Cancel</a>
            </div>
      </form>
@endsection
