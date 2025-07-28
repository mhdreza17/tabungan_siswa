<div class="container-fluid py-3">
    <div class="container">
        <div class="owl-carousel owl-carousel-2 carousel-item-3 position-relative">
            @foreach ($posts as $item)
            <div class="d-flex">
                @if ($item->image !== null)
                <img src="{{ asset('storage/' . $item->image) }}" style="width: 80px; height: 80px; object-fit: cover;">
                @else
                <img src="https://source.unsplash.com/640x480?{{ $item->category->name }}" style="width: 80px; height: 80px; object-fit: cover;">
                @endif
                <div class="d-flex align-items-center bg-light px-3" style="height: 80px;">
                    <a class="text-secondary font-weight-semi-bold" href="">{{ $item->slug }}</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
{{-- update --}}