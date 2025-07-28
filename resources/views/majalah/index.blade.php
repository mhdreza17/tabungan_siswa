@extends('majalah.layouts.main')

@section('container')
{{-- update --}}
<div class="col-lg-8">
    <div class="owl-carousel owl-carousel-2 carousel-item-1 position-relative mb-3 mb-lg-0">
        @foreach ($random as $item)
            <div class="position-relative overflow-hidden" style="height: 435px;">
                <img class="img-fluid h-100" src="img/news-700x435-1.jpg" style="object-fit: cover;">
                <div class="overlay">
                    <div class="mb-1">
                        <a class="text-white" href="">{{ $item->category->name }}</a>
                        <span class="px-2 text-white">/</span>
                        <a class="text-white" href="/majalah/{{ $item->slug }}">{{ $item->created_at }}</a>
                    </div>
                    <a class="h2 m-0 text-white font-weight-bold" href="/majalah/{{ $item->slug }}">{{ $item->title }}</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
</div>
</div>
</div>
<div class="container-fluid py-3">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
            <h3 class="m-0">Featured</h3>
            <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
        </div>
        <div class="owl-carousel owl-carousel-2 carousel-item-4 position-relative">
            @foreach ($trending as $item)
            <div class="position-relative overflow-hidden" style="height: 300px;">
                @if ($item->image)
                <img class="img-fluid w-100 h-100" src="{{ asset('storage/' . $item->image) }}" style="object-fit: cover;">
                @else
                <img class="img-fluid w-100 h-100" src="https://source.unsplash.com/640x480?{{ $item->category->name }}" style="object-fit: cover;">
                @endif
                <div class="overlay">
                    <div class="mb-1" style="font-size: 13px;">
                        <a class="text-white" href="">{{ $item->category->name }}</a>
                        <span class="px-1 text-white">/</span>
                        <a class="text-white" href="/majalah/{{ $item->slug }}">{{ $item->created_at }}</a>
                    </div>
                    <a class="h4 m-0 text-white" href="/majalah/{{ $item->slug }}">{{ $item->title }}</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
</div>


