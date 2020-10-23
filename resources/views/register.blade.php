@extends('master')
@section('content')
    
<div class="h-100 container align-middle py-5">
  <form class="form-signin col-md-6 p-3 m-auto" action="register" method="POST">
    @csrf
    <h1 class="h3 mb-3 font-weight-normal text-center">Please Register</h1>
    <div class="form-group">
      <label for="inputName">Name:</label>
      <input type="text" name="name" id="inputName" class="form-control" placeholder="enter name" required>
    </div>
    <div class="form-group">
      <label for="inputEmail">Email Address:</label>
      <input type="email" name="email" id="inputEmail" class="form-control" placeholder="enter email" required>
    </div>
    <div class="form-group">
      <label for="inputPassword">Password:</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="enter password" required>
    </div>
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
  </form>
</div>

@endsection