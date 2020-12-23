@extends('layouts.app')

@section('content')
  @include('components.error-card')

  <div class="container p-3">
    <div class="row mt-2 pt-2 px-2">
      <div class="col-xs-12 col-md-3 mb-2">
        <img src="{{ Storage::url($flower->image) }}" class="img-fluid" alt="NO IMAGE">
      </div>
      <div class="col-xs-12 col-md-9">
        <div class="h3">{{ $flower->name }}</div>
        <div class="h5">Rp {{ $flower->price }}</div>
        <div>{{ $flower->description }}</div>

        @cannot('admin', $flower)
          <form class="mt-5 pt-2" action="{{ route('transaction.update') }}" method="post">
            @csrf
            <input type="hidden" name="item_id" value="{{ null }}">
            <input type="hidden" name="flower_id" value="{{ $flower->id }}">
            <div class="form-group row">
              <label for="txtQuantity" class="col-xs-12 col-lg-2 col-form-label">Quantity</label>
              <input type="number" class="col-xs-12 col-lg-2 mx-3 form-control" id="txtQuantity" value="1" name="qty">
              <div class="col-xs-0 col-lg-5"></div>
            </div>
            <div class="row">
              <div class="col-xs-0 col-lg-2"></div>
              <button type="submit" class="col-xs-12 col-lg-2 mx-3 btn btn-primary">Add to Cart</button>
              <div class="col-xs-0 col-lg-5"></div>
            </div>
          </form>
        @endcannot
      </div>
    </div>
  </div>
@endsection
