@extends('layouts.app')

@section('content')
  <div class="container p-3">
    <div class="h3 text-center">
      Change Password
    </div>

    <div class="row row-cols-xs-1 row-cols-md-2 justify-content-center">
      <form class="p-1" style="max-width:500px;">
        <div class="form-group row">
          <label for="txtOldPassword" class="col-xs-12 col-lg-5 col-form-label">
            Old Password
          </label>
          <input type="password" class="col-xs-12 col-lg-6 mx-3 form-control" id="txtOldPassword">
        </div>

        <div class="form-group row">
          <label for="txtNewPassword" class="col-xs-12 col-lg-5 col-form-label">
            New Password
          </label>
          <input type="password" class="col-xs-12 col-lg-6 mx-3 form-control" id="txtNewPassword">
        </div>

        <div class="form-group row">
          <label for="txtConfirmNewPassword" class="col-xs-12 col-lg-5 col-form-label">
            Confirm New Password
          </label>
          <input type="password" class="col-xs-12 col-lg-6 mx-3 form-control" id="txtConfirmNewPassword">
        </div>

        <div class="row">
          <div class="col-xs-0 col-lg-5"></div>
          <button type="submit" class="col-xs-12 col-lg-6 mx-3 btn btn-primary">
            Change Password
          </button>
        </div>
      </form>
    </div>
  </div>
@endsection
