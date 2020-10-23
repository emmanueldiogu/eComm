<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>E-Commerce</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="http://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
  {{View::make('header')}}
  @yield('content')
  {{View::make('footer')}}
</body>
<style>
  img.slider-img{
    height: 400px !important;
  }
  .custom-product{
    height: 600px;
  }
  .slider-text{
    background-color: #00808073 !important;
  }
  .trending-img{
    height: 100px;
  }
  .trending-item{
    float: left;
    width: 20%;
  }
  .trending-wrapper{
    margin: 30px;
  }
  .detail-img{
    height: 200px;
  }
  .search-box{
    /* width: 500px !important; */
  }
  .cart-list-divider{
    border-bottom: 1px solid #ccc;
    margin-bottom: 20px;
    padding-bottom: 20px;
  }
</style>

</html>