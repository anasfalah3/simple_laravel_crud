@extends('products.layout')
@section('title','accueil')
@section('header','Product')
@section('content')

      <div>
            @if (session()->has('success'))
                {{session('success')}}
            @endif
      </div>
      
      <div>
            <div>
                  <a class="btn btn-primary" href="{{route('product.create')}}">Create a product</a>
            </div>
            <table class="table table-dark table-striped table-hover">
                  
                  <thead class="table-light">
                        <tr>
                              <th >ID</th>
                              <th >Name</th>
                              <th >Qty</th>
                              <th >Price</th>
                              <th >Desciption</th>
                              <th >Edit</th>
                              <th >Delete</th>
                        </tr>
                  </thead>

                  <tbody>
                  @forelse ($products as $product)
                      <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->qty}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->description}}</td>
                        <td>
                              <a class="btn btn-warning" href="{{route('product.edit',['product'=>$product])}}">Edit</a>
                        </td>
                        <td>
                              <form action="{{route('product.delete',['product'=>$product])}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" class="btn btn-danger" value="Delete">
                              </form>
                        </td>
                      </tr>
                  @empty
                      <tr>
                        <td colspan="5">No Data</td>
                      </tr>
                  @endforelse
                  </tbody>
            </table>
      </div>
 @endsection