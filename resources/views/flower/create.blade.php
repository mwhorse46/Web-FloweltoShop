@extends('layouts.app')

@section('content')
  @include('components.error-card')

  <div class="container p-3">
    <div class="h3 text-center">
      Add New Flower
    </div>
    <div class="row row-cols-xs-1 row-cols-md-2 mt-2 pt-2 justify-content-center">
      <form enctype="multipart/form-data" action="{{ route('flower.store') }}" method="post">
        @csrf
        <div class="form-group row">
          <label for="categoryType" class="col-xs-12 col-lg-4 col-form-label">Category</label>
          <select class="col-xs-12 col-lg-7 mx-3 form-control" id="categoryType" name="category_id">
            @foreach ($categories as $category)
              <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group row">
          <label for="txtName" class="col-xs-12 col-lg-4 col-form-label">Flower Name</label>
          <input type="text" class="col-xs-12 col-lg-7 mx-3 form-control" id="txtName" name="name">
        </div>
        <div class="form-group row">
          <label for="txtPrice" class="col-xs-12 col-lg-4 col-form-label">Flower Price (Rupiah)</label>
          <input type="number" class="col-xs-12 col-lg-7 mx-3 form-control" id="txtPrice" name="price">
        </div>
        <div class="form-group row">
          <label for="txtDescription" class="col-xs-12 col-lg-4 col-form-label">Description</label>
          <textarea class="col-xs-12 col-lg-7 mx-3 form-control" id="txtDescription" rows="4" name="description"></textarea>
        </div>
        <div class="form-group row">
          <label for="fileImage" class="col-xs-12 col-lg-4 col-form-label">Flower Image</label>
          <input type="file" class="col-xs-12 col-lg-7 pt-1 form-control-file" id="fileImage" name="image">
        </div>
        <div class="row">
          <div class="col-xs-0 col-lg-4"></div>
          <button type="submit" class="col-xs-12 col-lg-7 mx-3 btn btn-primary">Add</button>
        </div>
      </form>
    </div>
  </div>
@endsection
