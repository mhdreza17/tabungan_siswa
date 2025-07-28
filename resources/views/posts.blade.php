@extends('layouts.main')

@section('container')
<div class="row justify-content-center mb-3">
  <div class="col-md-6">
    <form action="/posts" method="GET">
      @if (request('category'))
        <input type="hidden" name="category" value="{{ request('category') }}">
      @endif
      @if (request('author'))
        <input type="hidden" name="author" value="{{ request('author') }}">
      @endif
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search" name="search" value="{{ request('search') }}">
        <button class="btn btn-danger" type="submit" id="button-addon2">Search</button>
      </div>
    </form>
  </div>
</div>
<section class="hero bg-center bg-cover" style="background: url(https://source.unsplash.com/1080x720?blog)">
  <div class="dark-overlay py-5">
    <div class="overlay-content">
      <div class="container py-5 text-white text-center">
        <h1>{{ $title }}</h1>
        <p>Displaying {{ $title }}</p>
      </div>
    </div>
  </div>
</section>
<!-- Blog listing -->
<section class="py-3">
  <div class="container pt-3">
    <div class="row mb-5">
      <div class="col-lg-12">
        <div class="row text-center">
          @foreach($posts as $post)
          <div class="col-lg-4 mb-5">
            <a href="">
              @if ($post->image)
              <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mb-4">
              @else
              <img class="img-fluid mb-4" src="https://source.unsplash.com/640x480?{{ $post->category->name }}" alt=""/>
              @endif
          </a>
            <ul class="list-inline small text-uppercase mb-0">
              <li class="list-inline-item me-0 text-gray align-middle">By </li>
              <li class="list-inline-item align-middle me-0">
                <a href="/posts?author={{ $post->author->username }}" class="fw-bold reset-anchor" >{{ $post->author->name }}</a></li>
              <li class="list-inline-item text-gray align-middle me-0">|</li>
              <li class="list-inline-item text-gray align-middle">{{ $post->created_at->diffForHumans() }}</li>
            </ul>
            <h3 class="h4 mt-2"> <a class="reset-anchor" href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h3><a class="reset-anchor text-gray text-uppercase small mb-2 d-block" href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
            <p class="text-small mb-1">{!! $post->exert !!}</p><a class="btn btn-link" href="/posts/{{ $post->slug }}">Continue reading</a>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Listing navigation -->
<div class="p-4 bg-light mb-5">
  <div class="row gy-2">
    <div class="d-flex justify-content-center">
      {{ $posts->links() }}
    </div>
  </div>
</div>
@endsection

