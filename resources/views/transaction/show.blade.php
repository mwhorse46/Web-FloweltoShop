@extends('layouts.app')

@section('content')
  <div class="container p-3">
    <div class="h1 text-center">
      Your Transaction at 2020-05-11 19:00:00
    </div>

    @php ($totalPrice = 0)

    <div class="row row-cols-1 mt-3 mx-1 justify-content-center">
      @foreach ($items as $item)
        @include('components.transaction-item-card', [ 'item' => $item ])
        @php ($totalPrice += $item->qty * $item->flower->price)
      @endforeach
    </div>

    <div class="mt-4 text-right">
      Total Price: Rp {{ $totalPrice }}
    </div>
  </div>
@endsection
