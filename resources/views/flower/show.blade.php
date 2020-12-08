@extends('layouts.app')

@section('content')
  <div class="container p-3">
    <div class="row mt-2 pt-2 px-2">
      <div class="col-xs-12 col-md-3 mb-2">
        <img src="{{ url(Storage::url('random.jpg')) }}" alt="NO IMAGE">
      </div>
      <div class="col-xs-12 col-md-9">
        <div class="h3">
          Aurora Flower
        </div>
        <div class="h5">
          Rp 80000
        </div>
        <div>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, reprehenderit deleniti. Natus voluptate maiores incidunt debitis, perferendis ab consectetur accusamus sed assumenda maxime omnis ea amet soluta saepe! Enim, eum?
        </div>

        @auth
        @else
        <div class="mt-5 pt-2">
          <form>
            <div class="form-group row">
              <label for="txtQuantity" class="col-xs-12 col-lg-2 col-form-label">Quantity</label>
              <input type="number" class="col-xs-12 col-lg-2 mx-3 form-control" id="txtQuantity" MIN="1">
              <div class="col-xs-0 col-lg-5"></div>
            </div>
            <div class="row">
              <div class="col-xs-0 col-lg-2"></div>
              <button type="submit" class="col-xs-12 col-lg-2 mx-3 btn btn-primary">Add to Cart</button>
              <div class="col-xs-0 col-lg-5"></div>
            </div>
          </form>
        </div>
        @endauth
      </div>
    </div>
  </div>
@endsection
