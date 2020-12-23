@extends('layouts.app')

@section('content')
  <div class="container p-3">
    <div class="h1 text-center">
      Our {{ $category->name }}
    </div>

    <div class="mt-2 pt-2">
      <form class="form-row" action="{{ route('category.filter', ['category' => $category->id]) }}" method="post">
        @csrf
        <div class="form-group">
          <select class="form-control" id="searchType" name="filterType">
            <option value="name" selected>Name</option>
            <option value="price">Price</option>
          </select>
        </div>
        <div class="form-group ml-2 pl-2">
          <input type="text" class="form-control" id="txtSearch" placeholder="Search" name="queryText">
        </div>
        <div class="mx-2 px-2">
          <button type="submit" class="btn btn-primary">Search</button>
        </div>
      </form>
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 mt-2 justify-content-center">
      @foreach ($flowers as $flower)
        @include('components.flower-card', [ 'flower' => $flower ])
      @endforeach
    </div>

    <div class="d-flex justify-content-center">
      {{ $flowers->links() }}
    </div>
  </div>
@endsection
