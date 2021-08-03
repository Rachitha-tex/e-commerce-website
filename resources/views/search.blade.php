@extends('master')
@section('content')

<div class=" custom-product pt-5">
    <h2 style="text-align: center;" class="result-heading mb-5">Result for Products</h2>
    @foreach ($products as $item)
    <div class="row">
        <div class="col-sm-4">
          <img src="{{$item['gallery']}}" style="width: 20rem; margin-left:5rem;">
        </div>
        <div class="col-sm-4 mt-5">
           <h5>{{$item['name']}}</h5>
           <h5>{{$item['description']}}</h5>
        </div>
    </div>
    @endforeach
  
</div>
@endsection