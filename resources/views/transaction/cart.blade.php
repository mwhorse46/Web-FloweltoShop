@extends('layouts.app')

@section('content')
  @include('components.error-card')

  <div class="container p-3">
    <div class="h1 text-center">
      Your Cart
    </div>

    @php ($hasDeletedItems = false)

    <div class="row row-cols-1 mt-3 mx-1 justify-content-center">
      @foreach ($items as $item)
        @include('components.cart-card', [ 'item' => $item ])
        @php ($hasDeletedItems |= $item->flower->trashed())
      @endforeach
    </div>

    @if (count($items) > 0)
      <form class="mx-auto mt-4" style="width: 100px;" action="{{ route('transaction.checkout') }}" method="post">
        @csrf
        <button class="btn btn-danger" type="submit" class="col-xs-12 col-lg-7 btn btn-primary mx-3" @if ($hasDeletedItems) disabled @endif>
          Checkout
        </button>
      </form>
    @else
      <div class="h3 text-center font-italic font-weight-normal">
        Your cart is empty
      </div>
    @endif
  </div>
@endsection
