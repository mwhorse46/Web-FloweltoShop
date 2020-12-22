@extends('layouts.app')

@section('content')
  @include('components.error-card')

  <div class="container p-3">
    <div class="h3 text-center">
      Register
    </div>

    <div class="row row-cols-xs-1 row-cols-md-2 justify-content-center">
      <form class="p-1" style="max-width:500px;" action="{{ route('register') }}" method="post">
        @csrf
        <div class="form-group row">
          <label for="txtUsername" class="col-xs-12 col-lg-4 col-form-label">
            Username
          </label>
          <input type="text" class="col-xs-12 col-lg-7 mx-3 form-control" id="txtUsername" name="username">
        </div>

        <div class="form-group row">
          <label for="txtEmail" class="col-xs-12 col-lg-4 col-form-label">
            Email Address
          </label>
          <input type="email" class="col-xs-12 col-lg-7 mx-3 form-control" id="txtEmail" name="email">
        </div>

        <div class="form-group row">
          <label for="txtPassword" class="col-xs-12 col-lg-4 col-form-label">
            Password
          </label>
          <input type="password" class="col-xs-12 col-lg-7 mx-3 form-control" id="txtPassword" name="password">
        </div>

        <div class="form-group row">
          <label for="txtConfirmPassword" class="col-xs-12 col-lg-4 col-form-label">
            Confirm Password
          </label>
          <input type="password" class="col-xs-12 col-lg-7 mx-3 form-control" id="txtConfirmPassword" name="password_confirmation">
        </div>

        <div class="form-group row">
          <legend class="col-xs-12 col-lg-4 col-form-label">
            Gender
          </legend>
          <div class="col-xs-12 col-lg-8">
            <div class="form-check form-check-inline my-2">
              <input type="radio" class="form-check-input" name="gender" id="male" value="male">
              <label for="male" class="form-check-label">
                Male
              </label>
            </div>
            <div class="form-check form-check-inline my-2">
              <input type="radio" class="form-check-input" name="gender" id="female" value="female">
              <label for="female" class="form-check-label">
                Female
              </label>
            </div>
          </div>
        </div>

        <div class="form-group row">
          <label for="txtBirth" class="col-xs-12 col-lg-4 col-form-label">
            Date of Birth
          </label>
          <input type="text" class="col-xs-12 col-lg-7 mx-3 form-control" id="txtBirth" placeholder="mm/dd/yyyy" name="dob">
        </div>

        <div class="form-group row">
          <label for="txtAddress" class="col-xs-12 col-lg-4 col-form-label">
            Address
          </label>
          <textarea class="col-xs-12 col-lg-7 mx-3 form-control" id="txtAddress" rows="3" name="address"></textarea>
        </div>

        <div class="row">
          <div class="col-xs-0 col-lg-4"></div>
          <button type="submit" class="col-xs-12 col-lg-7 mx-3 btn btn-primary">
            Register
          </button>
        </div>
      </form>
    </div>
  </div>
@endsection
