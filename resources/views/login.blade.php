@extends('layouts.template')

@section('header')
    @include('components.header')
@endsection

@section('content')
    <div>
        <div class="d-flex justify-content-center m-3">
            <h4>Login</h4>
        </div>
        <div class="m-4 px-3">
            <form>
                <div class="form-group row">
                    <label for="txtEmail" class="col-sm-4 col-form-label">Email Address</label>
                    <input type="email" class="col-sm-7 form-control mx-3" id="txtEmail">
                </div>
                <div class="form-group row">
                    <label for="txtPassword" class="col-sm-4 col-form-label">Password</label>
                    <input type="password" class="col-sm-7 form-control mx-3" id="txtPassword">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="rememberMe">
                    <label for="rememberMe" class="form-check-label">Remember Me</label>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <div class="pt-1">
                    <a href="#">Forgot Password?</a>
                </div>
            </form>
        </div>
    </div>
@endsection