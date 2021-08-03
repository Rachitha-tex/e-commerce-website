@extends('master')
@section('content')

<div class=" custom-product pt-5">
<div class="col-sm-10">
    <div class="trending-wrapper ">
        <h4 class="mb-4">Result for My Orders</h4>
      
    @foreach ($orders as $item)

        <div class="row searched-item mb-4">
            <div class="col-sm-4">
                <a href="detail/{{$item->id}}">
                    <img src="{{$item->gallery}}" class="trending-img">
                </a>
            </div>
            <div class="col-sm-4">
                <div class="">
                    <h2>Name :{{$item->name}}</h2>
                    <h5>Description :{{$item->description}}</h5>
                    <h5>Address :{{$item->address}}</h5>
                    <h5>Payment Status :{{$item->payment_status}}</h5>
                    <h5>Payment Method :{{$item->payment_method}}</h5>
                </div>
            </div>
         
        </div>
    
    
        @endforeach
    </div>
</div>
</div>
@endsection