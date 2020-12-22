<div class="row my-1 align-items-center border border-primary">
  <div class="col-4 my-2">
    <img src="{{ Storage::url($item->flower->image) }}" class="img-fluid">
  </div>
  <div class="col-8">
    <div class="row align-items-center">
      <div class="col-xs-12 col-md-5 text-truncate font-weight-bold">
        {{ $item->flower->name }}
        @if ($item->flower->trashed())
          <div class="text-danger">
            This item has been deleted
          </div>
        @endif
      </div>

      <div class="col-xs-12 col-md-4">
        Rp {{ $item->flower->price }}
      </div>

      <div class="col-xs-12 col-md-3 my-2">
        <form class="form-group row justify-content-md-center" action="{{ route('transaction.update') }}" method="post">
          @csrf
          <input type="hidden" name="item_id" value="{{ $item->id }}">
          <input type="hidden" name="flower_id" value="{{ $item->flower_id }}">
          <input type="number" class="col-5 col-md-10 my-1 mx-3 form-control" id="txtQuantity" name="qty" value="{{ $item->qty }}">
          <button type="submit" class="col-3 col-md-10 m-1 btn btn-primary">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>
