@props(['type' => 'primary', 'message', 'buttonText' => 'OK', 'buttonLink' => '#'])

<div class="alert alert-{{ $type }} alert-dismissible fade show mt-3" role="alert">
  {{ $message }}
  <a href="{{ $buttonLink }}" class="btn btn-sm btn-{{ $type }} ms-3">{{ $buttonText }}</a>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>