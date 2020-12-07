@extends('layouts.app')

@section('content')
  <div class="container p-3">
    <div class="h1 text-center">
      Our Hand Bouquet (gift)
    </div>

    <div class="mt-2 pt-2">
      <form>
        <div class="form-row">
          <div class="form-group">
            <select name="" class="form-control" id="searchType">
              <option value="name" selected>Name</option>
              <option value="price">Price</option>
            </select>
          </div>
          <div class="form-group ml-2 pl-2">
            <input type="text" class="form-control" id="txtSearch" placeholder="Search">
          </div>
          <div class="mx-2 px-2">
            <button type="submit" class="btn btn-primary">Search</button>
          </div>
        </div>
      </form>
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 mt-2 justify-content-center">
      @for ($i = 0; $i < 10; $i++)
        <x-flower-card />
      @endfor
    </div>
  </div>
@endsection
