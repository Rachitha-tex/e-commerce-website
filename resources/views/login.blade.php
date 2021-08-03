@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row py-5 px-5 justify-content-center align-items-center">
        <div class="col-sm-5 ">
            <form action="login" class="align-center" method="POST">
           @csrf
                <div class="form-group">
                  <label for="email">Email Address :</label>
                  <input type="email" name="email" class="form-control" placeholder="Enter Email" id="email">
                </div>
                <div class="form-group">
                  <label for="pwd">Password :</label>
                  <input type="password" name="password" class="form-control" placeholder="Enter Password" id="pwd">
                </div>
                <button type="submit" class="submit-btn btn btn-primary">Login</button>
              </form>
        </div>
    </div>
</div>
@endsection