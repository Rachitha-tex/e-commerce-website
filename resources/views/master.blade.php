<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d7caef51b0.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>E-Commerce Project</title>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>
<style>
    .custom-login{
        height: 350px;
        padding-top: 80px;
    }
    img.img-slider{
        height: 400px !important;
    }
  /*   .custom-product{
        height: 600px;
    } */
    .slider-text{
        background-color:#35443585 !important;
    }
    .trending-img{
        height: 100px;
        padding: 0px 10px;
    }
    .trending-heading{
        text-align: center;
        margin-bottom: 2rem;
    }
    .names{
        padding: 0px 10px;
    }
    .trending-items{
       float: left;
       width: 20%;
    }
    .detail-img{
        width: 340px;
    }
    .search-box{
        width: 350px !important;
    }
    .searched-item{
        border-bottom: 2px solid red;
        margin-left: 2rem;
        padding-bottom: 0.5rem;
        
    }
    .trending-wrapper{
       max-height: 90%;
    }
    .footer{
        padding-top: 10rem;
    }
    .order-text{
        text-align: center
    }
</style>
</html>