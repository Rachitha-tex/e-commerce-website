@extends('master')
@section('content')

<div class=" custom-product pt-5">
<div class="col-sm-10">

    <h3 class="order-text mb-5">Your Order Summary</h3>
    <table class="table mx-5">
        <tbody>
          <tr>
            <td>Amount</td>
            <td>${{$total}}</td>
          </tr>
          <tr>
          
            <td>Tax</td>
            <td>$ 0</td>           
          </tr>
          <tr>
            <td>Delivery Charges</td>
            <td>$ 10</td>    
          </tr>
          <tr>
            <td>Total Amount</td>
            <td>${{$total+10}}</td>    
          </tr>
        </tbody>
      </table>
      <form action="/orderplace" method="POST">
        @csrf
        <div class="form-group mx-5">
          <textarea name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"></textarea>
        </div>
        <div class="form-group mx-5">
          <label for="payment" style="font-weight: bold;">Payment Method</label><br>
          <input type="radio" value="cash" name="payment"><span> Online Payment</span><br>
          <input type="radio" value="emi payment" name="payment"><span> EMI Payment</span><br>
          <input type="radio" value="on delivery" name="payment"><span> Payment on Delivery</span><br>

         </div>
        <button type="submit" class="btn btn-primary mx-5">Order Now</button>
      </form>
</div>
</div>
@endsection