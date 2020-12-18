@extends('layouts.app')

@section('content')
  <div class="container p-3">
    <div class="h1 text-center">
      Welcome to Flowelto Shop
    </div>

    <div class="h3 text-center">
      The Best Flower Shop in Binus University
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 mt-3 justify-content-center">
      @for ($i = 0; $i < 10; $i++)
        <x-flower-menu-card />
      @endfor
    </div>
  </div>
@endsection
