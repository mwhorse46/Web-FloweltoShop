@extends('layouts.app')

@section('content')
  <div class="container p-3">
    <div class="h1 text-center">
      Your Transaction at 2020-05-11 19:00:00
    </div>

    <div class="row row-cols-1 mt-3 mx-1 justify-content-center">
      @for ($i = 0; $i < 3; $i++)
        <x-cart-card />
      @endfor
    </div>
    <div class="mt-4 text-right">
      Total Price: Rp 1000000
    </div>
  </div>
@endsection
