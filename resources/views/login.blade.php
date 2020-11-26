@extends('layouts.template')

@section('header')
    @include('components.header')
@endsection

@section('content')
    <div>
        <div class="d-flex justify-content-center m-3">
            <h4>Login</h4>
        </div>
        <div class="">
            <form>
                <div class="form-group row">
                    <label for="email" class="col-sm-4 col-form-label">Email Address</label>
                    <input type="email" class="col-sm-8 form-control" id="txtEmail">
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-4 col-form-label">Password</label>
                    <input type="password" class="col-sm-8 form-control" id="txtPassword">
                </div>
            </form>
        </div>
    </div>
@endsection