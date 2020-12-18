@extends('layouts.app')

@section('content')
  <div class="container p-3">
    <div class="h1 text-center">
      Your Transaction History
    </div>

    <div class="row row-cols-1 mt-3 mx-1 justify-content-center">
      @for ($i = 0; $i < 3; $i++)
        <div class="m-1 text-center font-weight-bold">
          Transaction at 2020-05-11 19:00:00
        </div>
      @endfor
    </div>
  </div>
@endsection
