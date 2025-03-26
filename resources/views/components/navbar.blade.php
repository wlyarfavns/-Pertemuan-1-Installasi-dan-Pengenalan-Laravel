<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="/">SIBER STORE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/product">Produk</a>
        </li>

        {{-- Dropdown Categories --}}
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="categoryDropdown" role="button" data-bs-toggle="dropdown">
            Categories
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/product?category=New Ballance">Sepatu Outfit</a></li>
            <li><a class="dropdown-item" href="/product?category=Converse">Sepatu Harian</a></li>
            <li><a class="dropdown-item" href="/product?category=Nike">Sepatu Olahraga</a></li>
          </ul>
        </li>
      </ul>

      {{-- Form Pencarian --}}
      <form class="d-flex me-3" action="{{ url('/search') }}" method="GET">
        <input class="form-control me-2" type="search" placeholder="Cari produk..." name="q">
        <button class="btn btn-outline-success" type="submit">Cari</button>
      </form>

      {{-- Cart & Checkout --}}
      <ul class="navbar-nav d-flex align-items-center">
        <li class="nav-item">
          <a class="nav-link" href="/cart">
            🛒 Cart <span class="badge bg-danger">3</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="btn btn-primary text-white ms-3 px-3 py-2" href="/checkout">
            Checkout
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>