<div class="container-fluid py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                    <h3 class="m-0">Categories</h3>
                    <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                </div>
                @foreach ($categories as $item)
                <div class="position-relative overflow-hidden mb-3" style="height: 80px;">
                    <img class="img-fluid w-100 h-100" src="https://source.unsplash.com/1920x1080?{{ $item->name }}" style="object-fit: cover;">
                    <a href="/?category={{ $item->slug }}" class="overlay align-items-center justify-content-center h4 m-0 text-white text-decoration-none">
                        {{ $item->name }}
                    </a>
                </div>
                @endforeach
            </div>

{{-- update --}}