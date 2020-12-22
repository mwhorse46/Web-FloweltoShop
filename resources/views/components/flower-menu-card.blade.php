<div class="col-8 col-sm-6 col-md-4 col-lg-3 mb-4">
  <a class="text-decoration-none text-body" href="{{ route('category.show', ['category' => $category->id]) }}">
    <div class="card h-100 text-center border border-primary">
      <img src="{{ Storage::url($category->image) }}" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">{{ $category->name }}</h5>
      </div>

      @isset($manage)
        @can('admin', $category)
          <div class="card-footer container-fluid">
            <div class="row">
              <form class="col m-1" action="{{ route('category.destroy', ['category' => $category->id]) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete Category</button>
              </form>
              <div class="col m-1">
                <a class="btn btn-primary" href="{{ route('category.edit', ['category' => $category->id]) }}">
                  Update Category
                </a>
              </div>
            </div>
          </div>
        @endcan
      @endisset
    </div>
  </a>
</div>
