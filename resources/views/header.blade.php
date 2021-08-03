
<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user')){
  $total=ProductController::cartItem();
}

?>

<nav class="navbar navbar-expand-lg bg-dark navbar-dark py-4">
    <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link ml-5" href="/">E-comm</a>
        </li>
        <li class="nav-item">
          <a class="nav-link ml-5" href="/">Home</a>
          </li>
        <li class="nav-item ">
          <a class="nav-link ml-5" href="/myorders">Orders</a>
        </li> 
    </ul>
          <form action="/search" class="form-inline ml-5">
            @csrf
            <input class="form-control mr-sm-2  search-box" name="query" type="text" placeholder="Search">
            <button class="btn btn-success ml-3" type="submit">Search</button>
          </form>

          <ul class="nav navbar-nav float-right">
            <li class="nav-item">
                <a href="/cartlist" class="nav-link ml-5">Cart({{$total}})</a>
            </li>
            @if (Session::has('user'))
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">{{Session::get('user')['name']}}   
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="/logout">Logout</a>
              </div>
            </li>
            @else
            <li class="nav-item"><a class="nav-link ml-5" href="/login">Login</a></li>
            @endif
            
            
            <li class="nav-item"><a class="nav-link ml-5" href="register">Register</a></li>
        </ul> 
         
</nav>