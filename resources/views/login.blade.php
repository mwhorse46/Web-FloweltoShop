@extends('layouts.app')

@section('content')
  <div class="container p-3">
    <div class="h3 text-center">
      Login
    </div>

    <div class="row row-cols-xs-1 row-cols-md-2 justify-content-center">
      <form class="p-1" style="max-width:500px;">
        <div class="form-group row">
          <label for="txtEmail" class="col-xs-12 col-lg-4 col-form-label">
            Email Address
          </label>
          <input type="email" class="col-xs-12 col-lg-7 form-control mx-3" id="txtEmail">
        </div>

        <div class="form-group row">
          <label for="txtPassword" class="col-xs-12 col-lg-4 col-form-label">
            Password
          </label>
          <input type="password" class="col-xs-12 col-lg-7 form-control mx-3" id="txtPassword">
        </div>

        <div class="row">
          <div class="col-xs-0 col-lg-4"></div>
          <div class="form-group form-check mx-3">
            <input type="checkbox" class="form-check-input" id="rememberMe">
            <label for="rememberMe" class="form-check-label">
              Remember Me
            </label>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-0 col-lg-4"></div>
          <button type="submit" class="col-xs-12 col-lg-7 btn btn-primary mx-3">
            Login
          </button>
        </div>

        <div class="row">
          <div class="col-xs-0 col-lg-4"></div>
          <div class="col-xs-12 col-lg-7 pt-1">
            <a href="#">
              Forgot Password?
            </a>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection
