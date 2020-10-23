@extends('master')
@section('content')
    <div class="">
      <div class="col-sm-10">
        <div class="trending-wrapper">
          <h4>My Orders</h4>
        
          @foreach ($orders as $item)
              <div class="row searched-item cart-list-divider">
                <div class="col-sm-3">
                  <img src="{{$item->gallery}}" alt="" class="trending-img">
                </div>
                <div class="col-sm-6">
                  <div>
                    <h2>Name: {{$item->name}}</h2>
                    <p>Delivery Status: {{$item->status}}</p>
                    <p>Address: {{$item->address}}</p>
                    <p>Payment Status: {{$item->payment_status}}</p>
                    <p>Payment Method: {{$item->payment_method}}</p>
                  </div>
                </div>
              </div>
          @endforeach
        </div>
      </div>
    </div>
@endsection