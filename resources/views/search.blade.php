@extends('master')
@section('content')
    
<div class="custom-product row">
  <div class="col-md-4">
    <a href="#">filter</a>
  </div>
  <div class="col-md-4">
    <div class="trending-wrapper">
      <h4>Results for Products</h4>
      @foreach ($products as $item)
          <div class="search-item">
            <a href="detail/{{$item['id']}}">
              <img class="trending-img" src="{{$item['gallery']}}" alt="{{$item['name']}}">
              <div class="">
                <h2>{{$item['name']}}</h2>
                <h5>{{$item['description']}}</h5>
              </div>
            </a>
          </div>
      @endforeach
    </div>
  </div>
</div>

@endsection