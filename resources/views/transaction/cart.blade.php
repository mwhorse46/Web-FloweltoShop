@extends('layouts.app')

@section('content')
  <div class="container p-3">
    <div class="h1 text-center">
      Your Cart
    </div>

    <div class="row row-cols-1 mt-3 mx-1 justify-content-center">
      @for ($i = 0; $i < 3; $i++)
        <x-cart-card />
      @endfor
    </div>
    <div class="mx-auto mt-4" style="width: 100px;">
      <div class="btn btn-danger">
        Checkout
      </div>
    </div>
  </div>
@endsection
