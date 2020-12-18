@extends('layouts.app')

@section('content')
  <div class="container p-3">
    <div class="text-center">
      <h4>Update Category</h4>
    </div>
    <div class="row mt-2 pt-2 px-2">
      <div class="col-xs-12 col-md-3 mb-2">
        <img src="{{ url(Storage::url('random.jpg')) }}" alt="NO IMAGE">
      </div>
      <div class="col-xs-12 col-md-9">
        <form>
          <div class="form-group row">
            <label for="txtName" class="col-xs-12 col-lg-3 col-form-label">Category Name</label>
            <input type="text" class="col-xs-12 col-lg-5 mx-3 form-control" id="txtName">
          </div>
          <div class="form-group row">
            <label for="fileImage" class="col-xs-12 col-lg-3 col-form-label">Category Image</label>
            <input type="file" class="col-xs-12 col-lg-5 pt-1 form-control-file" id="fileImage">
          </div>
          <div class="row">
            <div class="col-xs-0 col-lg-3"></div>
            <button type="submit" class="col-xs-12 col-lg-5 mx-3 btn btn-primary">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
