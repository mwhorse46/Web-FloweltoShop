@extends('layouts.app')

@section('content')
  @include('components.error-card')

  <div class="container p-3">
    <div class="h4 text-center">
      <h4>Update Product</h4>
    </div>
    <div class="row mt-2 pt-2">
      <div class="d-flex col-xs-12 col-lg-3 mb-2 align-self-center justify-content-center">
        <img src="{{ Storage::url($flower->image) }}" class="img-fluid" alt="NO IMAGE">
      </div>
      <form class="col-xs-12 col-lg-9" enctype="multipart/form-data" action="{{ route('flower.update', ['flower' => $flower->id]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group row">
          <label for="categoryType" class="col-xs-12 col-lg-3 ml-lg-3 col-form-label">Category</label>
          <select class="col-xs-12 col-lg-5 mx-3 form-control" id="categoryType" name="category_id">
            @foreach ($categories as $category)
              <option value="{{ $category->id }}" @if ($category->id === $flower->category_id) selected @endif>{{ $category->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group row">
          <label for="txtName" class="col-xs-12 col-lg-3 ml-lg-3 col-form-label">Flower Name</label>
          <input type="text" class="col-xs-12 col-lg-5 mx-3 form-control" id="txtName" value="{{ $flower->name }}" name="name">
        </div>
        <div class="form-group row">
          <label for="txtPrice" class="col-xs-12 col-lg-3 ml-lg-3 col-form-label">Flower Price (Rupiah)</label>
          <input type="number" class="col-xs-12 col-lg-5 mx-3 form-control" id="txtPrice" value="{{ $flower->price }}" name="price">
        </div>
        <div class="form-group row">
          <label for="txtDescription" class="col-xs-12 col-lg-3 ml-lg-3 col-form-label">Description</label>
          <textarea class="col-xs-12 col-lg-5 mx-3 form-control" id="txtDescription" rows="4" name="description">{{ $flower->description }}</textarea>
        </div>
        <div class="form-group row">
          <label for="fileImage" class="col-xs-12 col-lg-3 ml-lg-3 col-form-label">Flower Image</label>
          <input type="file" class="col-xs-12 col-lg-5 pt-1 form-control-file" id="fileImage" name="image">
        </div>
        <div class="row">
          <div class="col-xs-0 col-lg-3 ml-lg-3"></div>
          <button type="submit" class="col-xs-12 col-lg-5 mx-3 btn btn-primary">Update</button>
        </div>
      </form>
    </div>
  </div>
@endsection
