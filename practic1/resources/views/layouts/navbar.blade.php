<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('home') }}">Shop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('home') }}">Главная</a>
        </li>
        @foreach ($categories as $category)
          <li class="nav-item">
            <a class="nav-link" href="{{route('categories.show', ['slug' => $category->slug])}}">{{ $category->title}}</a>
          </li>
        @endforeach
        <li class="nav-item">
          <button onclick="getCart('{{ route('cart.show') }}')" type="button" class="btn btn-primary">
            Корзина <span class="badge badge-light">{{ session('cart_qty') ?? 0 }}</span>
          </button>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-info" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>