<div class="container-fluid">
    <div class="container">
        <div class="row">
            @foreach ($catrandom as $item)
            <div class="col-lg-6 py-3">
                <div class="bg-light py-2 px-4 mb-3">
                    <h3 class="m-0">{{ $item->name }}</h3>
                </div>
                @php
                    $count = 0;
                @endphp
                <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
                    @foreach ($item->post as $post)
                        @if ($count < 6)
                        <div class="position-relative">
                            @if ($post->image)
                            <img class="img-fluid w-100" src="{{ asset('storage/' . $post->image) }}" style="object-fit: cover;">
                            @else
                            <img class="img-fluid w-100" src="https://source.unsplash.com/640x480?{{ $item->name }}" style="object-fit: cover;">
                            @endif
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 13px;">
                                    <span>{{ $post->created_at }}</span>
                                </div>
                                <a class="h4 m-0" href="/majalah/{{ $post->slug }}">{{ $post->title }}</a>
                            </div>
                        </div>
                        @php
                            $count++;
                        @endphp
                        @endif
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- News With Sidebar Start -->
<div class="container-fluid py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row mb-3">
                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Popular</h3>
                            <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        @foreach ($popular as $item)
                        @if ($loop->iteration == 1)
                            <div class="position-relative mb-3">
                                @if ($item->image)
                                <img class="img-fluid w-100" src="{{ asset('storage/' . $item->image) }}" style="object-fit: cover;">
                                @else
                                <img class="img-fluid w-100" src="https://source.unsplash.com/640x480?{{ $item->name }}" style="object-fit: cover;">
                                @endif
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="/?category={{ $item->slug }}">{{ $item->category->name }}</a>
                                        <span class="px-1">/</span>
                                        <span>{{ $item->created_at }}</span>
                                    </div>
                                    <a class="h4" href="">{{ $item->title }}</a>
                                    <p class="m-0">{!! Str::limit($item->body, 100) !!}</p>
                                </div>
                            </div>
                        @elseif($loop->iteration > 1 && $loop->iteration < 4)
                        <div class="d-flex mb-3">
                            @if ($item->image)
                            <img class="img-fluid w-100" src="{{ asset('storage/' . $item->image) }}" style="width: 100px; height: 100px; object-fit: cover;">
                            @else
                            <img class="img-fluid w-100" src="https://source.unsplash.com/640x480?{{ $item->name }}" style="width: 100px; height: 100px; object-fit: cover;">
                            @endif
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="/?category={{ $item->slug }}">{{ $item->category->name }}</a>
                                    <span class="px-1">/</span>
                                    <span>{{ $item->created_at }}</span>
                                </div>
                                <a class="h6 m-0" href="/majalah/{{ $item->slug }}">{{ $item->title }}</a>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                    <div class="col-lg-6">
                        @foreach ($popular as $item)
                        @if($loop->iteration == 4)
                            <div class="position-relative mb-3">
                                @if ($item->image)
                                <img class="img-fluid w-100" src="{{ asset('storage/' . $item->image) }}" style="object-fit: cover;">
                                @else
                                <img class="img-fluid w-100" src="https://source.unsplash.com/640x480?{{ $item->name }}" style="object-fit: cover;">
                                @endif
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="/?category={{ $item->slug }}">{{ $item->category->name }}</a>
                                        <span class="px-1">/</span>
                                        <span>{{ $item->created_at }}</span>
                                    </div>
                                    <a class="h4" href="/majalah/{{ $item->slug }}">{{ $item->title }}</a>
                                    <p class="m-0">{!! Str::limit($item->body, 100) !!}</p>
                                </div>
                            </div>
                        @elseif($loop->iteration > 4 && $loop->iteration < 7)
                        <div class="d-flex mb-3">
                            @if ($item->image)
                            <img class="img-fluid w-100" src="{{ asset('storage/' . $item->image) }}" style="width: 100px; height: 100px; object-fit: cover;">
                            @else
                            <img class="img-fluid w-100" src="https://source.unsplash.com/640x480?{{ $item->name }}" style="width: 100px; height: 100px; object-fit: cover;">
                            @endif
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="/?category={{ $item->slug }}">{{ $item->category->name }}</a>
                                    <span class="px-1">/</span>
                                    <span>{{ $item->created_at }}</span>
                                </div>
                                <a class="h6 m-0" href="/majalah/{{ $item->slug }}">{{ $item->title }}</a>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
                
                <div class="mb-3 pb-3">
                    <a href=""><img class="img-fluid w-100" src="img/ads-700x70.jpg" alt=""></a>
                </div>
                
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Latest</h3>
                            <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="position-relative mb-3">
                            <img class="img-fluid w-100" src="img/news-500x280-5.jpg" style="object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 14px;">
                                    <a href="">Technology</a>
                                    <span class="px-1">/</span>
                                    <span>January 01, 2045</span>
                                </div>
                                <a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a>
                                <p class="m-0">Rebum dolore duo et vero ipsum clita, est ea sed duo diam ipsum, clita at justo, lorem amet vero eos sed sit...</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="img/news-100x100-5.jpg" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">Technology</a>
                                    <span class="px-1">/</span>
                                    <span>January 01, 2045</span>
                                </div>
                                <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="img/news-100x100-1.jpg" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">Technology</a>
                                    <span class="px-1">/</span>
                                    <span>January 01, 2045</span>
                                </div>
                                <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="position-relative mb-3">
                            <img class="img-fluid w-100" src="img/news-500x280-6.jpg" style="object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 14px;">
                                    <a href="">Technology</a>
                                    <span class="px-1">/</span>
                                    <span>January 01, 2045</span>
                                </div>
                                <a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a>
                                <p class="m-0">Rebum dolore duo et vero ipsum clita, est ea sed duo diam ipsum, clita at justo, lorem amet vero eos sed sit...</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="img/news-100x100-2.jpg" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">Technology</a>
                                    <span class="px-1">/</span>
                                    <span>January 01, 2045</span>
                                </div>
                                <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="img/news-100x100-3.jpg" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">Technology</a>
                                    <span class="px-1">/</span>
                                    <span>January 01, 2045</span>
                                </div>
                                <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 pt-3 pt-lg-0">
                <!-- Social Follow Start -->
                <div class="pb-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Follow Us</h3>
                    </div>
                    <div class="d-flex mb-3">
                        <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #39569E;">
                            <small class="fab fa-facebook-f mr-2"></small><small>12,345 Fans</small>
                        </a>
                        <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #52AAF4;">
                            <small class="fab fa-twitter mr-2"></small><small>12,345 Followers</small>
                        </a>
                    </div>
                    <div class="d-flex mb-3">
                        <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #0185AE;">
                            <small class="fab fa-linkedin-in mr-2"></small><small>12,345 Connects</small>
                        </a>
                        <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #C8359D;">
                            <small class="fab fa-instagram mr-2"></small><small>12,345 Followers</small>
                        </a>
                    </div>
                    <div class="d-flex mb-3">
                        <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #DC472E;">
                            <small class="fab fa-youtube mr-2"></small><small>12,345 Subscribers</small>
                        </a>
                        <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #1AB7EA;">
                            <small class="fab fa-vimeo-v mr-2"></small><small>12,345 Followers</small>
                        </a>
                    </div>
                </div>
                <!-- Social Follow End -->

                <!-- Newsletter Start -->
                <div class="pb-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Newsletter</h3>
                    </div>
                    <div class="bg-light text-center p-4 mb-3">
                        <p>Aliqu justo et labore at eirmod justo sea erat diam dolor diam vero kasd</p>
                        <div class="input-group" style="width: 100%;">
                            <input type="text" class="form-control form-control-lg" placeholder="Your Email">
                            <div class="input-group-append">
                                <button class="btn btn-primary">Sign Up</button>
                            </div>
                        </div>
                        <small>Sit eirmod nonumy kasd eirmod</small>
                    </div>
                </div>
                <!-- Newsletter End -->

                <!-- Ads Start -->
                <div class="mb-3 pb-3">
                    <a href=""><img class="img-fluid" src="img/news-500x280-4.jpg" alt=""></a>
                </div>
                <!-- Ads End -->

                <!-- Popular News Start -->
                <div class="pb-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Tranding</h3>
                    </div>
                    <div class="d-flex mb-3">
                        <img src="img/news-100x100-1.jpg" style="width: 100px; height: 100px; object-fit: cover;">
                        <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                            <div class="mb-1" style="font-size: 13px;">
                                <a href="">Technology</a>
                                <span class="px-1">/</span>
                                <span>January 01, 2045</span>
                            </div>
                            <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <img src="img/news-100x100-2.jpg" style="width: 100px; height: 100px; object-fit: cover;">
                        <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                            <div class="mb-1" style="font-size: 13px;">
                                <a href="">Technology</a>
                                <span class="px-1">/</span>
                                <span>January 01, 2045</span>
                            </div>
                            <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <img src="img/news-100x100-3.jpg" style="width: 100px; height: 100px; object-fit: cover;">
                        <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                            <div class="mb-1" style="font-size: 13px;">
                                <a href="">Technology</a>
                                <span class="px-1">/</span>
                                <span>January 01, 2045</span>
                            </div>
                            <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <img src="img/news-100x100-4.jpg" style="width: 100px; height: 100px; object-fit: cover;">
                        <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                            <div class="mb-1" style="font-size: 13px;">
                                <a href="">Technology</a>
                                <span class="px-1">/</span>
                                <span>January 01, 2045</span>
                            </div>
                            <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <img src="img/news-100x100-5.jpg" style="width: 100px; height: 100px; object-fit: cover;">
                        <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                            <div class="mb-1" style="font-size: 13px;">
                                <a href="">Technology</a>
                                <span class="px-1">/</span>
                                <span>January 01, 2045</span>
                            </div>
                            <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                        </div>
                    </div>
                </div>
                <!-- Popular News End -->

               
            </div>
        </div>
    </div>
</div>
</div>
@endsection