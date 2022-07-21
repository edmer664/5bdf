@extends('layouts.main')

@section('content')
    {{-- Navbar --}}
    <livewire:navbar-wingers />

    {{-- Carousel --}}
    {{-- TODO:Add Connection to Admin Panel Replace Static Image --}}
    <div class="w-100 ">
        <div id="hero" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#hero" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                <li data-bs-target="#hero" data-bs-slide-to="1" aria-label="Second slide"></li>
                <li data-bs-target="#hero" data-bs-slide-to="2" aria-label="Third slide"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('assets/images/img3.jpg') }}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('assets/images/img3.jpg') }}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('assets/images/img3.jpg') }}" alt="Third slide">
                </div>
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

    {{-- Events --}}
    <section class="py-5">
        <div class="container-xl">
            <h2 class="pb-5 section-title">
                Events
            </h2>
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

                    <div class="position-relative slider">
                        <div class="p-2">
                            <div class="card">
                                <div class="card-header p-0">
                                    {{-- Image header --}}
                                    <img data-src="{{ asset('assets/images/img3.jpg') }}" alt=""
                                        class="img-fluid rounded-top">
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">
                                        Lorem Ipsum
                                    </h3>
                                    <p>
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque, enim.
                                    </p>
                                    <button class="btn btn-sm bg-orange text-white">
                                        Lorem Ipsum
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="p-2">
                            <div class="card">
                                <div class="card-header p-0">
                                    {{-- Image header --}}
                                    <img data-src="{{ asset('assets/images/img3.jpg') }}" alt=""
                                        class="img-fluid rounded-top">
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">
                                        Lorem Ipsum
                                    </h3>
                                    <p>
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque, enim.
                                    </p>
                                    <button class="btn btn-sm bg-orange text-white">
                                        Lorem Ipsum
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="p-2">
                            <div class="card">
                                <div class="card-header p-0">
                                    {{-- Image header --}}
                                    <img data-src="{{ asset('assets/images/img3.jpg') }}" alt=""
                                        class="img-fluid rounded-top">
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">
                                        Lorem Ipsum
                                    </h3>
                                    <p>
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque, enim.
                                    </p>
                                    <button class="btn btn-sm bg-orange text-white">
                                        Lorem Ipsum
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="p-2">
                            <div class="card">
                                <div class="card-header p-0">
                                    {{-- Image header --}}
                                    <img data-src="{{ asset('assets/images/img3.jpg') }}" alt=""
                                        class="img-fluid rounded-top">
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">
                                        Lorem Ipsum
                                    </h3>
                                    <p>
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque, enim.
                                    </p>
                                    <button class="btn btn-sm bg-orange text-white">
                                        Lorem Ipsum
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>

    {{-- Monthly Events --}}
    <section class="py-5">
        <div class="container-xl">
            <h2 class="section-title pb-5">
                Monthly Events
            </h2>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('assets/images/img4.jpg') }}" class="img-fluid py-3" alt=""
                        srcset="">
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('assets/images/img4.jpg') }}" class="img-fluid py-3" alt=""
                        srcset="">
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('assets/images/img4.jpg') }}" class="img-fluid py-3" alt=""
                        srcset="">
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('assets/images/img4.jpg') }}" class="img-fluid py-3" alt=""
                        srcset="">
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('assets/images/img4.jpg') }}" class="img-fluid py-3" alt=""
                        srcset="">
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('assets/images/img4.jpg') }}" class="img-fluid py-3" alt=""
                        srcset="">
                </div>

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
