@extends('layouts.template')

@section('header')
    <x-header />
@endsection

@section('content')
    <div class="container p-1 text-center">
        <div>
            <h3>Welcome to Flowelto Shop</h3>
        </div>
        <div>
            <h5>The Best Flower Shop in Binus University</h5>
        </div>
        <div class="row row-cols-1 row-cols-md-2 justify-content-center mt-3">
            <x-flower-menu-card />
            <x-flower-menu-card />
            <x-flower-menu-card />
            <x-flower-menu-card />
        
        </div>
    
    </div>
@endsection