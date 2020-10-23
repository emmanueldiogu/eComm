@extends('master')
@section('content')
    <div class="">
      <div class="col-sm-10">
        <table class="table">
          <tbody>
            <tr>
              <td>Amount</td>
              <td>$ {{$total}}</td>
            </tr>
            <tr>
              <td>Tax</td>
              <td>$ 0</td>
            </tr>
            <tr>
              <td>Delivery</td>
              <td>$ 10</td>
            </tr>
            <tr>
              <td>Total Amount</td>
              <td>$ {{$total + 10}}</td>
            </tr>
          </tbody>
        </table>
        <div>
          <form action="/orderplace" method="POST">
            @csrf
            <div class="form-group">
              <label for=""></label>
              <textarea class="form-control" name="address" id="" placeholder="address" rows="3"></textarea>
            </div>
            <div class="form-check">
                <p>Payment Method:</p>
                <label class="form-check-label">
                  <p>
                    <input type="radio" class="form-check-input" name="payment" id="" value="cash" checked><span>online payment</span>
                  </p>
                  <p>
                    <input type="radio" class="form-check-input" name="payment" id="" value="cash"><span>EMI payment</span>
                  </p>
                  <p>
                    <input type="radio" class="form-check-input" name="payment" id="" value="cash"><span>payment on delivery</span>
                  </p>
              </label>
            </div>
            <button type="submit" class="btn btn-primary">Order Now</button>
          </form>
        </div>
      </div>
    </div>
@endsection