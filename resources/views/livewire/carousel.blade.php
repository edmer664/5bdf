<div class="w-100 ">
    <style>
        .c-image {
            width: 100%;
            object-fit: contain;
            max-height: 1080px;
        }

        @media (min-width: 768px) {
            .c-image {
                object-fit: contain;
                /* max-height: 1080px; */
                
            }
        }
    </style>
    <div id="hero" class="carousel slide" data-bs-interval="3000" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            @if (count($carousels) == 0)
                <li data-bs-target="#hero" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide">
                </li>
            @else
                @foreach ($carousels as $carousel)
                    <li data-bs-target="#hero" data-bs-slide-to="{{ $loop->index }}"
                        @if ($loop->first) class="active" @endif aria-label="{{ $carousel->title }}">
                    </li>
                @endforeach
            @endif
        </ol>
        <div class="carousel-inner" role="listbox">
            @if (count($carousels) == 0)
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('assets/images/img3.jpg') }}" alt="First slide">
                </div>
            @else
                @foreach ($carousels as $carousel)
                    <div class="carousel-item @if ($loop->first) active @endif">
                        <div class="w-100">
                            <img class="w-100 d-block mx-auto c-image"
                                src="{{ asset('storage/carousel/' . $carousel->path) }}" alt="{{ $carousel->name }}">
                        </div>
                    </div>
                @endforeach
            @endif

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#hero" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#hero" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
