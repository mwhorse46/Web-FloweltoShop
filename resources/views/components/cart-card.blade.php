<div class="row my-1 align-items-center border border-primary">
  <div class="col-4 my-2">
    <img src="{{ url(Storage::url('random.jpg')) }}" class="img-fluid">
  </div>
  <div class="col-8">
    <div class="row align-items-center">
      <div class="col-xs-12 col-md-5 text-truncate font-weight-bold">
        Aurora Flower
      </div>
      <div class="col-xs-12 col-md-4">
        Rp 80000
      </div>
      <div class="col-xs-12 col-md-3 my-2">
        <form>
          <div class="form-group row justify-content-md-center">
            <input type="number" class="col-5 col-md-10 my-1 mx-3 form-control" id="txtQuantity" MIN="0">
            <button type="submit" class="col-3 col-md-10 m-1 btn btn-primary">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
