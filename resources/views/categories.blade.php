@extends('layouts.main')

@section('container')

<section>
  <div class="container">
    <h1>Featured Categories</h1>
    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis aliquid</p>
  </div>
  <div class="swiper destinations-slider swiper-padding">
    <div class="swiper-wrapper">
      @foreach( $categories as $category)
      <div class="swiper-slide h-auto"><a class="destination d-flex align-items-end bg-center bg-cover"
          href="/posts?category={{ $category->slug }}"
          style="background: url(https://source.unsplash.com/1920x1080?{{ $category->name }})">
          <div class="destination-inner w-100 text-center text-white index-forward has-transition">
            <p class="small text-uppercase mb-0">Post With</p>
            <h2 class="h3 mb-4">{{ $category->name }}</h2>
            <div class="btn btn-primary w-100 destination-btn text-white">Discover</div>
          </div>
        </a></div>
      @endforeach
    </div>
    <div class="swiper-button-prev swiper-custom-nav text-uppercase letter-spacing-0">
      <svg class="svg-icon svg-icon me-1">
        <use xlink:href="#arrow-left-1"> </use>
      </svg><span class="text-sm">Prev</span>
    </div>
    <div class="swiper-button-next swiper-custom-nav text-uppercase letter-spacing-0"><span class="text-sm">Next</span>
      <svg class="svg-icon svg-icon ms-1">
        <use xlink:href="#arrow-right-1"> </use>
      </svg>
    </div>
  </div>
</section>

@endsection