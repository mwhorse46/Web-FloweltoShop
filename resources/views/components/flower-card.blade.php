<div class="col mb-4">
  <a class="text-decoration-none text-body" href="#">
    <div class="card h-100 text-center border border-primary">
      <img src="{{ url(Storage::url('random.jpg')) }}" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Aurora Flower</h5>
        <div class="card-subtitle">Rp 80000</div>
      </div>

      @auth
      @else
        <div class="card-footer container-fluid">
          <div class="row">
            <div class="col mx-1">
              <a class="btn btn-danger" href="#1">
                Delete Flower
              </a>
            </div>
            <div class="col mx-1">
              <a class="btn btn-primary" href="#2">
                Update Flower
              </a>
            </div>
          </div>
        </div>
      @endauth
    </div>
  </a>
</div>
