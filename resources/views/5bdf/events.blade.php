@extends('layouts.main')

@section('content')
    {{-- Navbar --}}
    <livewire:navbar-wingers />

    {{-- Carousel --}}
    <livewire:carousel :carousels="$carousels" />

    {{-- Events --}}
    <section class="py-5">
        <div class="container-xl">
            <div class="pb-5">
                <h2 class="section-title">
                    Events
                </h2>
            </div>
            {{-- Container --}}
            <div class="events-container position-relative d-flex flex-column justify-content-center">
                {{-- Controls --}}
                <ul class="controls" style="z-index: 100" id="customize-controls" aria-label="Carousel Navigation"
                    tabindex="0">
                    <li class="prev" data-controls="prev" aria-controls="customize" tabindex="-1">
                        <i class="bi bi-chevron-left"></i>
                    </li>
                    <li class="next" data-controls="next" aria-controls="customize" tabindex="-1">
                        <i class="bi bi-chevron-right"></i>
                    </li>
                </ul>
                <div class="w-90 m-auto">
                    @if(count($events) > 0)
                    <div class="position-relative slider">
                        @foreach ($events as $event)
                            <div class="p-2">
                                <div class="card">
                                    <div class="card-header p-0">
                                        {{-- Image header --}}
                                        <img data-src="{{ asset('assets/images/img3.jpg') }}" alt=""
                                            class="img-fluid rounded-top">
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title">
                                            {{ $event->title }}
                                        </h3>
                                        <p>
                                             Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta enim veritatis beatae voluptatum sit illum delectus, hic placeat amet et.
                                        </p>
                                        <a href="{{ route('5bdf.event_view',$event->id) }}" class="btn btn-sm bg-orange text-white">
                                            See More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @else
                        <div class="text-center py-5">
                            <h3 class="text-center">
                                No Events Found
                            </h3>
                        </div>
                    @endif
                </div>

            </div>
        </div>

    </section>

    {{-- Monthly Events --}}
    <section class="py-5">
        <div class="container-xl">
            <div class="pb-5">
                <h2 class="section-title">
                    Monthly Events
                </h2>
            </div>
            <div class="row">
                @if (count($monthly_events) > 0)
                    @foreach ($monthly_events as $monthly_event)
                        <div class="col-md-4 col-sm-6">
                            <img src="{{ asset('storage/monthly_events/' . $monthly_event->image) }}" class="img-fluid py-3"
                                alt="" srcset="">
                        </div>
                    @endforeach
                @else
                    <div class="col-md-12">
                        <h3 class="text-center py-5">
                            No monthly events at the moment.
                        </h3>
                    </div>
                @endif

            </div>
        </div>
    </section>


    {{-- Contact Us --}}
    <livewire:contact-us />

    {{-- Footer --}}
    <livewire:footer />
@endsection

@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
    <script defer>
        var slider = tns({
            container: '.slider',
            loop: true,
            items: 1,
            slideBy: 'page',
            nav: false,
            autoplay: false,
            speed: 400,
            autoplayButtonOutput: false,
            mouseDrag: true,
            lazyload: true,
            controlsContainer: "#customize-controls",
            responsive: {
                640: {
                    items: 2,
                },

                768: {
                    items: 3,
                }
            }
        });
    </script>
@endpush
