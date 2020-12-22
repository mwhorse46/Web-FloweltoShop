@extends('layouts.app')

@section('content')
  <div class="container p-3">
    <div class="h1 text-center">
      Manage Categories
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 mt-3 justify-content-center">
      @foreach ($categories as $category)
        @include('components.flower-menu-card', [ 'category' => $category, 'manage' => true ])
      @endforeach
    </div>
  </div>
@endsection
