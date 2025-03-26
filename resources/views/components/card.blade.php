@props(['image', 'title', 'content', 'link'])

<div class="card" style="width: 18rem;">
  <img src="{{ $image }}" class="card-img-top" alt="Product Image">
  <div class="card-body">
    <h5 class="card-title">{{ $title }}</h5>
    <p class="card-text">{{ $content }}</p>
    <a href="{{ $link }}" class="btn btn-primary">Lihat Produk</a>
  </div>
</div>