@extends('layouts.template')

@section('header')
    @include('components.header-login')
@endsection

@section('content')
    <div class="container">
        <div class="text-center m-3">
            <h4>Register</h4>
        </div>
        <div class="row row-cols-xs-1 row-cols-md-2 justify-content-center">
            <div class="p-1" style="max-width:500px;">
                <form>
                    <div class="form-group row">
                        <label for="txtUsername" class="col-xs-12 col-lg-4 col-form-label">Username</label>
                        <input type="text" class="col-xs-12 col-lg-7 form-control mx-3" id="txtUsername">
                    </div>
                    <div class="form-group row">
                        <label for="txtEmail" class="col-xs-12 col-lg-4 col-form-label">Email Address</label>
                        <input type="email" class="col-xs-12 col-lg-7 form-control mx-3" id="txtEmail">
                    </div>
                    <div class="form-group row">
                        <label for="txtPassword" class="col-xs-12 col-lg-4 col-form-label">Password</label>
                        <input type="password" class="col-xs-12 col-lg-7 form-control mx-3" id="txtPassword">
                    </div>
                    <div class="form-group row">
                        <label for="txtConfirmPassword" class="col-xs-12 col-lg-4 col-form-label">Confirm Password</label>
                        <input type="password" class="col-xs-12 col-lg-7 form-control mx-3" id="txtConfirmPassword">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <legend class="col-xs-12 col-lg-4 col-form-label">Gender</legend>
                            <div class="col-xs-12 col-lg-7">
                                <div class="form-check my-2">
                                    <input type="radio" class="form-check-input" name="gender" id="male" value="male" checked>
                                    <label for="male" class="form-check-label">Male</label>
                                </div>
                                <div class="form-check my-2">
                                    <input type="radio" class="form-check-input" name="gender" id="female" value="female" checked>
                                    <label for="female" class="form-check-label">Female</label>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="txtBirth" class="col-xs-12 col-lg-4 col-form-label">Date of Birth</label>
                        <input type="text" class="col-xs-12 col-lg-7 form-control mx-3" id="txtBirth" placeholder="mm/dd/yyyy">
                    </div>
                    <div class="form-group row">
                        <label for="txtAddress" class="col-xs-12 col-lg-4 col-form-label">Address</label>
                        <textarea class="col-xs-12 col-lg-7 form-control mx-3" id="txtAddress" rows="3"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-xs-0 col-lg-4"></div>
                        <button type="submit" class="col-xs-12 col-lg-7 mx-3 btn btn-primary">Register</button>
                    </div>
                </form>
            
            </div>
        </div>
    </div>
@endsection