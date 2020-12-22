@extends('layouts.app')

@section('content')
  <div class="container p-3">
    <div class="h1 text-center">
      Your Transaction History
    </div>

    <div class="container">
      @foreach ($transactions as $transaction)
        <a class="row row-cols-1 mt-3 mx-1 justify-content-center text-center font-weight-bold" href="{{ route('transaction.show', ['transaction' => $transaction->id]) }}">
          Transaction at {{ $transaction->date }}
        </a>
      @endforeach
    </div>

    @if (count($transactions) === 0)
      <div class="h3 text-center font-italic font-weight-normal">
        Your cart is empty
      </div>
    @endif
  </div>
@endsection
