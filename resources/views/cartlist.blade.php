@extends('master')
@section('content')

<div class=" custom-product pt-5">
<div class="col-sm-10">
    <div class="trending-wrapper ">
        <h4 class="mb-4">Result for Products</h4>
    <a href="ordernow" class="btn btn-success mb-3">Order Now</a>    
    @foreach ($products as $item)

        <div class="row searched-item mb-4">
            <div class="col-sm-4">
                <a href="detail/{{$item->id}}">
                    <img src="{{$item->gallery}}" class="trending-img">
                </a>
            </div>
            <div class="col-sm-4">
                <div class="">
                    <h2>{{$item->name}}</h2>
                    <h6>{{$item->description}}</h6>
                </div>
            </div>
            <div class="col-sm-4">
                <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove from Cart</a>
            </div>
         
        </div>
    
    
        @endforeach
    </div>
</div>
</div>
@endsection