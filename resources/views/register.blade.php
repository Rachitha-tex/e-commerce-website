@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row py-5 px-5 justify-content-center align-items-center">
        <div class="col-sm-5 ">
            <form action="/register" class="align-center" method="POST">
           @csrf
           <div class="form-group">
            <label for="email" style="font-weight: bold;">User Name :</label>
            <input type="name" name="name" class="form-control" placeholder="User Name" id="email">
          </div>
                <div class="form-group">
                  <label for="email" style="font-weight: bold;">Email Address :</label>
                  <input type="email" name="email" class="form-control" placeholder="Enter Email" id="email">
                </div>
                <div class="form-group">
                  <label for="pwd" style="font-weight: bold;">Password :</label>
                  <input type="password" name="password" class="form-control" placeholder="Enter Password" id="pwd">
                </div>
                <button type="submit" class="submit-btn btn btn-primary">Register</button>
              </form>
        </div>
    </div>
</div>
@endsection