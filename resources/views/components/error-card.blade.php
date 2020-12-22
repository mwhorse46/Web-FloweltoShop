@if ($errors->any())
  <div class="container mt-4 alert alert-danger">
    <ul class="mb-0">
      @foreach ($errors->all() as $message)
        <li>{{ $message }}</li>
      @endforeach
    </ul>
  </div>
@endif
