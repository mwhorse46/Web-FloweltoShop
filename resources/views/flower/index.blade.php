@extends('layouts.app')

@section('content')
  <div class="container p-3">
    <div class="h3 text-center">
      Add New Flower
    </div>
    <div class="row row-cols-xs-1 row-cols-md-2 mt-2 pt-2 justify-content-center">
      <div>
        <form>
          <div class="form-group row">
            <label for="categoryType" class="col-xs-12 col-lg-4 col-form-label">Category</label>
            <select name="" class="col-xs-12 col-lg-7 mx-3 form-control" id="categoryType">
              <option value="category1" selected>Hand bouquet(gift)</option>
              <option value="category2">Category 2</option>
              <option value="category3">Category 3</option>
              <option value="category4">Category 4</option>
            </select>
          </div>
          <div class="form-group row">
            <label for="txtName" class="col-xs-12 col-lg-4 col-form-label">Flower Name</label>
            <input type="text" class="col-xs-12 col-lg-7 mx-3 form-control" id="txtName">
          </div>
          <div class="form-group row">
            <label for="txtPrice" class="col-xs-12 col-lg-4 col-form-label">Flower Price (Rupiah)</label>
            <input type="number" class="col-xs-12 col-lg-7 mx-3 form-control" id="txtPrice" MIN="50000">
          </div>
          <div class="form-group row">
            <label for="txtDescription" class="col-xs-12 col-lg-4 col-form-label">Description</label>
            <textarea class="col-xs-12 col-lg-7 mx-3 form-control" id="txtDescription" rows="4"></textarea>
          </div>
          <div class="form-group row">
            <label for="fileImage" class="col-xs-12 col-lg-4 col-form-label">Flower Image</label>
            <input type="file" class="col-xs-12 col-lg-7 pt-1 form-control-file" id="fileImage">
          </div>
          <div class="row">
            <div class="col-xs-0 col-lg-4"></div>
            <button type="submit" class="col-xs-12 col-lg-7 mx-3 btn btn-primary">Add</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
