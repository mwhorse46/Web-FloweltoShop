<div class="col-8 col-sm-6 col-md-4 col-lg-3 mb-4">
  <a class="text-decoration-none text-body" href="{{ route('flower.show', ['flower' => $flower->id]) }}">
    <div class="card h-100 text-center border border-primary">
      <img src="{{ Storage::url($flower->image) }}" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">{{ $flower->name }}</h5>
        <div class="card-subtitle">Rp {{ $flower->price }}</div>
      </div>

      @can('is_admin', $flower)
        <div class="card-footer container-fluid">
          <div class="row">
            <form class="col m-1" action="{{ route('flower.destroy', ['flower' => $flower->id]) }}" method="post">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger" type="submit">Delete Flower</button>
            </form>
            <div class="col m-1">
              <a class="btn btn-primary" href="{{ route('flower.edit', ['flower' => $flower->id]) }}">
                Update Flower
              </a>
            </div>
          </div>
        </div>
      @endcan
    </div>
  </a>
</div>
