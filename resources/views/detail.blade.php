@extends('master')
@section('content')

<div class=" custom-product pt-5">
<div class="container">
    <div class="row">
        <div class="col-sm-6">
           <img class="detail-img" src="{{$product['gallery']}}" alt="" srcset="">
        </div>
        <div class="col-sm-6">
        <a href="/" class="btn btn-warning mb-3">Go Back</a>
          <h3>{{$product['name']}}</h3>
          <h4>Price : Rs.{{$product['price']}}</h4>
           <h4>Category : {{$product['category']}}</h4> 
           <h4>Details  :{{$product['description']}}</h4> 
           <form action="/add_to_cart" method="POST">
              @csrf
              <input type="hidden" name="product_id" value="{{$product['id']}}">
              <button class="btn btn-primary mt-2">Add to Cart</button>                  
           </form>
           <a href="/" class="btn btn-success  mt-2">Buy Now</a>
        </div>
    </div>
</div>
@endsection