<div class="row my-1 align-items-center border border-primary">
  <div class="col-4 my-2">
    <img src="{{ Storage::url($item->flower->image) }}" class="img-fluid">
  </div>
  <div class="col-8">
    <div class="row align-items-center">
      <div class="col-xs-12 col-md-5 text-truncate font-weight-bold">
        {{ $item->flower->name }}
      </div>
      <div class="col-xs-12 col-md-4">
        Rp {{ $item->flower->price }} <br />
        {{ $item->qty }} item(s)
      </div>
      <div class="col-xs-12 col-md-3 my-2">
        Subtotal Rp {{ $item->qty * $item->flower->price }}
      </div>
    </div>
  </div>
</div>
