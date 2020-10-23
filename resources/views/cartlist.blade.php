@extends('master')
@section('content')
    <div class="">
      <div class="col-sm-10">
        <div class="trending-wrapper">
          <h4>Result for Products</h4>
          <a href="ordernow" class="btn btn-success">Order Now</a> <br><br>
          @foreach ($products as $item)
              <div class="row searched-item cart-list-divider">
                <div class="col-sm-3">
                  <a href="details/{{$item->id}}">
                    <img src="{{$item->gallery}}" alt="" class="trending-img">
                  </a>
                </div>
                <div class="col-sm-4">
                  <a href="details/{{$item->id}}">
                    <div>
                      <h2>{{$item->name}}</h2>
                      <h5>{{$item->description}}</h5>
                    </div>
                  </a>
                </div>
                <div class="col-sm-3">
                  <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">
                    Remove from cart
                  </a>
                </div>
              </div>
          @endforeach
          <a href="ordernow" class="btn btn-success">Order Now</a>
        </div>
      </div>
    </div>
@endsection